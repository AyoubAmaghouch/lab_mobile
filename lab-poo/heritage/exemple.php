<?php
declare(strict_types=1);

namespace App\POO\Inheritance;

/**
 * Classe Parente : Rassemble toutes les caractéristiques communes de la flotte.
 */
class VehiculeBase
{
    public function __construct(
        protected int $id,
        protected string $marque,
        protected string $modele,
        protected int $annee,
        protected string $immatriculation
    ) {}

    public function afficherFiche(): string
    {
        return "[#{$this->id}] {$this->marque} {$this->modele} ({$this->annee}) - Plaque : {$this->immatriculation}";
    }

    public function getMarque(): string
    {
        return $this->marque;
    }
}

/**
 * Classe Fille 1 : Spécialisation Voiture par Héritage.
 */
class Voiture extends VehiculeBase
{
    public function __construct(
        int $id,
        string $marque,
        string $modele,
        int $annee,
        string $immatriculation,
        private string $carburant = "Essence",
        private int $portes = 5
    ) {
        // Appel du constructeur parent
        parent::__construct($id, $marque, $modele, $annee, $immatriculation);
    }

    // Réutilisation et enrichissement de la méthode parente
    public function afficherFiche(): string
    {
        return parent::afficherFiche() . " | Type: Voiture ($this->portes portes, $this->carburant)";
    }
}

/**
 * Classe Fille 2 : Spécialisation Camion par Héritage.
 */
class Camion extends VehiculeBase
{
    public function __construct(
        int $id,
        string $marque,
        string $modele,
        int $annee,
        string $immatriculation,
        private float $chargeMaxTonnes,
        private int $essieux = 2
    ) {
        parent::__construct($id, $marque, $modele, $annee, $immatriculation);
    }

    public function afficherFiche(): string
    {
        return parent::afficherFiche() . " | Type: Camion (Charge: {$this->chargeMaxTonnes}T, {$this->essieux} essieux)";
    }
}

// ==========================================
// EXÉCUTION & DÉMONSTRATION DE L'HÉRITAGE
// ==========================================

echo "=== DÉMONSTRATION : HÉRITAGE EN PHP ===\n\n";

$voiture = new Voiture(1, "Volkswagen", "Golf 8", 2023, "34567-B-1", "Hybride", 5);
$camion  = new Camion(2, "Mercedes-Benz", "Actros", 2021, "98712-A-1", 18.5, 3);

echo "1. Fiche Voiture (héritée et enrichie) :\n";
echo "   " . $voiture->afficherFiche() . "\n\n";

echo "2. Fiche Camion (héritée et enrichie) :\n";
echo "   " . $camion->afficherFiche() . "\n\n";

echo "3. Vérification de la hiérarchie de types (instanceof) :\n";
echo "   - \$voiture est une instance de Voiture      : " . ($voiture instanceof Voiture ? "OUI" : "NON") . "\n";
echo "   - \$voiture est une instance de VehiculeBase : " . ($voiture instanceof VehiculeBase ? "OUI" : "NON") . "\n";
echo "   - \$camion est une instance de VehiculeBase  : " . ($camion instanceof VehiculeBase ? "OUI" : "NON") . "\n";

