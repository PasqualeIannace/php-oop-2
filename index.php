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
                                <h6><?= $prodotto->genre ?></h6>
                                <p><?= (isset($prodotto->weight)) ? "Peso: (" . $prodotto->weight . ")" : "" ?></p>
                                <p><?= (isset($prodotto->expire)) ? "Scadenza: " . $prodotto->expire : "" ?></p>
                                <p><?= (isset($prodotto->materials)) ? "Materiali: (" . $prodotto->materials . ")" : "" ?></p>
                                <p><?= (isset($prodotto->size)) ? "(" . $prodotto->size . ")" : "" ?></p>
                                <p class="text-right font-weight-bold"><?= $prodotto->price ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">

        </div>
    </div>
</body>

</html>