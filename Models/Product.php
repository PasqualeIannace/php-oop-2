<?php
require __DIR__ . "./Food.php";

class Product
{
    public $genre;
    public $name;
    public $image;
    public $description;
    public $price;
    public $review;

    public function __construct($genre, $name, $price)
    {
        $this->genre = $genre;
        $this->name = $name;
        $this->price = $price;
    }
}
