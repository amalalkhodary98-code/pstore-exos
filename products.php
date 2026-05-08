<?php

$products = [

["id" => 1, "name" => "Essence Mascara Lash Princess"],
["id" => 2, "name" => "Eyeshadow Palette with Mirror"],
["id" => 3, "name" => "Powder Canister"],
["id" => 4, "name" => "Red Lipstick"],
["id" => 5, "name" => "Red Nail Polish"],
["id" => 6, "name" => "Calvin Klein CK One"],
["id" => 7, "name" => "Chanel Coco Noir Eau De"],
["id" => 8, "name" => "Dior J'adore"],
["id" => 9, "name" => "Dolce Shine Eau de"],
["id" => 10, "name" => "Gucci Bloom Eau de"],
["id" => 11, "name" => "Annibale Colombo Bed"],
["id" => 12, "name" => "Annibale Colombo Sofa"],
["id" => 13, "name" => "Bedside Table African Cherry"],
["id" => 14, "name" => "Knoll Saarinen Executive Conference Chair"],
["id" => 15, "name" => "Wooden Bathroom Sink With Mirror"]

];

?>

<h1>Products List</h1>

<?php foreach ($products as $product) { ?>

<p>
    <a href="product.php?id=<?php echo $product['id']; ?>">
        <?php echo $product['name']; ?>
    </a>
</p>

<?php } ?>