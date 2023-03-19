<?php 

include_once('./animals/terrestrial/tiger.php');
include_once('./animals/terrestrial/bear.php');

include_once('./animals/marine/fish.php');

include_once('./animals/aerial/eagle.php');

session_start();

//  -------------------------TEST TIGER --------------------------------------------

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


// -------------------------TEST BEAR --------------------------------------------

// $bear = new Bear(300.5, 1.5, 22);

// echo $bear;
// echo '<br>';

// $bear->makeSound('GROAR');

// $bear->setIsHungry(true);
// $bear->setIsSick(true);
// $bear->sleep();

// echo $bear;

// $bear->eating();
// $bear->cure();
// $bear->wakeUp();

// echo '<br>';

// echo $bear;

// echo '<br>';

// $bear->wander();

// -------------------------TEST FISH --------------------------------------------

// $fish = new Fish(0.05, 0.07, 1);

// echo $fish;
// echo '<br>';

// $fish->makeSound('bloups bloups');

// $fish->setIsHungry(true);
// $fish->setIsSick(true);
// $fish->sleep();

// echo $fish;

// $fish->eating();
// $fish->cure();
// $fish->wakeUp();

// echo '<br>';

// echo $fish;

// echo '<br>';

// $fish->swim();

// -------------------------TEST EAGLE --------------------------------------------

$eagle = new Eagle(4.1, 0.8, 17);

echo $eagle;
echo '<br>';

$eagle->makeSound('flap-flap-flap');

$eagle->setIsHungry(true);
$eagle->setIsSick(true);
$eagle->sleep();

echo $eagle;

$eagle->eating();
$eagle->cure();
$eagle->wakeUp();

echo '<br>';

echo $eagle;

echo '<br>';

$eagle->fly();


?>