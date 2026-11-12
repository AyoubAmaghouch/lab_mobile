# Tutoriel : Réutilisation de code avec les Traits en PHP

## 1. Objectif
Comprendre et mettre en œuvre les **Traits** pour partager des fonctionnalités transversales (comme la journalisation d'activités) entre différentes classes du projet **Gestion des Véhicules V2**, sans duplication de code et sans recourir à l'héritage multiple.

## 2. Fichiers concernés
- [`exemple.php`](file:///c:/Lab/lab-php/traits/exemple.php) : Démonstration autonome déclarant le trait `LoggableTrait` injecté dans `VehicleService` et `JsonStorageService`.

## 3. Commande d'exécution
Depuis le répertoire du projet ou du dossier :
```bash
php lab-php/traits/exemple.php
```

## 4. Parcours détaillé du code

### Étape 1 : Définition du Trait
```php
namespace App\Traits {
    trait LoggableTrait
    {
        private array $historique = [];

        public function log(string $niveau, string $message): void
        {
            $horodatage = date('Y-m-d H:i:s');
            $classeAppelante = static::class;
            $entree = "[$horodatage] [$niveau] [$classeAppelante] $message";

            $this->historique[] = $entree;
            echo "📝 LOG ÉMIS : $entree\n";
        }
        ...
    }
}
```
- **Rôle :** Définit un comportement réutilisable sans être lui-même instanciable (on ne peut pas faire `new LoggableTrait()`).
- **Effet :** Fournit à n'importe quelle classe hôte la méthode `log()` et la propriété `$historique`.
- **Détail :** `static::class` identifie dynamiquement le nom de la classe qui a appelé le log.

### Étape 2 : Injection dans deux classes distinctes (`use`)
```php
class VehicleService
{
    use LoggableTrait;
    ...
}

class JsonStorageService
{
    use LoggableTrait;
    ...
}
```
- **Rôle :** Le mot-clé `use LoggableTrait;` à l'intérieur du corps de la classe importe directement les méthodes et propriétés du trait.
- **Effet :** Deux classes aux responsabilités totalement différentes partagent la même logique de log sans devoir hériter d'une même classe parente.

## 5. Résultat attendu
```text
=== DÉMONSTRATION DES TRAITS EN PHP ===

--- Opérations sur les véhicules ---
📝 LOG ÉMIS : [2026-11-12 09:30:38] [INFO] [App\Services\VehicleService] Création du véhicule #101 (Renault Clio 5, plaque: 54321-A-1)
📝 LOG ÉMIS : [2026-11-12 09:30:38] [WARNING] [App\Services\VehicleService] Suppression définitive du véhicule #99

--- Opérations de stockage ---
📝 LOG ÉMIS : [2026-11-12 09:30:38] [INFO] [App\Services\JsonStorageService] Sauvegarde de 1 enregistrements dans le fichier 'vehicles.json'

Nombre de logs dans VehicleService     : 2
Nombre de logs dans JsonStorageService : 1

Partage de code réussi sans héritage multiple !
```

## 6. Lien avec le projet technique
Dans le backend de **Gestion des Véhicules V2**, le trait `LoggableTrait` permet de consigner dans un fichier `logs/app.log` chaque opération du cycle CRUD :
- Ajout d'un véhicule (`[INFO] Véhicule #101 créé`)
- Échec de validation (`[WARNING] Kilométrage invalide`)
- Suppression (`[ALERT] Véhicule supprimé`)

## 7. Exercice complémentaire
Créer un trait `JsonSerializableTrait` qui fournit une méthode `toJson(): string` convertissant automatiquement les propriétés de n'importe quel objet en chaîne JSON formatée.

