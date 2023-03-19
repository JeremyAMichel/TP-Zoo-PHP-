<?php

include_once('enclosure.php');

/**
 * Class aviary.php
 *
 * @author Jeremy Michel
 */
class Aviary extends Enclosure
{

    protected float $height;
    protected string $topCleanliness;


    /**
     * Aviary constructor.
     */
    public function __construct(float $height, string $name)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->topCleanliness = 'clean';
    }

    // TOSTRING ex :
    public function __toString(): string {
        $string= parent::__toString();
        $string.= 'Characteristic of the aviary :  <br> ';
        $string.= ' - Height : ' . $this->getHeight() . 'm <br> ';
        $string.= ' - Top Cleanliness : ' . $this->getTopCleanliness() . ' <br> ';
        $string.= ' <br> ';
        return $string;         
    }

    ////////////
    // GETTER //
    ////////////

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getTopCleanliness(): string
    {
        return $this->topCleanliness;
    }

    ////////////
    // SETTER //
    ////////////

    /**
     * Set the value of height
     * @return  self
     */ 
    public function setHeight($newHeight):self
    {
        $this->height = $newHeight;

        return $this;
    }

    /**
     * Set the value of topCleanliness
     * @return  self
     */ 
    public function setTopCleanliness($newTopCleanliness):self
    {
        $this->topCleanliness = $newTopCleanliness;

        return $this;
    }

    /**
     * Add an Aerial type of animal to the aviary
     * @return  self
     */ 
    public function addAnimal(Animal $animal):void{
        // if there is already an animal of the same species, or if there is no animals
        if($this->getActualSpecies() == $animal->getSpecies() || $this->getActualSpecies()=='none'){
            // if the animal is not an aerial animal
            if(get_parent_class($animal) == 'Aerial'){
                if(!in_array($animal, $this->animals)){
                    $this -> animals[] = $animal;
                    $this -> setActualSpecies($animal->getSpecies());
                }
            } else {
                echo 'In an aviary all animals must be aerial animals <br><br>';
            }
            
        } else {
            echo 'In an enclosure all animals must be of the same species <br><br>';
        }
        
    }


}

?>