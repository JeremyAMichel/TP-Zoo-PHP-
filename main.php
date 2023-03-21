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
// $_SESSION=[];
// session_destroy();
// header('location: main.php');

if(isset($_SESSION['employee']) && isset($_SESSION['zoo']))
{
    // $employee = new Employee($_SESSION['employeeName'], $_SESSION['employeeAge'], $_SESSION['employeeGender']);
    // $zoo = new Zoo($_SESSION['zooName'],$employee,$_SESSION['zooMaxEnclosure']);
    $employee = $_SESSION['employee'];
    $zoo = $_SESSION['zoo'];

    include('./structure/top.html');

    ////////////////////
    // GAME FLOW HERE //
    ////////////////////

    ?>

    <section>
        <div class="container mt-5 d-flex justify-content-evenly">

            <div class="card" style="width: 22rem;">
                <?php if($employee->getGender()==='female'){?>
                    <img src="/img/woman.png" class="card-img-top" alt="woman-employee">
                <?php } else { ?>
                    <img src="/img/man.png" class="card-img-top" alt="man-employee">
                <?php } ?> 
                
                <div class="card-body">
                    <h5 class="card-title mb-3">Employée du Zoo</h5>
                    <p class="card-text">Nom : <?php echo $employee->getName() ?></p>
                    <p class="card-text">Âge : <?php echo $employee->getAge() ?> ans</p>
                    <a href="#" class="btn btn-primary">Examiner enclos</a>
                </div>
            </div>

            <div class="card" style="width: 30rem;">

                <img src="/img/zoo.png" class="card-img-top" alt="zoo">
                
                <div class="card-body">
                    <h5 class="card-title mb-3">Zoo</h5>
                    <p class="card-text">Nom : <?php echo $zoo->getName() ?></p>
                    <p class="card-text">Enclos : <?php echo count($zoo->getEnclosures()) ?>/<?php echo $zoo->getMaxEnclosure() ?></p>

                    <hr>

                    <form action="formEnclosure.php" method="post" class="d-flex align-items-center justify-content-center">
                        <label for="newEnclosure" class="form-label">Nouvel Enclos :</label>

                        <select class="form-select me-3" name="newEnclosure" id="newEnclosure">
                            <option value="classicEnclosure">Enclos Classique</option>
                            <option value="aviary">Volière</option>
                            <option value="aquarium">Aquarium</option>
                        </select>

                        <button type="submit" class="btn btn-primary">Créer</button>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <?php


    include('./structure/bottom.html');
   
} else {
    include_once('formZoo.php');
}

?>