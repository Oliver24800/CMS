<?php

// stap 1. verbinding maken met database server
$conn = mysqli_connect('localhost', 'root', '') or die('Kan geen verbinding maken.');

// stap 1a. charset verbinding controleren
mysqli_set_charset($conn, 'utf8');

//stap 2. selecteer database waar we mee willen werken
mysqli_select_db($conn, '24800') or die ('database niet beschikbaar');
