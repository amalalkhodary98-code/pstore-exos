<?php

$url = "https://dummyjson.com/products";

$json = file_get_contents($url);

$data = json_decode($json, true);

$products = $data['products'];

?>

<h1>Our Products</h1>

<ul>

<?php foreach ($products as $product): ?>

    <li>

    <a href="product.php?id=<?php echo $product['id']; ?>">

        <?php echo $product['title']; ?>

    </a>

    - <?php echo $product['price']; ?> $

</li>