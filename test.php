<?php 

include_once('./animals/terrestrial/tiger.php');
include_once('./animals/terrestrial/bear.php');

session_start();

//  TEST TIGRE

// $tiger = new Tiger(150.7, 85.1, 6);

// echo $tiger;
// echo '<br>';

// $tiger->makeSound('graouuuu');

// $tiger->setIsHungry(true);
// $tiger->setIsSick(true);
// $tiger->sleep();

// echo $tiger;

// $tiger->eating();
// $tiger->cure();
// $tiger->wakeUp();

// echo '<br>';

// echo $tiger;

// echo '<br>';

// $tiger->wander();


// TEST BEAR 

$bear = new Bear(300.5, 1.5, 22);

echo $bear;
echo '<br>';

$bear->makeSound('GROAR');

$bear->setIsHungry(true);
$bear->setIsSick(true);
$bear->sleep();

echo $bear;

$bear->eating();
$bear->cure();
$bear->wakeUp();

echo '<br>';

echo $bear;

echo '<br>';

$bear->wander();

?>