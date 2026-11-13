# Tutoriel : Encapsulation en PHP

## 1. Objectif
Comprendre le principe d'**encapsulation** : masquer l'état interne d'un objet (`private`) et n'exposer que des méthodes publiques contrôlées (`getters` et `setters`) afin de garantir l'intégrité des données dans **Gestion des Véhicules V2**.

## 2. Fichiers concernés
- [`exemple.php`](file:///c:/Lab/lab-poo/encapsulation/exemple.php) : Classe `VehiculeSecurise` avec attributs privés et contrôle des règles métier.

## 3. Commande d'exécution
Depuis le répertoire racine :
```bash
php lab-poo/encapsulation/exemple.php
```

## 4. Parcours détaillé du code

### Étape 1 : Protection des attributs avec `private`
```php
class VehiculeSecurise
{
    private int $kilometrage;
    private string $statut;
    private float $prixJournalier;
```
- L'accès direct `$vehicule->kilometrage = -10;` est formellement interdit et refusé par PHP (génère une erreur `Cannot access private property`).

### Étape 2 : Contrôle d'intégrité dans les accesseurs/mutateurs
```php
public function actualiserKilometrage(int $nouveauKilometrage): void
{
    if ($nouveauKilometrage < $this->kilometrage) {
        throw new InvalidArgumentException(
            "Fraude kilométrique rejetée : Le nouveau kilométrage ne peut être inférieur à l'actuel."
        );
    }
    $this->kilometrage = $nouveauKilometrage;
}
```
- Seul le véhicule décide s'il accepte la modification. Le compteur kilométrique ne peut régresser, ce qui protège la flotte contre la fraude.

### Étape 3 : Liste fermée de valeurs autorisées (Enum-like)
```php
private const STATUTS_AUTORISES = ['Disponible', 'En location', 'En maintenance'];

public function changerStatut(string $nouveauStatut): void
{
    if (!in_array($nouveauStatut, self::STATUTS_AUTORISES, true)) {
        throw new InvalidArgumentException("Statut invalide...");
    }
    $this->statut = $nouveauStatut;
}
```

## 5. Résultat attendu
```text
=== DÉMONSTRATION : ENCAPSULATION EN PHP ===

1. État initial sécurisé du véhicule :
   - Plaque       : 12345-B-26
   - Kilométrage  : 45000 km
   - Statut       : Disponible
   - Tarif / jour : 350 DH

2. Mise à jour valide via les méthodes publiques :
   - Nouveau kilométrage : 45350 km
   - Nouveau statut      : En location

3. Test de protection : Tentative d'anomalie kilométrique (compteur falsifié) :
   [BLOCAGE SÉCURITÉ] Fraude kilométrique rejetée : Le nouveau kilométrage (40000 km) ne peut être inférieur à l'actuel (45350 km).

4. Test de protection : Tentative d'attribution d'un statut non autorisé :
   [BLOCAGE SÉCURITÉ] Statut invalide 'En panne sur l'autoroute'. Statuts acceptés : Disponible, En location, En maintenance.
```

## 6. Intégration dans le projet Gestion des Véhicules V2
L'encapsulation empêche l'injection de données corrompues dans les fichiers JSON du backend et assure que chaque véhicule conserve un état cohérent tout au long de son cycle de vie.

