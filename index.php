<?php
// index.php
require_once('Bicycle.php');
require_once('Car.php');

$listColors=["red","green","blue","black"];

// Calcul d'un couleur au hasard
function randColor($color) : string
{
    return $color[rand(0,1000)%4];
};

$myFirstBicycle = new Bicycle(randColor($listColors));
echo "The <span>first bicyle<span> ".$myFirstBicycle->color." ".$myFirstBicycle->forward()."</br>";

$mySecondBicycle = new Bicycle(randColor($listColors));
echo "The second bicyle ".$mySecondBicycle->color." ".$mySecondBicycle->forward()."</br>";;

$myThreeBicycle = new Bicycle(randColor($listColors));
echo "The three bicyle ".$myThreeBicycle->color." ".$myThreeBicycle->forward()."</br>";;

echo "The first bicyle ".$myFirstBicycle->color." ".$myFirstBicycle->brake()."</br>";
echo " The second bicyle ".$mySecondBicycle->color." ".$mySecondBicycle->brake()."</br>";;

$myFirstCar = new car(randColor($listColors),2,"essence");
$myFirstCar->setName("first");
echo $myFirstCar->getName()." : ".$myFirstCar->forward()."</br>";

$mySecondCar = new car(randColor($listColors),2,"electric");
$mySecondCar->setName("second");
echo $mySecondCar->getName()." : ".$mySecondCar->start();
echo $mySecondCar->getName()." ".$mySecondCar->forward()."</br>";;

$myThreeCar = new car(randColor($listColors),2,"eolienne");
$myThreeCar->setName("three");
echo $myThreeCar->getName()." : ".$myThreeCar->forward()."</br>";;

echo $myFirstCar->getName()." ".$myFirstCar->brake()."</br>";
echo $mySecondCar->getName()." ".$mySecondCar->brake()."</br>";;
