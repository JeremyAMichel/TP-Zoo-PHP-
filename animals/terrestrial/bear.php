<?php

include_once('terrestrial.php');

class Bear extends Terrestrial
{
    /**
     * Bear constructor.
     */
    public function __construct(float $weight, float $height, int $age)
    {
        parent::__construct('bear', $weight, $height, $age);
    }
    
}

?>