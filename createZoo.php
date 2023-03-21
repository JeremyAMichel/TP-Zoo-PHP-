<?php 

include_once('animals/terrestrial/tiger.php');
include_once('animals/terrestrial/bear.php');

include_once('animals/marine/fish.php');

include_once('animals/aerial/eagle.php');

include_once('enclosure/enclosure.php');
include_once('enclosure/aviary.php');
include_once('enclosure/aquarium.php');

include_once('employee/employee.php');

include_once('zoo/zoo.php');

session_start();

if(isset($_POST['name']) && isset($_POST['maxEnclosure']) && isset($_POST['employee'])
    && isset($_POST['employeeAge']) && isset($_POST['gender'])){
 
    $employee = new Employee($_POST['employee'], $_POST['employeeAge'], $_POST['gender']);
    $zoo = new Zoo($_POST['name'],$employee,$_POST['maxEnclosure']);

    $_SESSION['employee']= $employee;
    $_SESSION['zoo']= $zoo;


    //zoo
    // $_SESSION['zooName']= $_POST['name'];
    // $_SESSION['zooMaxEnclosure']= $_POST['maxEnclosure'];

    // //employee
    // $_SESSION['employeeName']= $_POST['employee'];
    // $_SESSION['employeeAge']= $_POST['employeeAge'];
    // $_SESSION['employeeGender']= $_POST['gender'];


}


header('location: ../main.php');


?>

