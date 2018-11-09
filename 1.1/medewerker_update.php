<?php



require 'includes/db_connect.php';



// stap 3. query opstellen
$id = intval ($_POST["id"]);
$voornaam = mysqli_real_escape_string($conn, $_POST["voornaam"]);
$achternaam = mysqli_real_escape_string($conn, $_POST["achternaam"]);
$afdeling = mysqli_real_escape_string($conn, $_POST["afdeling"]);
$toestelnummer = mysqli_real_escape_string($conn, $_POST["toestelnummer"]);

$query = "UPDATE cool
			SET voornaam = '$voornaam', achternaam = '$achternaam', afdeling = '$afdeling', toestelnummer =  '$toestelnummer'
			WHERE id = $id";
			
//die($query);
			
// stap 4. query uitvoeren
mysqli_query($conn, $query) or die (mysqli_error($conn));

header('location: medewerkers_tonen.php');