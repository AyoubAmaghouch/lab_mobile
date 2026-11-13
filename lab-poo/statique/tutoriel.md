# Tutoriel : Méthodes et Propriétés Statiques en PHP

## 1. Objectif
Comprendre le fonctionnement des membres **statiques** (`static`) en PHP : des propriétés et méthodes liées à la classe elle-même et non à une instance spécifique d'un véhicule dans le projet **Gestion des Véhicules V2**.

## 2. Fichiers concernés
- [`exemple.php`](file:///c:/Lab/lab-poo/statique/exemple.php) : Classe `VehiculeFlotte` avec compteur partagé et utilitaires de validation et de formatage statiques.

## 3. Commande d'exécution
Depuis le répertoire racine :
```bash
php lab-poo/statique/exemple.php
```

## 4. Parcours détaillé du code

### Étape 1 : Propriété statique de classe (Compteur partagé)
```php
class VehiculeFlotte
{
    private static int $compteurVehicules = 0;

    public function __construct(...) {
        ...
        self::$compteurVehicules++;
    }
}
```
- **Rôle :** Contrairement à `$this->propriete` qui est unique à chaque objet, `self::$compteurVehicules` est stocké une seule fois en mémoire pour toute la classe.
- Chaque nouvelle création de véhicule incrémente la variable commune.

### Étape 2 : Méthodes utilitaires statiques
```php
public static function validerImmatriculationMaroc(string $plaque): bool
{
    return (bool) preg_match('/^[0-9]{1,6}-[A-Z]-[0-9]{1,2}$/', trim($plaque));
}

public static function formaterPrix(float $montant): string
{
    return number_format($montant, 2, ',', ' ') . " " . self::DEVISE;
}
```
- **Rôle :** Les méthodes statiques s'appellent directement avec l'opérateur de résolution de portée `::` (`VehiculeFlotte::validerImmatriculationMaroc(...)`) sans devoir créer un objet véhicule.

## 5. Résultat attendu
```text
=== DÉMONSTRATION : MÉTHODES ET PROPRIÉTÉS STATIQUES ===

1. Validation de plaques avec la méthode statique ::validerImmatriculationMaroc() :
   - Plaque '12345-A-26' -> VALIDE [OK]
   - Plaque '99999-B-1' -> VALIDE [OK]
   - Plaque 'INVALID_PLATE' -> INVALIDE [X]
   - Plaque '45-C-6' -> VALIDE [OK]

2. Compteur global initial de véhicules dans la flotte :
   Total en mémoire : 0

3. Création de 3 véhicules...
   - [#1] Renault Clio 5 (12345-A-26)
   - [#2] Dacia Duster (45678-B-1)
   - [#3] Hyundai Tucson (88231-D-50)

4. Compteur global actualisé après instanciations :
   Total en mémoire : 3 véhicules actifs.

5. Formatage financier statique (sans instancier d'objet) :
   Tarif journalier standard : 450,50 MAD
   Total forfait flotte      : 1 351,50 MAD
```

## 6. Intégration dans le projet Gestion des Véhicules V2
Les méthodes et propriétés statiques servent à centraliser les fonctions d'aide (validation regex des plaques d'immatriculation, convertisseurs, générateurs d'identifiants, calculs statistiques globaux de la flotte) sans surcharger la mémoire.

