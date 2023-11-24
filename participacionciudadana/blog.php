<?php
// blog.php

// Obtén el ID del blog de la URL
$blogId = $_GET['id'] ?? null;

// Asegúrate de que el ID es válido y está limpio para prevenir problemas de seguridad
// como la Inyección SQL si estás usando una base de datos
// Asegúrate de que el ID es válido y está limpio para prevenir problemas de seguridad
$blogId = filter_var($blogId, FILTER_SANITIZE_STRING);


// Función que consulta la API o la base de datos
function fetchBlogById($blogId, $spaceId, $accessToken) {
    // Si estás usando Contentful:
    $url = "https://cdn.contentful.com/spaces/${spaceId}/entries/${blogId}?access_token=${accessToken}";
    $response = file_get_contents($url);
    return json_decode($response, true);
    // Si usas una base de datos, aquí iría tu código SQL y lógica de base de datos.
}

// Suponiendo que tienes el access token y space id almacenados de forma segura
$spaceId = '6j42ecmb5g42';
$accessToken = '8fIKYTkTHgqr3NG1nOklqYhXYZp5KuTgt3KTmlpuIus';

$blog = fetchBlogById($blogId, $spaceId, $accessToken);

// Asegúrate de que tienes datos válidos antes de intentar usarlos.
if ($blog) {
    // Variables para plantilla
    $title = $blog['fields']['titulo'] ?? 'Título no disponible';
    $resumen = $blog['fields']['resumenArticulo'] ?? 'Resumen no disponible';
    $contenido = $blog['fields']['contenidoPrincipal'] ?? 'Contenido no disponible';
    // ... cualquier otro dato que necesites
}

// Asumiendo que $contenido es un array u objeto que representa Rich Text
// Necesitarás procesar este contenido enriquecido para convertirlo en HTML

// Esta es una función muy básica y no cubre todos los casos, es solo un ejemplo
function renderRichTextToHtml($richText) {
    $html = '';

    foreach ($richText['content'] as $contentNode) {
        switch ($contentNode['nodeType']) {
            case 'paragraph':
                $html .= '<p>';
                foreach ($contentNode['content'] as $textContent) {
                    $html .= htmlspecialchars($textContent['value']);
                }
                $html .= '</p>';
                break;
            // Agrega otros casos para 'heading-1', 'heading-2', 'list-item', etc.
            // ...
        }
    }

    return $html;
}

// Luego, en lugar de usar htmlspecialchars directamente, llamarías a esta función:
$contenidoHtml = renderRichTextToHtml($blog['fields']['contenidoPrincipal']);


?>

<!-- Comienza la plantilla HTML -->
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net" rel="preconnect" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/boosted@5.0.2/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-6VTsNhIHFxNglfMLfhvvJFxXZbdvT1UXhm7+wVMAda9c+2NIFu4zmlKKz/bJthi/" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<!-- Google Fonts -->

	<link rel="stylesheet" type="text/css" href="../assets/css/Style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.index.css">
  
    <title><?php echo htmlspecialchars($title); ?></title>
    <!-- Incluir aquí otros recursos CSS o JS -->
</head>
<body>

<div class="container">
            <!-- Contenido del blog -->
    <article>
            <h1 class="text-center"><?php echo htmlspecialchars($title); ?></h1>
            <p><?php echo htmlspecialchars($resumen); ?></p>
            <div class="contenido-principal">
            <?php echo $contenidoHtml; ?>
                <!-- Aquí deberías tener en cuenta el manejo de Rich Text -->
            </div>
        </article>


</div>


    
    <div id="articles-container" class="container"></div>

<!-- ... Tus otros códigos ... -->
<!-- COMENTARIOS SECCION -->

            <div id="disqus_thread" class="container">
            </div>









            <?php
