<?php
$books = [
    "lotr" => [
        "name" => "Le Seigneur des anneaux - Tome 1",
        "price" => 20,
        "Editor" => "Bourgois",
        "Collection" => "Tolkien",
        "Format" => "15cm x 24cm",
        "No. of pages" => 528,
        "Release date" => "Oct. 2014",
        "discount" => 10,
        "picture_url" => "img/La-fraternite-de-l-anneau.jpg"
    ],
    "lotr2" => [
        "name" => "Le Seigneur des anneaux - Tome 2",
        "price" => 20,
        "No. of pages" => 432,
        "Editor" => "Bourgois",
        "Collection" => "Tolkien",
        "Format" => "15cm x 24cm",
        "Release date" => "Oct. 2015",
        "discount" => 10,
        "picture_url" => "img/Les-deux-tours.jpg"
    ],
    "lotr3" => [
        "name" => "Le Seigneur des anneaux - Tome 3",
        "price" => 20,
        "No. of pages" => 497,
        "Editor" => "Bourgois",
        "Collection" => "Tolkien",
        "Format" => "15cm x 24cm",
        "Release date" => "Oct. 2016",
        "discount" => 10,
        "picture_url" => "img/Le-retour-du-roi.jpg"
    ],
];

?>

<!--<div class="container-fluid col-12 d-flex  ">-->
<!--    <div class="col-4">-->
<!---->
<!--        <h3>--><?php // echo $books["lotr"]["name"] ?><!--</h3>-->
<!--        <img src="--><?//= $books["lotr"]["picture_url"] ?><!--" class="" alt="lotr">-->
<!--        <h2>Prix : --><?php // echo $books["lotr"]["price"] ."€" ?><!--</h2>-->
<!--        <h3>Caractéristiques</h3>-->
<!--        <h4>Date de parution --><?php // echo $books["lotr"]["Release date"] ?><!--</h4>-->
<!--        <h4>Editeur --><?php // echo $books["lotr"]["Editor"] ?><!--</h4>-->
<!--        <h4>Collection --><?php // echo $books["lotr"]["Collection"] ?><!--</h4>-->
<!--        <h4>Format --><?php // echo $books["lotr"]["Format"] ?><!--</h4>-->
<!--        <h4>Nombre de pages --><?php // echo $books["lotr"]["No. of pages"] ?><!--</h4>-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="col-4">-->
<!--        <h3>--><?php // echo $books["lotr2"]["name"] ?><!--</h3>-->
<!--        <img src="--><?//= $books["lotr2"]["picture_url"] ?><!--" class="" alt="lotr">-->
<!--        <h2>Prix : --><?php // echo $books["lotr2"]["price"] ."€" ?><!--</h2>-->
<!--        <h3>Caractéristiques</h3>-->
<!--        <h4>Date de parution --><?php // echo $books["lotr2"]["Release date"] ?><!--</h4>-->
<!--        <h4>Editeur --><?php // echo $books["lotr2"]["Editor"] ?><!--</h4>-->
<!--        <h4>Collection --><?php // echo $books["lotr2"]["Collection"] ?><!--</h4>-->
<!--        <h4>Format --><?php // echo $books["lotr2"]["Format"] ?><!--</h4>-->
<!--        <h4>Nombre de pages --><?php // echo $books["lotr2"]["No. of pages"] ?><!--</h4>-->
<!--    </div>-->
<!---->
<!--    <div class="col-4">-->
<!---->
<!--        <h3>--><?php // echo $books["lotr3"]["name"] ?><!--</h3>-->
<!--        <img src="--><?//= $books["lotr3"]["picture_url"] ?><!--" class="" alt="lotr">-->
<!--        <h2>Prix : --><?php // echo $books["lotr3"]["price"] ."€" ?><!--</h2>-->
<!--        <h3>Caractéristiques</h3>-->
<!--        <h4>Date de parution --><?php // echo $books["lotr3"]["Release date"] ?><!--</h4>-->
<!--        <h4>Editeur --><?php // echo $books["lotr3"]["Editor"] ?><!--</h4>-->
<!--        <h4>Collection --><?php // echo $books["lotr3"]["Collection"] ?><!--</h4>-->
<!--        <h4>Format --><?php // echo $books["lotr3"]["Format"] ?><!--</h4>-->
<!--        <h4>Nombre de pages --><?php // echo $books["lotr3"]["No. of pages"] ?><!--</h4>-->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->


<div class="container-fluid col-12 d-flex  ">
    <?php foreach ($books as $book) { ?>

        <div class="col-4">
            <h3><?php echo $book["name"] ?></h3>
            <img src="<?= $book["picture_url"] ?>" class="" alt="lotr">
            <h2>Prix : <?php echo $book["price"] . "€" ?></h2>
            <h3>Caractéristiques</h3>
            <h4>Date de parution <?php echo $book["Release date"] ?></h4>
            <h4>Editeur <?php echo $book["Editor"] ?></h4>
            <h4>Collection <?php echo $book["Collection"] ?></h4>
            <h4>Format <?php echo $book["Format"] ?></h4>
            <h4>Nombre de pages <?php echo $book["No. of pages"] ?></h4>
        </div>
    <?php } ?>
</div>








