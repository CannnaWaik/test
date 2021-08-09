<?php
    require "functions.php";

    $southData = array();
    $westData = array();
    $eastData = array();
    $northData = array();

$db = mysqli_connect("localhost", "root", "", "wether");

if(!$db) die("Error"); else echo ("Succsess connect");

$southData = randFill(7);
$westData = randFill(7);
$eastData = randFill(7);
$northData = randFill(7);

intoDB($southData, $db, 'south');
intoDB($westData, $db, 'west');
intoDB($eastData, $db, 'east');
intoDB($northData, $db, 'north');

//mysqli_query($db, "INSERT INTO temperature (id, pole_name, pole_data) values (NULL, 'name', 20)");

fromDB($db, 'south');
?>