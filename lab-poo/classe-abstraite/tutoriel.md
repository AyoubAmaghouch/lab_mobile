# Tutoriel : Classe Abstraite en PHP

## 1. Objectif
Comprendre le rôle d'une **classe abstraite** comme modèle de base générique pour les véhicules du projet **Gestion des Véhicules V2**, et savoir comment forcer les classes dérivées à implémenter leurs propres règles de calcul.

## 2. Fichiers concernés
- [`exemple.php`](file:///c:/Lab/lab-poo/classe-abstraite/exemple.php) : Déclaration de `abstract class Vehicule` et de la classe concrète `Voiture`.

## 3. Commande d'exécution
Depuis le répertoire racine :
```bash
php lab-poo/classe-abstraite/exemple.php
```

## 4. Parcours détaillé du code

### Étape 1 : Déclaration du modèle abstrait
```php
abstract class Vehicule
{
    public function __construct(
        protected int $id,
        protected string $marque,
        protected string $modele,
        protected float $prixJour
    ) {}
    ...
    abstract public function calculerCoutLocation(int $jours): float;
}
```
- **Rôle :** Le mot-clé `abstract` interdit toute instanciation directe (`new Vehicule()` produirait une erreur fatale).
- **Effet :** Elle regroupe les propriétés partagées par tous les véhicules (`id`, `marque`, `modele`, `prixJour`) et déclare la signature obligatoire `calculerCoutLocation()`.

### Étape 2 : Implémentation concrète
```php
class Voiture extends Vehicule
{
    public function calculerCoutLocation(int $jours): float
    {
        $total = $this->prixJour * $jours;
        if ($jours > 5) {
            $total *= 0.90; // Règle métier propre aux voitures
        }
        return $total;
    }
}
```
- **Rôle :** `Voiture` hérite des propriétés et méthodes du parent, et fournit le corps de la méthode abstraite.
- **Effet :** Chaque type de véhicule applique sa propre logique tout en respectant le contrat du modèle.

## 5. Résultat attendu
```text
=== DÉMONSTRATION : CLASSE ABSTRAITE ===

Véhicule créé : [#1] Dacia Sandero
Nombre de places : 5
Tarif journalier de base : 250 DH
Coût pour 7 jours (avec remise > 5j) : 1575 DH
```

## 6. Lien avec le projet technique
Dans le backend de **Gestion des Véhicules V2**, la classe abstraite `Vehicule` sert de socle commun pour enregistrer aussi bien des voitures légères que des utilitaires ou des camions dans `vehicles.json`.

## 7. Exercice complémentaire
Créer une seconde classe concrète `Utilitaire` étendant `Vehicule`, avec un volume de chargement en m³ et une majoration de 15% pour les locations de week-end.

