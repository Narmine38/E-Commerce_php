<?php
if (isset($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
    checkQuantity($quantity);
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
    <title>HerosMarkets</title>
</head>
<body>

<header>
    <?php
    require('header.php');
    ?>
</header>

<main>
    <div class="container-xxl">
        <div>
            <h1 class="text-center ">The product selected is negative</h1>
            <img src="img/404.jpeg" class=" " style="width: 50%; margin-left: 25%">
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