$enlaces = [
    [
        'titulo' => 'BAJA CALIFORNIA',
        'items' => [
            ['texto' => 'Mexicali', 'url' => 'https://www.mexicali.gob.mx/'],
            ['texto' => 'Tijuana', 'url' => 'https://www.tijuana.gob.mx/'],
            ['texto' => 'Ensenada', 'url' => 'http://www.ensenada.gob.mx/'],
            ['texto' => 'Rosarito', 'url' => 'http://www.rosarito.gob.mx/'],
            ['texto' => 'Tecate', 'url' => 'https://tecate.gob.mx/'],
        ],
    ],
    [
        'titulo' => 'ENLACES',
        'items' => [
            ['texto' => 'Estadisticas e indicadores', 'url' => 'http://www.monitorbc.gob.mx/'],
            ['texto' => 'Compras,Proveedores y Licitaciones', 'url' => 'https://tramites.ebajacalifornia.gob.mx/Compras/'],
            ['texto' => 'Impuestos federales', 'url' => 'https://www.sat.gob.mx/'],
            ['texto' => 'Acerca del Portal', 'url' => 'https://bajacalifornia.gob.mx/Gobierno/Acerca'],
            ['texto' => 'Trámites y Servicios en Línea', 'url' => 'http://retys.bajacalifornia.gob.mx/Portal/TySEnLinea'],
        ],
    ],
    [
        'titulo' => 'CONTACTO',
        'items' => [
            ['texto' => 'Oficinas de Gobierno', 'url' => 'https://bajacalifornia.gob.mx/Gobierno/Oficinas'],
            ['texto' => 'Directorio de Funcionarios', 'url' => 'https://bajacalifornia.gob.mx/Gobierno/Directorio_Funcionarios'],
            ['texto' => 'Cajeros electrónicos', 'url' => 'http://appsweb.ebajacalifornia.gob.mx/SIFOS/Kiosko/'],
            ['texto' => 'Preguntas frecuentes', 'url' => 'https://bajacalifornia.gob.mx/Gobierno/FAQ'],
            ['texto' => 'Transparencia B.C.', 'url' => 'http://www.transparenciabc.gob.mx/'],
        ],
    ],
];
?>

<footer>
    <div class="container-fluid ">
        <div class="container container-footer bg-3f3f3d text-white pt-4 pb-4">
            <div class="row pt-4">
                <div class="col-xs-12 col-sm-3 mb-4 mb-sm-0 text-center">
                    <a href="https://www.bajacalifornia.gob.mx/">
                        <img src="../../assets/img/bc_blanco.png" alt="Logo" style="width: 100%; max-width: 150px;" />
                    </a>
                </div>
                <?php foreach ($enlaces as $columna): ?>
                    
                    <div class="col-xs-12 col-sm-3 mb-3 mb-sm-0">
                        <h4 class="mb-3"><strong><?= $columna['titulo'] ?></strong></h4>
                        <div style="height: 2px; background-color: rgb(177,122,69); width: 10%; margin-bottom: 5px;"></div> <!-- Línea dorada -->
                        <ul class="list-unstyled">
                            <?php foreach ($columna['items'] as $item): ?>
                                <li class="mb-1">
                                    <a href="<?= $item['url'] ?>" class="text-decoration-none enlaces-footer larger-text" target="_blank" rel="noopener noreferrer">
                                        <?= $item['texto'] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-gold" style="height: 4px;"></div> <!-- Contenedor dorado -->

    <div class="container-fluid bg-6a1c32 py-3 pt-4 text-white">
        <div class="container text-center">
            <p class="font-weight-bold small-text mb-0 pfooter">
                Copyright © 2023 Portal de Gobierno de Baja California | Agencia Digital | Politicas de Privacidad y Seguridad
                última fecha de actualización del día 24 de Agosto del 2023
            </p>
        </div>
    </div>
</footer>

<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    
    var disqus_config = function () {
        this.page.url = window.location.href; // Usando la URL actual como URL canónica
        this.page.identifier = "post123"; // Por ejemplo, un ID único para la página actual
    };

    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://prueba-vnmcni0wr7.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


<script id="dsq-count-scr" src="//prueba-vnmcni0wr7.disqus.com/count.js" async></script>
        <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
        <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/boosted@5.0.2/dist/js/boosted.bundle.min.js" integrity="sha384-a3K6jz95fJEM/VHhViODijMUDGZsk3kzR9A9te5dH5jYIoXW7scODk+TtVjLhCW2" crossorigin="anonymous"></script>
       
        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
        ></script>
        <!-- Bootstrap JS -->
</body>
</html>
