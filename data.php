<?php
require __DIR__ . "./Models/Product.php";

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
        "4,93$"
    ),

    new Product(
        "Cane",
        "Osso giocattolo",
        "https://arcaplanet.vtexassets.com/arquivos/ids/288355/fullimage_n_pss_000000000000058938_de.jpg?v=638245816969800000",
        "5,99$"
    ),

    new Product(
        "Cane",
        "Casetta in legno",
        "https://arcaplanet.vtexassets.com/arquivos/ids/216810/https---www.arcaplanet.it-media-catalog-product--b-a-baita-ferc14_1.jpg?v=637454582539930000",
        "99,00$"
    )
];

$products[1]->weight = "400gr";
$products[1]->expire = "01-2025";
