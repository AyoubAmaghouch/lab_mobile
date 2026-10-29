---
marp: true
paginate: true
---

# Lab : Erreurs JavaScript
## Lire, Comprendre et Déboguer les Erreurs JS


---

## 1. Planification
- **Objectifs** :
  - Distinguer les 3 erreurs majeures : `SyntaxError`, `ReferenceError`, `TypeError`.
  - Décoder une stack trace pour localiser la ligne fautive.
  - Appliquer le bon correctif de manière ciblée.
- **Prérequis** : Notions de syntaxe JavaScript et accès à un terminal.
- **Étapes** :
  1. Identifier le type et le message de l'erreur.
  2. Remonter la pile d'appels (stack trace).
  3. Reproduire et corriger le bug.

---

## 2. Introduction
- Une erreur JavaScript est un signal émis par le moteur d'exécution (V8) pour expliquer l'interruption du script.
- Elle indique la cause exacte de l'échec ainsi que son emplacement précis dans le code source.
- Savoir la décoder rapidement réduit considérablement le temps de débogage.

---

## 3. Définitions
- **SyntaxError** : Violation des règles grammaticales du langage (détectée avant l'exécution).
- **ReferenceError** : Tentative d'accès à une variable non déclarée ou hors de portée.
- **TypeError** : Opération impossible sur le type fourni (ex: appel d'un non-fonction, accès à un champ de `null`/`undefined`).
- **Stack Trace** : Liste ordonnée des appels de fonctions menant au point de rupture.

---

## 4. Outils
- **Node.js** : Exécution rapide de scripts en terminal (`node script.js`).
- **DevTools Navigateur (F12 > Console)** : Inspection directe des erreurs dans le navigateur.
- **VS Code** : Détection statique des erreurs de syntaxe via l'éditeur.

---

## 5. Partie théorique : Anatomie d'une erreur
Structure type d'un message d'erreur dans la console :

```bash
TypeError: Cannot read properties of undefined (reading 'nom')
    at afficherProfil (app.js:5:22)
    at Object.<anonymous> (app.js:9:1)
```

- **Ligne 1** : Type d'erreur + description de l'opération impossible.
- **Lignes suivantes** : Fonction fautive (`afficherProfil`) + fichier et numéro de ligne (`app.js:5`).

---

## 5. Partie théorique : Exemple pratique
Cas d'erreur classique (`TypeError`) et son correctif immédiat :

```javascript
// Code fautif :
const utilisateur = null;
console.log(utilisateur.nom); // TypeError: Cannot read properties of null

// Correctif (chaînage optionnel et valeur par défaut) :
console.log(utilisateur?.nom ?? "Invité"); // Affiche : "Invité"
```

- **Règle clé** : Toujours sécuriser l'accès aux propriétés d'un objet potentiellement `null` ou `undefined`.

---

## 6. Conclusion
- **Compétence acquise** : Lecture autonome des messages d'erreur et localisation instantanée de la source du dysfonctionnement.
- **Livrable attendu** : Fichier unique `presentation.md` servant de référence pour les sessions de débogage.