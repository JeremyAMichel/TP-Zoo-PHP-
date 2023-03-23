<?php

include_once('terrestrial.php');

class Bear extends Terrestrial
{
    /**
     * Bear constructor.
     */
    public function __construct(int $id, float $weight, float $height, int $age)
    {
        parent::__construct($id, 'bear', $weight, $height, $age);
    }
    
}

?>