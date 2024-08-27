<?php
//Connexion à la base de données
$db = new mysqli("localhost", "root", "", "utilisateurs");

if ($db->connect_error) {
    echo "Failed to connect to MySQL" . $mysqli->connect_error;
    exit();
}
