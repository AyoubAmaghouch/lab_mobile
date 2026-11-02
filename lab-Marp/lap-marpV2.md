---
marp: true
theme: gaia
paginate: true
size: 16:9
header: "Projet Technique — Gestion des Véhicules V2"
footer: "Ayoub Amaghouch | Développeur Full Stack"

style: |
  section {
    background-color: #f8fafc;
    color: #1e293b;
    font-family: 'Segoe UI', system-ui, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
    padding: 42px 60px;
    font-size: 19px;
    line-height: 1.5;
  }
  header {
    font-size: 13px;
    color: #64748b;
    font-weight: 600;
  }
  footer {
    font-size: 13px;
    color: #64748b;
  }
  h1 {
    color: #0f365d;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 12px;
  }
  h2 {
    color: #0284c7;
    font-size: 24px;
    margin-top: 0;
    margin-bottom: 12px;
    border-bottom: 2px solid #0284c7;
    padding-bottom: 6px;
  }
  h3 {
    color: #0369a1;
    font-size: 18px;
    margin-top: 0;
    margin-bottom: 8px;
  }
  p {
    margin-top: 0;
    margin-bottom: 10px;
  }
  ul {
    margin-top: 4px;
    margin-bottom: 10px;
    padding-left: 24px;
  }
  li {
    margin-bottom: 6px;
  }
  .grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px;
  }
  .card {
    background: #ffffff;
    border: 1px solid #cbd5e1;
    border-radius: 10px;
    padding: 16px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
  }
  .card-highlight {
    background: #eff6ff;
    border-color: #93c5fd;
  }
  .card-subtle {
    background: #f1f5f9;
    border-color: #e2e8f0;
  }
  .badge {
    display: inline-block;
    padding: 3px 10px;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
  }
  .badge-c { background: #dcfce7; color: #166534; }
  .badge-r { background: #dbeafe; color: #1e40af; }
  .badge-u { background: #fef3c7; color: #92400e; }
  .badge-d { background: #fee2e2; color: #991b1b; }
  .arch-box {
    background: #0f172a;
    color: #f8fafc;
    border-radius: 10px;
    padding: 12px 16px;
    text-align: center;
    font-family: Consolas, monospace;
    font-size: 15px;
    line-height: 1.5;
    margin-top: 8px;
  }
  .arch-step {
    color: #38bdf8;
    font-weight: bold;
  }
  .prototype-ui {
    background: #ffffff;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    padding: 12px;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.08);
  }
  .prototype-nav {
    background: #0f172a;
    color: white;
    padding: 8px 12px;
    border-radius: 6px;
    display: flex;
    justify-content: space-between;
    font-weight: bold;
    margin-bottom: 10px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 15px;
    margin-top: 8px;
  }
  th, td {
    border: 1px solid #cbd5e1;
    padding: 8px 12px;
    text-align: left;
  }
  th {
    background: #e2e8f0;
    color: #0f172a;
  }
  pre {
    background: #0f172a !important;
    color: #f8fafc !important;
    border-radius: 8px;
    padding: 12px 14px;
    font-size: 14px;
    margin: 0;
  }
  section.cover {
    background: linear-gradient(135deg, #0f365d 0%, #0369a1 50%, #0284c7 100%);
    color: #ffffff;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 40px;
  }
  section.cover h1 {
    color: #ffffff;
    font-size: 38px;
    margin: 14px 0 8px 0;
    border-bottom: 3px solid #38bdf8;
    padding-bottom: 8px;
  }
  section.cover h3 {
    color: #bae6fd;
    font-size: 20px;
    font-weight: normal;
    margin-bottom: 22px;
  }
  .cover-logos {
    display: flex;
    justify-content: space-between;
    width: 100%;
    max-width: 780px;
    margin-bottom: 12px;
    align-items: center;
  }
  .cover-box {
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(6px);
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 10px;
    padding: 14px 30px;
    font-size: 16px;
    display: flex;
    gap: 50px;
    text-align: left;
  }
---

<!-- _class: cover -->
<!-- _paginate: false -->
<!-- _header: "" -->
<!-- _footer: "" -->

<div class="cover-logos">
  <img src="images/ofppt.png" width="130" alt="Logo OFPPT">
  <img src="images/solicode.png" width="130" alt="Logo SOLICODE">
</div>

# GESTION DES VÉHICULES V2

### Présentation du Projet Technique

<div class="cover-box">
  <div>
    <strong>Apprenant :</strong> Ayoub Amaghouch<br>
    <strong>Formation :</strong> Développeur Full Stack
  </div>
  <div>
    <strong>Encadrant :</strong> ES-Sarraj Fouad<br>
    <strong>Année de formation :</strong> 2026
  </div>
</div>

<!--
Note:
Bonjour à tous et bienvenue à cette soutenance.
Je m'appelle Ayoub Amaghouch, apprenant en formation Développeur Full Stack à Solicode.
J'ai le plaisir de vous présenter aujourd'hui mon projet technique intitulé : Gestion des Véhicules V2.
Ce travail est réalisé sous la direction et l'encadrement de Monsieur ES-Sarraj Fouad.
-->

---

## 1. Introduction

<div class="grid-2">
  <div class="card card-highlight">
    <h3>🚗 Qu'est-ce que l'application ?</h3>
    <p><strong>Gestion des Véhicules V2</strong> est une application web conçue pour faciliter le suivi complet d'une flotte automobile.</p>
    <p>Elle permet de gérer les informations des véhicules en temps réel depuis un simple navigateur web.</p>
  </div>

  <div class="card">
    <h3>🎯 Objectifs Principaux</h3>
    <ul>
      <li>Remplacer la gestion papier par une interface moderne.</li>
      <li>Centraliser toutes les voitures au même endroit.</li>
      <li>Gagner du temps pour consulter et mettre à jour les données.</li>
      <li>Offrir une utilisation simple, rapide et accessible à tous.</li>
    </ul>
  </div>
</div>

<div class="card card-subtle" style="margin-top: 10px; text-align: center; font-size: 16px;">
  <strong>💡 Solution :</strong> Une application web légère, sans installation compliquée, qui fonctionne sur ordinateur, tablette et smartphone.
</div>

<!--
Note:
Commençons par l'introduction du projet.
Gestion des Véhicules V2 est une application web créée pour gérer un parc automobile.
Son rôle est simple : remplacer les fiches manuelles et les cahiers par un tableau de bord numérique clair.
Elle permet au responsable de voir rapidement toutes les voitures et d'actualiser leurs données à tout moment.
-->

---

## 2. Besoin

<div class="grid-2">
  <div class="card">
    <h3 style="color: #dc2626;">❌ La Problématique Actuelle</h3>
    <p>Dans beaucoup d'entreprises, la gestion des véhicules se fait manuellement :</p>
    <ul>
      <li>Perte fréquente de temps pour chercher une fiche véhicule.</li>
      <li>Risque d'erreurs lors de la saisie manuelle.</li>
      <li>Difficulté à savoir si une voiture est en mission ou disponible.</li>
      <li>Pas d'historique fiable pour les entretiens et le kilométrage.</li>
    </ul>
  </div>

  <div class="card card-highlight">
    <h3 style="color: #16a34a;">✅ Le Besoin Identifié</h3>
    <p>Les gestionnaires ont besoin d'une solution numérique directe :</p>
    <ul>
      <li>Un accès immédiat à la liste complète des véhicules.</li>
      <li>L'ajout simple d'une nouvelle voiture en quelques clics.</li>
      <li>La modification instantanée du statut (Disponible, En mission, En panne).</li>
      <li>Une sauvegarde sécurisée et permanente des informations.</li>
    </ul>
  </div>
</div>

<!--
Note:
Pourquoi avons-nous développé cette application ?
Parce que la gestion manuelle pose de nombreux problèmes : les documents se perdent, les erreurs s'accumulent et on perd un temps précieux.
Le besoin de l'entreprise est clair : disposer d'un outil digital accessible 24h sur 24 pour suivre chaque voiture en temps réel et avec précision.
-->

---

## 3. Analyse — Étude des Besoins et Opérations CRUD

L'application répond à l'ensemble du cycle de vie des données grâce aux **4 opérations CRUD** :

| Opération | Action | Description Métier | Exemple Concret |
| :---: | :--- | :--- | :--- |
| <span class="badge badge-c">C</span> **Create** | **Ajouter** | Enregistrer un nouveau véhicule dans la base | Renault Clio 5, Immat: 45678-A-1 |
| <span class="badge badge-r">R</span> **Read** | **Afficher** | Consulter la liste globale ou la fiche détaillée | Voir les 15 véhicules et leur disponibilité |
| <span class="badge badge-u">U</span> **Update** | **Modifier** | Mettre à jour les données d'un véhicule existant | Kilométrage : passer de 45 000 à 50 000 km |
| <span class="badge badge-d">D</span> **Delete** | **Supprimer** | Retirer définitivement un véhicule réformé | Supprimer un véhicule vendu de la flotte |

<div class="card card-subtle" style="margin-top: 10px; font-size: 15px;">
  <strong>Règles de validation :</strong> Tous les champs obligatoires (marque, modèle, immatriculation) sont vérifiés avant l'enregistrement.
</div>

<!--
Note:
Dans la phase d'analyse, nous avons défini les 4 opérations fondamentales du projet :
1. Create : pour ajouter une nouvelle voiture avec sa marque, son modèle et son immatriculation.
2. Read : pour afficher le tableau de bord et voir tous les véhicules.
3. Update : pour modifier les informations, par exemple mettre à jour le kilométrage.
4. Delete : pour supprimer une voiture lorsqu'elle quitte définitivement la flotte.
-->

---

## 4. Conception — Architecture et Modèle de Données

<div class="grid-2">
  <div>
    <h3>Architecture Technique en 3 Niveaux</h3>
    <div class="arch-box">
      <span class="arch-step">1. COUCHE FRONTEND</span><br>
      HTML5 + Tailwind CSS + JavaScript<br>
      ⬇️ <em>Requêtes HTTP Fetch (Format JSON)</em><br>
      <span class="arch-step">2. COUCHE BACKEND</span><br>
      API PHP Native (Validation + Routage)<br>
      ⬇️ <em>Lecture et Écriture (file_get / put_contents)</em><br>
      <span class="arch-step">3. COUCHE STOCKAGE</span><br>
      Fichier <code>vehicles.json</code>
    </div>
  </div>

  <div>
    <h3>Modèle de Données du Véhicule (JSON)</h3>
    <pre><code class="language-json">{
  "id": 1,
  "marque": "Dacia",
  "modele": "Sandero",
  "annee": 2023,
  "immatriculation": "12345-B-1",
  "kilometrage": 35000,
  "statut": "Disponible"
}
</code></pre>
    <p style="font-size: 14px; margin-top: 6px; color: #475569;">
      Chaque véhicule possède un identifiant unique (<code>id</code>) et des propriétés contrôlées.
    </p>
  </div>
</div>

<!--
Note:
Passons maintenant à la conception de l'application.
Elle repose sur une architecture 3 tiers très claire :
1. Le Frontend sur le navigateur pour l'utilisateur.
2. Le Backend en PHP Native qui reçoit les requêtes et applique les contrôles de sécurité.
3. Le Fichier JSON qui stocke les véhicules de manière structurée et légère.
À droite, vous voyez la structure exacte d'un véhicule dans notre fichier JSON.
-->

---

## 5. Réalisation — Stack Technique et Outils

<div class="grid-2">
  <div class="card">
    <h3>💻 Stack Technique</h3>
    <ul>
      <li><strong>HTML5 :</strong> Structuration des vues, des formulaires et des tableaux.</li>
      <li><strong>Tailwind CSS :</strong> Design épuré, responsive et utilitaire sans fichier CSS lourd.</li>
      <li><strong>JavaScript :</strong> Dynamisme, gestion des clics et requêtes asynchrones <code>fetch()</code>.</li>
      <li><strong>PHP Native :</strong> Traitement des requêtes côté serveur sans framework externe.</li>
      <li><strong>JSON :</strong> Format de persistance textuel simple et rapide.</li>
    </ul>
  </div>

  <div class="card card-highlight">
    <h3>🛠️ Outils de Développement</h3>
    <ul>
      <li><strong>Visual Studio Code :</strong> Éditeur principal avec extensions (Marp, Tailwind, PHP).</li>
      <li><strong>Git :</strong> Gestion des versions et traçabilité des modifications.</li>
      <li><strong>GitHub :</strong> Hébergement du code source et collaboration.</li>
      <li><strong>Marp for VS Code :</strong> Création et export de cette présentation technique.</li>
    </ul>
  </div>
</div>

<!--
Note:
Pour la réalisation, nous avons utilisé des technologies standard du web, solides et accessibles :
HTML5 et Tailwind CSS pour une interface soignée.
JavaScript pour actualiser les données sans recharger la page.
PHP Native pour créer une API légère et rapide.
Et les fichiers JSON pour enregistrer nos données sans avoir besoin d'installer une base de données lourde comme MySQL.
-->

---

## 6. Réalisation — Prototype et Code de l'Application

<div class="grid-2">
  <div class="prototype-ui">
    <div class="prototype-nav">
      <span>🚗 Gestion des Véhicules</span>
      <span style="background: #0284c7; padding: 2px 8px; border-radius: 4px; font-size: 11px;">+ Ajouter Véhicule</span>
    </div>
    <table style="font-size: 12px; margin-top: 4px;">
      <thead>
        <tr><th>ID</th><th>Véhicule</th><th>Plaque</th><th>Statut</th><th>Actions</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Renault Clio 5</td><td>12345-A-1</td><td><span class="badge badge-c">Libre</span></td><td>✏️ 🗑️</td></tr>
        <tr><td>2</td><td>Peugeot 208</td><td>98765-B-1</td><td><span class="badge badge-u">Mission</span></td><td>✏️ 🗑️</td></tr>
        <tr><td>3</td><td>Dacia Duster</td><td>54321-C-1</td><td><span class="badge badge-d">Panne</span></td><td>✏️ 🗑️</td></tr>
      </tbody>
    </table>
    <div style="margin-top: 8px; font-size: 12px; color: #64748b; text-align: center;">
      <em>Aperçu du prototype : tableau de bord CRUD avec actions rapides</em>
    </div>
  </div>

  <div>
    <h3>Exemple de Communication Frontend ➔ Backend</h3>
    <pre><code class="language-javascript">// Charger les véhicules depuis l'API PHP
async function getVehicles() {
  const res = await fetch("api/vehicles.php");
  const data = await res.json();
  renderTable(data);
}
</code></pre>
    <pre style="margin-top: 6px;"><code class="language-php">&lt;?php // API PHP Native : Retourner la liste
header('Content-Type: application/json');
echo file_get_contents("../data/vehicles.json");
?&gt;
</code></pre>
  </div>
</div>

<!--
Note:
Voici un aperçu concret de notre prototype :
À gauche, l'interface utilisateur avec le tableau des véhicules, les statuts colorés et les boutons d'action Modifier et Supprimer.
À droite, le code réel : une fonction JavaScript Fetch simple qui appelle notre API PHP, et le script PHP qui retourne immédiatement les données JSON.
-->

---

## 7. Conclusion

<div class="grid-2">
  <div class="card card-highlight">
    <h3>🏆 Résultats Obtenus</h3>
    <ul>
      <li>Une application web moderne, légère et opérationnelle.</li>
      <li>Les 4 fonctionnalités <strong>CRUD</strong> sont testées et validées.</li>
      <li>Temps de réponse instantané grâce au format JSON.</li>
      <li>Interface ergonomique, responsive et accessible à tous les utilisateurs.</li>
    </ul>
  </div>

  <div class="card">
    <h3>🚀 Améliorations Futures</h3>
    <ul>
      <li><strong>Filtres avancés :</strong> Recherche en direct par marque, immatriculation et statut.</li>
      <li><strong>Exportation :</strong> Téléchargement de la liste en format PDF et Excel.</li>
      <li><strong>Authentification :</strong> Gestion des accès avec rôles (Administrateur / Utilisateur).</li>
      <li><strong>Alertes :</strong> Notification automatique des dates de contrôle technique.</li>
    </ul>
  </div>
</div>

<!--
Note:
En conclusion :
Ce projet répond parfaitement aux objectifs fixés au départ.
Nous disposons d'une application de gestion des véhicules complète, simple d'utilisation et fonctionnelle.
Comme perspectives d'évolution, nous prévoyons d'ajouter des filtres de recherche instantanés, l'exportation des fiches en PDF et un système de connexion sécurisé.
-->

---

<!-- _class: cover -->
<!-- _paginate: false -->
<!-- _header: "" -->
<!-- _footer: "" -->

<div class="cover-logos">
  <img src="images/ofppt.png" width="120" alt="Logo OFPPT">
  <img src="images/solicode.png" width="120" alt="Logo SOLICODE">
</div>

# MERCI POUR VOTRE ATTENTION !

### Avez-vous des questions ou des remarques ?

<div class="cover-box" style="margin-top: 22px;">
  <div>
    <strong>Projet :</strong> Gestion des Véhicules V2<br>
    <strong>Auteur :</strong> Ayoub Amaghouch
  </div>
  <div>
    <strong>Centre :</strong> Solicode Tanger — OFPPT<br>
    <strong>Filière :</strong> Développeur Full Stack
  </div>
</div>

<!--
Note:
Je vous remercie sincèrement pour votre attention et votre écoute.
Je me tiens maintenant à votre disposition pour répondre à toutes vos questions.
-->

---

## 📌 Annexe Technique : Pratique et Maîtrise de Marp

Dans ce Lab, nous avons exploré et mis en œuvre l'ensemble des techniques Marp :

<div class="grid-2" style="font-size: 15px;">
  <div class="card">
    <h3>⚙️ Techniques Marp Utilisées</h3>
    <ul>
      <li><strong>Directives :</strong> <code>theme: gaia</code>, <code>size: 16:9</code>, <code>paginate: true</code>, <code>header</code>, <code>footer</code>.</li>
      <li><strong>Directives de slide :</strong> <code>_class: cover</code>, <code>_header</code>, <code>_footer</code>.</li>
      <li><strong>CSS Personnalisé :</strong> Fichier <code>custom.css</code> et styles embarqués (cartes, grilles, badges).</li>
      <li><strong>Notes du présentateur :</strong> Blocs <code>&lt;!-- Note: ... --&gt;</code> pour chaque diapositive.</li>
      <li><strong>Images & Logos :</strong> Positionnement responsive des logos OFPPT et Solicode.</li>
    </ul>
  </div>

  <div class="card card-highlight">
    <h3>📤 Exportation Multi-Formats</h3>
    <p>Depuis Visual Studio Code avec l'extension Marp :</p>
    <ul>
      <li><strong>Format HTML :</strong> Présentation web autonome et interactive.</li>
      <li><strong>Format PDF :</strong> Document prêt pour l'impression ou le dépôt officiel.</li>
      <li><strong>Format PowerPoint (PPTX) :</strong> Fichier projetable et modifiable.</li>
    </ul>
    <p><em>Raccourci : Icône Marp dans la barre d'outils ➔ <strong>"Export Slide Deck..."</strong>.</em></p>
  </div>
</div>

<!--
Note:
Cette diapositive finale résume l'apprentissage technique réalisé dans ce Lab Marp :
De la création des slides en Markdown jusqu'à la personnalisation CSS avancée et l'exportation finale en HTML, PDF et PowerPoint.
-->
