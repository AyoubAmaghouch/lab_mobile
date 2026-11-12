<?php
declare(strict_types=1);

// ==========================================
// 1. DÉFINITION DU MODÈLE DANS App\Models
// ==========================================
namespace App\Models {
    class Vehicle
    {
        public function __construct(
            public int $id,
            public string $marque,
            public string $immatriculation,
            public int $kilometrage = 0,
            public string $statut = 'Disponible'
        ) {}

        public function toArray(): array
        {
            return [
                'id'              => $this->id,
                'marque'          => $this->marque,
                'immatriculation' => $this->immatriculation,
                'kilometrage'     => $this->kilometrage,
                'statut'          => $this->statut
            ];
        }
    }
}

// ==========================================
// 2. DÉFINITION DU SERVICE DANS App\Services
// ==========================================
namespace App\Services {
    // Import explicite de la classe Vehicle depuis l'espace App\Models
    use App\Models\Vehicle;

    class VehicleManager
    {
        /** @var Vehicle[] */
        private array $flotte = [];

        public function ajouterVehicule(int $id, string $marque, string $plaque, int $km = 0): Vehicle
        {
            $vehicule = new Vehicle($id, $marque, $plaque, $km);
            $this->flotte[$id] = $vehicule;
            return $vehicule;
        }

        public function listerTous(): array
        {
            return array_map(fn(Vehicle $v) => $v->toArray(), $this->flotte);
        }

        public function compter(): int
        {
            return count($this->flotte);
        }
    }
}

// ==========================================
// 3. SCRIPT D'EXÉCUTION PRINCIPAL
// ==========================================
namespace {
    // Import des services et modèles avec 'use'
    use App\Models\Vehicle;
    use App\Services\VehicleManager;

    echo "=== DÉMONSTRATION DES NAMESPACES EN PHP ===\n\n";

    $manager = new VehicleManager();

    // Ajout de véhicules via le gestionnaire
    $v1 = $manager->ajouterVehicule(1, "Dacia Sandero", "12345-B-1", 32000);
    $v2 = $manager->ajouterVehicule(2, "Peugeot 208",   "67890-A-1", 15400);

    echo "Classes résolues avec succès via leurs namespaces :\n";
    echo "  - Modèle  : " . Vehicle::class . "\n";
    echo "  - Service : " . VehicleManager::class . "\n\n";

    echo "Flotte enregistrée (" . $manager->compter() . " véhicules) :\n";
    foreach ($manager->listerTous() as $vehiculeData) {
        echo "  - [#{$vehiculeData['id']}] {$vehiculeData['marque']} | Plaque : {$vehiculeData['immatriculation']} | {$vehiculeData['kilometrage']} km\n";
    }
}

