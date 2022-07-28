<?php

$name= 'Bluye';
$price= '25e';
$img= 'img/bluey.jpg';

?>

<html lang="fr">

<body>

<?php
echo "<h1>Article : $name</h1>";
?>

<img src="<?= $img ?>" alt="sample image" />

<?php
echo "<p>Prix : $price</p>";
?>

</body>


</html>
