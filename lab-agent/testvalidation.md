
# Protocole de Test et de Validation des Skills

## Objectif

Ce document définit une procédure standardisée pour tester, valider et évaluer les Skills et les prompts développés pour Antigravity et GitHub Copilot dans Visual Studio Code.

L'objectif est de vérifier leur disponibilité, leur fonctionnement, leur conformité aux exigences et leur utilité dans la réalisation de tâches techniques.

---

## 1. Vue d'Ensemble des Skills

| Skill | Emplacement Antigravity | Emplacement Copilot (VS Code) | Objectif |
|:---|:---|:---|:---|
| `task-structuring` | `.agents/skills/task-structuring/SKILL.md` | `.github/prompts/task-structuring.prompt.md` | Décomposer et structurer les tâches avec des dépendances, des critères d'acceptation et une Definition of Done. |
| `task-prompt` | À configurer si le format est compatible | `.github/prompts/task-prompt.prompt.md` | Générer un prompt d'exécution précis selon la méthode C-O-C-R. |
| `marp-lab-presentation` | `.agents/skills/marp-lab-presentation/SKILL.md` | `.github/prompts/marp-lab-presentation.prompt.md` | Produire une présentation Marp standardisée et autonome. |

Les règles communes de GitHub Copilot sont définies dans :

`.github/copilot-instructions.md`

**Important :** Vérifier les chemins, les formats et les mécanismes de chargement dans la documentation de chaque outil. La présence d'un fichier ne garantit pas automatiquement que le Skill ou le prompt est chargé.

---

## 2. Conditions Préalables

Avant de commencer les tests :

- [ ] Le projet est ouvert dans l'environnement concerné.
- [ ] Les fichiers des Skills et des prompts existent.
- [ ] Les noms et les chemins des fichiers sont corrects.
- [ ] Les instructions sont complètes et lisibles.
- [ ] Les outils et extensions nécessaires sont disponibles.
- [ ] Les scénarios de test sont préparés.
- [ ] Les résultats précédents ne sont pas présentés comme des résultats de nouveaux tests.

### Statuts de validation

| Statut | Signification |
|:---|:---|
| `Not Tested` | Le test n'a pas encore été exécuté. |
| `Passed` | Le résultat respecte les critères de validation. |
| `Failed` | Un ou plusieurs critères obligatoires ne sont pas respectés. |
| `Blocked` | Le test ne peut pas être exécuté à cause d'un problème externe ou d'une configuration manquante. |

---

## 3. Procédure de Test dans Antigravity

### Test A : Skill `task-structuring`

**Prompt à soumettre :**

> Je dois développer un module de gestion des utilisateurs en Node.js. Le module doit permettre la création, la consultation, la modification et la suppression des utilisateurs, avec validation des entrées et hachage sécurisé des mots de passe. Utilise le Skill `task-structuring` pour décomposer cette tâche avant toute implémentation.

**Critères de validation :**

- [ ] Un objectif principal est clairement défini.
- [ ] Les éléments In-Scope et Out-of-Scope sont précisés.
- [ ] Les prérequis et les dépendances sont identifiés.
- [ ] Un tableau récapitulatif présente les sous-tâches T1, T2, T3, etc.
- [ ] Chaque sous-tâche possède une description et des critères d'acceptation.
- [ ] Les critères suivent le format Given-When-Then.
- [ ] Une checklist Definition of Done est fournie.
- [ ] Aucun détail technique inconnu n'est présenté comme un fait confirmé.

**Résultat attendu :** un plan de travail structuré, compréhensible et vérifiable, sans implémentation prématurée.

### Test B : Skill `marp-lab-presentation`

**Prompt à soumettre :**

> Utilise le Skill `marp-lab-presentation` pour préparer une présentation Marp sur un laboratoire de débogage JavaScript. Respecte l'architecture obligatoire des cinq premières diapositives. Si les erreurs réellement rencontrées ne sont pas fournies, signale cette absence et n'invente pas de résultats.

