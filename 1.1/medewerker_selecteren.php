<?php

require 'includes/db_connect.php';



// stap 3. query opstellen
$query = "SELECT 
			 id
			 ,voornaam
		FROM
			cool";
			
// stap 4. query uitvoeren
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));

?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Telefoonlijst</title>
</head>

<body>
<?php if (mysqli_num_rows($result) > 0): ?>

	 <form method="get" action="medewerkers_tonen.php">
	 	<select name="id">
	<?php while ($row = mysqli_fetch_assoc($result)): ?>
	 <option value="<?php echo $row['id']; ?>"><?php echo $row['voornaam']; ?></option>  
	<?php endwhile; ?>
	   </select>
	   <input type="submit" value="verzenden">
	</form> 

<?php else: ?>
<p class="warning">Geen medewerkers gevonden...</p>
<?php endif; ?>


</body>
</html>