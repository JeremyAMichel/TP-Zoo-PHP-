<?php

include_once('terrestrial.php');

class Tiger extends Terrestrial
{
    /**
     * Tiger constructor.
     */
    public function __construct(int $id, float $weight, float $height, int $age)
    {
        parent::__construct($id, 'tiger', $weight, $height, $age);
    }
    
}

?>