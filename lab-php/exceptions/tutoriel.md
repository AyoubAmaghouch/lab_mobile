# Tutoriel : Gestion des Erreurs et Exceptions en PHP

## 1. Objectif
Apprendre à créer et utiliser des exceptions personnalisées pour valider les entrées du formulaire d'ajout/modification d'un véhicule dans le projet **Gestion des Véhicules V2**, sans bloquer le serveur avec des erreurs fatales.

## 2. Fichiers concernés
- [`exemple.php`](file:///c:/Lab/lab-php/exceptions/exemple.php) : Script autonome démontrant la classe d'exception `VehicleValidationException`, le validateur et le bloc `try ... catch`.

## 3. Commande d'exécution
Depuis le répertoire du projet ou du dossier :
```bash
php lab-php/exceptions/exemple.php
```

## 4. Parcours détaillé du code

### Étape 1 : Déclaration de l'exception personnalisée
```php
class VehicleValidationException extends \Exception
{
    private array $erreurs;
    ...
}
```
- **Rôle :** Hérite de la classe native `\Exception`. Elle encapsule un tableau associatif `$erreurs` listant chaque champ en faute.
- **Effet :** Permet de transmettre une structure d'erreurs détaillée directement exploitable par une réponse API JSON.

### Étape 2 : Validation métier et déclenchement (`throw`)
```php
if (!empty($erreurs)) {
    throw new VehicleValidationException($erreurs, "Les données du véhicule sont invalides.");
}
```
- **Rôle :** Si des champs obligatoires sont manquants (marque, immatriculation) ou invalides (kilométrage négatif), l'exécution normale s'interrompt immédiatement.
- **Effet :** Aucune donnée invalide n'atteint l'étape d'enregistrement dans le fichier JSON.

### Étape 3 : Capture propre (`try ... catch`)
```php
try {
    VehicleValidator::valider($vehiculeInvalide);
} catch (VehicleValidationException $e) {
    // Traitement sans plantage du serveur
}
```
- **Rôle :** Isole le bloc sensible. En cas d'erreur de validation, le bloc `catch` prend la main, extrait les erreurs avec `$e->getErreurs()` et renvoie une réponse HTTP 400 formatée.

## 5. Résultat attendu
```text
=== Test 1 : Données valides ===
Succès : Véhicule 'Renault Clio' validé sans erreur.

=== Test 2 : Données invalides (déclenchement de l'exception) ===
Exception interceptée avec succès !
Message : Les données du véhicule sont invalides. (Code : 400)
Détail des erreurs pour l'API JSON :
  - [marque] : La marque du véhicule est obligatoire.
  - [immatriculation] : L'immatriculation est obligatoire.
  - [kilometrage] : Le kilométrage doit être un entier positif ou nul.
```

## 6. Lien avec le projet technique
Dans l'API de gestion des véhicules (`backend/api/vehicles.php`), cette mécanique remplace les `die()` ou les erreurs `PHP Fatal Error`. L'API répond toujours avec du JSON valide :
```json
{
  "success": false,
  "code": 400,
  "erreurs": {
    "kilometrage": "Le kilométrage doit être un entier positif ou nul."
  }
}
```

## 7. Exercice complémentaire
Créer une deuxième classe d'exception `VehicleNotFoundException` (code 404) levée lorsqu'un utilisateur tente de modifier ou supprimer un véhicule dont l'`id` n'existe pas dans le fichier `vehicles.json`.

