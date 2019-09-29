<?php

class Product
{

    private $name;
    private $price;

    public function __construct($name, $price)
    {

        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return 'Ik ben een product uit de webshop van Nike: name = ' . $this->name . ' en prijs = € ' . $this->price . '<br />';
    }

}