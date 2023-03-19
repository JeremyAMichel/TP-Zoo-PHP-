<?php

include_once('terrestrial.php');

class Tiger extends Terrestrial
{
    /**
     * Tiger constructor.
     */
    public function __construct(float $weight, float $height, int $age)
    {
        parent::__construct('tiger', $weight, $height, $age);
    }
    
}

?>