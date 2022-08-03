<?php
$products = ["iPhone", "iPad", "iMac"];
sort($products);


//print_r($products);
//echo "<br>";
//print_r($products[0]);
//echo "<br>";
//print_r($products[count($products) -1]);
echo "<br>";
for ($i = 0; $i < count($products); $i=$i+1) {
        echo $products[$i];
    echo "<br>";
}

foreach ($products as $key => $product){
    echo $product;
    echo "<br>";
    echo $key;
    echo "<br>";
}



