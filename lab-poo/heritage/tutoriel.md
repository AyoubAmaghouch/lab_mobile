# Tutoriel : Héritage en PHP

## 1. Objectif
Comprendre le rôle de l'**héritage** (`extends`) pour réutiliser et spécialiser les attributs et méthodes d'une classe de base dans le projet **Gestion des Véhicules V2**.

## 2. Fichiers concernés
- [`exemple.php`](file:///c:/Lab/lab-poo/heritage/exemple.php) : Classe de base `VehiculeBase` et sous-classes spécialisées `Voiture` et `Camion`.

## 3. Commande d'exécution
Depuis le répertoire racine :
```bash
php lab-poo/heritage/exemple.php
```

## 4. Parcours détaillé du code

### Étape 1 : Classe de base commune (`VehiculeBase`)
```php
class VehiculeBase
{
    public function __construct(
        protected int $id,
        protected string $marque,
        protected string $modele,
        protected int $annee,
        protected string $immatriculation
    ) {}

    public function afficherFiche(): string
    {
        return "[#{$this->id}] {$this->marque} {$this->modele} ({$this->annee}) - Plaque : {$this->immatriculation}";
    }
}
```
- **Rôle :** Centralise les attributs universels partagés par tous les véhicules de la flotte.
- **Visibilité `protected` :** Permet aux classes enfants d'accéder directement à ces propriétés sans passer par des accesseurs externes.

### Étape 2 : Spécialisation avec le mot-clé `extends` et `parent::__construct`
```php
class Voiture extends VehiculeBase
{
    public function __construct(
        int $id,
        string $marque,
        string $modele,
        int $annee,
        string $immatriculation,
        private string $carburant = "Essence",
        private int $portes = 5
    ) {
        parent::__construct($id, $marque, $modele, $annee, $immatriculation);
    }

    public function afficherFiche(): string
    {
        return parent::afficherFiche() . " | Type: Voiture ($this->portes portes, $this->carburant)";
    }
}
```
- **Rôle :** Réutilise l'initialisation parent via `parent::__construct()` et étend la méthode `afficherFiche()` sans réécrire le code commun.

## 5. Résultat attendu
```text
=== DÉMONSTRATION : HÉRITAGE EN PHP ===

1. Fiche Voiture (héritée et enrichie) :
   [#1] Volkswagen Golf 8 (2023) - Plaque : 34567-B-1 | Type: Voiture (5 portes, Hybride)

2. Fiche Camion (héritée et enrichie) :
   [#2] Mercedes-Benz Actros (2021) - Plaque : 98712-A-1 | Type: Camion (Charge: 18.5T, 3 essieux)

3. Vérification de la hiérarchie de types (instanceof) :
   - $voiture est une instance de Voiture      : OUI
   - $voiture est une instance de VehiculeBase : OUI
   - $camion est une instance de VehiculeBase  : OUI
```

## 6. Intégration dans le projet Gestion des Véhicules V2
Dans l'architecture backend, l'héritage évite la duplication de code entre les différentes familles de véhicules du parc automobile (voitures de tourisme, utilitaires, poids lourds).

