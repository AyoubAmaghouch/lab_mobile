---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700&family=Fira+Code:wght@400;500&display=swap');

  section {
    background-color: #0f172a;
    color: #f8fafc;
    font-family: 'Inter', system-ui, sans-serif;
    padding: 40px 60px;
  }

  h1, h2, h3 {
    font-family: 'Anton', 'Impact', sans-serif;
    color: #38bdf8;
    letter-spacing: 0.5px;
  }

  section.light {
    background-color: #f8fafc;
    color: #0f172a;
  }

  section.light h1,
  section.light h2,
  section.light h3 {
    color: #0284c7;
  }

  pre, code {
    background-color: #1e293b;
    color: #e2e8f0;
    border-radius: 6px;
    font-family: 'Fira Code', 'Consolas', monospace;
  }

  section.light pre,
  section.light code {
    background-color: #e2e8f0;
    color: #0f172a;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  th {
    background-color: #0284c7;
    color: #ffffff;
    padding: 10px;
  }

  td {
    padding: 8px;
    border-bottom: 1px solid #334155;
  }

  section.light td {
    border-bottom: 1px solid #cbd5e1;
  }
---

# Lab Erreurs JavaScript

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif & Périmètre :**
  - Comprendre et interpréter les signaux d'interruption émis par le moteur d'exécution (V8).
  - Identifier et catégoriser les 3 familles d'erreurs majeures : `SyntaxError`, `ReferenceError`, `TypeError`.
  - Décoder méthodiquement une stack trace pour localiser avec précision la ligne fautive.
- **Outils & Notions Clés :**
  - **Environnements d'exécution :** Node.js CLI (`node script.js`) et DevTools navigateur (F12 > Console).
  - **Édition & Analyse statique :** Détection d'erreurs en temps réel dans VS Code.
  - **Notions fondamentales :** Stack Trace, call stack, chaînage optionnel (`?.`), coalescence des nuls (`??`).

---

<!-- _class: light -->

## 2. Problems Encountered

- **`TypeError` (Opération illégale sur type incompatible) :**
  - Tentative de lecture d'une propriété ou appel de fonction sur une valeur `null` ou `undefined`.
  - Exemple fréquent : `TypeError: Cannot read properties of undefined (reading 'nom')`.
- **`ReferenceError` (Variable inaccessible ou non déclarée) :**
  - Tentative d'accès à un identifiant hors de portée lexicale ou non déclaré dans le scope.
- **`SyntaxError` (Violation grammaticale du langage) :**
  - Erreur de ponctuation ou mot-clé mal placé, bloquant l'exécution dès la phase de parsing.
- **Difficulté de lecture de la Stack Trace :**
  - Complexité pour isoler la ligne applicative pertinente au milieu des frames de modules externes.

---

## 3. Solutions Implemented

- **Protocole de décodage de la Stack Trace :**
  - **Ligne 1 :** Extraction du type de l'erreur et description précise de l'opération fautive.
  - **Lignes suivantes :** Repérage de la première trame du code utilisateur (`fichier.js:ligne:colonne`).
- **Sécurisation défensive contre les `TypeError` :**
  - Utilisation systématique du chaînage optionnel (`?.`) et de l'opérateur de coalescence nulle (`??`).
- **Gestion stricte de la portée lexicale (`ReferenceError`) :**
  - Déclaration explicite avec `const` et `let` dans le bloc englobant approprié.
- **Détection statique en amont (`SyntaxError`) :**
  - Validation du code dans l'éditeur (VS Code) avant tout lancement d'exécution.

---

<!-- _class: light -->

## Pratique : Anatomie d'une Stack Trace

```bash
TypeError: Cannot read properties of undefined (reading 'nom')
    at afficherProfil (app.js:5:22)
    at Object.<anonymous> (app.js:9:1)
```

- **Analyse séquentielle :**
  - **Ligne 1 :** Type `TypeError` + cause (`Cannot read properties of undefined`).
  - **Ligne 2 :** Fonction `afficherProfil`, fichier `app.js`, à la **ligne 5, colonne 22**.
  - **Ligne 3 :** Origine de l'appel initial dans le script à la **ligne 9**.

---

## Pratique : Résolution d'un `TypeError`

```javascript
// Code défaillant :
const utilisateur = null;
// Déclenche : TypeError: Cannot read properties of null (reading 'nom')
console.log(utilisateur.nom);

// Solution robuste (Chaînage optionnel & Coalescence nulle) :
const nomAffiche = utilisateur?.nom ?? "Invité";
console.log(nomAffiche); // Affiche "Invité" sans interruption du script
```

- L'opérateur `?.` interrompt immédiatement la traversée si la référence est `null` ou `undefined`.
- L'opérateur `??` fournit une valeur par défaut propre et déterministe.

---

<!-- _class: light -->

## Pratique : Résolution d'un `ReferenceError`

```javascript
// Code défaillant (Variable hors de portée) :
function initialiserConfiguration() {
  const version = "1.0.0";
}
console.log(version); // ReferenceError: version is not defined

// Solution : Déplacer ou retourner la variable dans le scope appelant
function obtenirConfiguration() {
  const version = "1.0.0";
  return { version };
}
const config = obtenirConfiguration();
console.log(config.version); // "1.0.0"
```

- Les déclarations avec `const` et `let` respectent strictement la portée de bloc.

---

## Matrice Comparative des Erreurs JavaScript

| Type d'Erreur | Moment de Détection | Cause Principale | Solution Immédiate |
|:---|:---:|:---|:---|
| **`SyntaxError`** | Parsing (avant exécution) | Ponctuation, accolades ou mots réservés | Détection statique / Linter |
| **`ReferenceError`** | Runtime (à l'exécution) | Identifiant absent ou hors du scope | Déclaration `const`/`let` adaptée |
| **`TypeError`** | Runtime (à l'exécution) | Accès sur `null`/`undefined`, non-fonction | Chaînage optionnel `?.`, gardes |

---

<!-- _class: light -->

## Summary & Verification Matrix

| Objectif du Lab | Statut | Preuve de Vérification |
|:---|:---:|:---|
| Identification `SyntaxError` | Conforme | Validation statique dans l'éditeur et le runtime |
| Résolution `ReferenceError` | Conforme | Encapsulation et retour dans la portée valide |
| Neutralisation `TypeError` | Conforme | Exécution validée avec `?.` et `??` sans exception |
| Conformité Marp | Conforme | Fichier autonome `lab-erreurs-js.md` produit |
