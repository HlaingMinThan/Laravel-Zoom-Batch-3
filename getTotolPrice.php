<?php

function getTotalPrice($carts)
{
    $total = 0;

    foreach ($carts as $product) {
        $total = $total + $product['price'];
    }

    return $total;
}
