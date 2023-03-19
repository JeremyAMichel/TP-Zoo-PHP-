<?php

include_once('aerial.php');

class Eagle extends Aerial
{
    /**
     * Eagle constructor.
     */
    public function __construct(float $weight, float $height, int $age)
    {
        parent::__construct('eagle', $weight, $height, $age);
    }
    
}

?>