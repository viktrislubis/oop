<?php
require_once("animal.php");
require_once("Frog.php");
require_once("Ape.php");

$sheep = new animal("shaun");
echo "Name: " . $sheep->merk . "<br>";
echo "legs: " . $sheep->kaki . "<br>";
echo "cold booded: " . $sheep->cold_blooded . "<br> <br>";

$kodok = new Frog("buduk");
echo "Name: " . $kodok->merk . "<br>";
echo "legs: " . $kodok->kaki . "<br>";
echo "cold booded: " . $kodok->cold_blooded . "<br> ";
echo "Yell: " . $kodok->lompat() . "<br> <br>";

$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->merk . "<br>";
echo "legs: " . $sungokong->kaki . "<br>";
echo "cold booded: " . $sungokong->cold_blooded . "<br>";
echo "Yell: " . $sungokong->jalan() . "<br>";
