<?php

$db = new PDO(
    'mysql:host=db.3wa.io;port=3306;dbname=davidsim_secu',
    'davidsim',
    '83c8b946aee433563583381d62aa9c15'
);

$queryString = "SELECT * FROM users WHERE email=".$_POST["username"];
var_dump($queryString);
$query = $db->prepare($queryString);
$query->execute();

?>
