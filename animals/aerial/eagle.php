<?php

include_once('aerial.php');

class Eagle extends Aerial
{
    /**
     * Eagle constructor.
     */
    public function __construct(int $id, float $weight, float $height, int $age)
    {
        parent::__construct($id, 'eagle', $weight, $height, $age);
    }
    
}

?>