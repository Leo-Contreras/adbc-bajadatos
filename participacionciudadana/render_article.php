<?php
// render_article.php

// Asumiendo que tienes una función para buscar artículos por su slug
function getArticleBySlug($slug) {
    // Aquí tendrías que implementar la lógica para buscar en tu base de datos
    // o en tu API de Contentful para encontrar el artículo por su slug.
}

// Obtén el slug del parámetro de la URL
$slug = $_GET['slug'] ?? '';

// Obtén los datos del artículo usando el slug
$article = getArticleBySlug($slug);

// Si el artículo no se encuentra, puedes redirigir a una página de error o mostrar un mensaje
if (!$article) {
    // Redirige a la página de inicio o muestra un error
    header('Location: /');
    exit;
}

// Renderiza tu artículo aquí
// Ejemplo muy básico de cómo podrías empezar a estructurar la salida HTML de la página del artículo:
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($article['title']); ?></title>
    <!-- Añade aquí más metadatos y enlaces a hojas de estilo -->
</head>
<body>
    <article>
        <h1><?php echo htmlspecialchars($article['title']); ?></h1>
        <img src="<?php echo htmlspecialchars($article['imageUrl']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>">
        <div>
            <?php echo $article['content']; // Asegúrate de que este contenido esté debidamente saneado para evitar ataques XSS ?>
        </div>
        <!-- Agrega aquí más estructura de tu artículo -->
    </article>
</body>
</html>
