---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');

  section {
    background: #d8808a;
    color: #ffe0e3;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
    padding: 50px 60px;
    text-transform: uppercase;
    justify-content: flex-start;
  }

  h1, h2 {
    font-family: 'Anton', Impact, 'Arial Narrow', sans-serif;
    font-weight: 400;
    color: #ffe0e3;
    line-height: 0.98;
    letter-spacing: -1px;
    margin: 0 0 25px 0;
  }

  h1 { font-size: 95px; }
  h2 { font-size: 65px; }

  h3 {
    font-size: 27px;
    margin: 0 0 12px 0;
    color: #e6d9dc;
  }

  p { margin: 0 0 12px 0; }

  section.light {
    background: #ffdde0;
    color: #0629ef;
  }

  section.light h1,
  section.light h2,
  section.light h3 {
    color: #2882f1;
  }

  section.light p,
  section.light li,
  section.light td {
    color: #111;
  }

  section.title {
    justify-content: space-between;
  }

  section.title h1 {
    font-size: 108px;
    margin-top: 8px;
  }

  section.title::before {
    content: "PROMPT\\A ENGINEERING";
    white-space: pre;
    position: absolute;
    right: -15px;
    bottom: 10px;
    font-family: 'Anton', Impact, sans-serif;
    font-size: 145px;
    line-height: 0.85;
    color: #5f0010;
    opacity: 0.65;
    z-index: 0;
  }

  section.title h1,
  section.title .by {
    position: relative;
    z-index: 1;
  }

  .by {
    font-size: 20px;
    text-transform: none;
    margin-top: 20px;
  }

  .by strong {
    font-family: 'Anton', Impact, sans-serif;
    font-weight: 400;
    text-transform: uppercase;
    font-size: 27px;
    display: block;
  }

  ul, ol {
    font-size: 27px;
    line-height: 1.3;
  }

  li { margin-bottom: 9px; }

  code {
    background: rgba(255, 224, 227, 0.13);
    padding: 2px 7px;
    border-radius: 4px;
    text-transform: none;
  }

  section.light code {
    background: rgba(112, 2, 15, 0.09);
  }

  table {
    font-size: 21px;
    width: 100%;
  }

  th {
    background: #70020f;
    color: #ffe0e3;
  }

  td {
    color: #111;
  }

  .subtitle {
    font-size: 24px;
    color: #e6d9dc;
    text-transform: none;
  }

  .small {
    font-size: 20px;
    line-height: 1.3;
    text-transform: none;
  }

  .step {
    font-family: 'Anton', Impact, sans-serif;
    font-size: 30px;
    color: #ffe0e3;
  }

  section.light .step {
    color: #70020f;
  }

  .highlight {
    color: #70020f;
    font-weight: bold;
  }
---

<!-- _class: title -->

# LES BASES DU
# PROMPT
# ENGINEERING

<div class="subtitle">Formation : Apprendre à écrire de bons prompts avec l'intelligence artificielle</div>

<div class="by">
  <strong>ENCADRÉ PAR : FOUAD ESSARRAJ</strong>
  Formation professionnelle
</div>

---

<!-- _class: light -->

## Plan de la présentation

1. Introduction : Qu'est-ce qu'un prompt ?
2. La méthode RTF : écrire un prompt simple.
3. La méthode IPO : organiser un prompt.
4. La méthode CRISPE : améliorer un prompt.
5. Few-Shot Prompting : apprendre par l'exemple.
6. Tester et améliorer un prompt.
7. Utiliser l'IA dans le travail quotidien.
8. Conclusion : les bonnes pratiques.

---

## Introduction

### Qu'est-ce qu'un prompt ?

Un **prompt** est une demande ou une instruction que l'utilisateur écrit pour une intelligence artificielle.

On peut utiliser ChatGPT ou Copilot pour :

- Poser des questions.
- Apprendre une nouvelle notion.
- Rédiger un texte.
- Comprendre un document.
- Programmer et résoudre des erreurs.

**Objectif :** obtenir une réponse claire et adaptée à son besoin.

---

<!-- _class: light -->

## Pourquoi écrire un bon prompt ?

La qualité de la réponse dépend en partie de la qualité de la demande.

### Exemple : deux façons de poser une question

**01 — Demande simple**

« Explique Laravel. »

**02 — Demande précise**

« Explique Laravel à un débutant. Utilise des mots simples et donne un exemple de code. »

### À retenir

Un prompt précis donne davantage de contexte à l'intelligence artificielle.

---

## 01 — La méthode RTF

### Écrire un prompt simple

RTF est une méthode qui permet de structurer une demande avec trois éléments.

| Élément | Question | Explication |
|---|---|---|
| R – Rôle | Qui est l'IA ? | Définir son rôle. |
| T – Tâche | Que doit-elle faire ? | Préciser le travail. |
| F – Format | Comment répondre ? | Définir la présentation. |

### Exemple

« Tu es un formateur Laravel. Explique les migrations Laravel à un débutant. Utilise cinq étapes et un exemple de code. »

---

<!-- _class: light -->

## Comprendre la méthode RTF

### Analyse de l'exemple

<div class="step">R — RÔLE</div>

Tu es un formateur Laravel.

<div class="step">T — TÂCHE</div>

Explique les migrations Laravel à un débutant.

<div class="step">F — FORMAT</div>

Utilise cinq étapes et un exemple de code.

### À retenir

RTF permet de construire rapidement une demande simple, claire et organisée.

---

## 02 — La méthode IPO

