<?php

require __DIR__ . "/../vendor/autoload.php";

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/view');
$twig = new Twig\Environment($loader);
$template = $twig->load('index.html.twig');
try {
    echo $template->render(['products' => $products]);
} catch (Exception $e) {
    echo  $e->getMessage()."\n";
}