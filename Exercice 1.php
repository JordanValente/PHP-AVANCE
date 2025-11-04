<!--
<form method="post">
    Entrez votre date de naissance :
    <input type="date" name="naissance" required>
    <input type="submit" value="Calculer mon âge">
</form>
-->
<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date_naissance = new DateTime($_POST["naissance"]);
    $date_ajd = new DateTime();
    $age = $date_ajd->diff($date_naissance)->y;

    echo "Tu as " . $age . " ans !";
}
*/
?>
<!--EX1-->

<?php
$annenaissance = 1904;
$Agecor = 2025 - $annenaissance;
 echo "votre age est :<br>" . $Agecor . " ans"."<br>";
  if($Agecor % 2 == 0) {
      echo "alors votre age est pair<br>";
  }

  else {echo "votre age est Impair<br>";}
  if($Agecor > 18) {
      echo "Vous etes majeur<br>";
  }
  else {echo "vous etes mineur<br>";}
echo "<br>";
echo "====================================================";
echo "<br>";
  ?>



<?php
$years = [2025,2026,2027,2028];
echo "Avec le for"."<br>";
for($i = 0; $i < count($years); $i++) {
    echo $years[$i]."<br>";
}
echo "<br>";
echo "====================================================";
echo "<br>";
echo "Avec le foreach"."<br>";
foreach ($years as $value) {
    echo $value."<br>";
}
?>
<!--EX2-->

<?php
echo "<br>";
echo "====================================================";
echo "<br>";
$annees_naissance = [1960,1985,2007,1999,2010,1975];

$annee_min = min($annees_naissance);
$annee_max = max($annees_naissance);

$parite= 0;
foreach ($annees_naissance as $annee) {
    if ($annee % 2 == 0) {
        $parite++;
    }
}
echo "année la plus grande : <br>".$annee_max."<br>";
echo "année la plus petite : <br>".$annee_min."<br>";
echo "nombre d'année paires : <br>".$parite."<br>";
echo "<br>";
echo "====================================================";
echo "<br>";
?>
<!--EX3-->

<?php
// Définition de la classe Personne
class Personne {
    // Attributs
    public $nomex2;
    public $prenomex2;
    public $ageex2;

    // Méthode pour afficher l'identité
    public function monIdentite() {
        echo "Nom : " . $this->nomex2 . "<br>";
        echo "Prénom : " . $this->prenomex2 . "<br>";
        echo "Âge : " . $this->ageex2 . " ans<br>";
    }
    // Méthode pour afficher uniquement le nom
    public function afficheMonNom() {
        return "Mon nom est " . $this->nomex2;
    }
}

// Création d'un objet Personne
$personne1 = new Personne();
$personne1->nomex2 = "Valente";
$personne1->prenomex2 = "Jordan";
$personne1->ageex2 = 18;


// Appel de la méthode
$personne1->monIdentite(); echo "<br>";
echo $personne1->afficheMonNom();
echo "<br>";
echo "====================================================";
echo "<br>";
?>
<!--EX3 Voiture -->
<?php
class Voiture {
    public $marque;
    public $modele;
    public $anneDeFabrication;
    public $couleur;


    public function afficher() {
        echo "Marque : " . $this->marque . "<br>";
        echo "Année de fabrication : " . $this->anneDeFabrication . "<br>";
        echo "Couleur : " . $this->couleur . "<br>";
        echo "modele : " . $this->modele . "<br>";
    }
}


$maVoiture = new Voiture();
$maVoiture->marque = "Renault";
$maVoiture->modele = "clio4rs";
$maVoiture->anneDeFabrication = 2013;
$maVoiture->couleur = "Rouge et blanche";


$maVoiture->afficher();
echo "<br>";
echo "====================================================";
echo "<br>";
?>
<!--construction -->
<?php
// Définition de la classe Personne
class Personneco {
    public $nomco;
    public $prenomco;
    public $ageco;

    // Constructeur
    public function __construct($nomco_param, $prenomco_param, $ageco_param) {
        $this->nomco= $nomco_param;
        $this->prenomco = $prenomco_param;
        $this->ageco = $ageco_param;
    }

    // Méthode pour afficher l'identité
    public function monIdentiteco() {
        echo "Nom : " . $this->nomco . "<br>";
        echo "Prénom : " . $this->prenomco . "<br>";
        echo "Âge : " . $this->ageco . " ans<br>";
    }

    // Méthode pour afficher uniquement le nom
    public function afficheMonNomco() {
        return "Mon nom est " . $this->nomco;
    }
}

// Création d'un objet Personne avec le constructeur
$personne1 = new Personneco("José", "Ferdinand", 42);

// Appel des méthodes
$personne1->monIdentiteco();
echo "<br>";
echo $personne1->afficheMonNomco();
echo "<br>";
echo "====================================================";
echo "<br>";
?>
<!--construction voiture -->
<?php

class Vehiculevoiture {
    public $modele;
    public $kilometrage;
    public $typeCarburant;


    public function __construct($modele_param, $km_param, $carburant_param) {
        $this->modele = $modele_param;
        $this->kilometrage = $km_param;
        $this->typeCarburant = $carburant_param;
    }


    public function afficher() {
        echo "Modèle : " . $this->modele . "<br>";
        echo "Kilométrage : " . $this->kilometrage . " km<br>";
        echo "Type de carburant : " . $this->typeCarburant . "<br>";
    }
}


$maVoiture = new Vehiculevoiture("Renault Clio", 85000, "Diesel");

// Appel de la méthode
$maVoiture->afficher();
?>
