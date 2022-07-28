<?php
$lotr = [
    "name" => "Le Seigneur des anneaux - Tome 1",
    "price" => 20,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "img/La-fraternite-de-l-anneau.jpg",
];

$lotr2 = [
    "name" => "Le Seigneur des anneaux - Tome 2",
    "price" => 20,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "img/Les-deux-tours.jpg",
];

$lotr3 = [
    "name" => "Le Seigneur des anneaux - Tome 3",
    "price" => 20,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "img/Le-retour-du-roi.jpg",
];
?>


<div class="container-fluid col-12 d-flex  ">
    <div class="col-4">
    <h3><?php  echo $lotr["name"] ?></h3>
    <img src="<?= $lotr["picture_url"] ?>" class="" alt="lotr">
    <p>Prix : <?php  echo $lotr["price"] ."€" ?></p>
    </div>

    <div class="col-4">
    <h3><?php  echo $lotr2["name"] ?></h3>
    <img src="<?= $lotr2["picture_url"] ?>" alt="lotr2">
    <p>Prix : <?php  echo $lotr2["price"] ."€" ?></p>
    </div>

    <div class="col-4">
    <h3><?php  echo $lotr3["name"] ?></h3>
    <img src="<?= $lotr3["picture_url"] ?>" alt="lotr2">
    <p>Prix : <?php  echo $lotr3["price"] ."€" ?></p>
    </div>

</div>
