<?php
class Food extends Product
{
    public $weight;
    public $expire;

    public function __construct($genre, $name, $image, $price, $weight, $expire)
    {
        parent::__construct($genre, $name, $image, $price);
        $this->weight = $weight;
        $this->expire = $expire;
    }
}
