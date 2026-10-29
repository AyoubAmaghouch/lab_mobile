---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;600;700&display=swap');

  section {
    background: #0d1117;
    color: #e6edf3;
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 24px;
    padding: 50px 70px;
    justify-content: flex-start;
  }

  h1, h2 {
    font-family: 'Anton', Impact, sans-serif;
    letter-spacing: 0.5px;
    margin: 0 0 20px 0;
  }

  h1 { font-size: 74px; color: #58a6ff; line-height: 1.05; }
  h2 { font-size: 48px; color: #58a6ff; border-bottom: 2px solid #30363d; padding-bottom: 10px; }
  h3 { font-size: 26px; color: #79c0ff; margin: 15px 0 8px 0; }

  section.light {
    background: #f6f8fa;
    color: #1f2328;
  }

  section.light h1,
  section.light h2 {
    color: #0969da;
    border-bottom: 2px solid #d0d7de;
  }

  section.light h3 {
    color: #0550ae;
  }

  section.light p,
  section.light li {
    color: #1f2328;
  }

  section.title {
    background: radial-gradient(circle at 85% 15%, #1f6feb 0%, #0d1117 65%);
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  section.title h1 {
    font-size: 86px;
    color: #ffffff;
    line-height: 1;
    margin-bottom: 20px;
  }

  ul, ol {
    line-height: 1.6;
    margin-bottom: 16px;
  }

  li {
    margin-bottom: 10px;
  }

  code {
    background: rgba(110, 118, 129, 0.2);
    color: #f0f6fc;
    padding: 3px 8px;
    border-radius: 6px;
    font-size: 20px;
    font-family: 'Consolas', 'Courier New', monospace;
  }

  section.light code {
    background: rgba(175, 184, 193, 0.25);
    color: #0969da;
  }

  pre {
    background: #161b22;
    border: 1px solid #30363d;
    border-radius: 8px;
    padding: 14px 18px;
    font-size: 18px;
    line-height: 1.35;
    margin: 10px 0;
  }

  section.light pre {
    background: #ffffff;
    border: 1px solid #d0d7de;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
    font-size: 19px;
  }

  th {
    background: #161b22;
    color: #58a6ff;
    padding: 8px 12px;
    border: 1px solid #30363d;
    text-align: left;
  }

  td {
    padding: 8px 12px;
    border: 1px solid #30363d;
  }

  section.light th {
    background: #eaeef2;
    color: #0969da;
    border: 1px solid #d0d7de;
  }

  section.light td {
    border: 1px solid #d0d7de;
  }

  blockquote {
    border-left: 4px solid #58a6ff;
    padding-left: 16px;
    color: #8b949e;
    font-style: italic;
    margin: 12px 0;
  }
---

<!-- _class: title -->

# Découvrir la syntaxe Markdown

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

### Objectif et portée du Lab

- **Découvrir la syntaxe Markdown** pour structurer et mettre en forme efficacement un document.
- **Éléments abordés et pratiqués** :
  - Hiérarchie des titres (`#` à `######`) et gestion des paragraphes
  - Styles de texte (**gras**, *italique*, ~~barré~~, citations `>`)
  - Listes non ordonnées (à puces), ordonnées (numérotées) et tâches (`- [x]`)
  - Liens hypertextes (`[texte](url)`) et intégration d'images (`![alt](url)`)
  - Tableaux structurés avec alignements (`:---`, `:---:`, `---:`)
  - Blocs de code avec coloration syntaxique (`html`, `javascript`, `php`)

---

## Problems Encountered

### Obstacles rencontrés lors de la mise en forme

- **Retours à la ligne ignorés** : Un retour à la ligne simple dans l'éditeur ne crée pas de nouveau paragraphe sans ligne vide ou double espace.
- **Rupture d'affichage des tableaux** : Tableaux non interprétés en cas d'oubli de la ligne séparatrice obligatoire de tirets (`| --- |`).
- **Coloration syntaxique absente** : Blocs de code affichés en texte brut sans le nom du langage spécifié après les triples backticks.
- **Problèmes de liens et images** : Liens cassés ou images non affichées causés par des erreurs dans la syntaxe ou des chemins relatifs erronés.

---

<!-- _class: light -->

## Solutions Implemented

### 01 — Gestion des paragraphes & sauts de ligne
Séparer les paragraphes par une ligne vide ou terminer une ligne par deux espaces pour forcer un saut `<br>`.

### 02 — Structuration des tableaux & alignements
Insérer la ligne de séparation avec les deux-points pour définir l'alignement (`:---` à gauche, `:---:` centré, `---:` à droite).

### 03 — Blocs de code typés
Délimiter le code par trois backticks en déclarant le langage cible (ex: ```` ```javascript ```` ou ```` ```php ````).

### 04 — Normalisation des liens et images
Appliquer la syntaxe stricte `[Intitulé](URL)` pour les liens et `![Description](URL)` pour les images avec texte alternatif.

---

## Exemples Pratiques : Titres & Formatage

```markdown
# Titre Principal (H1)
## Sous-titre (H2)
### Section détaillée (H3)

Texte normal avec du **texte en gras**, du *texte en italique*,
du ~~texte barré~~ ou du ***gras et italique***.

> Une citation en bloc pour mettre en avant une remarque clé.
```

- `#` définit les niveaux de hiérarchie.
- `**` applique le gras, `*` applique l'italique.
- `>` crée un bloc de citation.

---

<!-- _class: light -->

## Exemples Pratiques : Listes & Liens

```markdown
### Liste à puces :
- Frontend : HTML, CSS, JavaScript
- Backend : PHP, Laravel
- Outils : Git, GitHub

### Liste numérotée :
1. Découvrir la syntaxe Markdown
2. Réaliser les exemples pratiques
3. Publier sur GitHub

Lien vers la documentation : [Guide Markdown](https://www.markdownguide.org)
```

---

## Exemples Pratiques : Tableaux & Images

```markdown
![Logo Markdown](https://upload.wikimedia.org/wikipedia/commons/4/48/Markdown-mark.svg)
```

| Élément | Syntaxe Markdown | Rendu |
| :--- | :---: | ---: |
| Titre | `# Titre` | Titre H1 |
| Gras | `**mot**` | **mot** |
| Italique | `*mot*` | *mot* |
| Code en ligne | `` `git commit` `` | Code inline |
| Lien | `[nom](url)` | Lien cliquable |

---

<!-- _class: light -->

## Exemples Pratiques : Blocs de Code

```javascript
// Coloration syntaxique JavaScript
function validerLab(titre) {
  console.log(`Validation du lab : ${titre}`);
  return true;
}
validerLab("Syntaxe Markdown");
```

```php
<?php
// Coloration syntaxique PHP
$competences = ["Titres", "Listes", "Liens", "Images", "Tableaux", "Code"];
foreach ($competences as $competence) {
    echo "Compétence validée : " . $competence . "\n";
}
?>
```