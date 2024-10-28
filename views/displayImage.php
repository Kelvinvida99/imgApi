<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Imagen de Pixabay</title>
</head>
<body>
    <h1>Resultado de la búsqueda</h1>
    <?php if ($imageUrl): ?>
        <img src="<?php echo htmlspecialchars($imageUrl); ?>" alt="Imagen de Pixabay">
    <?php else: ?>
        <p>No se encontró ninguna imagen con ese nombre.</p>
    <?php endif; ?>
</body>
</html>
