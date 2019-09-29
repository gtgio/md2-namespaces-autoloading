<?php
ini_set('display_errors',1); //Om foutberichten altijd te tonen (handig op Ma cloud)

require 'classes/ProductCatalogue.php';
require 'classes/Product.php';
require 'classes/ShoppingCart.php';
//require 'other-classes/Product.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Namespaces</title>
</head>
<body>
<?php

$product   = new Product('Broorje Gezond');
//$nike_product = new NikeProduct('Air Max',159,95);

$cart      = new ShoppingCart();
$catalogue = new ProductCatalogue();

echo $product->getName();
//echo $nike_product->getName();

// Deze bestanden doen verder niets, dit gaat er puur om dat je begrijpt wat namespaces zijn
// En hoe je je bestanden met classes organiseert.



?>

</body>
</html>
