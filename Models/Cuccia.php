<?php
class Cuccia extends Product
{
    public $materials;
    public $size;

    public function __construct($genre, $name, $image, $price, $materials, $size)
    {
        parent::__construct($genre, $name, $image, $price);
        $this->materials = $materials;
        $this->size = $size;
    }
}
