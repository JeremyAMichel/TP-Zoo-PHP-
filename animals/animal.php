<?php 

/**
 * Class animal.php
 *
 * @author Jeremy Michel
 */

abstract class Animal{

    protected string $species;
    protected float $weight = 0.0;
    protected float $height = 0.0;
    protected int $age = 0;
    protected bool $isHungry = false;
    protected bool $isSleeping = false;
    protected bool $isSick = false;



    /**
     * Animal constructor.
     */
    public function __construct(string $species, float $weight, float $height, int $age)
    {
        $this->species = $species;
        $this->weight = $weight;
        $this->height = $height;
        $this->age = $age;

    }

    // TOSTRING ex :
    public function __toString(): string {
        $isHungry = $this->getIsHungry()== true ? 'yes' : 'no';
        $isSleeping = $this->getIsSleeping()== true ? 'yes' : 'no'; 
        $isSick = $this->getIsSick()== true ? 'yes' : 'no'; 

        $string= 'Species : ' . $this->getSpecies() . ' <br> ';
        $string.= 'Weight : ' . $this->getWeight() . ' <br> ';
        $string.= 'Height : ' . $this->getHeight() . ' <br> ';
        $string.= 'Age : ' . $this->getAge() . ' <br> ';
        $string.= 'IsHungry : ' . $isHungry . ' <br> ';
        $string.= 'IsSleeping : ' . $isSleeping . ' <br> ';
        $string.= 'IsSick : ' . $isSick . ' <br> ';
        return $string;     
        //(Condition) ? (Statement1) : (Statement2);
    }

    ////////////
    // GETTER //
    ////////////

    /**
     * @return string
     */
    public function getSpecies(): string
    {
        return $this->species;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return bool
     */
    public function getIsHungry(): bool
    {
        return $this->isHungry;
    }

    /**
     * @return bool
     */
    public function getIsSleeping(): bool
    {
        return $this->isSleeping;
    }

    /**
     * @return bool
     */
    public function getIsSick(): bool
    {
        return $this->isSick;
    }
    
    ////////////
    // SETTER //
    ////////////

    /**
     * Set the value of weight
     * @return  self
     */ 
    public function setWeight($newWeight):self
    {
        $this->weight = $newWeight;

        return $this;
    }

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
     * Set the value of age
     * @return  self
     */ 
    public function setAge($newAge):self
    {
        $this->age = $newAge;

        return $this;
    }

    /**
     * Set the value of isHungry
     * @return  self
     */ 
    public function setIsHungry($newIsHungry):self
    {
        $this->isHungry = $newIsHungry;

        return $this;
    }

    /**
     * Set the value of isSleeping
     * @return  self
     */ 
    public function setIsSleeping($newIsSleeping):self
    {
        $this->isSleeping = $newIsSleeping;

        return $this;
    }

    /**
     * Set the value of isSick
     * @return  self
     */ 
    public function setIsSick($newIsSick):self
    {
        $this->isSick = $newIsSick;

        return $this;
    }

    /////////////
    // METHODS //
    /////////////

    public function eating(): bool
    {
        $this->setIsHungry(false);
        return true;
    }

    public function makeSound($sound): bool
    {
        echo $this->species . ' : ' . $sound . '<br><br>';
        return true;
    }

    public function cure(): bool
    {
        $this->setIsSick(false);
        return true;
    }

    public function sleep(): bool
    {
        $this->setIsSleeping(true);
        return true;
    }

    public function wakeUp(): bool
    {
        $this->setIsSleeping(false);
        return true;
    }  

}

?>