**Critères de validation :**

- [ ] Un fichier unique nommé `lab-<topic>.md` est produit.
- [ ] La première diapositive contient uniquement le titre du laboratoire.
- [ ] La deuxième diapositive présente le plan exact.
- [ ] La troisième diapositive présente l'introduction.
- [ ] La quatrième diapositive présente les problèmes réels ou indique qu'aucun problème n'a été documenté.
- [ ] La cinquième diapositive présente les solutions ou les mesures mises en œuvre.
- [ ] Les diapositives suivantes présentent des exemples pertinents.
- [ ] Tous les blocs de code indiquent leur langage.
- [ ] Les tableaux Markdown utilisent des alignements explicites.
- [ ] Le style sombre et clair est appliqué de manière cohérente.
- [ ] Le frontmatter YAML et les séparateurs Marp sont correctement structurés.
- [ ] Les résultats des tests ne sont pas inventés.

**Résultat attendu :** un fichier Markdown autonome, cohérent et prêt à être prévisualisé avec Marp.

### Test C : Skill `task-prompt`

**Prompt à soumettre :**

> Utilise le Skill `task-prompt` pour transformer le besoin suivant en un prompt d'exécution : sécuriser une API REST Express avec validation des entrées, authentification JWT et gestion des erreurs.

**Critères de validation :**

- [ ] Le contexte précise le rôle et l'environnement connus.
- [ ] L'objectif correspond à une mission principale claire.
- [ ] Les éléments In-Scope et Out-of-Scope sont distingués.
- [ ] Les contraintes techniques sont explicites.
- [ ] Les livrables attendus sont définis.
- [ ] Les critères Given-When-Then sont présents.
- [ ] La Definition of Done est vérifiable.
- [ ] Le prompt final est complet et prêt à être réutilisé.
- [ ] L'agent génère le prompt sans exécuter la tâche technique elle-même.

**Résultat attendu :** un prompt d'exécution précis, structuré selon la méthode C-O-C-R.

---

## 4. Procédure de Test dans GitHub Copilot (VS Code)

### Méthode 1 : Instructions générales du projet

1. Ouvrir le projet dans Visual Studio Code.
2. Ouvrir GitHub Copilot Chat.
3. Vérifier que `.github/copilot-instructions.md` est pris en compte.
4. Soumettre la demande suivante :

> @workspace Structure la tâche suivante en respectant les instructions du projet : développer un système de panier d'achat avec ajout, suppression, modification des quantités et stockage local. Présente les dépendances, les sous-tâches, les critères Given-When-Then et la Definition of Done. Ne commence pas l'implémentation.

**Critères de validation :**

- [ ] Les instructions du projet sont appliquées.
- [ ] La tâche est décomposée de manière logique.
- [ ] Les dépendances sont identifiées.
- [ ] Les critères d'acceptation sont vérifiables.
- [ ] Aucune implémentation non demandée n'est réalisée.

### Méthode 2 : Prompts réutilisables

Dans Copilot Chat, sélectionner le prompt depuis l'interface prévue par la version de VS Code utilisée, ou le référencer selon les mécanismes pris en charge.

#### Test du prompt `task-structuring`

Demande :

> Applique le prompt `task-structuring.prompt.md` au sujet suivant : création d'un CRUD en PHP avec PDO et validation des données.

Résultat attendu : une tâche structurée avec périmètre, dépendances, sous-tâches, critères d'acceptation et Definition of Done.

#### Test du prompt `task-prompt`

Demande :

> Applique le prompt `task-prompt.prompt.md` pour formaliser la sécurisation d'une API REST Express avec JWT.

Résultat attendu : un prompt complet suivant la méthode C-O-C-R.

#### Test du prompt `marp-lab-presentation`

Demande :

