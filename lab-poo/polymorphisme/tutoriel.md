# Tutoriel : Polymorphisme en PHP

## 1. Objectif
Comprendre le principe du **polymorphisme** : appeler une méthode identique (`calculerFacture()`) sur différents types d'objets, chacun exécutant son propre comportement selon sa classe concrète.

## 2. Fichiers concernés
- [`exemple.php`](file:///c:/Lab/lab-poo/polymorphisme/exemple.php) : Contrat `FacturableInterface` et implémentations spécialisées (`VoitureTourisme`, `Utilitaire`, `VehiculeElectrique`).

## 3. Commande d'exécution
Depuis le répertoire racine :
```bash
php lab-poo/polymorphisme/exemple.php
```

## 4. Parcours détaillé du code

### Étape 1 : Le contrat commun
```php
interface FacturableInterface
{
    public function getDesignation(): string;
    public function calculerFacture(int $jours): float;
}
```
- Toutes les classes de véhicules s'engagent à fournir une méthode `calculerFacture(int $jours)`.

### Étape 2 : Variantes de calcul selon le véhicule
- **Voiture de Tourisme :** Applique une remise de 10% si la location dépasse 5 jours.
- **Utilitaire :** Ajoute un forfait fixe d'entretien/nettoyage industriel (+150 DH).
- **Véhicule Électrique :** Applique un bonus écologique (-50 DH).

### Étape 3 : Traitement unifié (Polymorphisme en action)
```php
foreach ($flotte as $vehicule) {
    $sousTotal = $vehicule->calculerFacture($dureeLocation);
    ...
}
```
- La boucle ne contient aucun `if ($vehicule instanceof Voiture)` ou `switch`. Le moteur PHP résout dynamiquement la méthode correspondant à l'instance courante.

## 5. Résultat attendu
```text
=== DÉMONSTRATION : POLYMORPHISME EN PHP ===

Calcul automatique de la facture pour 6 jours de location :
--------------------------------------------------------------------
1. Voiture de Tourisme (Peugeot 208)   -> Facture :  1728.00 DH
2. Fourgon Utilitaire (Renault Master) -> Facture :  3500.00 DH
3. Véhicule Électrique (Tesla Model 3) -> Facture :  2650.00 DH
--------------------------------------------------------------------
Total général facturé pour la flotte : 7878.00 DH
```

## 6. Intégration dans le projet Gestion des Véhicules V2
Le polymorphisme permet au module de facturation et de réservation du projet d'ajouter n'importe quel nouveau type de véhicule (moto, camion frigorifique, trottinette) sans jamais modifier le code du gestionnaire de flotte ou de la caisse.

