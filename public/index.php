<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'You';

echo $twig->render('home.html.twig', ['name' => $name]);
