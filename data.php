<?php
require __DIR__ . "./Models/Product.php";

$products = [
    new Product(
        "Gatto",
        "Ciotola in Ceramica",
        "4,99$"
    ),

    new Food(
        "Gatto",
        "Crochette al salmone",
        "5,69$"
    ),

    new Product(
        "Cane",
        "Osso giocattolo",
        "15,00$"
    )
];

$products[1]->weight = "500gr";
$products[1]->expire = "01-2025";
