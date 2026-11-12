# Lab PHP : Notions Avancées

> **Projet Technique de Référence :** Gestion des Véhicules V2  
> **Apprenant :** Ayoub Amaghouch  
> **Encadrant :** ES-Sarraj Fouad  
> **Formation :** Développeur Full Stack  
> **Livrables :** [Présentation Marp (`presentation.md`)](file:///c:/Lab/lab-php/presentation.md) | [Exemples PHP exécutables & Tutoriels](file:///c:/Lab/lab-php)

---

## 1. Contexte & Objectifs

Dans ce Lab, nous explorons trois notions fondamentales de PHP moderne indispensables pour concevoir un backend robuste et maintenable pour l'application **Gestion des Véhicules V2** :

1. **Gestion des Erreurs et des Exceptions :** Détecter, lever et intercepter les anomalies (données invalides, véhicule introuvable) pour retourner des réponses API JSON cohérentes (HTTP 400, 404) sans plantage serveur.
2. **Namespaces (Espaces de Noms) :** Organiser logiquement l'architecture en modules (`App\Models`, `App\Services`, `App\Exceptions`, `App\Traits`) pour éliminer les conflits de noms de classes.
3. **Traits :** Partager du code horizontalement (ex. journalisation des actions CRUD) entre plusieurs classes indépendantes sans recourir à l'héritage multiple.

---

## 2. Structure du Lab

```text
lab-php/
├── images/
│   ├── logo_solicode.png
│   └── ofppt_logo.png
├── presentation.md            # Présentation Marp (10 slides)
├── README.md                  # Documentation globale du Lab
├── exceptions/
│   ├── exemple.php            # Démonstration exécutable de VehicleValidationException
│   └── tutoriel.md            # Tutoriel pas-à-pas et explications
├── namespaces/
│   ├── exemple.php            # Démonstration exécutable des espaces de noms
│   └── tutoriel.md            # Tutoriel pas-à-pas et explications
└── traits/
    ├── exemple.php            # Démonstration exécutable du LoggableTrait
    └── tutoriel.md            # Tutoriel pas-à-pas et explications
```

---

## 3. Commandes d'Exécution & Validation

Tous les exemples ont été validés avec **PHP 8.5 (CLI)** et peuvent être exécutés directement :

### Vérification de la syntaxe
```bash
php -l lab-php/exceptions/exemple.php
php -l lab-php/namespaces/exemple.php
php -l lab-php/traits/exemple.php
```

### Exécution des démonstrations
```bash
# 1. Tester la gestion des exceptions
php lab-php/exceptions/exemple.php

# 2. Tester l'organisation par namespaces
php lab-php/namespaces/exemple.php

# 3. Tester le partage de code avec les traits
php lab-php/traits/exemple.php
```

---

## 4. Aperçu de la Présentation Marp

La présentation [`presentation.md`](file:///c:/Lab/lab-php/presentation.md) est conçue selon le standard pédagogique Marp :
- **Slide 1 :** Page de garde avec les logos officiels **OFPPT** et **Solicode** (`images/ofppt_logo.png`, `images/logo_solicode.png`).
- **Slide 2 :** Plan de présentation structuré (*Introduction & Stack Technique*, *Définitions*, *Problème*, *Solution*).
- **Slide 3 :** Introduction & Stack Technique du projet Gestion des Véhicules V2.
- **Slide 4 :** Définitions claires des 3 notions clés.
- **Slide 5 :** Problème réel rencontré lors du développement CRUD basique.
- **Slide 6 :** Quick Start & Démonstration "Hello World" combinée.
- **Slides 7-9 :** Solutions pratiques et code source appliqué pour chaque notion.
- **Slide 10 :** Solution globale, livrables et commandes d'exécution.

