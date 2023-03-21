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

if(isset($_POST['name'])){

    if(isset($_POST['height'])){
        $aviary = new Aviary($_POST['height'], $_POST['name']);
        $_SESSION['zoo']->addEnclosure($aviary);
    } else {
        if(isset($_POST['salinity'])){
            $aquarium = new Aquarium($_POST['salinity'], $_POST['name']);
            $_SESSION['zoo']->addEnclosure($aquarium);
        } else {
            $classicEnclosure = new Enclosure($_POST['name']);
            $_SESSION['zoo']->addEnclosure($classicEnclosure);
        }
    }

}


header('location: main.php');


?>

