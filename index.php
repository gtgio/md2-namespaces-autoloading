<?php
ini_set('display_errors', 1); //Om foutberichten altijd te tonen (handig op Ma cloud)
require 'autoload.php';
// require 'src/classes/ProductCatalogue.php';
// require 'src/classes/Product.php';
// require 'src/classes/ShoppingCart.php';

use Gio\BAP\Product;
use Gio\BAP\ShoppingCart;
use Gio\BAP\ProductCatalogue;

// require 'src/Product.php';

use Nike\Commerce\Webshop\Product as NikeProduct;

$product = new Product('Broodje Gezond');
$nike_product = new NikeProduct('Air Max',159.95);

$cart = new ShoppingCart();
$catalogue = new ProductCatalogue();

echo $product->getName();
echo $nike_product->getName();

// Deze bestanden doen verder niet veel bijzonders. Het is alleen om te oefenen met namespaces en autoloading
