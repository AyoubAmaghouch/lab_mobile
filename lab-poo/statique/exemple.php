<?php
declare(strict_types=1);

namespace App\POO\StaticMembers;

use InvalidArgumentException;

/**
 * Gestionnaire de flotte utilisant des membres statiques (liés à la classe).
 */
class VehiculeFlotte
{
    // Propriété statique partagée entre TOUTES les instances
    private static int $compteurVehicules = 0;

    // Constante de classe
    public const DEVISE = "MAD";

    public function __construct(
        private int $id,
        private string $marque,
        private string $modele,
        private string $immatriculation
    ) {
        // Validation préalable via la méthode statique de classe
        if (!self::validerImmatriculationMaroc($this->immatriculation)) {
            throw new InvalidArgumentException("Format d'immatriculation non conforme : {$this->immatriculation}");
        }

        // Incrémentation du compteur global de classe
        self::$compteurVehicules++;
    }

    public function __destruct()
    {
        // Décrémentation automatique lors de la libération mémoire ou suppression
        self::$compteurVehicules--;
    }

    public function getDetails(): string
    {
        return "[#{$this->id}] {$this->marque} {$this->modele} ({$this->immatriculation})";
    }

    // --- MÉTHODES STATIQUES (ACCESSIBLES SANS INSTANCIATION) ---

    /**
     * Retourne le nombre total de véhicules instanciés en mémoire.
     */
    public static function getNombreTotal(): int
    {
        return self::$compteurVehicules;
    }

    /**
     * Valide le format d'immatriculation marocain (ex: 12345-A-26).
     */
    public static function validerImmatriculationMaroc(string $plaque): bool
    {
        // Expression régulière : 1 à 6 chiffres, tiret, lettre de série, tiret, 1 à 2 chiffres de préfecture
        return (bool) preg_match('/^[0-9]{1,6}-[A-Z]-[0-9]{1,2}$/', trim($plaque));
    }

    /**
     * Méthode utilitaire statique de mise en forme des prix.
     */
    public static function formaterPrix(float $montant): string
    {
        return number_format($montant, 2, ',', ' ') . " " . self::DEVISE;
    }
}

// ========================================================
// EXÉCUTION & DÉMONSTRATION DES MEMBRES STATIQUES
// ========================================================

echo "=== DÉMONSTRATION : MÉTHODES ET PROPRIÉTÉS STATIQUES ===\n\n";

// 1. Appel d'une méthode utilitaire statique AVANT toute instanciation
echo "1. Validation de plaques avec la méthode statique ::validerImmatriculationMaroc() :\n";
$plaques = ["12345-A-26", "99999-B-1", "INVALID_PLATE", "45-C-6"];
foreach ($plaques as $p) {
    $valide = VehiculeFlotte::validerImmatriculationMaroc($p);
    echo "   - Plaque '$p' -> " . ($valide ? "VALIDE [OK]" : "INVALIDE [X]") . "\n";
}

echo "\n2. Compteur global initial de véhicules dans la flotte :\n";
echo "   Total en mémoire : " . VehiculeFlotte::getNombreTotal() . "\n\n";

// 2. Création d'instances (chacune incrémente le compteur statique partagé)
echo "3. Création de 3 véhicules...\n";
$v1 = new VehiculeFlotte(1, "Renault", "Clio 5", "12345-A-26");
$v2 = new VehiculeFlotte(2, "Dacia", "Duster", "45678-B-1");
$v3 = new VehiculeFlotte(3, "Hyundai", "Tucson", "88231-D-50");

echo "   - " . $v1->getDetails() . "\n";
echo "   - " . $v2->getDetails() . "\n";
echo "   - " . $v3->getDetails() . "\n";

echo "\n4. Compteur global actualisé après instanciations :\n";
echo "   Total en mémoire : " . VehiculeFlotte::getNombreTotal() . " véhicules actifs.\n\n";

// 3. Appel de la méthode utilitaire statique de formatage
echo "5. Formatage financier statique (sans instancier d'objet) :\n";
echo "   Tarif journalier standard : " . VehiculeFlotte::formaterPrix(450.5) . "\n";
echo "   Total forfait flotte      : " . VehiculeFlotte::formaterPrix(1351.5) . "\n";

