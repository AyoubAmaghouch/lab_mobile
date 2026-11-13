<?php
declare(strict_types=1);

namespace App\POO\AbstractClass;

/**
 * Classe Abstraite : sert de modèle de base pour tous les véhicules de la flotte.
 * Elle ne peut pas être instanciée directement.
 */
abstract class Vehicule
{
    public function __construct(
        protected int $id,
        protected string $marque,
        protected string $modele,
        protected float $prixJour
    ) {}

    // Méthode concrète : partagée telle quelle par tous les véhicules
    public function getIdentite(): string
    {
        return "[#{$this->id}] {$this->marque} {$this->modele}";
    }

    public function getPrixJour(): float
    {
        return $this->prixJour;
    }

    // Méthode abstraite : chaque type de véhicule DOIT définir son propre calcul
    abstract public function calculerCoutLocation(int $jours): float;
}

/**
 * Classe concrète dérivée qui implémente obligatoirement la méthode abstraite.
 */
class Voiture extends Vehicule
{
    public function __construct(
        int $id,
        string $marque,
        string $modele,
        float $prixJour,
        private int $nombrePlaces = 5
    ) {
        parent::__construct($id, $marque, $modele, $prixJour);
    }

    public function calculerCoutLocation(int $jours): float
    {
        // Remise de 10% si location de plus de 5 jours
        $total = $this->prixJour * $jours;
        if ($jours > 5) {
            $total *= 0.90;
        }
        return $total;
    }

    public function getNombrePlaces(): int
    {
        return $this->nombrePlaces;
    }
}

// ==========================================
// EXÉCUTION & DÉMONSTRATION
// ==========================================

echo "=== DÉMONSTRATION : CLASSE ABSTRAITE ===\n\n";

// 1. Instanciation de la classe concrète Voiture
$voiture = new Voiture(1, "Dacia", "Sandero", 250.0, 5);

echo "Véhicule créé : " . $voiture->getIdentite() . "\n";
echo "Nombre de places : " . $voiture->getNombrePlaces() . "\n";
echo "Tarif journalier de base : " . $voiture->getPrixJour() . " DH\n";

$jours = 7;
$cout = $voiture->calculerCoutLocation($jours);
echo "Coût pour $jours jours (avec remise > 5j) : $cout DH\n\n";

// 2. Preuve que l'instanciation directe d'une classe abstraite est impossible
echo "Tentative d'instancier directement la classe abstraite 'Vehicule' :\n";
try {
    $ref = new \ReflectionClass(Vehicule::class);
    if ($ref->isAbstract()) {
        echo "Sécurité confirmée : PHP empêche l'instanciation directe ('Vehicule' est abstraite).\n";
    }
} catch (\Throwable $e) {
    echo "Erreur : " . $e->getMessage() . "\n";
}

