<?php

class Product
{
    private $id;
    public $quantity;

    function __construct($id, $quantity)
    {
        $this->id = $id;
        $this->quantity = $quantity;
    }

    public function getId()
    {
        return $this->id;
    }


    public function getQuantity()
    {
        return $this->quantity;
    }
}