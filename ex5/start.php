<?php

require "functions.php";

$southData = array();
$westData = array();
$eastData = array();
$northData = array();

$db = mysqli_connect("localhost", "root", "", "wether");

if(!$db) die("Error!"); else echo ("Succsess connect");

$southData = randFill(7);
$westData = randFill(7);
$eastData = randFill(7);
$northData = randFill(7);

intoDB($southData, $db, 'south');
intoDB($westData, $db, 'west');
intoDB($eastData, $db, 'east');
intoDB($northData, $db, 'north');

//mysqli_query($db, "INSERT INTO temperature (id, pole_name, pole_data) values (NULL, 'name', 20)");

$out = mysqli_fetch_all(fromDB($db, 'south'));
echo "<br> средняя температура south: " . sum($out);

$out = mysqli_fetch_all(fromDB($db, 'west'));
echo "<br> средняя температура west: " . sum($out);

$out = mysqli_fetch_all(fromDB($db, 'east'));
echo "<br> средняя температура east: " . sum($out);

$out = mysqli_fetch_all(fromDB($db, 'north'));
echo "<br> средняя температура north: " . sum($out);


?>