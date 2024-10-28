<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

return [
    'pixabay_api_key' => $_ENV['PIXABAY_API_KEY'],
    'pixabay_base_url' => 'https://pixabay.com/api/',
];
