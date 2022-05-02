<?php 

require_once __DIR__ . '/../config/twig.php';

$name = 'You, please correct-me';
echo $twig->render('home.html.twig', ['name' => $name]);

$products = ['guitar', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
echo $twig->render('product.html.twig', array (
    'products' => $products

));