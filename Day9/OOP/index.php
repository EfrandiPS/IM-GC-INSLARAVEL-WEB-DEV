<?php

require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

function displayAnimalInfo($animal) {
    echo "Name : " . $animal->name . "<br>";
    echo "legs : " . $animal->legs . "<br>";
    echo "cold blooded : " . $animal->cold_blooded . "<br>";
}

$sheep = new Animal("shaun");
displayAnimalInfo($sheep);
echo "<br>";


$kodok = new Frog("buduk");
displayAnimalInfo($kodok);
echo "Jump : ";
$kodok->jump();
echo "<br><br>";

$sungokong = new Ape("kera sakti");
displayAnimalInfo($sungokong);
echo "Yell : ";
$sungokong->yell();
echo "<br>";

?>
