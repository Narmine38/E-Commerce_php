<?php
session_start();
global $books;
global $deliveryCompagny;
require('products.php');
require('my-functions.php');
$deliveryKey = "dhl";



if (!isset($_POST['valeur']) && !isset($_POST['quantity'])) {
    header("Location: http://localhost/E-Commerce_php");
    exit;
} else {
    $key = $_POST['valeur'];
    $quantity = $_POST['quantity'];
    checkQuantity($quantity);
}
if (isset($_POST['delivery'])) {
    $deliveryKey = $_POST['delivery'];
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Bootstrap CSS  -->
    <link href="styles/style.css" rel="stylesheet">
    <title>Panier</title>
</head>
<body>

<header>
    <?php
    require('header.php');
    ?>
</header>

<main class="text-white text-center ">

    <div id="panier"
         class="container justify-content-center  bg-dark border-primary border-top   ">
        <div class="row">
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Produit</h5>
                <h6 class="border-bottom border-primary mb-3"><?= $books[$key]["name"] ?></h6>
            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">prix unitaire</h5>
                <h6 class="border-bottom border-primary mb-3"> <?php formatPrice($books[$key]["price"]) ?></h6>
                <h5 class="border-bottom border-primary mb-3"></h5>
            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Quantité</h5>
                <h6 class="border-bottom border-primary mb-3"> <?php echo $quantity ?></h6>
                <h5 class="mb-3">Total HT </h5>
                <h5 class="mb-3">TVA</h5>
                <h5 class="mb-3">Total TTC </h5>
            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Total</h5>
                <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total($books[$key]["price"], $quantity)) ?></h6>
                <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total(priceExcludingVAT($books[$key]["price"]), $quantity)) ?></h6>
                <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total($books[$key]["price"], $quantity) - total(priceExcludingVAT($books[$key]["price"]), $quantity)) ?></h6>
                <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total($books[$key]["price"], $quantity)) ?></h6>
            </div>
        </div>
    </div>


    <form action="cart.php" method="post" class="container col-10  d-flex justify-content-center bg-dark ">
        <select name="delivery" class="me-5 rounded-pill" style="width: 60%">
            <option value="">Sélectionnez un transporteur</option>
            <?php foreach ($deliveryCompagny as $deliveryKeyk => $delivery) { ?>
                <option value="<?= $deliveryKeyk ?>"> <?= $deliveryKeyk ?></option>
            <?php } ?>
            <input type="hidden" name="valeur" value="<?= $key ?>">
            <input type="hidden" name="quantity" value="<?= $quantity ?>">
        </select>
        <input style="width: 200px" class="btn btn-primary" type="submit" value="Valider">
    </form>


    <div class="container col-10 bg-dark d-flex justify-content-end ">
        <div class="col-4 mt-3">
            <h5 class="mb-3">Date de livraison : <?php echo $deliveryCompagny[$deliveryKey]['delai']; ?> </h5>
            <h5 class="mb-3">Poids de la commande : <?php echo weightTotal($books[$key]["weight"], $quantity); ?>  </h5>
            <h5 class="mb-3">Total aprés frais de livraison
                : <?php formatPrice(priceTransport(total($books[$key]["price"], $quantity), $books[$key]["weight"], $quantity)) ?> </h5>
        </div>
    </div>


</main>

<footer>
    <?php
    require('footer.php');
    ?>
</footer>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>


<!-- Bootstrap JavaScript -->
</body>
</html>
