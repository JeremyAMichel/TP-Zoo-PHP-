<?php 

include_once('./animals/terrestrial/tiger.php');
include_once('./animals/terrestrial/bear.php');

include_once('./animals/marine/fish.php');

include_once('./animals/aerial/eagle.php');

include_once('./enclosure/enclosure.php');
include_once('./enclosure/aviary.php');
include_once('./enclosure/aquarium.php');

include_once('./employee/employee.php');

include_once('./zoo/zoo.php');

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

// $eagle = new Eagle(4.1, 0.8, 17);

// echo $eagle;
// echo '<br>';

// $eagle->makeSound('flap-flap-flap');

// $eagle->setIsHungry(true);
// $eagle->setIsSick(true);
// $eagle->sleep();

// echo $eagle;

// $eagle->eating();
// $eagle->cure();
// $eagle->wakeUp();

// echo '<br>';

// echo $eagle;

// echo '<br>';

// $eagle->fly();

// -------------------------TEST CLASSIC ENCLOSURE --------------------------------------------

// $classicEnclosure = new Enclosure('Classic');

// echo $classicEnclosure;

// $bear1 = new Bear(300.5, 1.5, 22);
// $bear2 = new Bear(320.1, 1.6, 25);
// $tiger1 = new Tiger(150.7, 85.1, 6);

// $classicEnclosure->addAnimal($bear1);

// //trying to add a tiger, but the enclosure already contains a bear
// $classicEnclosure->addAnimal($tiger1);

// echo $classicEnclosure;

// // add a second bear
// $classicEnclosure->addAnimal($bear2);

// // does it accept duplicates
// $classicEnclosure->addAnimal($bear2);

// echo $classicEnclosure;

// // display the characteristics of the animals the enclosure contains
// $classicEnclosure->displayAnimalCharacteristics();

// $classicEnclosure->removeAnimal($bear1);

// echo $classicEnclosure;

// // enclosure get dirty, trying to clean it
// $classicEnclosure->setCleanliness('dirty');
// $classicEnclosure->cleaning();


// $classicEnclosure->removeAnimal($bear2);

// echo $classicEnclosure;

// // since the enclosure is empty we can finally clean it
// $classicEnclosure->cleaning();

// // since the enclosure is empty we can finally add our tiger
// $classicEnclosure->addAnimal($tiger1);

// echo $classicEnclosure;

// -------------------------TEST AVIARY ENCLOSURE --------------------------------------------

// $aviary = new Aviary(50, 'Random Aviary');

// echo $aviary;

// $bear1 = new Bear(300.5, 1.5, 22);
// $eagle = new Eagle(4.1, 0.8, 17);

// $aviary->addAnimal($bear1);
// $aviary->addAnimal($eagle);

// echo $aviary;

// $aviary->displayAnimalCharacteristics();

// $aviary->removeAnimal($eagle);

// //the aviary get dirty, even in the top of it

// $aviary->setCleanliness('dirty');
// $aviary->setTopCleanliness('dirty');

// echo $aviary;

// $aviary->cleaning();

// echo $aviary;

// -------------------------TEST AQUARIUM ENCLOSURE --------------------------------------------

// $aquarium = new Aquarium(50, 'Random Aquarium');

// echo $aquarium;

// $eagle = new Eagle(4.1, 0.8, 17);
// $fish = new Fish(0.05, 0.07, 1);

// $aquarium->addAnimal($eagle);
// $aquarium->addAnimal($fish);

// echo $aquarium;

// $aquarium->displayAnimalCharacteristics();

// $aquarium->removeAnimal($fish);

// // the aquarium get dirty
// $aquarium->setCleanliness('dirty');

// echo $aquarium;

// $aquarium->cleaning();

// echo $aquarium;


// -------------------------TEST EMPLOYEE --------------------------------------------

// $employee = new Employee('Lucas Charpentier', 28, 'male');

// echo $employee;

// $classicEnclosure = new Enclosure('Classic');
// $cissalcEnclosure = new Enclosure('Cissalc');
// $bear1 = new Bear(300.5, 1.5, 22);
// $tiger1 = new Tiger(300.5, 1.5, 22);
// $bear2 = new Bear(320.1, 1.6, 25);
// $bear3 = new Bear(12.1, 1.6, 25);
// $bear4 = new Bear(444.1, 1.6, 25);
// $bear5 = new Bear(555.1, 1.6, 25);
// $bear6 = new Bear(222.1, 1.6, 25);
// $bear7 = new Bear(333.1, 1.6, 25);

// $employee->addToEnclosure($classicEnclosure, $bear1);
// $employee->addToEnclosure($classicEnclosure, $bear2);
// $employee->addToEnclosure($classicEnclosure, $bear3);
// $employee->addToEnclosure($classicEnclosure, $bear4);
// $employee->addToEnclosure($classicEnclosure, $bear5);
// $employee->addToEnclosure($classicEnclosure, $bear6);
// $employee->addToEnclosure($classicEnclosure, $bear7);

// $employee->checkEnclosure($classicEnclosure);
// $employee->checkEnclosure($cissalcEnclosure);

// $employee->removeFromEnclosure($classicEnclosure, $bear1);
// $employee->moveAnimal($classicEnclosure, $bear1, $cissalcEnclosure);


// $employee->checkEnclosure($classicEnclosure);
// $employee->checkEnclosure($cissalcEnclosure);


// $classicEnclosure->addAnimal($bear1);

// $classicEnclosure->addAnimal($bear2);

// $bear1->setIsHungry(true);
// $bear1->setIsSleeping(true);

// $employee->toFeed($classicEnclosure);

// $employee->checkEnclosure($classicEnclosure);



// $aquarium = new Aquarium(50, 'Random Aquarium');

// $fish = new Fish(0.05, 0.07, 1);

// $aquarium->addAnimal($fish);

// $employee->checkEnclosure($aquarium);

// $classicEnclosure = new Enclosure('Classic');
// $classicEnclosure->setCleanliness('dirty');
// // $classicEnclosure->addAnimal($bear1);

// echo $classicEnclosure;

// $employee->cleaning($classicEnclosure);

// echo $classicEnclosure;

// -------------------------TEST ZOO --------------------------------------------

$employee = new Employee('Lucas Charpentier', 28, 'male');
$zoo = new Zoo('testZoo', $employee, 10);
$bear1 = new Bear(300.5, 1.5, 22);
$classicEnclosure = new Enclosure('Classic');

$zoo->addEnclosure($classicEnclosure);
$classicEnclosure->addAnimal($bear1);

echo $zoo;

$zoo->displayEnclosureCharacteristicsAndContent();
$zoo->countAnimals();

?>