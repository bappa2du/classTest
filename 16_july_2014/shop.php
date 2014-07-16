<?php

class Shop
{
    private $code;
    private $name;
    private $productList;
    private $product;

    function __construct($code, $name)
    {
        $this->code = $code;
        $this->name = $name;
        $this->productList = array();
    }


    public function setProduct($product)
    {
        $this->product = $product;
    }


    public function getProduct()
    {
        return $this->product;
    }


    public function getCode()
    {
        return $this->code;
    }

    public function getName()
    {
        return $this->name;
    }

    function addProduct($product)
    {
        foreach($this->productList as $a_product)
        {
            if($a_product->getId()==$product->getId())
            {
                $a_product->quantity += $product->quantity;
                return 'product added with previous quantity';
            }
        }
        $this->productList[] = $product;
        return 'product added with new quantity';

    }
    function getAllProduct()
    {
        return $this->productList;
    }



}