> Applique le prompt `marp-lab-presentation.prompt.md` pour générer une présentation Marp sur un laboratoire CRUD PHP/PDO. N'invente pas les erreurs rencontrées ni les résultats des tests.

Résultat attendu : un fichier `lab-<topic>.md` respectant l'architecture et les règles de présentation définies.

**Remarque :** les syntaxes de sélection des prompts peuvent varier selon la version de VS Code. Vérifier la méthode disponible dans l'interface avant de conclure que le prompt ne fonctionne pas.

---

## 5. Tests de Robustesse

Ces tests vérifient que les Skills s'adaptent à différents niveaux de complexité.

### Test 1 : Tâche complexe

**Entrée :** développer un système d'authentification complet avec inscription, connexion, déconnexion et gestion des rôles.

**Résultat attendu :** une décomposition cohérente avec des dépendances et des critères d'acceptation.

### Test 2 : Informations incomplètes

**Entrée :** créer une application de gestion des utilisateurs sans préciser la base de données ni le framework.

**Résultat attendu :** l'agent signale les informations manquantes ou formule des hypothèses clairement identifiées.

### Test 3 : Tâche simple

**Entrée :** corriger une faute de frappe dans un titre HTML.

**Résultat attendu :** l'agent évite de créer un plan excessivement détaillé pour une modification triviale.

### Test 4 : Résultats non vérifiés

**Entrée :** produire une présentation d'un laboratoire sans fournir les résultats d'exécution.

**Résultat attendu :** les résultats restent indiqués comme non vérifiés. Aucune réussite n'est inventée.

---

## 6. Matrice de Suivi des Tests

Compléter ce tableau après l'exécution réelle des tests.

| Skill | Environnement | Chargement vérifié | Structure conforme | Résultat | Observations |
|:---|:---|:---:|:---:|:---|:---|
| `task-structuring` | Antigravity | Not Tested | Not Tested | Not Tested | À compléter |
| `task-structuring` | Copilot VS Code | Not Tested | Not Tested | Not Tested | À compléter |
| `task-prompt` | Antigravity | À vérifier | Not Tested | Not Tested | Compatibilité à confirmer |
| `task-prompt` | Copilot VS Code | Not Tested | Not Tested | Not Tested | À compléter |
| `marp-lab-presentation` | Antigravity | Not Tested | Not Tested | Not Tested | À compléter |
| `marp-lab-presentation` | Copilot VS Code | Not Tested | Not Tested | Not Tested | À compléter |

---

## 7. Analyse des Résultats

Après chaque test :

1. Comparer le résultat obtenu aux critères de validation.
2. Identifier les critères respectés et non respectés.
3. Relever les erreurs de structure, les omissions et les ambiguïtés.
4. Modifier le Skill ou le prompt si nécessaire.
5. Relancer le même test après modification.
6. Enregistrer les résultats avant et après correction.

Ne pas déclarer un Skill validé uniquement parce qu'un fichier existe ou que l'agent a généré une réponse.

---

## 8. Critères de Validation Finale

Un Skill ou un prompt peut être considéré comme validé pour un environnement lorsque :

- [ ] Son chargement a été vérifié.
- [ ] Le scénario de test a été exécuté.
- [ ] Les critères obligatoires ont été respectés.
- [ ] Le résultat produit a été inspecté.
- [ ] Les erreurs détectées ont été corrigées ou documentées.
- [ ] Le test a été répété après toute modification importante.
- [ ] Les preuves et observations ont été enregistrées.

La validation doit être effectuée séparément dans Antigravity et GitHub Copilot.

---

## 9. Conclusion

Ce protocole fournit une méthode reproductible pour évaluer la fiabilité, la conformité et l'utilité des Skills et des prompts développés.

Les résultats finaux doivent refléter les tests réellement exécutés dans chaque environnement. Toute incompatibilité, limitation ou anomalie doit être documentée afin de faciliter les corrections et les améliorations futures.
