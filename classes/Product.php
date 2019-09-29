<?php

class Product
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return 'Ik ben een product uit de BAP les van Hidde, ik heb alleen een naam: ' . $this->name . '<br/>';
    }

}




