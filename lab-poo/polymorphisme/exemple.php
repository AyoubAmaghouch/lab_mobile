<?php
declare(strict_types=1);

namespace App\POO\Polymorphism;

/**
 * Interface commune pour tous les éléments facturables de la flotte.
 */
interface FacturableInterface
{
    public function getDesignation(): string;
    public function calculerFacture(int $jours): float;
}

/**
 * Classe 1 : Voiture de Tourisme
 */
class VoitureTourisme implements FacturableInterface
{
    public function __construct(
        private string $modele,
        private float $tarifJournalier = 300.0
    ) {}

    public function getDesignation(): string
    {
        return "Voiture de Tourisme ({$this->modele})";
    }

    public function calculerFacture(int $jours): float
    {
        $total = $this->tarifJournalier * $jours;
        // Remise de 10% pour les locations longue durée (> 5 jours)
        if ($jours > 5) {
            $total *= 0.90;
        }
        return $total;
    }
}

/**
 * Classe 2 : Véhicule Utilitaire
 */
class Utilitaire implements FacturableInterface
{
    public function __construct(
        private string $modele,
        private float $tarifJournalier = 500.0,
        private float $fraisNettoyageIndus = 150.0
    ) {}

    public function getDesignation(): string
    {
        return "Fourgon Utilitaire ({$this->modele})";
    }

    public function calculerFacture(int $jours): float
    {
        // Forfait journalier + taxe/frais d'entretien fixe
        return ($this->tarifJournalier * $jours) + $this->fraisNettoyageIndus;
    }
}

/**
 * Classe 3 : Véhicule Électrique
 */
class VehiculeElectrique implements FacturableInterface
{
    public function __construct(
        private string $modele,
        private float $tarifJournalier = 400.0
    ) {}

    public function getDesignation(): string
    {
        return "Véhicule Électrique ({$this->modele})";
    }

    public function calculerFacture(int $jours): float
    {
        // Prime écologique : 50 DH de réduction totale
        return max(0, ($this->tarifJournalier * $jours) - 50.0);
    }
}

// ==========================================
// EXÉCUTION & DÉMONSTRATION DU POLYMORPHISME
// ==========================================

echo "=== DÉMONSTRATION : POLYMORPHISME EN PHP ===\n\n";

/** @var FacturableInterface[] $flotte */
$flotte = [
    new VoitureTourisme("Peugeot 208", 320.0),
    new Utilitaire("Renault Master", 550.0, 200.0),
    new VehiculeElectrique("Tesla Model 3", 450.0),
];

$dureeLocation = 6; // jours
echo "Calcul automatique de la facture pour {$dureeLocation} jours de location :\n";
echo "--------------------------------------------------------------------\n";

$montantTotalFlotte = 0.0;

// Traitement uniforme grâce au polymorphisme :
// Une seule méthode 'calculerFacture()' appelée sur différents types d'objets.
foreach ($flotte as $index => $vehicule) {
    $sousTotal = $vehicule->calculerFacture($dureeLocation);
    $montantTotalFlotte += $sousTotal;

    printf(
        "%d. %-35s -> Facture : %8.2f DH\n",
        $index + 1,
        $vehicule->getDesignation(),
        $sousTotal
    );
}

echo "--------------------------------------------------------------------\n";
printf("Total général facturé pour la flotte : %.2f DH\n", $montantTotalFlotte);

