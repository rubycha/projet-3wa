<?php
define('DB_SERVEUR', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'registration');

$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($connect === false){
    exit("ERREUR : impossible de se connecter.". mysqli_connect_error());

}