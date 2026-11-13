# Lab POO : Notions Avancées de Programmation Orientée Objet en PHP

Bienvenue dans le **Lab POO**, dédié à l'apprentissage et à la mise en pratique des concepts fondamentaux et avancés de la programmation orientée objet en **PHP 8.5** appliqués au projet technique **Gestion des Véhicules V2**.

---

## 1. Contexte du Projet Technique

- **Projet :** Gestion des Véhicules V2
- **Description :** Application web de gestion d'une flotte automobile (voitures citadines, berlines, utilitaires, poids lourds) permettant d'effectuer les opérations CRUD, le suivi kilométrique, la gestion des statuts de location et le calcul tarifaire.
- **Stack technique :** HTML5, Tailwind CSS, JavaScript, PHP Native (POO), stockage JSON (`vehicles.json`).
- **Apprenant :** Ayoub Amaghouch
- **Encadrant :** ES-Sarraj Fouad
- **Formation :** Développeur Full Stack

---

## 2. Sommaire des Notions Étudiées

Ce Lab explore les 6 piliers de la programmation orientée objet en PHP :

| Notion | Rôle Pédagogique | Répertoire & Fichiers |
| :--- | :--- | :--- |
| **1. Classe Abstraite** | Créer une classe qui sert de modèle générique non instanciable | [`classe-abstraite/`](file:///c:/Lab/lab-poo/classe-abstraite/exemple.php) |
| **2. Interface** | Définir les méthodes publiques obligatoires (contrat d'implémentation) | [`interface/`](file:///c:/Lab/lab-poo/interface/exemple.php) |
| **3. Héritage** | Réutiliser et étendre les propriétés et méthodes d'une classe de base | [`heritage/`](file:///c:/Lab/lab-poo/heritage/exemple.php) |
| **4. Polymorphisme** | Utiliser une même signature de méthode avec des comportements variés | [`polymorphisme/`](file:///c:/Lab/lab-poo/polymorphisme/exemple.php) |
| **5. Encapsulation** | Protéger les données internes (`private`) avec contrôle d'intégrité | [`encapsulation/`](file:///c:/Lab/lab-poo/encapsulation/exemple.php) |
| **6. Statique** | Utiliser des méthodes et propriétés liées à la classe elle-même | [`statique/`](file:///c:/Lab/lab-poo/statique/exemple.php) |

---

## 3. Structure du Répertoire `lab-poo/`

```text
lab-poo/
├── presentation.md               # Présentation Marp (11 slides)
├── README.md                     # Documentation générale du Lab
├── images/                       # Logos officiels
│   ├── ofppt.png
│   └── solicode.png
├── classe-abstraite/
│   ├── exemple.php               # Code exécutable
│   └── tutoriel.md               # Guide pas-à-pas
├── interface/
│   ├── exemple.php               # Code exécutable
│   └── tutoriel.md               # Guide pas-à-pas
├── heritage/
│   ├── exemple.php               # Code exécutable
│   └── tutoriel.md               # Guide pas-à-pas
├── polymorphisme/
│   ├── exemple.php               # Code exécutable
│   └── tutoriel.md               # Guide pas-à-pas
├── encapsulation/
│   ├── exemple.php               # Code exécutable
│   └── tutoriel.md               # Guide pas-à-pas
└── statique/
    ├── exemple.php               # Code exécutable
    └── tutoriel.md               # Guide pas-à-pas
```

---

## 4. Guide d'Exécution Rapide

Toutes les démonstrations sont autonomes et directement exécutables en ligne de commande :

```bash
# 1. Classe Abstraite
php lab-poo/classe-abstraite/exemple.php

# 2. Interface
php lab-poo/interface/exemple.php

# 3. Héritage
php lab-poo/heritage/exemple.php

# 4. Polymorphisme
php lab-poo/polymorphisme/exemple.php

# 5. Encapsulation
php lab-poo/encapsulation/exemple.php

# 6. Méthodes et Propriétés Statiques
php lab-poo/statique/exemple.php
```

---

## 5. Présentation Marp

Le fichier [`presentation.md`](file:///c:/Lab/lab-poo/presentation.md) est prêt pour la diffusion et l'exportation (PDF, HTML, PPTX via l'extension VS Code Marp).

Il contient exactement 11 diapositives structurées selon le plan pédagogique standard :
1. **Page de garde** avec logos OFPPT et Solicode, titre, nom de l'apprenant et encadrant.
2. **Plan de présentation**.
3. **Introduction & Stack Technique** (Gestion des Véhicules V2).
4. **Définitions Clés - Partie 1** (Classe Abstraite, Interface, Héritage).
5. **Définitions Clés - Partie 2** (Polymorphisme, Encapsulation, Éléments Statiques).
6. **Problème Réel Rencontré** (faiblesses du code sans POO).
7. **Solution : Quick Start & Hello World** (script complet et concis).
8. **Solution 1 & 2 : Encapsulation & Éléments Statiques**.
9. **Solution 3 & 4 : Classe Abstraite & Héritage**.
10. **Solution 5 & 6 : Interface & Polymorphisme**.
11. **Solution Globale & Livrables** (commandes d'exécution et bilan).

