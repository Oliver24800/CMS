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
<title>Medewerker verwijderen</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<p>Weet u zeker dat u deze medewerker wilt verwijderen?</p>

<table class="datatable">
<?php foreach ($medewerker as $key => $value): ?>
	<tr>
        <th scope="row"><?=$key?></th>
        <td><?=$value?></td>
    </tr>
<?php endforeach; ?>
</table>

<form action="medewerker_delete.php" method="post" >
	<input type="hidden" name="id" value="<?php echo $medewerker['id']?>">
	<input type="submit" value="verwijderen">
</form>

<form action="medewerkers_tonen.php">
	<input type="submit" value="cancel">
</form>


</body>
</html>


