<?php


function formatPrice($param): void
{
    $param = $param/100;
    echo number_format($param, 2) . "€" ;
}

function priceExcludingVAT($prixTTC, $tva = 20): float{

    return ((100*$prixTTC)/(100+$tva));


}

function discountedPrice($prixTTC, $discount): int{

    return (($prixTTC*100)/(100+$discount));



}





