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

<?php
echo "<br>";
echo "====================================================";
echo "<br>";
$annees_naissance = ["1960","1985","2007","1999","2010","1975"];
$annee_actuelle = date("2025");

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
?>

