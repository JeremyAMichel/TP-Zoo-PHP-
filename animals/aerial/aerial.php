<?php

include_once('./animals/animal.php');

abstract class Aerial extends Animal
{
    /**
     * Aerial constructor.
     */
    public function __construct(string $species, float $weight, float $height, int $age)
    {
        parent::__construct($species, $weight, $height, $age);
    }

    public function fly()
    {
        echo $this->species.' is flying around';
    }
    
}

?>