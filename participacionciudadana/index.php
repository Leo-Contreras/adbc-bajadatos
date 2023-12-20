<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Participacion ciudadana - Gobierno Abierto</title>
	<link href="https://cdn.jsdelivr.net" rel="preconnect" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/boosted@5.0.2/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-6VTsNhIHFxNglfMLfhvvJFxXZbdvT1UXhm7+wVMAda9c+2NIFu4zmlKKz/bJthi/" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" type="text/css" href="../assets/css/Style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.index.css">

</head>
<body>


	<div class="header-background">
			<header class="nocontent">
				<div id="header-mid">
					<div class="ic-container-fluid">
						<div id="logo" title="Clic para regresar a la página de inicio">
							<p class="defaultLogo">
								<a href="index.php"><img style="max-width:345px; outline:none!important" class="" src="../assets/img/Agencia_Digital.png" alt="Logo BC"></a>
							</p>
						</div>
						<div class="contactoSoporte">
						<h1>GOBIERNO ABIERTO</h1>
						</div>
					</div>
				</div>
				<div class="">
					<nav class="navbar navbar-expand-lg" style="background: #6a1c32;">
						<!-- Container wrapper -->
						<div class="container-fluid ">
							<!-- Toggle button -->
							<button class="navbar-toggler"type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation" style="color: #fff; padding: 16px 0;">
								<i class="fas fa-bars"></i>
							</button>
							<!-- Collapsible wrapper -->
							<div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
								<!-- Left links -->
								<ul id="nav" class="sf-js-enabled" style="padding: 16px 0;">
									<li id="navTab01">
										<a class="mainNavItem " href="../index.php">Gobierno Abierto</a>
									</li>
									<li id="navTab03">
										<a class="mainNavItem" href="../transparenciaproactiva.php">Transparencia Proactiva</a>
									</li>
									<li id="navTab04">
										<a class="mainNavItem activeSelected" href="./">Participación Ciudadana</a>
									</li>
									<!--
									<li id="navTab04">
										<a class="mainNavItem" href="gobiernodigital.php">Gobierno Digital</a>
									</li>
									<li id="navTab05">
										<a class="mainNavItem" href="estadisticasbc.php">Estadísticas BC</a>
									</li>
									<li id="navTab06">
										<a class="mainNavItem" href="datosabiertos.php">Datos Abiertos</a>
									</li>
									-->
								</ul>
							<!-- Left links -->
							</div>
						<!-- Collapsible wrapper -->
						</div>
					<!-- Container wrapper -->
					</nav>
				</div>
			</header>
		</div>

		<div class="pnlImagen">
		<img class="imgEncabezado" src="../assets/img/baner-participacion.jpg" alt="IMG-ENGOBIERNO">
	</div>
	<!--
		//
		//SECCIÓN ENCABEZADO
		//
	-->
	<div class="EncabezadoGobierno">
		<div class="col-md-12 col-lg-12">
			<div class="centrar">
				<div class="ContenidoTexto">
					<label class="ContenidoTitulo">Participación ciudadana
                    </label>
					<br>
					<label class="ContenidoSubTitulo">La transparencia proactiva implica compartir información adicional de manera voluntaria, más allá de lo requerido por la ley, para satisfacer las necesidades específicas de ciertos grupos o sectores. Es una forma de generar conocimiento útil y accesible para el público en general.</label>
				</div>
			</div>
		</div>
        
	</div>
	<!--
		//
		//SECCIÓN INFORMACIÓN FRECUENTE
		//
	-->
	<div class="pnlTarjetas">
		<div class="container ">
			<div class="center">
				<dt class="etiquetaConocenos"></dt>
			</div>
			<div id="news-slider" class="owl-carousel">
                <div class="post-slide">
			
                    <div class="post-img">
                        <img src="https://www.bajacalifornia.gob.mx/Recursos/Imagenes/Bienestar/Tarjeta_Violeta/IMG_6987_2.jpg" alt="">
                        <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            Tarjeta Violeta
                        </h3>
                        <p class="post-description">Priorizamos la transparencia, estableciendo una comunicación constante con la ciudadañia.</p>
                        <!-- <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span> -->
                        <a href="./articulos/tarjetavioleta.php" class="read-more">CONOCE MÁS <img class="btnImg" src="assets/img/icon_ArrowRight.svg" width="15"></a>
                    </div>
					
                </div>
               
                
			</div>
		</div>

		<div class="col-md-8">
			<div class="modal fade" id="emailModal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Enviar Correo</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
							<form id="emailForm" method="POST" action="send_email.php">
								<div class="mb-3">
									<label for="emailSubject" class="form-label"><i class="fas fa-pencil-alt"></i> Asunto:</label>
									<input type="text" class="form-control" id="emailSubject" name="emailSubject" placeholder="Asunto del correo" required>
								</div>
								<div class="mb-3">
									<label for="username" class="form-label"><i class="fas fa-pencil-alt"></i> Nombre:</label>
									<input type="text" class="form-control" id="username" name="username" placeholder="Tu nombre completo" required>
								</div>
								<div class="mb-3">
									<label for="emailAddress" class="form-label"><i class="fas fa-envelope"></i> Correo electrónico:</label>
									<input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="Correo electrónico" required>
								</div>
								<div class="mb-3">
									<label for="phoneNumber" class="form-label"><i class="fas fa-phone"></i> Número de teléfono:</label>
									<input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Número de teléfono" required pattern="[0-9]{10}">
								</div>
								<div class="mb-3">
									<label for="emailMessage" class="form-label"><i class="fas fa-comment-dots"></i> Mensaje:</label>
									<textarea class="form-control" id="emailMessage" name="emailMessage" rows="4" required></textarea>
								</div>
								<div class="mb-3 form-check">
									<input type="checkbox" class="form-check-input" id="termsCheckbox" name="termsCheckbox" required>
									<label class="form-check-label" for="termsCheckbox">
										Aceptar <a href="avisoprivacidad.pdf" target="_blank" rel="noopener noreferrer" class="text-black">Aviso de Privacidad</a>
									</label>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Enviar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="post-content">
			<div class="container">
				<button type="button" class="btn btn-primary btn-lg custom-submit-button" data-bs-toggle="modal" data-bs-target="#emailModal">
					<i class="fas fa-envelope"></i> Escríbenos
				</button>
			</div>
		</div>


		</div>

	</div>
        <!-- <div class="pnlInformacionFrecuente">
        <div class="col-md-12 col-lg-12">
            <div class="center" style="padding-top: 2%;">
                <dt class="etiquetaInformacionFrecuente">Temas a participar</dt>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-6" style="padding: 0.5rem;">
                    <div class="card card-equal-height">
                            <img src="https://www.bajacalifornia.gob.mx/Recursos/Imagenes/Bienestar/Tarjeta_Violeta/IMG_6987_2.jpg" class="card-img-top" alt="Tarjeta Violeta">
                            <div class="card-body">
                                <h5 class="card-title">Tarjeta Violeta</h5>
                                <p class="card-text">Apoyo económico de $2600 pesos bimestrales para contribuir a mejorar los ingresos de mujeres jefas de familia de entre 18 a 64 años que viven en situación de vulnerabilidad.</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="padding: 0.5rem;">
                    <div class="card card-equal-height">
                            <img src="https://www.bajacalifornia.gob.mx/Recursos/Imagenes/Bienestar/Centros.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Centros de Atención</h5>
                                <p class="card-text">Apoyo para el mantenimiento, servicios y equipamientos de los centros comunitarios inscritos a la secretaría de bienestar.</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="padding: 0.5rem;">
                    <div class="card card-equal-height">
                            <img src="https://www.bajacalifornia.gob.mx/Recursos/Imagenes/Bienestar/Pancita.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pancita llena corazón contento</h5>
                                <p class="card-text">Brinda acceso a los alimentos nutritivos para las niñas, niños y adolescentes en las escuelas públicas</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- envio de correos -->

