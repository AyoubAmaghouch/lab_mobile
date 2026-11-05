---
marp: true
theme: vehicle
paginate: true
---

<!-- _class: cover -->

![OFPPT](images/ofppt.png)
![Solicode](images/solicode.png)

# GESTION DES VÉHICULES V2

### Application web de gestion des véhicules

**Réalisé par :** Ayoub Amaghouch

**Encadré par :** ES-Sarraj Fouad

**Année de formation :** 2026

<!--
Bonjour à tous.
Je m'appelle Ayoub Amaghouch.
Aujourd'hui, je vais vous présenter mon projet technique.
Il s'agit d'une application web de gestion des véhicules.
-->


<!--
Bonjour à tous.
Je m'appelle [Ton nom].
Aujourd'hui, je vais vous présenter mon projet technique.
Le projet s'appelle Vehicle Management System.
C'est une application web destinée à la gestion des véhicules.
-->

---

<!-- _class: light -->

# PLAN DE PRÉSENTATION

Les différentes étapes de notre projet technique :

1. **Introduction** — Présentation du projet.
2. **Besoin** — Problématique et solution proposée.
3. **Analyse** — Étude des besoins et fonctionnalités.
4. **Conception** — Diagrammes et modèles du système.
5. **Réalisation** — Technologies et prototype.
6. **Conclusion** — Résultats du projet.

<!--
Voici le plan de ma présentation.
Je vais commencer par présenter le projet.
Ensuite, je vais expliquer les besoins et les fonctionnalités.
Après, je vais présenter la conception et les technologies utilisées.
Enfin, je vais terminer par la conclusion.
-->

---

<!-- _class: light -->

# INTRODUCTION

## Présentation du projet

Vehicle Management System est une application web qui permet de gérer les véhicules à travers une interface simple et intuitive.

L'application permet d'ajouter, consulter, modifier et supprimer des véhicules.

## Objectif du projet

Développer une application web permettant de centraliser et de faciliter la gestion des informations relatives aux véhicules.

## Les acteurs principaux

- **Administrateur / Gestionnaire :** gère les informations des véhicules.
- **Utilisateur :** consulte les véhicules enregistrés.

<!--
Cette diapositive présente mon projet.
Il s'agit d'une application web de gestion des véhicules.
Elle permet d'effectuer les opérations principales : ajouter, afficher, modifier et supprimer.
L'objectif est de faciliter la gestion des informations des véhicules.
-->

---

<!-- _class: light -->

# BESOIN DU PROJET

## Problématique

Comment faciliter la gestion des véhicules et assurer une organisation efficace de leurs informations tout en simplifiant les opérations quotidiennes ?

## Besoins principaux

**Gestionnaire :**
- Ajouter un nouveau véhicule.
- Consulter la liste des véhicules.
- Modifier les informations d'un véhicule.
- Supprimer un véhicule.

**Application :**
- Afficher les données de manière organisée.
- Vérifier les informations saisies.
- Assurer la communication entre le Frontend et le Backend.
- Stocker les informations des véhicules.

<!--
Cette diapositive présente les besoins du projet.
Le problème principal est la difficulté d'organiser et de gérer les informations des véhicules.
Notre solution permet d'effectuer les opérations CRUD.
Elle facilite également la consultation et la modification des données.
-->

---

<!-- _class: light -->

# ANALYSE DU PROJET

## Fonctionnalités principales

**1. Create — Ajouter**
- Ajouter un véhicule avec ses informations.

**2. Read — Consulter**
- Afficher la liste des véhicules.
- Consulter les détails d'un véhicule.

**3. Update — Modifier**
- Modifier les informations d'un véhicule existant.

**4. Delete — Supprimer**
- Supprimer un véhicule enregistré.

## Validation des données

- Vérifier les champs obligatoires.
- Contrôler les informations saisies.
- Afficher des notifications à l'utilisateur.

<!--
Dans cette partie, je présente les fonctionnalités de mon application.
Le projet repose sur les quatre opérations CRUD.
Create permet d'ajouter un véhicule.
Read permet de consulter les véhicules.
Update permet de modifier les informations.
Delete permet de supprimer un véhicule.
-->

---

<!-- _class: light -->

# CONCEPTION DU PROJET

## Diagrammes et modèles

- **Diagramme de cas d'utilisation :** présente les fonctionnalités accessibles à l'utilisateur.
- **Diagramme de classes :** décrit les classes et leurs relations.
- **Diagramme de séquence :** présente les étapes d'une interaction entre l'utilisateur et le système.
- **Modèle de données :** représente la structure des informations stockées dans le fichier JSON.

## Organisation du système

- Frontend : interface utilisateur.
- Backend : traitement des opérations.
- Stockage : fichier JSON contenant les véhicules.

<!--
La conception permet de préparer le développement du projet.
Le diagramme de cas d'utilisation présente les actions possibles.
Le diagramme de classes décrit la structure du système.
Le diagramme de séquence montre le déroulement des opérations.
Le modèle de données présente l'organisation des informations.
-->

---

<!-- _class: content -->

# RÉALISATION

## Stack Technique

### Backend

- 🐘 **PHP** — Langage de programmation côté serveur.
- 📦 **Programmation orientée objet (POO)** — Organisation du code avec des classes.
- 📄 **JSON** — Stockage des informations des véhicules.
- 🔗 **API PHP** — Communication et traitement des requêtes.

### Frontend

- 🌐 **HTML5** — Structure des pages web.
- 🎨 **Tailwind CSS** — Mise en forme et design de l'interface.
- ⚡ **JavaScript** — Gestion des interactions et des opérations CRUD.

### Outils utilisés

- 💻 **Visual Studio Code** — Environnement de développement.
- 🌿 **Git & GitHub** — Gestion des versions du projet.

<!--
Maintenant, je présente les technologies utilisées.
Pour le Backend, j'ai utilisé PHP pour gérer les opérations.
J'ai organisé le code avec la programmation orientée objet.
Les données sont stockées dans un fichier JSON.
Pour le Frontend, j'ai utilisé HTML, Tailwind CSS et JavaScript.
J'ai également utilisé Git et GitHub pour gérer les versions du projet.
-->

---

<!-- _class: dark -->

# CONCLUSION

## Bilan du projet

Ce projet nous a permis de développer une application web de gestion des véhicules afin de simplifier l'organisation, la consultation et la gestion des informations.

## Résultats obtenus

- Ajout et enregistrement des véhicules.
- Consultation de la liste des véhicules.
- Modification des informations.
- Suppression des véhicules.
- Interface utilisateur simple et intuitive.

## Perspectives

- Ajouter un système d'authentification.
- Ajouter une recherche et des filtres avancés.
- Améliorer le tableau de bord.
- Utiliser une base de données MySQL.

# MERCI POUR VOTRE ATTENTION !

<!--
Pour conclure, mon projet permet de gérer facilement les véhicules.
Il regroupe les principales opérations CRUD dans une seule application.
Ce projet m'a permis de mettre en pratique mes connaissances en PHP, JavaScript et Tailwind CSS.
Dans le futur, je pourrai ajouter de nouvelles fonctionnalités.
Je vous remercie pour votre attention.
Avez-vous des questions ?
-->
