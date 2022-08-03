<?php
var_dump($_POST);
require('products.php');
require ('my-functions.php');
require ('404.php');
global $books;



// Vérifier si le formulaire est soumis
if (isset($_POST['submit'])) {
    /* récupérer les données du formulaire en utilisant
       la valeur des attributs name comme clé
      */
//    $nom = $_POST['nom'];
//    $age = $_POST['age'];
    $adresse = $_POST['quantité'];


}

if( $adresse < 0) {
    http_redirect ("http://localhost/E-Commerce_php/404.php"  );
}
//mon code

//if (isset($_POST['submit'])) {
//    /* récupérer les données du formulaire en utilisant
//       la valeur des attributs name comme clé
//      */
//    $key = $_POST['quantité'];
//    $age = $_GET['age'];
//    $adresse = $_GET['adresse'];
//
//
//}

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

<main>

    <div id="panier" class="container justify-content-center  text-center border-primary border-top bg-dark text-white  ">
        <div class="row">
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Produit</h5>
                <h6 class="border-bottom border-primary mb-3"></h6>
            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">prix unitaire</h5>
                <h6 class="border-bottom border-primary mb-3"></h6>
            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Quantité</h5>
                <h6 class="border-bottom border-primary mb-3"><?php echo $adresse ?></h6>
                <h5 class="mb-3">Total HT</h5>
                <h5 class="mb-3">TVA</h5>
                <h5 class="mb-3">Total TTC</h5>
            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Total</h5>
                <h6 class="border-bottom border-primary mb-3">empty</h6>
                <h6 class="border-bottom border-primary mb-3">empty</h6>
                <h6 class="border-bottom border-primary mb-3">empty</h6>
                <h6 class="border-bottom border-primary mb-3">empty</h6>
            </div>
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
