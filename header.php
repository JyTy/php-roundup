<?php
require_once('skripte/ez_sql_core.php');
require_once('skripte/ez_sql_mysql.php');

// Vzpostavitev komunikacije z bazo
$db = new ezSQL_mysql('root','baze','sn_spletka','localhost');

// Funkcija za izpis arrayev
function pr($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SmartNinja PHP layout</title>
    
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="index.php">Domov</a></li>
                <li><a href="o-nas.php">O Nas</a></li>
				<li><a href="igra.php">Nagradna igra</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="add.php">Dodaj članek</a></li>
            </ul>
        </nav>