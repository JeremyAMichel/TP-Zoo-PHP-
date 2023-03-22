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
// var_dump($_SESSION['zoo']);


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
        <div class="container">
            <div class="mt-5 d-flex justify-content-evenly">
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

                        <hr>

                        <form action="checkEnclosure.php" method="post" class="d-flex align-items-center justify-content-center">
                            

                            <?php if(count($zoo->getEnclosures())>0){ ?>

                            <label for="checkingEnclosure" class="form-label me-3">Liste enclos</label>

                            <select class="form-select me-3" name="checkingEnclosure" id="checkingEnclosure">
                                <?php foreach($zoo->getEnclosures() as $enclosure){ ?>
                                    <option value="<?php echo $enclosure->getName() ?>"><?php echo $enclosure->getName() ?></option>
                                <?php } ?>
                            </select>

                            <button type="submit" class="btn btn-primary">Examiner</button>

                            <?php } else { ?>
                                <p>Aucun enclos</p>
                            <?php } ?>
                        </form>
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
                            <label for="newEnclosure" class="form-label">Nouvel Enclos</label>

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
            
            <?php if(isset($_SESSION['checkingEnclosure'])) { ?>

            <div class="container mt-5">
                <div class="card d-flex flex-row" style="width: 100%;">                    
                    <div class="card-body-custom" style="width: 30%;">
                        <h5 class="card-title mb-3">Enclos <?php echo $_SESSION['checkingEnclosure']->getName(); ?></h5>
                        <p class="card-text">Taille : <?php echo $_SESSION['checkingEnclosure']->getLength() ?></p>
                        <p class="card-text">Espèce : <?php echo $_SESSION['checkingEnclosure']->getActualSpecies() ?> </p>
                        <p class="card-text">Etat : <?php echo $_SESSION['checkingEnclosure']->getCleanliness() ?> </p>
                    </div>

                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title mb-3">Animaux</h5>
                        <div class="w-100 d-flex flex-row justify-content-between">
                            <?php
                            if(count($_SESSION['checkingEnclosure']->getAnimals())!=0){
                                foreach($_SESSION['checkingEnclosure']->getAnimals() as $animal){ ?>
                                    <div>
                                        <p class="card-text">Espèce : <?php echo $animal->getSpecies() ?> </p>
                                        <p class="card-text">Poids : <?php echo $animal->getWeight() ?> </p>
                                        <p class="card-text">Taille : <?php echo $animal->getHeight() ?> </p>
                                        <p class="card-text">Age : <?php echo $animal->getAge() ?> </p>
                                        <p class="card-text">Faim : <?php echo $animal->getIsHungry() ?> </p>
                                        <p class="card-text">Dors : <?php echo $animal->getIsSleeping() ?> </p>
                                        <p class="card-text">Malade : <?php echo $animal->getIsSick() ?> </p>
                                    </div>
                                <?php } ?>
                            <?php } else { ?>
                                <div>
                                    <p class="card-text">Aucun animal.</p>
                                </div>
                            <?php } ?>
                        </div> 
                    </div>
                </div>

            </div>

            <?php } ?>
            

        </div>
    </section>

    <?php


    include('./structure/bottom.html');
   
} else {
    include_once('formZoo.php');
}

?>