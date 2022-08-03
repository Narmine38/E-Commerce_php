<?php

$name= 'Bluye';
$price= 25;
$img= 'img/bluey.jpg';

?>

<html lang="fr">

<body>

<h1> Article : <?php echo $name ?>   </h1>

<img src="<?= $img ?>" alt="sample image" />

<p>Prix: <?php echo $price . 'e' ?> </p>

</body>


</html>
