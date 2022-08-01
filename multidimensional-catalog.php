<?php
require_once ('my-functions.php');

$books = [
    "lotr" => [
        "name" => "Le Seigneur des anneaux - Tome 1",
        "price" => 2000,
        "editor" => "Bourgois",
        "collection" => "Tolkien",
        "format" => "15cm x 24cm",
        "no_of_pages" => 528,
        "release_date" => "Oct. 2014",
        "discount" => 10,
//        "tva" => 20,
        "picture_url" => "img/La-fraternite-de-l-anneau.jpg"
    ],
    "lotr2" => [
        "name" => "Le Seigneur des anneaux - Tome 2",
        "price" => 2000,
        "no_of_pages" => 432,
        "editor" => "Bourgois",
        "collection" => "Tolkien",
        "format" => "15cm x 24cm",
        "release_date" => "Oct. 2015",
        "discount" => 5,
        "tva" => 20,
        "picture_url" => "img/Les-deux-tours.jpg"
    ],
    "lotr3" => [
        "name" => "Le Seigneur des anneaux - Tome 3",
        "price" => 2000,
        "no_of_pages" => 497,
        "editor" => "Bourgois",
        "collection" => "Tolkien",
        "format" => "15cm x 24cm",
        "release_date" => "Oct. 2016",
        "discount" => 0,
        "tva" => 20,
        "picture_url" => "img/Le-retour-du-roi.jpg"
    ],
];
?>

<div class="container-fluid col-12 d-flex bg-dark text-white">
    <?php foreach ($books as $book) { ?>

        <div class="col-4">
            <h3><?php echo $book["name"] ?></h3>
            <img src="<?= $book["picture_url"] ?>" class="" alt="lotr">
            <h2>Prix : <?php formatPrice($book["price"]) ?></h2>
            <p>Prix HT: <?php formatPrice(priceExcludingVAT($book["price"]));?></p>
            <p>-<?= $book['discount'] ?>%</p>
            <p>Prix promo: <?php formatPrice(discountedPrice($book["price"], $book['discount']));?></p>
            <h3>Caractéristiques</h3>
            <h4>Date de parution <?php echo $book["release_date"] ?></h4>
            <h4>Editeur <?php echo $book["editor"] ?></h4>
            <h4>Collection <?php echo $book["collection"] ?></h4>
            <h4>Format <?php echo $book["format"] ?></h4>
            <h4>Nombre de pages <?php echo $book["no_of_pages"] ?></h4>
        </div>
    <?php } ?>
</div>



