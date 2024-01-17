<?php
class Toys extends Product
{
    public $materials;

    public function __construct($genre, $name, $image, $price, $materials)
    {
        parent::__construct($genre, $name, $image, $price);
        $this->materials = $materials;
    }
}
