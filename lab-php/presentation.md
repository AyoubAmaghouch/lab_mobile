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
    padding: 38px 52px;
    font-size: 16px;
    line-height: 1.45;
  }
  h1 {
    color: #0f172a;
    font-size: 27px;
    margin: 0 0 10px 0;
    font-weight: 700;
    border-bottom: 2px solid #0284c7;
    padding-bottom: 6px;
  }
  h2 {
    color: #0284c7;
    font-size: 19px;
    margin: 8px 0 8px 0;
  }
  h3 {
    color: #0369a1;
    font-size: 15.5px;
    margin: 6px 0 4px 0;
  }
  p {
    margin: 0 0 8px 0;
  }
  ul, ol {
    margin: 4px 0 8px 0;
    padding-left: 22px;
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
  .card-alert {
    background: #fef2f2;
    border-color: #fecaca;
  }
  .card-success {
    background: #f0fdf4;
    border-color: #bbf7d0;
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
  .badge-red { background: #fee2e2; color: #991b1b; }
  pre {
    background: #0f172a !important;
    color: #f8fafc !important;
    border-radius: 6px;
    padding: 10px 12px;
    font-size: 13px;
    line-height: 1.35;
    margin: 4px 0 8px 0;
  }
  code {
    font-family: Consolas, 'Courier New', monospace;
  }
  section.cover {
    background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0284c7 100%);
    color: #f8fafc;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 35px 40px;
  }
  section.cover img {
    height: 55px;
    max-height: 60px;
    width: auto;
    object-fit: contain;
    background: #ffffff;
    padding: 6px 16px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
    display: inline-block;
    margin: 0 16px 16px 16px;
    vertical-align: middle;
  }
  section.cover h1 {
    color: #ffffff;
    font-size: 34px;
    border-bottom: 3px solid #38bdf8;
    padding-bottom: 8px;
    margin-bottom: 8px;
  }
  section.cover h2 {
    color: #7dd3fc;
    font-size: 20px;
    font-weight: 400;
    margin-bottom: 20px;
  }
  .cover-meta {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    padding: 14px 28px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px 36px;
    text-align: left;
    font-size: 14.5px;
    color: #e2e8f0;
  }
  .cover-meta strong {
    color: #ffffff;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13.5px;
    margin: 6px 0;
  }
  th, td {
    border: 1px solid #cbd5e1;
    padding: 6px 10px;
    text-align: left;
  }
  th {
    background: #e2e8f0;
    color: #0f172a;
    font-weight: 600;
  }
---

<!-- _class: cover -->
<!-- _paginate: false -->

![OFPPT](images/ofppt_logo.png) ![SOLICODE](images/logo_solicode.png)

# LAB PHP : NOTIONS AVANCÉES

## Exceptions, Namespaces & Traits en PHP Native

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

# PLAN DE PRÉSENTATION

<div class="grid-2">
  <div class="card card-primary">
    <h3>1. Introduction & Stack Technique</h3>
    <ul>
      <li>Contexte du projet <strong>Gestion des Véhicules V2</strong></li>
      <li>Environnement backend en <strong>PHP Native</strong></li>
    </ul>

    <h3 style="margin-top: 10px;">2. Définitions des Notions Clés</h3>
    <ul>
      <li><strong>Gestion des erreurs & exceptions :</strong> robustesse</li>
      <li><strong>Namespaces :</strong> organisation modulaire</li>
      <li><strong>Traits :</strong> réutilisation horizontale de code</li>
    </ul>
  </div>

  <div class="card">
    <h3>3. Problème Réel Rencontré</h3>
    <ul>
      <li>Plantages serveur sur données invalides (kilométrage, plaque)</li>
      <li>Collisions de noms et désorganisation du code</li>
      <li>Duplication de logique transversale (logging)</li>
    </ul>

    <h3 style="margin-top: 10px;">4. Solution & Démonstrations Pratiques</h3>
    <ul>
      <li>Quick Start & Démonstration "Hello World"</li>
      <li>Exemple 1 : <code>VehicleValidationException</code></li>
      <li>Exemple 2 : Namespaces <code>App\Models</code> & <code>App\Services</code></li>
      <li>Exemple 3 : Trait transversal <code>LoggableTrait</code></li>
    </ul>
  </div>
</div>

---

# 1. INTRODUCTION & STACK TECHNIQUE

<div class="grid-2">
  <div class="card">
    <h3>🚗 Projet : Gestion des Véhicules V2</h3>
    <p>Application web permettant d'administrer une flotte automobile à travers un cycle complet <strong>CRUD</strong> (*Create, Read, Update, Delete*).</p>
    <ul>
      <li>Ajout d'un nouveau véhicule (marque, modèle, plaque).</li>
      <li>Consultation du catalogue et des statuts.</li>
      <li>Modification du kilométrage et de la disponibilité.</li>
      <li>Suppression sécurisée d'un véhicule retiré.</li>
    </ul>
  </div>

  <div class="card card-primary">
    <h3>⚙️ Stack Technique du Projet</h3>
    <table>
      <thead>
        <tr>
          <th style="width: 30%;">Couche</th>
          <th style="width: 35%;">Technologie</th>
          <th style="width: 35%;">Rôle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Frontend</strong></td>
          <td>HTML5 + Tailwind + JS</td>
          <td>Interface & Fetch API</td>
        </tr>
        <tr>
          <td><strong>Backend</strong></td>
          <td>PHP Native (PHP 8.5)</td>
          <td>Logique métier & API</td>
        </tr>
        <tr>
          <td><strong>Données</strong></td>
          <td>Fichier JSON</td>
          <td>Stockage autonome</td>
        </tr>
      </tbody>
    </table>
    <p style="font-size: 13px; margin-top: 6px; color: #475569;">
      <strong>Objectif du Lab :</strong> professionnaliser le code backend PHP Native grâce aux exceptions, namespaces et traits sans dépendre d'un gros framework.
    </p>
  </div>
</div>

---

# 2. DÉFINITIONS DES NOTIONS CLÉS

<div class="grid-3">
  <div class="card">
    <span class="badge badge-red">Fiabilité</span>
    <h3>1. Exceptions</h3>
    <p>Mécanisme orienté objet servant à signaler et traiter les situations exceptionnelles (erreurs métier ou techniques).</p>
    <ul>
      <li><code>throw new Exception()</code> : déclenche l'alerte.</li>
      <li><code>try { ... } catch { ... }</code> : capture l'erreur sans interrompre le serveur.</li>
      <li>Remplace les erreurs fatales par des réponses JSON contrôlées.</li>
    </ul>
  </div>

  <div class="card">
    <span class="badge badge-blue">Structure</span>
    <h3>2. Namespaces</h3>
    <p>Espaces de noms permettant de compartimenter virtuellement les classes et d'éviter les collisions.</p>
    <ul>
      <li><code>namespace App\Models;</code> : déclare le sous-espace.</li>
      <li><code>use App\Models\Vehicle;</code> : importe la classe souhaitée.</li>
      <li>Indispensable pour structurer une application en modules clairs.</li>
    </ul>
  </div>

  <div class="card">
    <span class="badge badge-emerald">Modularité</span>
    <h3>3. Traits</h3>
    <p>Composants réutilisables permettant d'injecter des méthodes dans plusieurs classes indépendantes.</p>
    <ul>
      <li><code>trait LoggableTrait { ... }</code> : définit le comportement.</li>
      <li><code>use LoggableTrait;</code> dans la classe.</li>
      <li>Évite la duplication de code sans recours à l'héritage multiple.</li>
    </ul>
  </div>
</div>

---

# 3. PROBLÈME RÉEL RENCONTRÉ DANS LE PROJET

Dans un script PHP débutant, les opérations CRUD sur les véhicules rencontrent trois limites majeures :

<div class="grid-3">
  <div class="card card-alert">
    <span class="badge badge-red">Problème 1</span>
    <h3 style="color: #991b1b;">Crash sur Données Invalides</h3>
    <p>Si l'utilisateur envoie un kilométrage négatif (<code>-500</code>) ou une plaque vide, le script continue ou génère une erreur PHP brute :</p>
    <ul>
      <li>L'API s'arrête brutalement (erreur 500).</li>
      <li>Le frontend JavaScript reçoit du HTML d'erreur au lieu d'un JSON valide.</li>
    </ul>
  </div>

  <div class="card card-alert">
    <span class="badge badge-red">Problème 2</span>
    <h3 style="color: #991b1b;">Collisions de Noms</h3>
    <p>Toutes les classes vivent dans l'espace global PHP sans namespace :</p>
    <ul>
      <li>Impossible d'avoir deux classes <code>Vehicle</code> ou <code>Validator</code> sans conflit fatal : <em>"Cannot declare class..."</em>.</li>
      <li>Code difficile à maintenir et non conforme aux standards PSR.</li>
    </ul>
  </div>

  <div class="card card-alert">
    <span class="badge badge-red">Problème 3</span>
    <h3 style="color: #991b1b;">Duplication du Logging</h3>
    <p>Chaque action CRUD doit être journalisée (date, action, succès) :</p>
    <ul>
      <li>Le code d'écriture dans <code>history.log</code> est recopié dans chaque contrôleur et classe.</li>
      <li>Toute modification du format de log oblige à modifier 5 fichiers.</li>
    </ul>
  </div>
</div>

---

# 4. SOLUTION — QUICK START & HELLO WORLD

Exemple autonome démontrant la synergie des 3 notions en un seul fichier exécutable :

```php
<?php
namespace App\Demo; // 1. Namespace : isole le code dans son espace propre

trait FormatterTrait { // 2. Trait : injecte une méthode de formatage réutilisable
    public function formatText(string $txt): string { return strtoupper(trim($txt)); }
}

class DemoException extends \Exception {} // 3. Exception personnalisée

class VehicleDemo {
    use FormatterTrait;
    public function valider(string $plaque): string {
        if (empty($plaque)) { throw new DemoException("La plaque est obligatoire !"); }
        return $this->formatText($plaque);
    }
}

// Test et capture
try {
    $demo = new VehicleDemo();
    echo "Plaque formatée : " . $demo->valider("  12345-a-1  ") . "\n";
    $demo->valider(""); // Déclenche l'exception
} catch (DemoException $e) {
    echo "Erreur capturée proprement : " . $e->getMessage() . "\n";
}
```

---

# 4.1 SOLUTION : GESTION DES ERREURS & EXCEPTIONS

<div class="grid-2">
  <div>
    <h3>Classe d'Exception Dédiée</h3>
    <pre><code class="language-php">&lt;?php
namespace App\Exceptions;

class VehicleValidationException extends \Exception {
    private array $erreurs;

    public function __construct(array $erreurs) {
        parent::__construct("Données véhicule invalides");
        $this->erreurs = $erreurs;
    }

    public function getErreurs(): array {
        return $this->erreurs;
    }
}
</code></pre>
  </div>

  <div>
    <h3>Traitement Sécurisé dans l'API CRUD</h3>
    <pre><code class="language-php">&lt;?php
use App\Exceptions\VehicleValidationException;

try {
    $km = (int)($_POST['km'] ?? -1);
    if ($km &lt; 0) {
        throw new VehicleValidationException(["km" =&gt; "Le kilométrage doit être positif."]);
    }
    // Sauvegarde dans le fichier JSON...
    echo json_encode(["success" =&gt; true]);
} catch (VehicleValidationException $e) {
    http_response_code(400);
    echo json_encode(["success" =&gt; false, "erreurs" =&gt; $e-&gt;getErreurs()]);
}
</code></pre>
  </div>
</div>

<div class="card card-success" style="margin-top: 4px; padding: 6px 12px; font-size: 13.5px;">
  <strong>Résultat obtenu :</strong> Le serveur ne plante jamais. L'API renvoie un JSON clair avec le code HTTP 400 adapté.
</div>

---

# 4.2 SOLUTION : ORGANISATION PAR NAMESPACES

Structuration des responsabilités du projet **Gestion des Véhicules V2** en sous-dossiers logiques :

```text
app/
├── Exceptions/ ─── VehicleValidationException.php   (namespace App\Exceptions)
├── Models/     ─── Vehicle.php                      (namespace App\Models)
├── Services/   ─── VehicleManager.php               (namespace App\Services)
└── Traits/     ─── LoggableTrait.php                (namespace App\Traits)
```

<div class="grid-2" style="margin-top: 6px;">
  <div>
    <h3>Modèle : <code>App\Models\Vehicle</code></h3>
    <pre><code class="language-php">&lt;?php
namespace App\Models;

class Vehicle {
    public function __construct(
        public int $id,
        public string $marque,
        public string $immatriculation
    ) {}
}
</code></pre>
  </div>

  <div>
    <h3>Service : <code>App\Services\VehicleManager</code></h3>
    <pre><code class="language-php">&lt;?php
namespace App\Services;

use App\Models\Vehicle; // Import explicite

class VehicleManager {
    public function creer(int $id, string $marque, string $plaque): Vehicle {
        return new Vehicle($id, $marque, $plaque);
    }
}
</code></pre>
  </div>
</div>

---

# 4.3 SOLUTION : RÉUTILISATION AVEC LES TRAITS

Partage de la journalisation entre le gestionnaire de véhicules et le gestionnaire de stockage :

<div class="grid-2">
  <div>
    <h3>Définition du Trait : <code>LoggableTrait</code></h3>
    <pre><code class="language-php">&lt;?php
namespace App\Traits;

trait LoggableTrait {
    public function logAction(string $message): void {
        $date = date('Y-m-d H:i:s');
        $ligne = "[$date] " . static::class . " : $message" . PHP_EOL;
        file_put_contents(__DIR__ . '/../../app.log', $ligne, FILE_APPEND);
    }
}
</code></pre>
  </div>

  <div>
    <h3>Utilisation dans <code>VehicleManager</code></h3>
    <pre><code class="language-php">&lt;?php
namespace App\Services;

use App\Traits\LoggableTrait;

class VehicleManager {
    use LoggableTrait; // Injection directe

    public function supprimer(int $id): bool {
        // Suppression du véhicule dans le JSON...
        $this-&gt;logAction("Véhicule #$id supprimé avec succès");
        return true;
    }
}
</code></pre>
  </div>
</div>

<div class="card card-primary" style="margin-top: 4px; padding: 6px 12px; font-size: 13.5px;">
  <strong>Avantage clé :</strong> N'importe quelle classe peut maintenant utiliser <code>$this-&gt;logAction(...)</code> sans duplication de code.
</div>

---

# 4.4 SOLUTION GLOBALE & LIVRABLES DU LAB

Architecture finale consolidée pour le projet **Gestion des Véhicules V2** :

<div class="grid-3">
  <div class="card card-success">
    <span class="badge badge-emerald">Livrable 1</span>
    <h3>Exceptions Métier</h3>
    <p>Validation stricte des champs du véhicule avant écriture dans <code>vehicles.json</code>.</p>
    <ul>
      <li>Code HTTP d'erreur standardisé (400, 404).</li>
      <li>Sécurité et prévisibilité de l'API.</li>
    </ul>
  </div>

  <div class="card card-success">
    <span class="badge badge-emerald">Livrable 2</span>
    <h3>Namespaces PSR-4</h3>
    <p>Séparation propre entre modèles, services métier, exceptions et traits.</p>
    <ul>
      <li>Zéro conflit de nom de classe.</li>
      <li>Chargement automatique ordonné.</li>
    </ul>
  </div>

  <div class="card card-success">
    <span class="badge badge-emerald">Livrable 3</span>
    <h3>Traits Transversaux</h3>
    <p>Comportements partagés sans duplication entre classes du backend.</p>
    <ul>
      <li>Traçabilité des opérations CRUD.</li>
      <li>Code maintenable et extensible.</li>
    </ul>
  </div>
</div>

<div class="card" style="margin-top: 10px; background: #0f172a; color: #f8fafc; padding: 10px 14px; font-family: Consolas, monospace; font-size: 13px;">
  <span style="color: #38bdf8;">$ php exceptions/exemple.php</span> ➔ Validation & capture d'erreurs<br>
  <span style="color: #38bdf8;">$ php namespaces/exemple.php</span> ➔ Organisation modulaire et imports<br>
  <span style="color: #38bdf8;">$ php traits/exemple.php</span>     ➔ Journalisation transversale des actions CRUD
</div>

