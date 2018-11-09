<?php



require 'includes/db_connect.php';



// stap 3. query opstellen
$id = intval ($_POST["id"]);

$query = "DELETE FROM cool
		  WHERE id = $id";
			
//die($query);
			
// stap 4. query uitvoeren
mysqli_query($conn, $query) or die (mysqli_error($conn));

header('location: medewerkers_tonen.php');