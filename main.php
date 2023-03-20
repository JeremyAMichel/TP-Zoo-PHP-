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

if(isset($_SESSION['zooName']) && isset($_SESSION['zooMaxEnclosure']) && isset($_SESSION['employeeName'])
    && isset($_SESSION['employeeAge']) && isset($_SESSION['employeeGender']))
{
    $employee = new Employee($_SESSION['employeeName'], $_SESSION['employeeAge'], $_SESSION['employeeGender']);
    $zoo = new Zoo($_SESSION['zooName'],$employee,$_SESSION['zooMaxEnclosure']);

    
} else {
    include_once('formZoo.php');
}

?>