<?php

include_once('marine.php');

class Fish extends Marine
{
    /**
     * Tiger constructor.
     */
    public function __construct(float $weight, float $height, int $age)
    {
        parent::__construct('fish', $weight, $height, $age);
    }
    
}

?>