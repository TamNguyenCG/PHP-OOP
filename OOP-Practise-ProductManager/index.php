<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("Mobiles"));
$productManager->add(new Product("Laptops"));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName()."<br>";
}