<?php
// Asegúrate de que estás recibiendo una solicitud POST del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $subject = $_POST["emailSubject"];
    $name = $_POST["username"];
    $email = $_POST["emailAddress"];
    $phone = $_POST["phoneNumber"];
    $messageContent = $_POST["emailMessage"];

    // Reemplaza 'tu_clave_de_la_api_mandrill' con tu clave API real de Mandrill
    $apiKey = 'tu_clave_de_la_api_mandrill';
    $apiEndpoint = 'https://mandrillapp.com/api/1.0/messages/send.json';

    // Configura el mensaje a enviar
    $message = array(
        'key' => $apiKey,
        'message' => array(
            'html' => nl2br($messageContent), // Convierte los saltos de línea en <br>
            'text' => $messageContent,
            'subject' => $subject,
            'from_email' => $email,
            'from_name' => $name,
            'to' => array(
                array(
                    'email' => 'destinatario@correo.com', // El correo al que deseas enviar
                    'name' => 'Nombre del Destinatario', // El nombre del destinatario
                    'type' => 'to'
                )
            ),
            'headers' => array('Reply-To' => $email),
        ),
        'async' => false,
        'ip_pool' => 'Main Pool'
    );

    // Inicializa cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Envía el correo
    $response = curl_exec($ch);
    curl_close($ch);

    // Maneja la respuesta
    $result = json_decode($response, true);

    if(isset($result[0]['status']) && $result[0]['status'] == 'sent') {
        echo "Mensaje enviado con éxito.";
    } else {
        // Error al enviar el mensaje
        echo "Error al enviar el mensaje: ";
        print_r($result);
    }
} else {
    echo "Debes enviar el formulario con el método POST.";
}
?>



		
		<!-- Modal -->

	

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
    <div class="container-fluid bg-3f3f3d text-white pt-4 pb-4">
        <div class="container container-footer">
            <div class="row pt-4 ">
                <div class="col-xs-12 col-sm-3 mb-4 mb-sm-0 text-center">
                    <a href="https://www.bajacalifornia.gob.mx/">
                        <img src="https://www.bajacalifornia.gob.mx/Recursos/logo/escudo-baja-california.png" alt="Logo" style="width: 100%; max-width: 150px;" />
                    </a>
                </div>
                <div class="col-xs-12 col-sm-3 mb-4 mb-sm-0 ">
                        <p> <strong>Ubicaciones:</strong></p>
                        <p> Mexicali: C. José María Morelos 221, Primera, 21100 Mexicali, B.C.</p>
                        <p>Tijuana: Av. Revolución 868-Suite C, Centro, 22000 Tijuana, B.C.</p>
                        <p> <strong>Correo Institucional:</strong> contactogobiernoabierto@baja.gob.mx </p>
                       
                      
                  
                    </div>
                <?php foreach ($enlaces as $columna): ?>
                    <div class="col-xs-12 col-sm-2 mb-3 mb-sm-0">
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
            Copyright © 2023 Portal de Gobierno de Baja California | 
            <a href="avisoprivacidad.pdf" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-white">Aviso de Privacidad</a> |
            Agencia Digital | Políticas de Privacidad y Seguridad
            última fecha de actualización del día 24 de Agosto del 2023
        </p>
    </div>
