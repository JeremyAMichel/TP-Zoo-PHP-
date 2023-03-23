<?php

include_once('./animals/animal.php');

abstract class Terrestrial extends Animal
{
    /**
     * Terrestrial constructor.
     */
    public function __construct(int $id, string $species, float $weight, float $height, int $age)
    {
        parent::__construct($id, $species, $weight, $height, $age);
    }

    public function wander()
    {
        echo $this->species.' is wandering around';
    }
    
}

?>