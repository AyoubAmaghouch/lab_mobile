---
marp: true
theme: default
paginate: true
size: 16:9
title: LAB — PRODUCT BACKLOG
description: Préparer le Product Backlog du Blog des Lauréats à partir des besoins utilisateurs
style: |
  section {
    font-family: "Aptos", "Arial", sans-serif;
    padding: 46px 58px;
    color: #f4f7fb;
    background: #10243a;
    font-size: 22px;
  }
  h1, h2, h3 {
    color: #ffd447;
  }
  h1 {
    font-size: 38px;
    margin-bottom: 20px;
  }
  h2 {
    font-size: 30px;
  }
  strong {
    color: #ffd447;
  }
  section.light {
    color: #172b3f;
    background: #f4f7fb;
  }
  section.light h1, section.light h2, section.light h3 {
    color: #124a70;
  }
  section.light strong {
    color: #124a70;
  }
  section.title {
    justify-content: center;
    text-align: center;
    background: #081827;
  }
  section.title h1 {
    color: #ffd447;
    font-size: 48px;
  }
  section.title .logos {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 34px;
    margin-bottom: 24px;
  }
  section.title .logos img {
    height: 96px;
    width: auto;
    object-fit: contain;
  }
  section.title p {
    margin: 8px 0;
  }
  .cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
  }
  .cards > div {
    padding: 16px;
    border-left: 5px solid #ffd447;
    border-radius: 8px;
    background: rgba(255,255,255,0.08);
  }
  .light .cards > div {
    background: #e5edf4;
  }
  section.title .logos img[alt="Logo Solicode Tanger"] {
    width: 240px;
    height: 96px;
    object-fit: cover;
    object-position: center 50%;
  }
  section img {
    max-height: 240px;
    object-fit: contain;
  }
  table {
    width: 100%;
    font-size: 19px;
  }
  th {
    color: #ffd447;
  }
  section.light th {
    color: #124a70;
  }
  code {
    color: #124a70;
  }
---

<!-- _class: title -->

<div class="logos">
  <img src="images/ofppt.png" alt="Logo OFPPT">
  <img src="images/solicode.png" alt="Logo Solicode Tanger">
</div>

# LAB — PRODUCT BACKLOG

## Blog des Lauréats

**Apprenant :*Ayoub Amaghouch*  &nbsp; · &nbsp; **Encadrant :*ES-Sarraj Fouad* 

---

<!-- _class: light -->

## PLAN DE PRÉSENTATION

1. **Introduction & Stack Technique** — contexte et périmètre du projet
2. **Définitions** — notions clés du Product Backlog
3. **Problème** — comprendre les besoins réels des utilisateurs
4. **Solution** — démarche Design Thinking et backlog à prioriser

---

## 01 — INTRODUCTION & STACK TECHNIQUE

### Blog des Lauréats

Une plateforme web où les lauréats peuvent partager leurs expériences, leurs connaissances et leurs conseils avec les étudiants.

- **Objectif :** préparer les fonctionnalités à développer à partir des besoins des utilisateurs.
- **Acteurs :** administrateur, lauréat (auteur) et visiteur.
- **Périmètre du lab :** analyser les besoins, formuler des User Stories et construire un Product Backlog.
- **Stack technique :** non précisée dans le README du lab; elle sera définie pendant la conception technique.

---

<!-- _class: light -->

## 02 — DÉFINITIONS

| Notion | Définition |
|:---|:---|
| **Product Backlog** | Liste ordonnée des fonctionnalités, besoins et améliorations d’un produit. |
| **User Story** | Besoin formulé du point de vue d’un utilisateur : « En tant que…, je veux…, afin de… ». |
| **Priorisation** | Classement des éléments selon leur valeur, leur urgence et les objectifs du produit. |
| **Prototype** | Représentation simple d’une solution, utilisée pour la présenter et recueillir des retours. |
| **Design Thinking** | Démarche centrée sur les utilisateurs pour comprendre un problème et explorer des solutions. |

