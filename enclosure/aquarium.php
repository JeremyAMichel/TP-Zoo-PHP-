<?php

include_once('enclosure.php');

/**
 * Class aquarium.php
 *
 * @author Jeremy Michel
 */
class Aquarium extends Enclosure
{

    protected float $salinity;


    /**
     * Aquarium constructor.
     */
    public function __construct(float $salinity, string $name)
    {
        parent::__construct($name);
        $this->salinity = $salinity;
    }

    // TOSTRING ex :
    public function __toString(): string {
        $string= parent::__toString();
        $string.= 'Characteristic of the aquarium :  <br> ';
        $string.= ' - Salinity : ' . $this->getSalinity() . 'g/kg <br> ';
        $string.= ' <br> ';
        return $string;         
    }

    ////////////
    // GETTER //
    ////////////

    /**
     * @return float
     */
    public function getSalinity(): float
    {
        return $this->salinity;
    }

    ////////////
    // SETTER //
    ////////////

    /**
     * Set the value of height
     * @return  self
     */ 
    public function setSalinity($newSalinity):self
    {
        $this->salinity = $newSalinity;

        return $this;
    }

    /**
     * Add a Marine type of animal to the aquarium
     * @return  self
     */ 
    public function addAnimal(Animal $animal):void{
        // if there is already an animal of the same species, or if there is no animals
        if($this->getActualSpecies() == $animal->getSpecies() || $this->getActualSpecies()=='none'){
            // if the animal is not a marine animal
            if(get_parent_class($animal) == 'Marine'){
                if(!in_array($animal, $this->animals)){
                    $this -> animals[] = $animal;
                    $this -> setActualSpecies($animal->getSpecies());
                }
            } else {
                echo 'In an aquarium all animals must be marine animals <br><br>';
            }
            
        } else {
            echo 'In an enclosure all animals must be of the same species <br><br>';
        }
        
    }


}

?>