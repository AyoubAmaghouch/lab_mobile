<?php
declare(strict_types=1);

namespace App\POO\Encapsulation;

use InvalidArgumentException;

/**
 * Classe Véhicule avec encapsulation stricte de son état interne.
 */
class VehiculeSecurise
{
    private const STATUTS_AUTORISES = ['Disponible', 'En location', 'En maintenance'];

    // Attributs privés protégés contre tout accès ou altération directe
    private int $id;
    private string $immatriculation;
    private int $kilometrage;
    private string $statut;
    private float $prixJournalier;

    public function __construct(
        int $id,
        string $immatriculation,
        int $kilometrageInitial,
        float $prixJournalier
    ) {
        $this->id = $id;
        $this->setImmatriculation($immatriculation);
        $this->kilometrage = max(0, $kilometrageInitial);
        $this->setPrixJournalier($prixJournalier);
        $this->statut = 'Disponible';
    }

    // --- ACCESSEURS (GETTERS) ---

    public function getId(): int
    {
        return $this->id;
    }

    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }

    public function getKilometrage(): int
    {
        return $this->kilometrage;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function getPrixJournalier(): float
    {
        return $this->prixJournalier;
    }

    // --- MUTATEURS (SETTERS) AVEC CONTRÔLE D'INTÉGRITÉ ---

    public function setImmatriculation(string $immatriculation): void
    {
        $immatNettoyee = trim($immatriculation);
        if (strlen($immatNettoyee) < 5) {
            throw new InvalidArgumentException("Erreur d'encapsulation : Numéro d'immatriculation invalide ($immatriculation).");
        }
        $this->immatriculation = strtoupper($immatNettoyee);
    }

    public function setPrixJournalier(float $prix): void
    {
        if ($prix <= 0) {
            throw new InvalidArgumentException("Erreur d'encapsulation : Le tarif journalier doit être strictement positif.");
        }
        $this->prixJournalier = $prix;
    }

    /**
     * Règle métier stricte : Le compteur kilométrique d'un véhicule ne peut jamais reculer !
     */
    public function actualiserKilometrage(int $nouveauKilometrage): void
    {
        if ($nouveauKilometrage < $this->kilometrage) {
            throw new InvalidArgumentException(
                "Fraude kilométrique rejetée : Le nouveau kilométrage ({$nouveauKilometrage} km) ne peut être inférieur à l'actuel ({$this->kilometrage} km)."
            );
        }
        $this->kilometrage = $nouveauKilometrage;
    }

    /**
     * Règle métier stricte : Seuls certains statuts normalisés sont permis.
     */
    public function changerStatut(string $nouveauStatut): void
    {
        if (!in_array($nouveauStatut, self::STATUTS_AUTORISES, true)) {
            $liste = implode(', ', self::STATUTS_AUTORISES);
            throw new InvalidArgumentException("Statut invalide '{$nouveauStatut}'. Statuts acceptés : {$liste}.");
        }
        $this->statut = $nouveauStatut;
    }
}

// ==========================================
// EXÉCUTION & DÉMONSTRATION DE L'ENCAPSULATION
// ==========================================

echo "=== DÉMONSTRATION : ENCAPSULATION EN PHP ===\n\n";

$auto = new VehiculeSecurise(101, "12345-B-26", 45000, 350.0);

echo "1. État initial sécurisé du véhicule :\n";
echo "   - Plaque       : " . $auto->getImmatriculation() . "\n";
echo "   - Kilométrage  : " . $auto->getKilometrage() . " km\n";
echo "   - Statut       : " . $auto->getStatut() . "\n";
echo "   - Tarif / jour : " . $auto->getPrixJournalier() . " DH\n\n";

echo "2. Mise à jour valide via les méthodes publiques :\n";
$auto->actualiserKilometrage(45350);
$auto->changerStatut('En location');
echo "   - Nouveau kilométrage : " . $auto->getKilometrage() . " km\n";
echo "   - Nouveau statut      : " . $auto->getStatut() . "\n\n";

echo "3. Test de protection : Tentative d'anomalie kilométrique (compteur falsifié) :\n";
try {
    $auto->actualiserKilometrage(40000); // 40000 < 45350 !
} catch (InvalidArgumentException $e) {
    echo "   [BLOCAGE SÉCURITÉ] " . $e->getMessage() . "\n\n";
}

echo "4. Test de protection : Tentative d'attribution d'un statut non autorisé :\n";
try {
    $auto->changerStatut('En panne sur l\'autoroute');
} catch (InvalidArgumentException $e) {
    echo "   [BLOCAGE SÉCURITÉ] " . $e->getMessage() . "\n";
}

