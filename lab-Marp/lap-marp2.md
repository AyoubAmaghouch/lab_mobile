---
marp: true
theme: gaia
paginate: true

style: |
  section {
    background: #f4f7fb;
    color: #243247;
    font-family: Arial, sans-serif;
    padding: 55px;
  }

  h1 {
    color: #123b65;
  }

  h2 {
    color: #087eaf;
  }

  section.cover {
    background: linear-gradient(135deg, #123b65, #087eaf);
    color: white;
    text-align: center;
    justify-content: center;
  }
---

<!-- _class: cover -->

<div style="display:flex; justify-content:space-between;">

<img src="images/ofppt.png" width="130">
<img src="images/solicode.png" width="130">

</div>

# GESTION DES VÉHICULES V2

### Projet Technique

**Réalisé par :** Ayoub Amaghouch

**Encadrant :** ES-Sarraj Fouad

---



## 1. Introduction

Notre projet consiste à développer une application web de gestion des véhicules.

**Objectif :** simplifier et organiser la gestion des véhicules.

---

## 2. Besoin

### Problème

La gestion manuelle des véhicules peut être difficile.

### Solution

Créer une application web pour :

- Organiser les informations.
- Consulter les véhicules.
- Modifier les données.
- Supprimer les véhicules.

---

## 3. Analyse

| Fonctionnalité | Description |
|---|---|
| Ajouter | Enregistrer une voiture |
| Afficher | Voir les voitures |
| Modifier | Changer les informations |
| Supprimer | Retirer une voiture |

---

## 4. Conception

### Architecture du projet

```text
UTILISATEUR
    |
    v
FRONTEND
HTML / Tailwind / JavaScript
    |
    v
API PHP
    |
    v
FICHIER JSON
```

---

## 5. Réalisation

### Technologies utilisées

| Technologie | Rôle |
|---|---|
| HTML | Structure |
| Tailwind CSS | Design |
| JavaScript | Interactivité |
| PHP | Backend |
| JSON | Stockage |
---
### Exemple de code

```javascript
const API_URL = "../backend/api/vehicles.php";

console.log("Gestion des véhicules");
```

---

## 6. Conclusion

Notre application permet de gérer les véhicules facilement.

- Ajouter
- Afficher
- Modifier
- Supprimer

---

# MERCI POUR VOTRE ATTENTION !
