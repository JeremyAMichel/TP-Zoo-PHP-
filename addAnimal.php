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

if(isset($_POST['species']) && isset($_POST['weight']) && isset($_POST['height']) && isset($_POST['age'])){

    $enclosure = $_SESSION['zoo']->getEnclosureByName($_POST['enclosure']);

    // if there is already an animal of the same species, or if there is no animals
    if($enclosure->getActualSpecies() == $_POST['species'] || $enclosure->getActualSpecies()=='none'){

        switch ($_POST['species']) {
            case 'tiger':
                $newAnimal = new Tiger($_POST['weight'], $_POST['height'], $_POST['age']);
                break;
            case 'bear':
                $newAnimal = new Bear($_POST['weight'], $_POST['height'], $_POST['age']);
                break;
            case 'fish':
                $newAnimal = new Fish($_POST['weight'], $_POST['height'], $_POST['age']);
                break;
            case 'eagle':
                $newAnimal = new Eagle($_POST['weight'], $_POST['height'], $_POST['age']);
                break;
        }

        $enclosure->addAnimal($newAnimal);
        unset($_SESSION['notSameSpecies']);

    } else {
        $_SESSION['notSameSpecies']=1;
    } 

}


header('location: main.php');


?>

