<?php
declare(strict_types=1);

namespace App\POO\Contracts;

/**
 * Interface : Contrat technique qui spécifie les méthodes obligatoires
 * pour tout système de persistance des véhicules.
 */
interface VehiculeRepositoryInterface
{
    public function ajouter(array $vehicule): bool;
    public function trouverParId(int $id): ?array;
    public function listerTous(): array;
    public function supprimer(int $id): bool;
}

/**
 * Implémentation concrète du contrat pour le stockage en mémoire/JSON.
 */
class JsonVehiculeRepository implements VehiculeRepositoryInterface
{
    private array $donnees = [];

    public function ajouter(array $vehicule): bool
    {
        $id = $vehicule['id'] ?? (count($this->donnees) + 1);
        $vehicule['id'] = $id;
        $this->donnees[$id] = $vehicule;
        return true;
    }

    public function trouverParId(int $id): ?array
    {
        return $this->donnees[$id] ?? null;
    }

    public function listerTous(): array
    {
        return array_values($this->donnees);
    }

    public function supprimer(int $id): bool
    {
        if (isset($this->donnees[$id])) {
            unset($this->donnees[$id]);
            return true;
        }
        return false;
    }
}

// ==========================================
// EXÉCUTION & DÉMONSTRATION DU CONTRAT
// ==========================================

echo "=== DÉMONSTRATION : INTERFACE EN PHP ===\n\n";

// Le code client dépend de l'Interface, pas de l'implémentation directe !
function executerCrud(VehiculeRepositoryInterface $repository): void
{
    echo "1. Ajout de véhicules via le contrat d'interface :\n";
    $repository->ajouter(["marque" => "Peugeot 208", "plaque" => "12345-A-1", "statut" => "Disponible"]);
    $repository->ajouter(["marque" => "Renault Clio 5", "plaque" => "67890-B-1", "statut" => "En mission"]);

    echo "Total en stock : " . count($repository->listerTous()) . " véhicules.\n\n";

    echo "2. Recherche par ID (ID: 1) :\n";
    $v1 = $repository->trouverParId(1);
    if ($v1 !== null) {
        echo "   Véhicule trouvé : {$v1['marque']} (Plaque : {$v1['plaque']})\n\n";
    }

    echo "3. Suppression du véhicule #2 :\n";
    $supprime = $repository->supprimer(2);
    echo "   Résultat de la suppression : " . ($supprime ? "Succès" : "Échec") . "\n";
    echo "   Nombre restant : " . count($repository->listerTous()) . " véhicule(s).\n";
}

$repo = new JsonVehiculeRepository();
executerCrud($repo);

