<?php
require __DIR__ . "./Food.php";
require __DIR__ . "./Cuccia.php";
require __DIR__ . "./Toys.php";

class Product
{
    public $genre;
    public $name;
    public $image;
    public $description;
    public $price;
    public $review;

    public function __construct($genre, $name, $image, $price)
    {
        $this->genre = $genre;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}
