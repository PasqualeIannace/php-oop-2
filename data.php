<?php
require __DIR__ . "./Models/Product.php";
require __DIR__ . "./Models/Guest.php";

$products = [
    new Product(
        "Gatto",
        "Ciotola in Ceramica",
        "https://arcaplanet.vtexassets.com/arquivos/ids/266458/trixie-ciotola-ceramica-grigio-250ml.jpg?v=637769995987900000",
        "4,99$"
    ),

    new Food(
        "Gatto",
        "Crochette al salmone",
        "https://arcaplanet.vtexassets.com/arquivos/ids/252462/10066388_1.jpg?v=637466425029400000",
        "4,93$",
        "400gr",
        "01-2025"
    ),

    new Toy(
        "Cane",
        "Osso giocattolo",
        "https://arcaplanet.vtexassets.com/arquivos/ids/288355/fullimage_n_pss_000000000000058938_de.jpg?v=638245816969800000",
        "5,99$",
        "Plastica"
    ),

    new Cuccia(
        "Cane",
        "Casetta in legno",
        "https://arcaplanet.vtexassets.com/arquivos/ids/216810/https---www.arcaplanet.it-media-catalog-product--b-a-baita-ferc14_1.jpg?v=637454582539930000",
        "99,00$",
        "Legno, Plastica",
        "67X53X55.5CM"
    )
];

$users = [
    new User(
        "Pasquale Iannace",
        "pasquale@mail.it",
        "Via Napoli 1, Montesarchio (BN)",
        "password123"
    )
];
