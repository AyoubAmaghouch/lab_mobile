# Tutoriel : Interface en PHP

## 1. Objectif
Comprendre le concept d'**interface** comme contrat technique, pour définir les méthodes d'accès aux données de l'application **Gestion des Véhicules V2** indépendamment de la technologie de stockage (JSON, Base de données, API externe).

## 2. Fichiers concernés
- [`exemple.php`](file:///c:/Lab/lab-poo/interface/exemple.php) : Déclaration de l'interface `VehiculeRepositoryInterface` et implémentation dans `JsonVehiculeRepository`.

## 3. Commande d'exécution
Depuis le répertoire racine :
```bash
php lab-poo/interface/exemple.php
```

## 4. Parcours détaillé du code

### Étape 1 : Déclaration du contrat
```php
interface VehiculeRepositoryInterface
{
    public function ajouter(array $vehicule): bool;
    public function trouverParId(int $id): ?array;
    public function listerTous(): array;
    public function supprimer(int $id): bool;
}
```
- **Rôle :** L'interface déclare les signatures des 4 méthodes CRUD sans aucun corps `{}`.
- **Effet :** Toute classe qui implémente cette interface s'engage formellement à fournir ces méthodes avec les types attendus.

### Étape 2 : Implémentation (`implements`)
```php
class JsonVehiculeRepository implements VehiculeRepositoryInterface
{
    // Fournit le code réel pour chaque méthode de l'interface
}
```
- **Rôle :** `JsonVehiculeRepository` respecte le contrat en écrivant la logique de persistance.

### Étape 3 : Typage par l'interface (Inversion de dépendance)
```php
function executerCrud(VehiculeRepositoryInterface $repository): void { ... }
```
- **Rôle :** La fonction `executerCrud` ne dépend pas de `JsonVehiculeRepository`, mais de l'interface `VehiculeRepositoryInterface`.
- **Effet :** Demain, si le projet passe à MySQL avec `MySqlVehiculeRepository`, cette fonction marchera sans changer une seule ligne !

## 5. Résultat attendu
```text
=== DÉMONSTRATION : INTERFACE EN PHP ===

1. Ajout de véhicules via le contrat d'interface :
Total en stock : 2 véhicules.

2. Recherche par ID (ID: 1) :
   Véhicule trouvé : Peugeot 208 (Plaque : 12345-A-1)

3. Suppression du véhicule #2 :
   Résultat de la suppression : Succès
   Nombre restant : 1 véhicule(s).
```

## 6. Lien avec le projet technique
Dans le projet réel, l'API backend manipule l'interface du repository. Cela permet de tester facilement le code avec des bouchons (mocks) et d'évoluer de fichiers JSON vers une base SQL sans casser l'application.

## 7. Exercice complémentaire
Créer une seconde classe `ArrayMockVehiculeRepository implements VehiculeRepositoryInterface` préremplie avec 5 faux véhicules pour exécuter des tests unitaires rapides.

