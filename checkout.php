<?php
$products = require "./carts.php";
require "./getTotolPrice.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Your Products</h1>
    <?php foreach ($products as $product) : ?>
        <div>
            <h3>
                <?= $product['name']; ?>
                <?php if ($product['name'] === 'iphone 14 pro') : ?>
                    <span>discount item</span>
                <?php endif; ?>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi qui maiores harum vel quibusdam nihil vitae officiis, commodi vero tenetur incidunt facilis odio? Accusamus voluptatum asperiores corporis quam consectetur id.</p>
        </div>
    <?php endforeach; ?>
    <h3>Your Total price is <?= getTotalPrice($products); ?></h3>

</body>

</html>