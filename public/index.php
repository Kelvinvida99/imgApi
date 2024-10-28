<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Controllers\ImageController;

$imageName = $_GET['imageName'] ?? '';  // Obtener el nombre de la imagen desde el parámetro de la URL
$controller = new ImageController();
$controller->showImage($imageName);
