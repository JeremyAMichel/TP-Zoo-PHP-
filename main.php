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


if(isset($_SESSION['employee']) && isset($_SESSION['zoo']))
{
    $employee = $_SESSION['employee'];
    $zoo = $_SESSION['zoo'];
    if(!isset($_SESSION['idAnimal'])){
        $_SESSION['idAnimal'] = 1;
    }
    

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
                        <?php if($employee->getGender()==='female'){ ?>
                            <h5 class="card-title mb-3">Employée du Zoo</h5>
                        <?php } else { ?>
                            <h5 class="card-title mb-3">Employé du Zoo</h5>
                        <?php } ?> 
                        
                        <p class="card-text">Nom : <?php echo $employee->getName() ?></p>
                        <p class="card-text">Âge : <?php echo $employee->getAge() ?> ans</p>

                        <hr>

                        <!-- check enclosure -->
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

                        <?php if(count($zoo->getEnclosures())!=0) { ?>

                        <hr>

                        <!-- add animal -->
                        <form action="formAnimal.php" method="post" class="d-flex align-items-center justify-content-between">

                            <label for="addAnimal" class="form-label me-3">Choix enclos :</label>

                            <select class="form-select me-3" name="addAnimal" id="addAnimal">
                                <?php foreach($zoo->getEnclosures() as $enclosure){ ?>
                                    <option value="<?php echo $enclosure->getName() ?>"><?php echo $enclosure->getName() ?></option>
                                <?php } ?>
                            </select>

                            <button type="submit" class="btn btn-primary">Ajouter animal</button>
                        </form>

                        <?php if(isset($_SESSION['notSameSpecies'])) { ?>
                            <p class="card-text text-danger"> L'animal ne peut être ajouté car il y a déjà un animal d'une autre espèce dans l'enclos</p>
                        <?php } ?>
                        <?php } ?>

                    </div>
                </div>

                <div class="card" style="width: 30rem;">

                    <img src="/img/zoo.png" class="card-img-top" alt="zoo">
                    
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title mb-3">Zoo</h5>
                                <p class="card-text">Nom : <?php echo $zoo->getName() ?></p>
                                <p class="card-text">Enclos : <?php echo count($zoo->getEnclosures()) ?>/<?php echo $zoo->getMaxEnclosure() ?></p>
                            </div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger h-50" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Nouveau Zoo
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title fs-5" id="exampleModalLabel">ATTENTION !</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Cette action supprimera votre zoo, êtes-vous sûr ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>

                                    <form action="deleteSession.php" method="post" class="d-flex align-items-center justify-content-center">
                                        <button type="submit" class="btn btn-danger">Accepter</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>

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

                        <hr>

                        <p class="card-text">Nombre d'animal : <?php $_SESSION['zoo']->countAnimals() ?></p>

                        <hr>
                        
                        <?php if(count($_SESSION['zoo']->getEnclosures())>0) { ?>
                        <form action="jourSuivant.php" method="post" class="d-flex align-items-center justify-content-center">
                            <button type="submit" class="btn btn-primary">Jour suivant</button>
                        </form>
                        <?php } ?>

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

                        <?php if($_SESSION['checkingEnclosure']->getCleanliness()!='clean'){ ?>

                        <form action="cleanEnclosure.php" method="post" class="d-flex">
                            <input id="cleanEnclosure" name="cleanEnclosure" type="hidden" value="cleanEnclosure">

                            <?php if(isset($_SESSION['checkingEnclosureNotEmpty'])) { ?>
                                <p class="card-text text-danger"> L'enclos ne peut être nettoyer que s'il est vide</p>
                            <?php } ?>

                            <button type="submit" class="btn btn-primary">Nettoyer</button>
                        </form>

                        <?php } ?>

                    </div>


                    <!-- LES ANIMAUX -->
                    <div class="card-body d-flex flex-column align-items-center mb-5">
                        <h5 class="card-title mb-3">Animaux</h5>
                        <div class="w-100 d-flex flex-row justify-content-between mb-3">
                            <?php
                            if(count($_SESSION['checkingEnclosure']->getAnimals())!=0){
                                foreach($_SESSION['checkingEnclosure']->getAnimals() as $animal){ ?>
                                    <div class="border p-3">
                                        <p class="card-text">Espèce : <?php echo $animal->getSpecies() ?> </p>
                                        <p class="card-text">Poids : <?php echo $animal->getWeight() ?> </p>
                                        <p class="card-text">Taille : <?php echo $animal->getHeight() ?> </p>
                                        <p class="card-text">Age : <?php echo $animal->getAge() ?> </p>
                                        <p class="card-text">Faim : <?php echo $animal->getIsHungry() ?  'affamer' : 'rassasié' ?> </p>
                                        <p class="card-text">Dors : <?php echo $animal->getIsSleeping() ? 'endormi' : 'éveillé' ?> </p>
                                        <p class="card-text">Malade : <?php echo $animal->getIsSick() ? 'malade' : 'bonne santé' ?> </p>

                                        <div class="d-flex justify-content-between gap-3">
                                            <!-- RETIRER UN ANIMAL -->
                                            <form action="removeAnimal.php" method="post" class="d-flex align-items-center justify-content-center">
                                                <input id="removeAnimal" name="removeAnimal" type="hidden" value="<?php echo $animal->getId(); ?>">
                                                <button type="submit" class="btn btn-danger">Retirer</button>
                                            </form>

                                            <!-- MOVE UN ANIMAL -->
                                            
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-success h-50" data-bs-toggle="modal" data-bs-target="#moveAnimal">
                                            Déplacer
                                            </button>

                                            
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="moveAnimal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title fs-5" id="moveAnimalTitle">Déplacer un animal</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Vers quel enclos voulez-vous envoyer l'animal ?
                                                    
                                                    

                                                    <!-- METTRE UN SELECT DES ENCLOS -->

                                                        <form action="moveAnimal.php" method="post" class="d-flex align-items-center justify-content-center">

                                                            <select class="form-select me-3" name="moveAnimalTo" id="moveAnimalTo">
                                                                <?php foreach($zoo->getEnclosures() as $enclosure){ ?>
                                                                    <option value="<?php echo $enclosure->getName() ?>"><?php echo $enclosure->getName() ?></option>
                                                                <?php } ?>
                                                            </select>

                                                            <input id="moveAnimal" name="moveAnimal" type="hidden" value="<?php echo $animal->getId(); ?>">
                                                            <input id="moveAnimalFrom" name="moveAnimalFrom" type="hidden" value="<?php echo $_SESSION['checkingEnclosure']->getName(); ?>">
                                                            
                                                            <button type="submit" class="btn btn-success">Déplacer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>


                                    </div>
                                <?php } ?>
                            <?php } else { ?>
                                <div>
                                    <p class="card-text">Aucun animal.</p>
                                </div>
                            <?php } ?>
                        </div>
                        <?php if(count($_SESSION['checkingEnclosure']->getAnimals())!=0){ ?>
                            <form action="feedAnimals.php" method="post" class="d-flex">
                                <input id="feedAnimals" name="feedAnimals" type="hidden" value="feedAnimals">

                                <?php if(isset($_SESSION['checkingEnclosureAnimalSleepy'])) { ?>
                                    <p class="card-text text-danger"> Certains animaux dormaient donc ils n'ont pas été nourris</p>
                                <?php unset($_SESSION['checkingEnclosureAnimalSleepy']); } ?>

                                <button type="submit" class="btn btn-primary">Nourrir les animaux</button>
                            </form>
                        <?php } ?>

                        <?php if(isset($_SESSION['notEnoughSpaceMove'])){ ?>
                        <p class="card-text text-danger"> Il n'y a pas assez d'espace dans l'enclos destinataire</p>
                        <?php } ?>

                        <?php if(isset($_SESSION['notSameSpeciesMove'])){ ?>
                        <p class="card-text text-danger"> L'animal ne peut être ajouté car il y a déjà un animal d'une autre espèce dans l'enclos destinataire</p>
                        <?php } ?>
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