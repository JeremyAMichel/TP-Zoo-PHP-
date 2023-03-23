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

if(isset($_POST['moveAnimal']) && isset($_POST['moveAnimalTo']) && isset($_POST['moveAnimalFrom'])){

    $enclosureFrom = $_SESSION['zoo']->getEnclosureByName($_POST['moveAnimalFrom']);
    $animal = $enclosureFrom->getAnimalById($_POST['moveAnimal']);
    $enclosureTo = $_SESSION['zoo']->getEnclosureByName($_POST['moveAnimalTo']);

    // if there is already an animal of the same species, or if there is no animals
    if($enclosureTo->getActualSpecies() == $animal->getSpecies() || $enclosureTo->getActualSpecies()=='none'){

        // if there is enough space for the animal
        if($enclosureTo->getLength() > count($enclosureTo->getAnimals())){
            $_SESSION['employee']->moveAnimal($enclosureFrom, $animal, $enclosureTo);
            unset($_SESSION['notEnoughSpaceMove']);
            unset($_SESSION['notSameSpeciesMove']);

        } else {
            $_SESSION['notEnoughSpaceMove']=1;
            unset($_SESSION['notSameSpeciesMove']);
        }
    } else {
        $_SESSION['notSameSpeciesMove']=1;
    } 

}


header('location: main.php');


?>

