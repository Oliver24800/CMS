<?php

if (!isset($_GET['id'])) {
		header('location: medewerkers_tonen.php');
} else {
		$id = $_GET['id'];
}


require 'includes/db_connect.php';



// stap 3. query opstellen
$query = "SELECT 
			 id
			 ,voornaam
			 ,achternaam
			 ,afdeling
			 ,toestelnummer
			 ,portret
		FROM
			cool 
		WHERE id=" . intval($id) . ";";
	
// stap 4. query uitvoeren
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
$medewerker = mysqli_fetch_assoc($result);
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulier aanpassen</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<form action="medewerker_update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $medewerker['id']?>">
    <label for="voornaam">voornaam</label>
	<input type="text" id='voornaam' name='voornaam' value="<?php echo $medewerker['voornaam']?>">
	<label for="achternaam">achternaam</label>
	<input type="text" id='achternaam' name='achternaam' value="<?php echo $medewerker['achternaam']?>">
	<label for="afdeling">afdeling</label>
	<input type="text" id='afdeling' name='afdeling' value="<?php echo $medewerker['afdeling']?>">
	<label for="toestelnummer">toestelnummer</label>
	<input type="text" id='toestelnummer' name='toestelnummer' value="<?php echo $medewerker['toestelnummer']?>">
	<input type="submit" value="aanpassen">
</form>

</body>
</html>


