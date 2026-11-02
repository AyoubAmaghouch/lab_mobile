---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    color: #1e293b;
    background: #f8fafc;
    padding: 38px 50px;
    font-size: 16px;
    line-height: 1.45;
  }
  h1 {
    color: #0f172a;
    font-size: 28px;
    margin: 0 0 10px 0;
    font-weight: 700;
    border-bottom: 2px solid #0284c7;
    padding-bottom: 6px;
  }
  h2 {
    color: #0284c7;
    font-size: 20px;
    margin: 0 0 10px 0;
  }
  h3 {
    color: #0369a1;
    font-size: 16px;
    margin: 0 0 6px 0;
  }
  p {
    margin: 0 0 8px 0;
  }
  ul {
    margin: 4px 0 8px 0;
    padding-left: 20px;
  }
  li {
    margin-bottom: 3px;
  }
  .grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
  }
  .grid-3 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 14px;
  }
  .grid-4 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto auto;
    gap: 12px;
  }
  .card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 12px 16px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
  }
  .card-primary {
    background: #eff6ff;
    border-color: #bfdbfe;
  }
  .badge {
    display: inline-block;
    padding: 2px 8px;
    border-radius: 4px;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
  }
  .badge-blue { background: #dbeafe; color: #1e40af; }
  .badge-emerald { background: #d1fae5; color: #065f46; }
  .badge-amber { background: #fef3c7; color: #92400e; }
  .badge-purple { background: #f3e8ff; color: #6b21a8; }
  .badge-crud { background: #e0f2fe; color: #0369a1; font-weight: bold; padding: 3px 10px; border-radius: 6px; }
  .arch-box {
    background: #0f172a;
    color: #f8fafc;
    border-radius: 8px;
    padding: 10px 14px;
    text-align: center;
    font-family: Consolas, monospace;
    font-size: 13px;
    margin-top: 8px;
  }
  .arch-arrow {
    color: #0284c7;
    font-weight: bold;
    margin: 2px 0;
  }
  section.cover {
    background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0284c7 100%);
    color: #f8fafc;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 40px;
  }
  section.cover h1 {
    color: #ffffff;
    font-size: 36px;
    border-bottom: 3px solid #38bdf8;
    padding-bottom: 12px;
    margin-bottom: 12px;
  }
  section.cover h2 {
    color: #7dd3fc;
    font-size: 22px;
    font-weight: 400;
    margin-bottom: 24px;
  }
  .cover-meta {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    padding: 16px 28px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px 36px;
    text-align: left;
    font-size: 15px;
    color: #e2e8f0;
  }
  .cover-meta strong {
    color: #ffffff;
  }
  .phase-title {
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 4px;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  .phase-list {
    list-style: none;
    padding-left: 0;
    margin: 0;
    font-size: 11.5px;
    line-height: 1.35;
  }
  .phase-list li {
    margin-bottom: 2px;
  }
---

<!-- _class: cover -->
<!-- _paginate: false -->

# INTRODUCTION AUX LABS

## Découverte des Labs et de la Stack Technique

<div class="cover-meta">
  <div>
    <strong>Projet technique :</strong> Gestion des Véhicules V2<br>
    <strong>Formation :</strong> Développeur Full Stack
  </div>
  <div>
    <strong>Nom de l'apprenant :</strong> Ayoub Amaghouch<br>
    <strong>Encadrant :</strong> ES-Sarraj Fouad
  </div>
</div>

---

# 02. PROJET TECHNIQUE — GESTION DES VÉHICULES V2

<div class="grid-2">
  <div class="card">
    <h3>🚗 Présentation de l'Application</h3>
    <p>Application web moderne dédiée à la gestion administrative et technique d'un parc de véhicules, garantissant la traçabilité et la manipulation simplifiée des données.</p>
    <h3 style="margin-top: 10px;">🎯 Objectifs du Projet</h3>
    <ul>
      <li><strong>Centraliser :</strong> Consolider l'ensemble des informations de la flotte.</li>
      <li><strong>Faciliter :</strong> Optimiser la saisie, la consultation et la mise à jour.</li>
      <li><strong>Fiabiliser :</strong> Valider les flux de données et assurer leur intégrité.</li>
    </ul>
  </div>

  <div class="card card-primary">
    <h3>⚡ Fonctionnalités Principales & Opérations CRUD</h3>
    <p>L'application repose sur le cycle complet de manipulation des ressources :</p>
    
    <div style="display: flex; flex-direction: column; gap: 6px; margin-top: 8px;">
      <div><span class="badge-crud">C — CREATE</span> <strong>Ajouter</strong> un nouveau véhicule avec ses caractéristiques</div>
      <div><span class="badge-crud">R — READ</span> <strong>Afficher</strong> la liste complète et le détail d'un véhicule</div>
      <div><span class="badge-crud">U — UPDATE</span> <strong>Modifier</strong> les données existantes (statut, kilométrage...)</div>
      <div><span class="badge-crud">D — DELETE</span> <strong>Supprimer</strong> un véhicule de la flotte de manière contrôlée</div>
    </div>
  </div>
</div>

---

# 03. STACK TECHNIQUE DU PROJET

<div class="grid-3">
  <div class="card">
    <span class="badge badge-blue">Frontend</span>
    <h3 style="margin-top: 6px;">Interface Utilisateur</h3>
    <ul>
      <li><strong>HTML5 :</strong> Structuration sémantique des pages et formulaires.</li>
      <li><strong>Tailwind CSS :</strong> Design responsive, utility-first et moderne.</li>
      <li><strong>JavaScript :</strong> Interactivité, manipulation du DOM et requêtes asynchrones.</li>
    </ul>
  </div>

  <div class="card">
    <span class="badge badge-emerald">Backend</span>
    <h3 style="margin-top: 6px;">Logique & Persistance</h3>
    <ul>
      <li><strong>PHP Native :</strong> Traitement des requêtes, routage et validation métier.</li>
      <li><strong>API PHP :</strong> Communication RESTful (JSON) entre client et serveur.</li>
      <li><strong>JSON :</strong> Format de stockage léger, structuré et autonome.</li>
    </ul>
  </div>

  <div class="card">
    <span class="badge badge-amber">Outillage</span>
    <h3 style="margin-top: 6px;">Environnement Dev</h3>
    <ul>
      <li><strong>VS Code :</strong> Éditeur de code extensible et adapté au web.</li>
      <li><strong>Git :</strong> Gestionnaire de versions distribué (commits, branches).</li>
      <li><strong>GitHub :</strong> Hébergement du code source et collaboration d'équipe.</li>
    </ul>
  </div>
</div>

<div class="arch-box">
  <strong>ARCHITECTURE GLOBALE DU PROJET</strong><br>
  <span>Frontend (HTML5 + Tailwind CSS + JS)</span>
  <span class="arch-arrow"> ── [ Requêtes HTTP / JSON via Fetch ] ──▶ </span>
  <span>Backend (API PHP Native)</span>
  <span class="arch-arrow"> ── [ Lecture / Écriture ] ──▶ </span>
  <span>Stockage (Fichiers JSON)</span>
</div>

---

# 04. COMPRENDRE LES LABS

<div class="grid-3">
  <div class="card">
    <span class="badge badge-purple">Concept</span>
    <h3 style="margin-top: 6px;">C'est quoi un Lab ?</h3>
    <ul>
      <li>Un <strong>atelier pratique ciblé</strong> et progressif centré sur l'action (*Learning by Doing*).</li>
      <li>Un bac à sable d'expérimentation isolé pour isoler une difficulté technique.</li>
      <li>Un livrable court, autonome et validable.</li>
    </ul>
  </div>

  <div class="card">
    <span class="badge badge-blue">Utilité</span>
    <h3 style="margin-top: 6px;">Pourquoi réaliser des Labs ?</h3>
    <ul>
      <li><strong>Pratiquer :</strong> Convertir immédiatement la théorie en compétence réelle.</li>
      <li><strong>Démystifier :</strong> Tester des technologies individuellement sans blocage global.</li>
      <li><strong>Capitaliser :</strong> Créer une base de templates et de briques réutilisables.</li>
    </ul>
  </div>

  <div class="card card-primary">
    <span class="badge badge-emerald">Synergie</span>
    <h3 style="margin-top: 6px;">Lien avec le Projet</h3>
    <ul>
      <li>Chaque Lab résout un besoin direct du projet <strong>Gestion des Véhicules V2</strong>.</li>
      <li>Ex : Tailwind pour la vue, PHP pour l'API, Git pour versionner le projet.</li>
      <li><strong>Principe :</strong> Lab ➔ Apprentissage ➔ Expérimentation ➔ Projet.</li>
    </ul>
  </div>
</div>

<div class="card" style="margin-top: 10px; background: #f1f5f9; text-align: center; padding: 8px 12px;">
  <strong>Cycle d'apprentissage :</strong> Théorie ciblée ➔ Manipulation guidée ➔ Livrable vérifié ➔ Intégration dans le projet technique final.
</div>

---

# 05. PROGRAMME DES 30 LABS (4 PHASES)

<div class="grid-4">
  <div class="card">
    <div class="phase-title"><span class="badge badge-blue">Phase 1</span> Fondations & Outils (1–10)</div>
    <ul class="phase-list">
      <li><strong>1. Qu'est-ce qu'un lab ?</strong> — Comprendre les Labs</li>
      <li><strong>2. Markdown</strong> — Syntaxe et documentation</li>
      <li><strong>3. GitHub Pages</strong> — Hébergement statique</li>
      <li><strong>4. Antigravity</strong> — Gestion de projets Python</li>
      <li><strong>5. Marp</strong> — Présentations en Markdown</li>
      <li><strong>6. OpenCode</strong> — Environnement de dev</li>
      <li><strong>7. Pandoc</strong> — Conversion de documents</li>
      <li><strong>8. OmniRoute</strong> — Routage avancé</li>
      <li><strong>9. Tailwind CSS</strong> — Framework CSS utility-first</li>
      <li><strong>10. Preline</strong> — Composants UI avec Tailwind</li>
    </ul>
  </div>

  <div class="card">
    <div class="phase-title"><span class="badge badge-emerald">Phase 2</span> Méthodologies & Équipe (11–16)</div>
    <ul class="phase-list">
      <li><strong>11. 2TUP</strong> — Méthodologie de développement</li>
      <li><strong>12. Design Thinking</strong> — Approche centrée utilisateur</li>
      <li><strong>13. Issues (GitHub)</strong> — Gestion des tickets</li>
      <li><strong>14. Scrum</strong> — Méthode agile</li>
      <li><strong>15. Copilot GitHub</strong> — IA pour le développement</li>
      <li><strong>16. ASCII</strong> — Art et diagrammes en texte</li>
    </ul>
  </div>

  <div class="card">
    <div class="phase-title"><span class="badge badge-amber">Phase 3</span> Dév & Langages (17–24)</div>
    <ul class="phase-list">
      <li><strong>17. OOP</strong> — Programmation orientée objet</li>
      <li><strong>18. PHP Native</strong> — PHP pur sans framework</li>
      <li><strong>19. Laravel</strong> — Framework PHP</li>
      <li><strong>20. Kotlin</strong> — Langage moderne Android/Backend</li>
      <li><strong>21. ES7 JavaScript</strong> — Features modernes JavaScript</li>
      <li><strong>22. Error JS</strong> — Gestion des erreurs JS</li>
      <li><strong>23. Prompt-Agent-Skill</strong> — IA et automatisation</li>
      <li><strong>24. Communication avec IA</strong> — Interaction avec l'IA</li>
    </ul>
  </div>

  <div class="card">
    <div class="phase-title"><span class="badge badge-purple">Phase 4</span> Projet & Production (25–30)</div>
    <ul class="phase-list">
      <li><strong>25. Veille technologique</strong> — Se tenir à jour</li>
      <li><strong>26. Starter</strong> — Templates de démarrage</li>
      <li><strong>27. Planning</strong> — Planification de projet</li>
      <li><strong>28. Git</strong> — Gestion de version avancée</li>
      <li><strong>29. Lab Stack</strong> — Stack technique complète</li>
      <li><strong>30. Agent</strong> — Automatisation avec agents IA</li>
    </ul>
  </div>
</div>