---

## 03 — PROBLÈME

### Comment éviter de développer des fonctionnalités qui ne répondent pas aux attentes ?

Au démarrage du Blog des Lauréats, les besoins des visiteurs, des auteurs et de l’administrateur doivent être compris avant de choisir les fonctionnalités.

- Les attentes des utilisateurs peuvent être différentes.
- Une idée de fonctionnalité n’est pas encore un besoin validé.
- Sans organisation ni priorité, le backlog risque de devenir une simple liste de demandes.

**Enjeu du lab :** construire un backlog pertinent, fondé sur les besoins utilisateurs plutôt que sur des suppositions.

---

<!-- _class: light -->

## 04 — SOLUTION : PARTIR DES UTILISATEURS

### Une démarche progressive de Design Thinking

<div class="cards">
<div><strong>1 · Comprendre</strong><br>Identifier les acteurs et recueillir leurs attentes.</div>
<div><strong>2 · Définir</strong><br>Formaliser les besoins et les difficultés observés.</div>
<div><strong>3 · Imaginer</strong><br>Proposer des réponses possibles au problème prioritaire.</div>
<div><strong>4 · Prototyper</strong><br>Représenter les solutions avec des maquettes simples.</div>
<div><strong>5 · Organiser</strong><br>Transformer les besoins retenus en User Stories.</div>
<div><strong>6 · Prioriser</strong><br>Ordonner les éléments du Product Backlog avec l’équipe.</div>
</div>

---

## LES ACTEURS ET LEURS INTERACTIONS

### Trois rôles dans le système

- **Administrateur** — gère les utilisateurs et les publications.
- **Lauréat / auteur** — rédige et gère ses articles.
- **Visiteur** — consulte les articles publiés.

### Du besoin à la fonctionnalité

| Acteur | Besoin du périmètre |
|:---|:---|
| Administrateur | Gérer les utilisateurs et les publications |
| Lauréat | Rédiger et gérer ses articles |
| Visiteur | Consulter les articles publiés |

*Ces interactions reprennent le diagramme de contexte fourni avec le lab.*

---

<!-- _class: light -->

## DES BESOINS AUX USER STORIES

### Exemples à confirmer avec les utilisateurs

| Acteur | User Story |
|:---|:---|
| Visiteur | En tant que visiteur, je veux consulter les articles publiés afin de découvrir les expériences des lauréats. |
| Lauréat | En tant que lauréat, je veux rédiger et gérer mes articles afin de partager mes connaissances. |
| Administrateur | En tant qu’administrateur, je veux gérer les utilisateurs et les publications afin de maintenir le blog organisé. |

**À retenir :** une User Story décrit un besoin; les échanges avec les utilisateurs servent à la valider et à préciser ses critères d’acceptation.

---

## ORGANISER LE PRODUCT BACKLOG

### Un backlog clair et évolutif

| Ordre | Élément | Priorité |
|:---:|:---|:---:|
| À définir | Consulter les articles publiés | À arbitrer |
| À définir | Rédiger et gérer ses articles | À arbitrer |
| À définir | Gérer les utilisateurs et les publications | À arbitrer |

- Découper les besoins en éléments compréhensibles et discutables.
- Évaluer leur valeur pour les utilisateurs et les objectifs du projet.
- Définir les priorités avec les parties prenantes; aucun ordre n’est fourni dans le README.

---

<!-- _class: light -->

## LIVRABLE ATTENDU

### Un backlog prêt à guider le premier Sprint

- Diagramme de contexte des acteurs et de leurs interactions.
- Résultats de l’activité d’empathie et besoins formalisés.
- Problèmes prioritaires et solutions proposées.
- Maquettes de prototypes.
- User Stories validées et Product Backlog priorisé.

**Résultat visé :** une base de travail structurée pour préparer le lancement du premier Sprint Scrum.