### Organiser un prompt

IPO permet de séparer les informations données à l'IA, le travail demandé et le résultat attendu.

| Élément | Signification | Explication |
|---|---|---|
| I – Input | Entrée | Informations fournies à l'IA. |
| P – Process | Traitement | Travail à réaliser. |
| O – Output | Sortie | Résultat attendu. |

### Exemple : les migrations Laravel

**Input :** Je connais PHP, mais je débute avec Laravel.

**Process :** Explique le rôle des migrations et montre comment créer une table.

**Output :** Donne une explication simple avec un exemple de code et un résumé.

---

<!-- _class: light -->

## Comprendre la méthode IPO

### Les trois étapes

<div class="step">01 — INPUT</div>

Les informations et le contexte fournis à l'IA.

<div class="step">02 — PROCESS</div>

Les instructions et les opérations que l'IA doit effectuer.

<div class="step">03 — OUTPUT</div>

Le format et le résultat que l'utilisateur souhaite recevoir.

### À retenir

IPO permet de bien organiser une demande avant de l'envoyer à l'IA.

---

## 03 — La méthode CRISPE

### Améliorer un prompt

CRISPE est une méthode qui permet de donner davantage de détails à l'intelligence artificielle.

| Lettre | Signification | Explication |
|---|---|---|
| C – Capacity | Compétence | Définir les capacités attendues. |
| R – Role | Rôle | Définir le rôle de l'IA. |
| I – Insight | Contexte | Donner les informations utiles. |
| S – Statement | Instruction | Préciser le travail à réaliser. |
| P – Personality | Style | Définir le ton de la réponse. |
| E – Experiment | Variantes | Demander plusieurs idées ou exemples. |

---

<!-- _class: light -->

## Exemple pratique : CRISPE

### Préparer un exercice Laravel

**C — Capacity :** Tu maîtrises Laravel et ses fonctionnalités.

**R — Role :** Tu es un formateur en développement web.

**I — Insight :** Les apprenants connaissent PHP et débutent avec Laravel.

**S — Statement :** Prépare un exercice sur les migrations.

**P — Personality :** Utilise des phrases courtes et des mots simples.

**E — Experiment :** Propose deux exercices de niveaux différents.

### À retenir

CRISPE permet de donner des instructions plus détaillées et d'obtenir une réponse mieux adaptée.

---

## 04 — Few-Shot Prompting

### Donner un exemple à l'IA

Le **Few-Shot Prompting** consiste à donner un ou plusieurs exemples à l'intelligence artificielle avant de lui demander de réaliser une nouvelle tâche.

### Pourquoi utiliser cette méthode ?

- Montrer le résultat souhaité.
- Expliquer une organisation précise.
- Reproduire un style particulier.
- Obtenir des réponses plus cohérentes.

### Exemple

« Voici une ancienne description de tâche dans mon projet Laravel. Rédige une nouvelle description en utilisant la même organisation et le même style. »

---

<!-- _class: light -->

## Exemple de Few-Shot Prompting

### Comment procéder ?

**01 — Fournir un exemple**

Donner à l'IA une ancienne description de tâche.

**02 — Donner une instruction**

Demander de respecter la même organisation.

**03 — Demander un nouveau résultat**

Créer une nouvelle description avec le même style.

### À retenir

Un exemple concret aide l'IA à comprendre ce que vous attendez.

---

## 05 — Tester et améliorer un prompt

### La méthode d'amélioration continue

La première réponse de l'IA n'est pas toujours satisfaisante.

Il faut tester, analyser et améliorer sa demande.

1. **Écrire :** préparer le prompt.
2. **Tester :** envoyer la demande à l'IA.
3. **Lire :** analyser la réponse.
4. **Corriger :** ajouter ou modifier les instructions.
5. **Recommencer :** vérifier le nouveau résultat.

---

<!-- _class: light -->

## Exemple : améliorer une réponse

### Situation

Vous demandez à l'IA d'expliquer une erreur Laravel.

La réponse est trop compliquée.

### Nouveau prompt

« Explique cette erreur avec des mots plus simples. Présente les étapes de résolution et donne un exemple facile. »

### Attention !

Il faut toujours vérifier les informations fournies par l'IA, notamment les réponses techniques et les extraits de code.

---

## 06 — Utiliser l'IA au quotidien

### Quelques applications pratiques

**01 — Pour apprendre**

- Expliquer une notion.
- Comprendre un cours.
- Résumer un document.

**02 — Pour écrire**

- Corriger un texte.
- Corriger les fautes.
- Améliorer une description.

**03 — Pour programmer**

- Expliquer un code.
- Comprendre une erreur.
- Générer un exemple de code.
- Préparer un exercice.

---

<!-- _class: light -->

## Conclusion — Les méthodes à connaître

| Méthode | Objectif |
|---|---|
| RTF | Écrire une demande simple. |
| IPO | Organiser les informations. |
| CRISPE | Donner plus de détails. |
| Few-Shot | Fournir des exemples. |
| Test | Vérifier et améliorer le résultat. |

### Les bonnes pratiques

- Être clair et précis.
- Donner suffisamment de contexte.
- Définir le résultat attendu.
- Utiliser des exemples si nécessaire.
- Vérifier les réponses de l'IA.

---

<!-- _class: title -->

# MERCI
# POUR
# VOTRE
# ATTENTION !

<div class="by">
  <strong>LES BASES DU PROMPT ENGINEERING</strong>
  Formation — Intelligence artificielle
</div>
