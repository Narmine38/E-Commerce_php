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


<!--<div class="container-fluid col-12 d-flex bg-dark  ">-->
<!--    --><?php //foreach ($books as $book) { ?>
<!---->
<!--        <div class="col-4 text-white">-->
<!--            <h3>--><?php //echo $book["name"] ?><!--</h3>-->
<!--            <img src="--><?//= $book["picture_url"] ?><!--" class="" alt="lotr">-->
<!--            <h2>Prix : --><?php //echo $book["price"] . "€" ?><!--</h2>-->
<!--            <h3>Caractéristiques</h3>-->
<!--            <h4>Date de parution --><?php //echo $book["Release date"] ?><!--</h4>-->
<!--            <h4>Editeur --><?php //echo $book["Editor"] ?><!--</h4>-->
<!--            <h4>Collection --><?php //echo $book["Collection"] ?><!--</h4>-->
<!--            <h4>Format --><?php //echo $book["Format"] ?><!--</h4>-->
<!--            <h4>Nombre de pages --><?php //echo $book["No. of pages"] ?><!--</h4>-->
<!--        </div>-->
<!--    --><?php //} ?>
<!--</div>-->

<?php foreach ($books as $book) { ?>
<section class="bg-dark">
    <div class="container py-5">
        <div class="row justify-content-center mb-3">
            <div class="col-md-12 col-xl-10">
                <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                    <img src="<?= $book["picture_url"] ?>" class="" alt="lotr">
                                    <a href="#">
                                        <div class="hover-overlay">
                                            <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <h5><?php echo $book["name"] ?></h5>
                                <div class="d-flex flex-row">
                                    <div class="text-danger mb-1 me-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span>Nombre de pages <?php echo $book["No. of pages"] ?></span>
                                </div>
                                <div class="mt-1 mb-0 text-muted small">
                                    <span>Date de parution <?php echo $book["Release date"] ?></span>
                                    <span class="text-primary"> • </span>
                                    <span>Editeur <?php echo $book["Editor"] ?></span>
                                    <span class="text-primary"> • </span>
                                    <span>Collection <?php echo $book["Collection"] ?><br /></span>
                                </div>
                                <div class="mb-2 text-muted small">
                                    <span>Format <?php echo $book["Format"] ?></span>
                                    <span class="text-primary"> • </span>
                                    <span>For men</span>
                                    <span class="text-primary"> • </span>
                                    <span>Casual<br /></span>
                                </div>
                                <p class="text-truncate mb-4 mb-md-0">
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable.
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                <div class="d-flex flex-row align-items-center mb-1">
                                    <h4 class="mb-1 me-1">€13.99</h4>
                                    <span class="text-danger"><s>Prix : <?php echo $book["price"] . "€" ?></s></span>
                                </div>
                                <h6 class="text-success">Free shipping</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button class="btn btn-primary btn-sm" type="button">Details</button>
                                    <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                        Add to wishlist
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>








