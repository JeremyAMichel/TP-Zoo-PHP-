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

// var_dump($_POST['checkingEnclosure']);
// var_dump($_SESSION['zoo']);

if(isset($_POST['checkingEnclosure'])){
    $_SESSION['checkingEnclosure'] = $_SESSION['zoo']->getEnclosureByName($_POST['checkingEnclosure']);

    header('location: main.php');
}

?>