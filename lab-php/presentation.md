---
marp: true
theme: default
paginate: true
size: 16:9
title: "Lab PHP — erreurs, namespaces et traits"
description: "Présentation des notions PHP appliquées à la gestion des véhicules"
style: |
  section {
    font-family: "Segoe UI", Arial, sans-serif;
    background: #f8fafc;
    color: #172033;
    padding: 46px 58px;
    font-size: 22px;
  }
  h1, h2 {
    color: #123b5d;
  }
  h1 {
    font-size: 1.8em;
  }
  h2 {
    border-bottom: 2px solid #d5e4ef;
    padding-bottom: 8px;
  }
  strong {
    color: #087e8b;
  }
  code {
    color: #9b2451;
    background: #edf2f7;
  }
  pre {
    font-size: 0.68em;
    line-height: 1.2;
  }
  section.cover, section.final {
    background: linear-gradient(135deg, #102a43, #087e8b);
    color: #ffffff;
    text-align: center;
    justify-content: center;
  }
  section.cover h1, section.final h1 {
    color: #ffffff;
    font-size: 2.2em;
  }
  section.cover h2, section.final h2 {
    color: #c8f2f2;
    border: 0;
  }
  section.cols {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto 1fr;
    column-gap: 30px;
    align-items: start;
  }
  section.cols h1 {
    grid-column: 1 / -1;
  }
  table {
    width: 100%;
    font-size: 0.78em;
  }
  th {
    background: #dcecf2;
    color: #123b5d;
  }
  td, th {
    padding: 9px;
    border: 1px solid #cbd5e1;
  }
---

<!-- _class: cover -->

# PHP : ALLER PLUS LOIN

## Erreurs & exceptions · Namespace · Trait

**Application support : Gestion des Véhicules V2**

Lab de découverte — Solicode

<!--
Bonjour. Dans ce lab, je présente trois notions PHP qui complètent le cours.
Pour chacune, je vais expliquer son rôle et montrer comment l'utiliser dans
une application de gestion des véhicules.
-->

---

# Objectifs du lab

À la fin de cette présentation, je peux :

- **Détecter et traiter** une erreur sans interrompre l'application brutalement.
- **Organiser** les classes PHP avec des namespaces.
- **Réutiliser** un comportement commun avec un trait.
- Appliquer ces notions au backend PHP de **Gestion des Véhicules V2**.

**Contexte technique :** API PHP, opérations CRUD et données de véhicules en JSON.

<!--
Le but n'est pas seulement de connaître la syntaxe.
Je veux aussi comprendre quand ces outils rendent le projet plus fiable
et plus facile à maintenir.
-->

---

<!-- _class: cols -->

# 01 — Erreurs et exceptions

## Pourquoi les gérer ?

Une API peut recevoir un JSON invalide, ne pas trouver un véhicule ou rencontrer
un problème de lecture de fichier.

- Donner une réponse compréhensible au client.
- Choisir un code HTTP adapté.
- Enregistrer les détails utiles au diagnostic.
- Éviter d'afficher des détails internes à l'utilisateur.

## Deux notions à distinguer

- **Erreur PHP :** problème signalé par le moteur, par exemple une erreur de type.
- **Exception :** objet lancé volontairement avec `throw`, puis traité avec `catch`.
- `Throwable` est l'interface commune aux erreurs PHP et aux exceptions.

**Important :** on ne doit pas essayer de continuer après toutes les erreurs.

<!--
Une erreur non traitée peut interrompre une requête.
Une exception permet de signaler un cas anormal et de le traiter à un endroit adapté.
Il faut distinguer les problèmes récupérables des erreurs graves.
-->

---

# Exemple — JSON de véhicule invalide

`JSON_THROW_ON_ERROR` transforme l'échec du décodage en exception `JsonException`.

```php
<?php

try {
    $vehicle = json_decode(
        $requestBody,
        true,
        512,
        JSON_THROW_ON_ERROR
    );

    if (!is_array($vehicle) || empty($vehicle['registration'])) {
        http_response_code(422);
        echo json_encode(['error' => 'Immatriculation obligatoire']);
    } else {
        // Continuer la création du véhicule.
    }
} catch (JsonException $exception) {
    error_log($exception->getMessage());
    http_response_code(400);
    echo json_encode(['error' => 'Le JSON envoyé est invalide']);
}
```

**Résultat attendu :** JSON invalide → réponse `400`; champ métier manquant → `422`.

<!--
Ici, l'API décode le corps reçu.
Si le JSON n'est pas valide, l'exception est interceptée.
Le détail technique est journalisé, mais la réponse envoyée au client reste claire.
-->

---

# Exemple — véhicule introuvable

On peut créer une exception dédiée au domaine du projet :

```php
<?php
namespace App\Exceptions;

use RuntimeException;

class VehicleNotFoundException extends RuntimeException
{
}
```

Le contrôleur la traite précisément :

```php
try {
    $vehicle = $vehicleRepository->findOrFail($id);
} catch (VehicleNotFoundException $exception) {
    http_response_code(404);
    echo json_encode(['error' => 'Véhicule introuvable']);
}
```

**À tester :** demander un identifiant existant, puis un identifiant absent.

<!--
Une exception personnalisée exprime clairement le problème métier.
On peut alors renvoyer 404 pour le véhicule absent, au lieu de renvoyer
une erreur générale qui ne décrit pas correctement la situation.
-->

---

# 02 — Namespace

Un namespace est un **espace de noms** qui organise les classes et évite les collisions.

```php
<?php
namespace App\Models;

class Vehicle
{
    public function __construct(
        public string $registration,
        public string $brand
    ) {
    }
}
```

Dans un contrôleur, on importe la classe :

```php
<?php
namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Repositories\VehicleRepository;
```

`App\Models\Vehicle` est le nom complet de la classe.

<!--
Le namespace est généralement placé au début du fichier.
Grâce à lui, plusieurs modules peuvent avoir une classe appelée Vehicle
sans conflit, et les imports rendent les dépendances visibles.
-->

---

# Namespace dans le projet

Les dossiers peuvent refléter les namespaces :

```text
app/
├── Exceptions/VehicleNotFoundException.php
├── Http/Controllers/VehicleController.php
├── Models/Vehicle.php
└── Repositories/VehicleRepository.php
```

Avec Composer, l'autoload PSR-4 associe le préfixe `App\` au dossier `app/` :

```json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/"
    }
  }
}
```

Après une modification de l'autoload : `composer dump-autoload`

<!--
Cette organisation aide à retrouver les classes quand le projet grandit.
Le mapping PSR-4 permet à Composer de charger une classe à partir de son namespace
et de son chemin, sans require manuel dans chaque fichier.
-->

---

# 03 — Trait

Un **trait** partage des méthodes entre plusieurs classes, sans créer de relation
d'héritage.

Exemple : les contrôleurs Véhicule et Catégorie renvoient tous deux du JSON.

```php
<?php
namespace App\Http\Support;

trait JsonResponse
{
    protected function respondWithJson(array $data, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_THROW_ON_ERROR);
    }
}
```

Le trait centralise la préparation des réponses API JSON.

<!--
Un trait est une façon de partager du code entre classes qui ne sont pas forcément
liées par héritage. Ici, les contrôleurs peuvent réutiliser la même méthode
pour formater leurs réponses.
-->

---

# Utiliser le trait dans les contrôleurs

```php
<?php
namespace App\Http\Controllers;

use App\Http\Support\JsonResponse;

class VehicleController
{
    use JsonResponse;

    public function show(array $vehicle): void
    {
        $this->respondWithJson(['data' => $vehicle]);
    }
}
```

Un autre contrôleur peut aussi écrire `use JsonResponse;`.

- **Avantage :** éviter de copier-coller le même comportement.
- **Limite :** un trait ne doit pas devenir un endroit où ranger toute la logique.
- **À vérifier :** si l'encodage échoue, `JsonException` doit être traité par
  le gestionnaire d'erreurs de l'application.

<!--
Le contrôleur utilise le trait comme s'il possédait directement la méthode.
On garde le trait limité à un comportement partagé et on traite aussi les erreurs
possibles de l'encodage JSON.
-->

---

# Mise en pratique — scénario CRUD

| Étape | Notion utilisée | Résultat attendu |
|:--|:--|:--|
| Créer un véhicule avec un JSON mal formé | Exception | Réponse `400` et erreur journalisée |
| Créer un véhicule sans immatriculation | Validation | Réponse `422` |
| Afficher un identifiant inexistant | Exception métier | Réponse `404` |
| Charger `Vehicle` dans un contrôleur | Namespace | Classe trouvée via `App\Models` |
| Répondre depuis plusieurs contrôleurs | Trait | Même format JSON réutilisé |

**Test manuel :** envoyer les cas valides et invalides avec un client HTTP
(par exemple Postman), puis vérifier le statut et le corps JSON.

<!--
Ce tableau résume une petite série de tests que je peux faire sur l'API.
Je vérifie le code HTTP et le contenu de la réponse, et pas seulement
le fait que la page ne plante pas.
-->

---

# À retenir

- **Erreurs et exceptions** : détecter un problème, le traiter au bon niveau,
  journaliser ce qui aide au diagnostic et répondre clairement.
- **Namespace** : nommer et organiser les classes pour éviter les conflits.
- **Trait** : partager une méthode entre classes sans dupliquer le code.

**La bonne règle :** chaque outil doit répondre à un besoin réel du projet.

<!--
Pour conclure, ces trois notions rendent le code plus organisé et plus fiable
lorsqu'elles sont utilisées à bon escient.
Merci pour votre attention. Avez-vous des questions ?
-->

---

<!-- _class: final -->

# MERCI !

## Questions ?

**PHP · API · Gestion des Véhicules V2**
