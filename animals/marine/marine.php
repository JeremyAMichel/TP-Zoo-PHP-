<?php

include_once('./animals/animal.php');

abstract class Marine extends Animal
{
    /**
     * Marine constructor.
     */
    public function __construct(int $id, string $species, float $weight, float $height, int $age)
    {
        parent::__construct($id, $species, $weight, $height, $age);
    }

    public function swim()
    {
        echo $this->species.' is swimming around';
    }
    
}

?>