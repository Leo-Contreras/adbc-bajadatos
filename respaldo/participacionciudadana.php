<?php
include('includes/config.php');
?>
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
	<link rel="stylesheet" type="text/css" href="assets/css/Style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.index.css">
</head>
<body>
	<div class="header-background">
		<header class="nocontent">
			<div id="header-mid">
				<div class="ic-container-fluid">
					<div id="logo" title="Clic para regresar a la página de inicio">
						<p class="defaultLogo">
							<a href="index.php"><img style="max-width:345px; outline:none!important" class="" src="assets/img/Agencia_Digital.png" alt="Logo BC"></a>
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
						<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation" style="color: #fff; padding: 16px 0;">
							<i class="fas fa-bars"></i>
						</button>
						<!-- Collapsible wrapper -->
						<div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
							<!-- Left links -->
							<ul id="nav" class="sf-js-enabled" style="padding: 16px 0;">
								<li id="navTab01">
									<a class="mainNavItem " href="index.php">Gobierno Abierto</a>
								</li>
								<li id="navTab03">
									<a class="mainNavItem" href="transparenciaproactiva.php">Transparencia Proactiva</a>
								</li>
								<li id="navTab04">
									<a class="mainNavItem activeSelected" href="participacionciudadana.php">Participación Ciudadana</a>
								</li>
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
		<img class="imgEncabezado" src="assets/img/baner-participacion.jpg" alt="IMG-ENGOBIERNO">
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
				<label class="ContenidoTitulo">¿Qué es la participación ciudadana?</label>
				<br>
				<label class="ContenidoSubTitulo">Este espacio es para ti que deseas aportar junto con el gobierno a la construcción de un mejor país. Únete a esta misión por el fortalecimiento de la democracia, la transparencia y la innovación. ¡Participa!</label>
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
				<?php
        		$sql = "SELECT tblposts.id, tblposts.PostTitle, tblposts.Summary, tblposts.PostDetails, tblposts.PostingDate, tblposts.Is_Active, tblposts.PostImage FROM tblposts WHERE tblposts.Is_Active=1 ORDER BY tblposts.PostingDate DESC LIMIT 6";
        		//SQL select query    
        		$result = mysqli_query($con, $sql);
        		//execute SQL statement      
        		if (!$result)
            		die("Database access failed: ".mysqli_error($con)); 
        		//output error message if query execution failed         
        		$rows = mysqli_num_rows($result); 
        		// get number of rows returned     
        		if ($rows) {
            		while ($row = mysqli_fetch_array($result))    
            		{
						$fechainicio = new DateTime($row['PostingDate']);
						$fechadia = new DateTime($row['PostingDate']);
						$fechames = new DateTime($row['PostingDate']);
						$mes = $fechainicio->format('m');
						?>
						<div class="post-slide">
							<div class="post-img">
								<img src="blog/admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="">
								<!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
							</div>
							<div class="post-content">
								<h3 class="post-title">
								<?php echo htmlentities($row['PostTitle']);?>
								</h3>
								<p class="post-description">
									<?php echo htmlentities($row['Summary']);?>
									<br>
									<br>
									<span class="post-date"><i class="fa fa-clock-o"></i>
                                    <?php echo '
                                    ';
                                    if ($mes == '1') {
                                        echo 'Enero';
                                    } else if ($mes == '2') {
                                        echo 'Febrero';
                                    } else if ($mes == '3') {
                                        echo 'Marzo';
                                    } else if ($mes == '4') {
                                        echo 'Abril';
                                    } else if ($mes == '5') {
                                        echo 'Mayo';
                                    } else if ($mes == '6') {
                                        echo 'Junio';
                                    } else if ($mes == '7') {
                                        echo 'Julio';
                                    } else if ($mes == '8') {
                                        echo 'Agosto';
                                    } else if ($mes == '9') {
                                        echo 'Septiembre';
                                    } else if ($mes == '10') {
                                        echo 'Octubre';
                                    } else if ($mes == '11') {
                                        echo 'Noviembre';
                                    } else if ($mes == '12') {
                                        echo 'Diciembre';
                                    }

                                    echo ' '; ?> <?php echo $fechainicio->format('d'); ?>, 20<?php echo $fechainicio->format('y'); ?>
									</span>
								</p>
								<br>
								<a href="postdescription.php?id=<?php echo htmlentities($row['id']);?>" class="read-more">CONOCE MÁS <img class="btnImg" src="assets/img/icon_ArrowRight.svg" width="15"></a>
							</div>
						</div>
						<?php
					}
				}
				?>
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
							<!-- Aquí puedes colocar el formulario de correo -->
							<form id="emailForm">
								<div class="mb-3">
									<label for="emailSubject" class="form-label">Asunto:</label>
									<input type="text" class="form-control" id="emailSubject" placeholder="Asunto del correo" required>
								</div>
								<div class="mb-3">
									<label for="emailMessage" class="form-label">Mensaje:</label>
									<textarea class="form-control" id="emailMessage" rows="4" required></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Enviar</button>
						</div>
					</div>
				</div>
			</div>
			<div class="post-content">
				<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#emailModal">
					<i class="fas fa-envelope"></i>
				</button>
			</div>
		</div>
	</div>

	<?php include 'includes/footer.php'; ?>

	<!-- <script src="integrarBlogs.js"></script> -->
	<script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/boosted@5.0.2/dist/js/boosted.bundle.min.js" integrity="sha384-a3K6jz95fJEM/VHhViODijMUDGZsk3kzR9A9te5dH5jYIoXW7scODk+TtVjLhCW2" crossorigin="anonymous"></script>
	<script type="text/javascript" src="assets/js/slide.js"></script>
	<!-- MDB -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
	<!-- Bootstrap JS -->
</body>

</html>