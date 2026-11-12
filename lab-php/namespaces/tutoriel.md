# Tutoriel : Organisation par Namespaces en PHP

## 1. Objectif
Comprendre comment utiliser les **namespaces** (espaces de noms) pour structurer les classes du projet **Gestion des Véhicules V2**, éviter les conflits de nommage et préparer le projet aux standards d'architecture modernes (PSR-4).

## 2. Fichiers concernés
- [`exemple.php`](file:///c:/Lab/lab-php/namespaces/exemple.php) : Démonstration autonome déclarant les espaces `App\Models`, `App\Services` et leur utilisation avec le mot-clé `use`.

## 3. Commande d'exécution
Depuis le répertoire du projet ou du dossier :
```bash
php lab-php/namespaces/exemple.php
```

## 4. Parcours détaillé du code

### Étape 1 : Déclaration d'un espace de nom pour le modèle
```php
namespace App\Models {
    class Vehicle { ... }
}
```
- **Rôle :** Place la classe `Vehicle` dans l'espace `App\Models`. Son nom complet qualifié devient `\App\Models\Vehicle`.
- **Effet :** Même si une bibliothèque externe possède une classe `Vehicle`, il n'y a aucun conflit.

### Étape 2 : Importation dans la couche service
```php
namespace App\Services {
    use App\Models\Vehicle;

    class VehicleManager {
        public function ajouterVehicule(...): Vehicle {
            return new Vehicle(...);
        }
    }
}
```
- **Rôle :** Le mot-clé `use App\Models\Vehicle;` permet d'utiliser le nom court `Vehicle` à l'intérieur de `App\Services\VehicleManager`.
- **Effet :** Le code reste concis, lisible et fortement typé (`Vehicle $v`).

### Étape 3 : Consommation dans le script principal
```php
namespace {
    use App\Models\Vehicle;
    use App\Services\VehicleManager;

    $manager = new VehicleManager();
}
```
- **Rôle :** L'espace global importe les classes nécessaires et instancie le service.
- **Effet :** La constante magique `Vehicle::class` renvoie la chaîne exacte `"App\Models\Vehicle"`.

## 5. Résultat attendu
```text
=== DÉMONSTRATION DES NAMESPACES EN PHP ===

Classes résolues avec succès via leurs namespaces :
  - Modèle  : App\Models\Vehicle
  - Service : App\Services\VehicleManager

Flotte enregistrée (2 véhicules) :
  - [#1] Dacia Sandero | Plaque : 12345-B-1 | 32000 km
  - [#2] Peugeot 208 | Plaque : 67890-A-1 | 15400 km
```

## 6. Lien avec le projet technique
Dans le projet réel, les fichiers sont organisés en arborescence miroir :
- `backend/src/Models/Vehicle.php` correspond à `namespace App\Models;`
- `backend/src/Services/VehicleManager.php` correspond à `namespace App\Services;`
Cette convention permet d'activer l'autoloading automatique avec Composer sans jamais avoir à écrire de `require` ou `include` manuels.

## 7. Exercice complémentaire
Ajouter un nouvel espace de nom `App\Repositories` contenant une classe `VehicleJsonRepository` responsable de la lecture et de l'écriture dans le fichier `vehicles.json`.

