<?php
declare(strict_types=1);

namespace App\Exceptions;

/**
 * Exception spécifique levée lorsqu'une règle de validation d'un véhicule échoue.
 */
class VehicleValidationException extends \Exception
{
    private array $erreurs;

    public function __construct(array $erreurs, string $message = "Validation échouée", int $code = 400)
    {
        parent::__construct($message, $code);
        $this->erreurs = $erreurs;
    }

    public function getErreurs(): array
    {
        return $this->erreurs;
    }
}

/**
 * Service simple de validation pour le projet Gestion des Véhicules V2.
 */
class VehicleValidator
{
    public static function valider(array $donnees): array
    {
        $erreurs = [];

        if (empty(trim($donnees['marque'] ?? ''))) {
            $erreurs['marque'] = "La marque du véhicule est obligatoire.";
        }

        if (empty(trim($donnees['immatriculation'] ?? ''))) {
            $erreurs['immatriculation'] = "L'immatriculation est obligatoire.";
        }

        $km = $donnees['kilometrage'] ?? null;
        if (!is_int($km) || $km < 0) {
            $erreurs['kilometrage'] = "Le kilométrage doit être un entier positif ou nul.";
        }

        if (!empty($erreurs)) {
            throw new VehicleValidationException($erreurs, "Les données du véhicule sont invalides.");
        }

        return $donnees;
    }
}

// ==========================================
// DÉMONSTRATION PRATIQUE & EXÉCUTION
// ==========================================

echo "=== Test 1 : Données valides ===\n";
try {
    $vehiculeValide = [
        'id'              => 1,
        'marque'          => 'Renault Clio',
        'immatriculation' => '12345-A-1',
        'kilometrage'     => 45000,
        'statut'          => 'Disponible'
    ];

    $resultat = VehicleValidator::valider($vehiculeValide);
    echo "Succès : Véhicule '{$resultat['marque']}' validé sans erreur.\n\n";
} catch (VehicleValidationException $e) {
    echo "Erreur inattendue : " . $e->getMessage() . "\n\n";
}

echo "=== Test 2 : Données invalides (déclenchement de l'exception) ===\n";
try {
    $vehiculeInvalide = [
        'id'              => 2,
        'marque'          => '',             // Erreur : vide
        'immatriculation' => '',             // Erreur : vide
        'kilometrage'     => -1500,          // Erreur : négatif
        'statut'          => 'Disponible'
    ];

    VehicleValidator::valider($vehiculeInvalide);
    echo "Ce message ne doit pas s'afficher.\n";
} catch (VehicleValidationException $e) {
    echo "Exception interceptée avec succès !\n";
    echo "Message : " . $e->getMessage() . " (Code : " . $e->getCode() . ")\n";
    echo "Détail des erreurs pour l'API JSON :\n";
    foreach ($e->getErreurs() as $champ => $msg) {
        echo "  - [$champ] : $msg\n";
    }
}

