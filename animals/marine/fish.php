<?php

include_once('marine.php');

class Fish extends Marine
{
    /**
     * Tiger constructor.
     */
    public function __construct(int $id, float $weight, float $height, int $age)
    {
        parent::__construct($id, 'fish', $weight, $height, $age);
    }
    
}

?>