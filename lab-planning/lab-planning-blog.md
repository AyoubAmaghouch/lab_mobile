---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background: radial-gradient(circle at top right, #1e1b4b, #0F172A);
    color: #F1F5F9;
    font-family: Arial, sans-serif;
    padding: 45px 60px;
    font-size: 20px;
  }

  section.light {
    background: linear-gradient(135deg, #F8FAFC, #EEF2F6);
    color: #1E293B;
  }

  h1 {
    color: #A5B4FC;
    font-size: 2.4em;
    font-weight: 800;
  }

  h2 {
    color: #818CF8;
    border-bottom: 3px solid #4F46E5;
    padding-bottom: 8px;
    font-size: 1.7em;
  }

  section.light h2 {
    color: #4F46E5;
  }

  h3 {
    color: #F472B6;
  }

  strong {
    color: #F472B6;
  }

  section.light strong {
    color: #BE185D;
  }

  li {
    line-height: 1.5;
    margin-bottom: 8px;
  }

  li::marker {
    color: #818CF8;
  }

  .meta-box {
    margin-top: 45px;
    padding: 20px 25px;
    background: rgba(30, 41, 59, 0.8);
    border: 1px solid #6366F1;
    border-radius: 12px;
    display: flex;
    gap: 60px;
    width: fit-content;
  }

  .meta-item {
    display: flex;
    flex-direction: column;
  }

  .meta-label {
    color: #94A3B8;
    font-size: 0.75em;
  }

  .meta-value {
    color: white;
    font-weight: bold;
    font-size: 1.1em;
  }

  .grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  .card {
    background: rgba(30, 41, 59, 0.75);
    border: 1px solid rgba(129, 140, 248, 0.35);
    border-radius: 12px;
    padding: 15px 20px;
  }

  section.light .card {
    background: white;
    border: 1px solid #CBD5E1;
  }

  code {
    background: rgba(99, 102, 241, 0.2);
    color: #C7D2FE;
    padding: 3px 7px;
    border-radius: 5px;
  }

  section.light code {
    color: #3730A3;
  }

  table {
    width: 100%;
    font-size: 0.85em;
  }

  th {
    background: #4F46E5;
    color: white;
    padding: 10px;
  }

  td {
    padding: 9px;
    border-bottom: 1px solid #64748B;
  }

---

<!-- _class: lead -->

# Lab Planning

## Standardisation des présentations des Labs techniques

<div class="meta-box">
  <div class="meta-item">
    <span class="meta-label">RÉALISÉ PAR</span>
    <span class="meta-value">Ayoub Amaghouch</span>
  </div>
  <div class="meta-item">
    <span class="meta-label">ENCADRÉ PAR</span>
    <span class="meta-value">Fouad Essarraj</span>
  </div>
</div>

---

<!-- _class: light -->

## Slide 2 — Plan de présentation

Cette présentation est organisée en deux grandes parties :

<div class="grid-2">
<div class="card">

### Partie 1 — Plan générique

1. Présentation du plan
2. Stack technique
3. Définitions
4. Problème et besoin
5. Solution et pratique
6. Résultats et conclusion

</div>
<div class="card">

### Partie 2 — Exemple pratique

**Application du plan à un Lab :**

Introduction à Tailwind CSS.

- Présentation du sujet.
- Technologies utilisées.
- Notions essentielles.
- Problème à résoudre.
- Réalisation pratique.
- Résultat obtenu.

</div>
</div>

---

## Slide 3 — Stack technique

Les outils utilisés pour préparer et présenter les Labs :

<div class="grid-2">
<div class="card">

### Markdown

- Langage de balisage léger.
- Permet de structurer le contenu.
- Utilisé pour rédiger les diapositives.

### Marp

- Outil de création de présentations.
- Transforme Markdown en diapositives.
- Permet l'exportation en PDF.

</div>
<div class="card">

### Visual Studio Code

- Éditeur de code.
- Permet de modifier les fichiers Markdown.
- Facilite l'organisation du projet.

### Git et GitHub

- Git : gestion des versions.
- GitHub : hébergement du dépôt.
- Permettent de partager le travail.

</div>
</div>

---

<!-- _class: light -->

## Slide 4 — Définitions

Quelques notions importantes pour comprendre le travail :

| Notion | Définition |
|---|---|
| Lab | Travail pratique consacré à un sujet précis. |
| Stack technique | Ensemble des technologies et outils utilisés. |
| Markdown | Syntaxe simple pour structurer du texte. |
| Marp | Outil qui transforme Markdown en présentation. |
| Quick Start | Guide rapide pour commencer à utiliser une technologie. |
| Hello World | Premier exemple simple permettant de tester une technologie. |
| Git | Système de gestion de versions. |
| GitHub | Plateforme d'hébergement de dépôts Git. |

---

## Slide 5 — Problème et besoin

### Problème constaté

Les présentations des Labs peuvent manquer d'organisation et de cohérence.

<div class="grid-2">
<div class="card">

### Difficultés

- Absence de plan commun.
- Définitions parfois insuffisantes.
- Problème et besoin non expliqués.
- Pratique et démonstration peu détaillées.
- Résultats difficiles à identifier.

</div>
<div class="card">

### Besoins

- Avoir une structure commune.
- Faciliter la compréhension.
- Présenter les notions importantes.
- Ajouter des exemples pratiques.
- Identifier les compétences acquises.

</div>
</div>

> Un plan commun permet d'améliorer la clarté et la qualité des présentations.

---

<!-- _class: light -->

## Slide 6 — Solution et pratique

### Le plan générique à appliquer

| Slide | Partie | Contenu attendu |
|---|---|---|
| 1 | Page de garde | Titre, apprenant, encadrant |
| 2 | Plan | Parties de la présentation |
| 3 | Stack technique | Technologies et rôles |
| 4 | Définitions | Notions importantes |
| 5 | Problème et besoin | Contexte et utilité |
| 6 | Solution et pratique | Étapes, exemples et tests |
| 7 | Résultats et conclusion | Résultat et apprentissages |

### Adaptation selon le sujet

- **Lab technique :** installation, configuration, code et tests.
- **Lab méthodologique :** étapes, organisation, règles et livrables.

Le contenu doit toujours être adapté au travail demandé.

---

## Slide 7 — Résultats et conclusion

### Résultats attendus

- Une structure commune pour tous les Labs.
- Des présentations plus claires et organisées.
- Une meilleure compréhension des technologies.
- Une partie pratique adaptée à chaque sujet.
- Une conclusion qui présente les acquis.

### Conclusion

Le plan générique constitue un guide commun pour préparer les présentations des Labs.

Il permet de conserver une organisation cohérente tout en laissant la possibilité d'adapter le contenu selon le sujet.

---

<!-- _class: lead -->

# Exemple pratique

## Application du plan à un Lab

### Introduction à Tailwind CSS

Démonstration de l'application des sept étapes du plan générique.

---

## Exemple — Slide 1 : Page de garde

# Lab — Introduction à Tailwind CSS

### Découverte et utilisation des classes utilitaires

- Apprenant : Ayoub Amaghouch
- Encadrant : Fouad Essarraj

---

<!-- _class: light -->

## Exemple — Slide 2 : Plan

1. Présentation de Tailwind CSS.
2. Technologies et outils utilisés.
3. Définitions essentielles.
4. Problème et besoin.
5. Installation et configuration.
6. Création d'une interface.
7. Résultat et conclusion.

---

## Exemple — Slide 3 : Stack technique

<div class="grid-2">
<div class="card">

### HTML5

Structure de la page web.

### Tailwind CSS

Mise en forme avec des classes utilitaires.

</div>
<div class="card">

### Visual Studio Code

Édition du code source.

### Navigateur web

Affichage et test du résultat.

</div>
</div>

---

<!-- _class: light -->

## Exemple — Slide 4 : Définitions

| Notion | Définition |
|---|---|
| CSS | Langage utilisé pour styliser les pages web. |
| Framework CSS | Ensemble d'outils facilitant la création des styles. |
| Tailwind CSS | Framework CSS basé sur des classes utilitaires. |
| Classe utilitaire | Classe qui applique une propriété de style précise. |
| Responsive Design | Adaptation de l'interface aux différentes tailles d'écran. |

---

## Exemple — Slide 5 : Problème et besoin

### Problème

La création d'une interface web nécessite souvent l'écriture de nombreuses règles CSS.

### Difficultés

- Répétition des règles CSS.
- Temps de développement.
- Gestion des styles.
- Adaptation aux écrans mobiles.

### Besoin

Utiliser une approche qui facilite la création et l'organisation des interfaces web.

---

<!-- _class: light -->

## Exemple — Slide 6 : Solution et pratique

### Étape 1 — Préparer le projet

Créer un fichier `index.html` et configurer Tailwind CSS selon la méthode choisie.

### Étape 2 — Ajouter une interface

```html
<div class="bg-indigo-600 p-6 rounded-xl">
  <h1 class="text-white text-2xl font-bold">
    Bienvenue !
  </h1>

  <p class="text-indigo-100 mt-2">
    Mon premier exemple avec Tailwind CSS.
  </p>
</div>
```

### Étape 3 — Tester

- Ouvrir la page dans un navigateur.
- Vérifier les couleurs et les espacements.
- Tester l'affichage sur différentes tailles d'écran.

---

## Exemple — Slide 7 : Résultats et conclusion

### Résultat obtenu

Une interface simple avec :

- Un arrière-plan coloré.
- Un titre blanc.
- Un espacement intérieur.
- Des coins arrondis.

### Compétences acquises

- Comprendre le principe des classes utilitaires.
- Appliquer des styles directement dans le HTML.
- Créer une première interface avec Tailwind CSS.
- Tester le résultat dans un navigateur.

### Conclusion

Ce Lab permet de découvrir les bases de Tailwind CSS et de comprendre comment l'utiliser dans un projet web.

---

<!-- _class: lead -->

# Merci pour votre attention !

## Questions ?
