<?php
require('products.php');
function formatPrice(int $param): void
{
    $param = $param / 100;
    echo number_format($param, 2) . "€";
}

function priceExcludingVAT(int $prixTTC, int $tva = 20): int
{
    return ($prixTTC) / (1 + $tva / 100);
}

function discountedPrice(int $prixTTC, int $discount): int
{
    return ($prixTTC) / (1 + $discount / 100);
}

function creatCard()
{
    global $books;

    foreach ($books as $key => $book) { ?>

        <div class="container-xxl d-flex justify-content-center  p-2  border rounded mt-2 bg-dark">

            <div class="col-md-3 mt-1">
                <img class="" src="<?= $book["picture_url"] ?>" alt="livre">
            </div>

            <div class="col-md-6 mt-1">

                <h5 class="text-white"><?php echo $book["name"] ?></h5>

                <div class="d-flex flex-row text-white">
                    <span>Nombre de pages: <?php echo $book["no_of_pages"] ?></span>
                </div>

                <div class="mt-1 mb-1 spec-1">

                    <span>Date de parution: <?php echo $book["release_date"] ?></span>
                    <span class="dot"></span>
                    <span>Editeur: <?php echo $book["editor"] ?></span>
                    <span class="dot"></span>
                    <span>Collection: <?php echo $book["collection"] ?><br></span>
                </div>

                <div class="mt-1 mb-1 spec-1">
                    <span>Format: <?php echo $book["format"] ?></span>
                    <span class="dot"></span>
                    <span>Auteur: <?php echo $book["author"] ?></span>
                    <span class="dot"></span>
                    <span>Poids: <?php echo $book["weight"] ?><br></span>
                </div>
                <p class="text-justify text-truncate para mb-0 text-white-50"><?php echo $book["resum"] ?></p>
            </div>

            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                <div class="d-flex flex-row align-items-center">
                    <?php if ($book['discount'] == null) {
                        ?>

                        <h4 class="mr-3 text-white"><?php formatPrice($book["price"]) ?></h4>


                        <?php
                    } else { ?>
                        <span class="strike-text"><?php formatPrice($book["price"]) ?></span>
                        <h4 id="prixttc"
                            class="mr-3 text-white"><?php formatPrice(discountedPrice($book["price"], $book['discount'])); ?></h4>

                        <span class="text-white" id="pourcent">-<?= $book['discount'] ?>%</span>
                        <?php
                    } ?>

                </div>
                <h6 class="text-success">Livraison gratuite</h6>

                <form method="post" action="cart.php">
                    <label for="quantity"> quantity</label>
                    <label class="justify-content-center">
                        <input style="width: 200px" type="number" name="quantity" min="1" max="10">
                    </label>
                    <input type="hidden" name="valeur" value="<?= $key ?>">
                    <br>
                    <div class="d-flex flex-column mt-4 ">
                        <button style="width: 50%" class="btn btn-primary btn-sm" type="submit">Ajouter au panier</button>
                        <button style="width: 50%" class="btn btn-outline-primary btn-sm mt-2" type="button">Add to wishlist</button>
                    </div>

                </form>


            </div>
        </div>
    <?php }


}

function total($prix, $quantity){

    return $prix * $quantity;

}




