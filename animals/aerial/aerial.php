<?php

include_once('./animals/animal.php');

abstract class Aerial extends Animal
{
    /**
     * Aerial constructor.
     */
    public function __construct(int $id, string $species, float $weight, float $height, int $age)
    {
        parent::__construct($id, $species, $weight, $height, $age);
    }

    public function fly()
    {
        echo $this->species.' is flying around';
    }
    
}

?>