<?php

namespace Services;

class ImageService
{
    private $apiKey;
    private $baseUrl;

    public function __construct()
    {
        // Cargar la configuración de Pixabay
        $config = include __DIR__ . '/../Config/config.php';
        $this->apiKey = $config['pixabay_api_key'];
        $this->baseUrl = $config['pixabay_base_url'];
    }

    public function fetchImageByName($imageName)
    {
        // Construir la URL de la solicitud
        $url = $this->baseUrl . "?key={$this->apiKey}&q=" . urlencode($imageName) . "&image_type=photo";

        // Realizar la solicitud HTTP GET
        $response = file_get_contents($url);
        if ($response === FALSE) {
            return null;
        }

        // Decodificar el JSON de la respuesta
        $data = json_decode($response, true);
        if (isset($data['hits'][0]['largeImageURL'])) {
            // Retornar la URL de la primera imagen encontrada
            return $data['hits'][0]['largeImageURL'];
        } else {
            return null; // No se encontró una imagen
        }
    }
}