</div>
</footer>
		
	<!-- <footer class="page-footer font-small text-center" style="display: flex;">
	    <div class="footer-line-yellow"></div>
	    <div class="row" style="background-color:#762d41; width: 100%;">
	        <div class="col-md-3 px-5" style="border-right:2px solid #bd945c;  margin-top:3rem!important; margin-bottom:3rem!important">
	            <div class="visible-lg visible-md ">
	                <img style="width:240px;" alt="Logo de Baja California" class="mt-3" src="../assets/img/escudo-baja-california.png">
	            </div>
	            <div class="visible-sm visible-xs text-center">
	                <img alt="Logo de Baja California" class="mt-3" style="width:30%" src="../assets/img/escudo-baja-california.png">
	            </div>
	        </div>
	        <div class="col-md-9 px-5">
	            <div class="row footer-enlaces" style="margin-top:25px!important;">
	                <div class="col-md-5">
						<ul>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/Actividades"> Datos Abiertos</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#">Datos Abiertos de Mexico</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#">DataMexico</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/SolicitudInformacion">Principios - International Open Data Charter</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/SitiosInteres">Conferencia Nacional de Datos Abiertos Mexico</a></li>
						</ul>                              
	                </div>
	                <div class="col-md-4">
						<ul>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#"> Diagnosticos</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#"> Instituto Nacional de Estadistica y Geografia (INEGI)</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#"> Indice de Desarrollo Digital Estatal (IDDE) 2022</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#"> Metrica Gobierno Abierto 2021</a></li>
						</ul>
	                </div>
					<div class="col-md-3">
						<div class="txtb text-center">Gobierno Abierto:</div> 
						<ul>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#"> Gobierno Abierto</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#"> Transparencia Proactiva</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#"> Alianza Para el gobierno abierto (OGP)</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#"> Cocreacion desde lo local</a></li>
						</ul>
						<br>
						<ul>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#"> Participacion Ciudadana</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#"> Codeando</a></li>
							<li><a href="http://portalqa.bajacalifornia.gob.mx/bajadatos/#"> SocialTIC</a></li>
						</ul>
					</div>
	            </div>   
	        </div>
	        <div class="row">
	            <div class="col-md-12">
	                <p style="color:#ffffff;  font-size:13px; margin-top:10px;">© Gobierno del Estado de Baja California 2022 - Bajadatos </p>
	            </div>
	        </div>
	    </div>
	    <div id="pie-guinda"></div>
	</footer> -->
	<script>
		document.getElementById('emailForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir la recarga de la página
    
    var formData = new FormData(this);
    
    fetch('send_email.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text()) // o response.json() si tu backend devuelve JSON
    .then(text => {
        alert(text); // Muestra la respuesta del servidor
        $('#emailModal').modal('hide'); // Oculta el modal usando jQuery
        this.reset(); // Resetea el formulario
    })
    .catch(error => {
        alert('Hubo un error al enviar el formulario: ' + error.message);
    });
});

	</script>
	<script src="integrarBlogs.js"></script>
	<script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/boosted@5.0.2/dist/js/boosted.bundle.min.js" integrity="sha384-a3K6jz95fJEM/VHhViODijMUDGZsk3kzR9A9te5dH5jYIoXW7scODk+TtVjLhCW2" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../assets/js/slide.js"></script>
	<!-- MDB -->
	<script
	  type="text/javascript"
	  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
	></script>
	<!-- Bootstrap JS -->


</body>
</html>