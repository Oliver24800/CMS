<?php

require 'includes/db_connect.php';


// stap 3. query opstellen
$voornaam = mysqli_real_escape_string($conn, $_POST["voornaam"]);
$achternaam = mysqli_real_escape_string($conn, $_POST["achternaam"]);
$afdeling = mysqli_real_escape_string($conn, $_POST["afdeling"]);
$toestelnummer = mysqli_real_escape_string($conn, $_POST["toestelnummer"]);

$query = "INSERT INTO cool
			(voornaam, achternaam, afdeling,  toestelnummer)
			VALUES
			('" . $voornaam . "', '" . $achternaam . "', '" . $afdeling . "', '" . $toestelnummer . "');";
			
			
// stap 4. query uitvoeren
mysqli_query($conn, $query) or die (mysqli_error($conn));

header('location: medewerkers_tonen.php');