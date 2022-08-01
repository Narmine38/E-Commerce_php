<?php

require_once ('my-functions.php');

$lotr = [
    "name" => "Le Seigneur des anneaux - Tome 1",
    "price" => 2000,
    "editor" => "Bourgois",
    "collection" => "Tolkien",
    "format" => "15cm x 24cm",
    "no_of_pages" => 528,
    "release_date" => "Oct. 2014",
    "discount" => 10,
    "tva" => 20,
    "picture_url" => "img/La-fraternite-de-l-anneau.jpg",
];

$lotr2 = [
    "name" => "Le Seigneur des anneaux - Tome 2",
    "price" => 2000,
    "no_of_pages" => 432,
    "editor" => "Bourgois",
    "collection" => "Tolkien",
    "format" => "15cm x 24cm",
    "release_date" => "Oct. 2015",
    "discount" => 10,
    "tva" => 20,
    "picture_url" => "img/Les-deux-tours.jpg",
];

$lotr3 = [
    "name" => "Le Seigneur des anneaux - Tome 3",
    "price" => 2000,
    "no_of_pages" => 497,
    "editor" => "Bourgois",
    "collection" => "Tolkien",
    "format" => "15cm x 24cm",
    "release_date" => "Oct. 2016",
    "discount" => 10,
    "tva" => 20,
    "picture_url" => "img/Le-retour-du-roi.jpg",
];

?>


<div class="container-fluid col-12 d-flex bg-dark text-white ">
    <div class="col-4">
        <h3><?php echo $lotr["name"] ?></h3>
        <img src="<?= $lotr["picture_url"] ?>" class="" alt="lotr">
        <p>Prix : <?php formatPrice($lotr["price"]) . "€" ?></p>
        <p>Prix HT: <?php formatPrice(priceExcludingVAT($lotr["price"], $lotr['tva']));?></p>
        <p>-<?= $lotr['discount'] ?>%</p>
        <p>Prix promo: <?php formatPrice(discountedPrice($lotr["price"], $lotr['discount']));?></p>
        <h3>Caractéristiques</h3>
        <h4>Date de parution <?php echo $lotr["release_date"] ?></h4>
        <h4>Editeur <?php echo $lotr["editor"] ?></h4>
        <h4>Collection <?php echo $lotr["collection"] ?></h4>
        <h4>Format <?php echo $lotr["format"] ?></h4>
        <h4>Nombre de pages <?php echo $lotr["no_of_pages"] ?></h4>
    </div>

    <div class="col-4">
        <h3><?php echo $lotr2["name"] ?></h3>
        <img src="<?= $lotr2["picture_url"] ?>" alt="lotr2">
        <p>Prix : <?php formatPrice($lotr2["price"]) . "€" ?></p>
        <p>Prix HT: <?php formatPrice(priceExcludingVAT($lotr2["price"], $lotr2['tva']));?></p>
        <p>-<?= $lotr2['discount'] ?>%</p>
        <p>Prix promo: <?php formatPrice(discountedPrice($lotr2["price"], $lotr2['discount']));?></p>
        <h3>Caractéristiques</h3>
        <h4>Date de parution <?php echo $lotr2["release_date"] ?></h4>
        <h4>Editeur <?php echo $lotr2["editor"] ?></h4>
        <h4>Collection <?php echo $lotr2["collection"] ?></h4>
        <h4>Format <?php echo $lotr2["format"] ?></h4>
        <h4>Nombre de pages <?php echo $lotr2["no_of_pages"] ?></h4>
    </div>

    <div class="col-4">
        <h3><?php echo $lotr3["name"] ?></h3>
        <img src="<?= $lotr3["picture_url"] ?>" alt="lotr2">
        <p>Prix : <?php formatPrice($lotr3["price"]) . "€" ?></p>
        <p>Prix HT: <?php formatPrice(priceExcludingVAT($lotr3["price"], $lotr3['tva']));?></p>
        <p>-<?= $lotr3['discount'] ?>%</p>
        <p>Prix promo: <?php formatPrice(discountedPrice($lotr3["price"], $lotr3['discount']));?></p>
        <h3>Caractéristiques</h3>
        <h4>Date de parution <?php echo $lotr3["release_date"] ?></h4>
        <h4>Editeur <?php echo $lotr3["editor"] ?></h4>
        <h4>Collection <?php echo $lotr3["collection"] ?></h4>
        <h4>Format <?php echo $lotr3["format"] ?></h4>
        <h4>Nombre de pages <?php echo $lotr3["no_of_pages"] ?></h4>
    </div>

</div>


