<?php
require __DIR__ . "./data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1>Pet Store</h1>

        <div class="row">
            <?php foreach ($products as $prodotto) { ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="<?= $prodotto->image ?>" alt="Card image cap">
                            <div class="card-title">
                                <h4><?= $prodotto->name ?></h4>
                            </div>
                            <div class="card-subtitle">
                                <?= $prodotto->genre ?>
                                <p><?= (isset($prodotto->weight)) ? "(" . $prodotto->weight . ")" : "" ?></p>
                                <p><?= (isset($prodotto->expire)) ? "(" . $prodotto->expire . ")" : "" ?></p>
                                <p><?= $prodotto->price ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <h2>Continua il tuo acquisto</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Oggetto</th>
                        <th scope="col">Costo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $products[0]->name ?></td>
                        <td><?= $products[0]->price ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><?= $products[1]->name ?></td>
                        <td><?= $products[1]->price ?></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><?= $products[2]->name ?></td>
                        <td><?= $products[2]->price ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Totale</th>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button>$ Paga $</button>
        </div>
    </div>
</body>

</html>