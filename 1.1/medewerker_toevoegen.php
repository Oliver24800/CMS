<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulier</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<form action="medewerker_insert.php" method="post">
	<label for="voornaam">voornaam</label>
	<input type="text" id='voornaam' name='voornaam'>
	<label for="achternaam">achternaam</label>
	<input type="text" id='achternaam' name='achternaam'>
	<label for="afdeling">afdeling</label>
	<input type="text" id='afdeling' name='afdeling'>
	<label for="toestelnummer">toestelnummer</label>
	<input type="text" id='toestelnummer' name='toestelnummer'>
	<input type="submit" value="toevoegen">
</form>

</body>
</html>