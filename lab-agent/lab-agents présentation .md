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

# Architecture des Agents et Skills (.agents)

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Périmètre & Rôle du dossier `.agents` :**
  - Racine de personnalisation locale de l'espace de travail (*Workspace Customization Root*).
  - Définition déclarative de compétences modulaires (*Skills*) chargées à la demande par l'agent IA.
- **Technologies & Compétences Clés :**
  - **`task-structuring`** : Cadre méthodologique de cadrage, décomposition atomique INVEST et critères de validation `Given-When-Then`.
  - **`marp-lab-presentation`** : Standardisation des livrables techniques sous forme de présentations Marp autonomes en 5 diapositives maîtresses.
  - **Intégration croisée** : Alignement transparent avec GitHub Copilot (`.github/prompts/` et `.github/copilot-instructions.md`).

---

<!-- _class: light -->

## 2. Problems Encountered

- **Dérive de périmètre & instructions floues :**
  - Tâches IA abordées sans délimitation stricte (absence de frontière *In-Scope* vs *Out-of-Scope*).
  - Complexité mal estimée menant à des blocs de code monolithiques difficiles à tester et valider.
- **Hétérogénéité des livrables de laboratoire :**
  - Formats de présentation dispersés, métadonnées superflues polluant la page de garde, absence de rythme visuel.
  - Affirmations de réussite de tests sans éléments de preuve vérifiables.
- **Fragmentation multi-outils :**
  - Divergence entre l'environnement Antigravity (fichiers `SKILL.md`) et VS Code Copilot (`.prompt.md`).

---

## 3. Solutions Implemented

- **Architecture de personnalisation standardisée `.agents/` :**
  - Déploiement de dossiers `skills/<skill_name>/SKILL.md` avec frontmatter YAML normalisé (`name`, `description`).
- **Gouvernance de cadrage technique (`task-structuring`) :**
  - Imposition d'un processus en 5 étapes : Cadrage, Dépendances, Découpage INVEST, Critères Given-When-Then, Definition of Done.
- **Architecture de présentation Marp figée (`marp-lab-presentation`) :**
  - Règle stricte des 5 premières diapositives : Titre seul > Plan invariant > Introduction > Problèmes > Solutions.
  - Alternance visuelle automatique Sombre / Clair (`<!-- _class: light -->`) et livrable 100% autonome en un seul fichier `lab-<topic>.md`.

---

<!-- _class: light -->

## Structure du Répertoire `.agents`

```bash
c:\Lab\lab-agent\.agents/
└── skills/
    ├── task-structuring/
    │   └── SKILL.md             # Guide de décomposition et cadrage de tâches
    └── marp-lab-presentation/
        └── SKILL.md             # Standard de génération de slides Marp
```

### Rôle des Composants

- **`skills/`** : Répertoire accueillant les compétences activables par les agents de codage.
- **`SKILL.md`** : Document de référence contenant les consignes opérationnelles, les templates, les garde-fous et les protocoles de test.

---

## Fonctionnement du Skill `task-structuring`

```markdown
# [Titre de la Tâche]
## 1. Contexte & Objectifs (In-Scope / Out-of-Scope / Contraintes)
## 2. Dépendances & Prérequis (Bloquants / Stratégie séquentielle ou parallèle)
## 3. Décomposition Atomique (Tableau INVEST : T1, T2, T3)
## 4. Tâches Détaillées & Critères Given-When-Then
   - Given [contexte initial], When [action], Then [résultat vérifiable]
## 5. Definition of Done (DoD)
   - [ ] Spécifications respectées
   - [ ] Preuves de validation réelles fournies
```

- Garantit qu'aucune ligne de code n'est produite avant la validation du périmètre et des critères de succès.

---

<!-- _class: light -->

## Fonctionnement du Skill `marp-lab-presentation`

```yaml
---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section { background-color: #0f172a; color: #f8fafc; ... }
  section.light { background-color: #f8fafc; color: #0f172a; ... }
---
```

- **Invariant structurel :** Diapositive 1 (Titre du lab uniquement, aucun auteur) $\rightarrow$ Diapositive 2 (Plan imposé) $\rightarrow$ Diapositive 3 (Intro) $\rightarrow$ Diapositive 4 (Problèmes réels) $\rightarrow$ Diapositive 5 (Solutions).
- **Intégration complète :** Tous les exemples de code et schémas sont embarqués sans dépendance externe.

---

## Matrice de Correspondance Multi-Environnements

| Rôle & Fonctionnalité | Emplacement Antigravity | Équivalent VS Code Copilot | Statut & Utilisation |
|:---|:---|:---|:---:|
| Décomposition de tâches | `.agents/skills/task-structuring/SKILL.md` | `.github/prompts/task-structuring.prompt.md` | Opérationnel |
| Présentations techniques Marp | `.agents/skills/marp-lab-presentation/SKILL.md` | `.github/prompts/marp-lab-presentation.prompt.md` | Opérationnel |
| Méthode C-O-C-R | *(Extension possible dans `.agents/skills/`)* | `.github/prompts/task-prompt.prompt.md` | Configuré Copilot |
| Instructions globales | Configuration agent / `.agents/` | `.github/copilot-instructions.md` | Actif |

---

<!-- _class: light -->

## Summary & Verification Matrix

| Objectif de Validation | Statut | Preuve de Vérification |
|:---|:---:|:---|
| Découverte de `.agents` | Conforme | Arborescence inspectée (`task-structuring`, `marp-lab-presentation`) |
| Respect du standard Marp | Conforme | Fichier `lab-agents.md` généré selon l'architecture en 5 slides |
| Alternance visuelle Sombre/Clair | Conforme | Classes `<!-- _class: light -->` réparties harmonieusement |
| Coloration syntaxique & Tableaux | Conforme | Balises `bash`, `markdown`, `yaml` et alignements explicites |
| Alignement avec `testvalidation.md` | Conforme | Protocoles de tests documentés et reproductibles |
