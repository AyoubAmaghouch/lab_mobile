# Lab : Présentation du Projet Technique avec Marp

> **Projet Technique :** Gestion des Véhicules V2  
> **Apprenant :** Ayoub Amaghouch  
> **Encadrant :** ES-Sarraj Fouad  
> **Formation :** Développeur Full Stack  
> **Centre :** Solicode Tanger — OFPPT  
> **Fichiers livrables :** [Présentation principale (`presentation.md`)](file:///c:/Lab/lab-Marp/presentation.md) | [Version atelier (`lap-marpV2.md`)](file:///c:/Lab/lab-Marp/lap-marpV2.md) | [Feuille de style (`custom.css`)](file:///c:/Lab/lab-Marp/custom.css)

---

## 1. Contexte & Objectifs

Ce Lab a pour finalité d'apprendre à concevoir une présentation technique professionnelle à l'aide de **Marp** et de **Markdown**, appliquée au projet web **Gestion des Véhicules V2**.

L'application permet d'exécuter les opérations **CRUD** (*Create, Read, Update, Delete*) sur un parc de véhicules, en s'appuyant sur :
- **Frontend :** HTML5, Tailwind CSS, JavaScript.
- **Backend :** API PHP Native.
- **Stockage :** Fichier JSON (`vehicles.json`).

---

## 2. Plan de la Présentation (Conforme aux Exigences)

La présentation est organisée selon les 7 sections demandées :

| N° | Section | Contenu Clé Développé |
| :---: | :--- | :--- |
| **1** | **Page de garde** | Logos OFPPT et Solicode, titre de l'application, nom de l'apprenant (Ayoub Amaghouch) et de l'encadrant (ES-Sarraj Fouad). |
| **2** | **Introduction** | Présentation de l'application web Gestion des Véhicules V2, finalités et objectifs de centralisation. |
| **3** | **Besoin** | Analyse du problème lié à la gestion manuelle (erreurs, perte de temps) et définition du besoin d'un outil digital accessible 24h/24. |
| **4** | **Analyse** | Étude des fonctionnalités CRUD (*Create, Read, Update, Delete*) avec règles de validation et exemples concrets. |
| **5** | **Conception** | Architecture 3 tiers (Frontend ➔ API PHP ➔ JSON) et modèle de données JSON du véhicule. |
| **6** | **Réalisation** | Stack technique, environnement de développement (VS Code, Git, GitHub) et prototype fonctionnel du tableau de bord. |
| **7** | **Conclusion** | Bilan des réalisations, perspectives d'amélioration (recherche dynamique, export PDF/Excel, authentification) et remerciements. |
| **—** | **Annexe Technique** | Récapitulatif pédagogique des techniques Marp et méthodes d'exportation. |

---

## 3. Techniques Marp Pratiquées

### 3.1 Installation & Configuration
- Extension recommandée : **Marp for VS Code**.
- Activation dans l'en-tête du document : `marp: true`.

### 3.2 Directives Marp
- `theme: gaia` : utilisation du thème professionnel sobre.
- `paginate: true` : pagination automatique des diapositives.
- `size: 16:9` : format grand écran moderne.
- `header` / `footer` : personnalisation des mentions de bas et haut de page.
- Directives scopées : `<!-- _class: cover -->`, `<!-- _paginate: false -->`, `<!-- _header: "" -->`.

### 3.3 Mise en forme & Styles CSS Personnalisés
- Création du fichier [`custom.css`](file:///c:/Lab/lab-Marp/custom.css) dédié.
- Classes CSS modulaires : `.card`, `.card-highlight`, `.grid-2`, `.badge`, `.arch-box`, `.prototype-ui`.
- Tableaux comparatifs et blocs de code avec coloration syntaxique (`javascript`, `php`, `json`).

### 3.4 Notes du Présentateur (Speaker Notes)
- Rédigées pour chaque diapositive sous forme de balises `<!-- Note: ... -->`.
- Rédigées en **français simple de niveau A1/A2**, concises et faciles à énoncer à l'oral.
- Accessibles en prévisualisation en appuyant sur la touche **P** (mode présentateur).

### 3.5 Exportation Multi-Formats
Dans VS Code, via le bouton Marp ou la palette de commandes (`Ctrl + Shift + P` ➔ *Marp: Export Slide Deck...*) :
1. **HTML :** Diaporama interactif lisible dans tout navigateur web.
2. **PDF :** Document officiel pour dépôt et archivage.
3. **PowerPoint (PPTX) :** Présentation projetable compatible Microsoft Office.

---

## 4. Grille de Validation

| Critère d'Évaluation | Résultat |
| :--- | :---: |
| Respect du plan en 7 parties | ✅ Conforme |
| Français simple et clair (niveau A1/A2) | ✅ Conforme |
| Utilisation exclusive des technologies réelles du projet | ✅ Conforme |
| Intégration des logos officiels OFPPT et Solicode | ✅ Conforme |
| Présence des notes du présentateur sur chaque diapositive | ✅ Conforme |
| Fichiers `presentation.md` et `custom.css` fournis | ✅ Conforme |

