<?php 

include_once('./animals/animal.php');

/**
 * Class enclosure.php
 *
 * @author Jeremy Michel
 */

class Enclosure{

    protected int $length = 6;
    protected string $actualSpecies = "none";
    protected string $name;
    protected string $cleanliness = "clean"; // enum : clean, moderately clean, dirty
    // protected ?Animal $animals;
    protected array $animals;


    
    /**
     * Eclosure constructor.
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->animals = [];
    }

    // TOSTRING ex :
    public function __toString(): string {
        $string= 'Enclosure name : ' . $this->name . ' <br> ';
        $string.= 'Actual species : ' . $this->actualSpecies . ' <br> ';
        $string.= 'Cleanliness : ' . $this->cleanliness . ' <br> ';
        $string.= 'Animals : <br>';
        foreach($this->animals as $animal){
            $string.= ' * '.$animal->getSpecies().'<br>';
        }
                
        $string.='<br>';
        return $string;     
        
    }

    ////////////
    // GETTER //
    ////////////

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return string
     */
    public function getActualSpecies(): string
    {
        return $this->actualSpecies;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCleanliness(): string
    {
        return $this->cleanliness;
    }
    
    /**
     * return actual animal tab
     * @return array
     */
    public function getAnimals():array
    {
        return $this->animals;
    }

    ////////////
    // SETTER //
    ////////////

    /**
     * Set the value of actualSpecies
     * @return  self
     */ 
    public function setActualSpecies($newActualSpecies):self
    {
        $this->actualSpecies = $newActualSpecies;

        return $this;
    }

    /**
     * Set the value of name
     * @return  self
     */ 
    public function setName($newName):self
    {
        $this->name = $newName;

        return $this;
    }

    /**
     * Set the value of cleanliness
     * @return  self
     */ 
    public function setCleanliness($newCleanliness):self
    {
        $this->cleanliness = $newCleanliness;

        return $this;
    }

    /**
     * Add an Animal to the enclosure
     * @return  self
     */ 
    public function addAnimal(Animal $animal):void{
        // if there is already an animal of the same species, or if there is no animals
        if($this->getActualSpecies() == $animal->getSpecies() || $this->getActualSpecies()=='none'){
            if(!in_array($animal, $this->animals)){
                $this -> animals[] = $animal;
                $this -> setActualSpecies($animal->getSpecies());
            }
        } else {
            echo 'In an enclosure all animals must be of the same species <br><br>';
        }
        
    }

    /**
     * Remove an Animal to the enclosure
     * @return  self
     */ 
    public function removeAnimal(Animal $animal):void{
        // checks if the animal is in the enclosure
        if(in_array($animal, $this->animals)){
            unset($this->animals[array_search($animal, $this->animals)]);

            // checks if the enclosure is empty
            if (empty($this->animals)) {
                $this->setActualSpecies('none');
            }
        }
        
    }


    /**
     * display the characteristics of the animals the enclosure contains
     * @return  self
     */ 
    public function displayAnimalCharacteristics():void{
        
        echo 'Characteristics of the animals in the enclosure '. $this->getName() .' : <br><br>';
        foreach($this->animals as $animal){
            echo $animal.'<br><br>';
        }
        
    }


    /**
     * cleaning the enclosure if it's empty
     * @return  self
     */ 
    public function cleaning():void{
        
        if($this->getActualSpecies()=='none'){
            $this->setCleanliness('clean');
        } else {
            echo 'an enclosure that is not empty cannot be cleaned <br><br>';
        }
        
    }

    


}

?>