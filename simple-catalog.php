<?php
$products = ["iPhone", "iPad", "iMac"];
asort($products);
for ($i = 0; $i < count($products); $i=$i+1) {
    $odd_products = $products[$i];
    echo $odd_products . "\n";
}

/*print_r($products);
echo "<br>";
print_r($products[0]);
echo "<br>";
print_r($products[2]);*/




