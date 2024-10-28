<?php

namespace Controllers;

use Services\ImageService;

class ImageController
{
    private $imageService;

    public function __construct()
    {
        $this->imageService = new ImageService();
    }

    public function showImage($imageName)
    {
        // Llama al servicio para obtener la URL de la imagen
        $imageUrl = $this->imageService->fetchImageByName($imageName);

        // Cargar la vista y pasar la URL de la imagen
        include __DIR__ . '/../../views/displayImage.php';
    }
}
