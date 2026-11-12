<?php
declare(strict_types=1);

namespace App\Traits {
    /**
     * Trait fournissant un comportement transversal de journalisation d'activités.
     */
    trait LoggableTrait
    {
        private array $historique = [];

        public function log(string $niveau, string $message): void
        {
            $horodatage = date('Y-m-d H:i:s');
            $classeAppelante = static::class;
            $entree = "[$horodatage] [$niveau] [$classeAppelante] $message";

            $this->historique[] = $entree;
            echo "📝 LOG ÉMIS : $entree\n";
        }

        public function getLogs(): array
        {
            return $this->historique;
        }
    }
}

namespace App\Services {
    use App\Traits\LoggableTrait;

    /**
     * Service 1 : Gère la logique des véhicules et utilise le Trait Loggable.
     */
    class VehicleService
    {
        use LoggableTrait; // Injection du trait

        public function creerVehicule(int $id, string $marque, string $plaque): void
        {
            // Simulation de création...
            $this->log("INFO", "Création du véhicule #$id ($marque, plaque: $plaque)");
        }

        public function supprimerVehicule(int $id): void
        {
            // Simulation de suppression...
            $this->log("WARNING", "Suppression définitive du véhicule #$id");
        }
    }

    /**
     * Service 2 : Gère la persistance JSON et utilise également le même Trait Loggable.
     */
    class JsonStorageService
    {
        use LoggableTrait; // Même trait injecté dans une classe totalement différente !

        public function sauvegarder(string $fichier, array $donnees): void
        {
            // Simulation de sauvegarde...
            $taille = count($donnees);
            $this->log("INFO", "Sauvegarde de $taille enregistrements dans le fichier '$fichier'");
        }
    }
}

namespace {
    use App\Services\VehicleService;
    use App\Services\JsonStorageService;

    echo "=== DÉMONSTRATION DES TRAITS EN PHP ===\n\n";

    $vehicleService = new VehicleService();
    $storageService = new JsonStorageService();

    echo "--- Opérations sur les véhicules ---\n";
    $vehicleService->creerVehicule(101, "Renault Clio 5", "54321-A-1");
    $vehicleService->supprimerVehicule(99);

    echo "\n--- Opérations de stockage ---\n";
    $storageService->sauvegarder("vehicles.json", [["id" => 101, "marque" => "Renault"]]);

    echo "\nNombre de logs dans VehicleService     : " . count($vehicleService->getLogs()) . "\n";
    echo "Nombre de logs dans JsonStorageService : " . count($storageService->getLogs()) . "\n";
    echo "\nPartage de code réussi sans héritage multiple !\n";
}
