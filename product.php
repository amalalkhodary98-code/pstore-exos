<?php

$id = $_GET['id'] ?? 1;

$products = [

1 => [
    "name" => "aliquid ad eum",
    "price" => 180.12,
    "description" => "Product description"
],

2 => [
    "name" => "ipsam omnis quod",
    "price" => 198.69,
    "description" => "Product description"
],

3 => [
    "name" => "quis nam amet",
    "price" => 121.78,
    "description" => "Product description"
],

4 => [
    "name" => "dicta amet facilis",
    "price" => 754.26,
    "description" => "Product description"
],

5 => [
    "name" => "quae tempore numquam",
    "price" => 134.04,
    "description" => "Product description"
],

6 => [
    "name" => "molestias ut magni",
    "price" => 15.33,
    "description" => "Product description"
],

7 => [
    "name" => "voluptatem assumenda culpa",
    "price" => 873.52,
    "description" => "Product description"
],

8 => [
    "name" => "magni alias a",
    "price" => 955.45,
    "description" => "Product description"
],

9 => [
    "name" => "ut accusamus laudantium",
    "price" => 491.68,
    "description" => "Product description"
],

10 => [
    "name" => "sit modi vitae",
    "price" => 562.20,
    "description" => "Product description"
],

11 => [
    "name" => "qui illo totam",
    "price" => 381.55,
    "description" => "Product description"
],

12 => [
    "name" => "nihil ut sed",
    "price" => 898.78,
    "description" => "Product description"
],

13 => [
    "name" => "sit ut reprehenderit",
    "price" => 20.16,
    "description" => "Product description"
],

14 => [
    "name" => "et qui quod",
    "price" => 806.08,
    "description" => "Product description"
],

15 => [
    "name" => "libero eos temporibus",
    "price" => 14.12,
    "description" => "Product description"
]

];

$product = $products[$id];
?>

<h1><?php echo $product['name']; ?></h1>

<p>
Price:
<?php echo $product['price']; ?> €
</p>

<p>
<?php echo $product['description']; ?>
</p>

<a href="products.php">Back to products</a>