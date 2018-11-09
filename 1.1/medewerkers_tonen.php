<?php

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
			cool";
// selecteer alleen medewerker waarvan id is meegestuurd
if (isset($_GET ['id'])) {
    $query .= " WHERE id=" . intval($_GET['id']) . ";";
}

// stap 4. query uitvoeren
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));

?>


<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Telefoonlijst</title>
</head>

<body>






<h1>Overzicht</h1>
<p><a href="medewerker_toevoegen.php">nieuwe medewerker toevoegen</a></p>

<?php if (mysqli_num_rows($result) > 0): ?>

    <table>
        <tr >
            <th>id</th>
            <th>voornaam</th>
            <th>achternaam</th>
            <th>afdeling</th>
            <th>toestelnummer</th>
            <th>portret</th>
            <th>acties</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td> <?php echo $row['id']; ?> </td>
                <td> <?php echo $row['voornaam']; ?> </td>
                <td> <?php echo $row['achternaam']; ?> </td>
                <td> <?php echo $row['afdeling']; ?> </td>
                <td> <?php echo $row['toestelnummer']; ?> </td>
                <td> <img src="<?php echo $row['portret']; ?>" alt="" width="81" height="auto"> </td>
                <td> <a href="medewerker_aanpassen.php?id=<?php echo $row['id']; ?>">edit</a>
                    <a href="medewerker_verwijderen.php?id=<?php echo $row['id']; ?>">delete</a></td>

            </tr>
        <?php endwhile; ?>
    </table>

<?php else: ?>
    <p class="warning">Geen medewerkers gevonden...</p>
<?php endif; ?>


</body>
</html>
