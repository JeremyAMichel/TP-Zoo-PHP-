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


if(isset($_POST['cleanEnclosure'])){
     
    if($_SESSION['checkingEnclosure']->getActualSpecies()=='none'){
        $_SESSION['checkingEnclosure']->cleaning();
        if(isset($_SESSION['checkingEnclosureNotEmpty'])){
            unset($_SESSION['checkingEnclosureNotEmpty']);
        }
    } else {
        $_SESSION['checkingEnclosureNotEmpty'] = 1;
    }
    

    header('location: main.php');
}

?>