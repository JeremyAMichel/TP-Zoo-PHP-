<?php 

include_once('./animals/terrestrial/tiger.php');

session_start();

$tiger = new Tiger(150.7, 85.1, 6);
echo $tiger;
echo '<br>';

$tiger->makeSound('graouuuu');

$tiger->setIsHungry(true);
$tiger->setIsSick(true);
$tiger->sleep();

echo $tiger;

$tiger->eating();
$tiger->cure();
$tiger->wakeUp();

echo '<br>';

echo $tiger;

echo '<br>';

$tiger->wander();

?>