<?php
$lotr = [
    "name" => "Le Seigneur des anneaux - Tome 1",
    "price" => 20,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "img/Le-seigneur-des-anneaux-t1-la-fraternite-de-l-anneau-2015.jpg",
];

$lotr2 = [
    "name" => "Le Seigneur des anneaux - Tome 2",
    "price" => 20,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "img/Le-seigneur-des-anneaux-T2-les-deux-tours.jpg",
];

$lotr3 = [
    "name" => "Le Seigneur des anneaux - Tome 3",
    "price" => 20,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "img/Le-retour-du-roi.jpg",
];
?>


<div>
    <h3><?php  echo $lotr["name"] ?></h3>
    <img src="<?= $lotr["picture_url"] ?>" alt="lotr">
    <p>Prix : <?php  echo $lotr["price"] ."€" ?></p>


    <h3><?php  echo $lotr2["name"] ?></h3>
    <img src="<?= $lotr2["picture_url"] ?>" alt="lotr2">
    <p>Prix : <?php  echo $lotr2["price"] ."€" ?></p>

    <h3><?php  echo $lotr3["name"] ?></h3>
    <img src="<?= $lotr3["picture_url"] ?>" alt="lotr2">
    <p>Prix : <?php  echo $lotr3["price"] ."€" ?></p>

</div>
