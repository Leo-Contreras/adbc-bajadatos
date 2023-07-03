<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Baja Datos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/Style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.index.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
</head>
<body>
	<div class="header-background">
	    <header class="nocontent">
	        <div id="header-mid">
	            <div class="ic-container-fluid">
	                <div id="logo" title="Clic para regresar a la página de inicio">
	                    <p class="defaultLogo">
	                        <a href="index.php"><img class="imgNavBar" style="max-width:345px; outline:none!important" class="" src="assets/img/Agencia_Digital.png" alt="Logo BC"></a>
	                    </p>
	                </div>
	                <div class="contactoSoporte">
	                    <a class="LinkNav" title="Contacto" href="contacto.php">Contacto y Soporte</a>
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
				        		  	<a class="mainNavItem" href="index.php">INICIO</a>
				        		</li>
				        		<li id="navTab02">
				        		  	<a class="mainNavItem" href="gobiernoabierto.php">GOBIERNO ABIERTO</a>
				        		</li>
				        		<li id="navTab03">
				        		  	<a class="mainNavItem" href="transparenciaproactiva.php">Transparencia Proactiva</a>
				        		</li>
				        		<li id="navTab04">
				        		  	<a class="mainNavItem" href="gobiernodigital.php">Gobierno Digital</a>
				        		</li>
				        		<li id="navTab05">
				        		  	<a class="mainNavItem activeSelected" href="estadisticasbc.php">Estadísticas BC</a>
				        		</li>
				        		<li id="navTab06">
				          			<a class="mainNavItem" href="datosabiertos.php">Datos Abiertos</a>
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
		<img class="imgEncabezado" src="assets/img/banner_estadistica.png" alt="IMG-ENGOBIERNO">
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
					<div>
						<label class="ContenidoTitulo">Estadísticas BC</label>
					</div>
					<div>
						<label class="ContenidoSubTitulo">Descubre el panorama detallado de nuestra región a través de datos cuantitativos y tendencias clave. Explora indicadores socioeconómicos, demográficos y de desarrollo que te ayudarán a comprender el estado actual y evaluar el progreso a lo largo del tiempo.</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--
		//
		//SECCIÓN
		//
	-->

	<div class="pnlInformacionFrecuente">
		<div class="col-md-12 col-lg-12">
			<!-- Primer grupo de tabs -->
   <div class="container"> 
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" href="#controlDigital" role="tab" data-toggle="tab">CONTROL DIGITAL</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#sistemaPUB" role="tab" data-toggle="tab"> SISTEMA PUB</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#entidades" role="tab" data-toggle="tab">ENTIDADES Y DEPENDENCIAS</a>
        </li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="controlDigital">
        

        </div>

        <div role="tabpanel" class="tab-pane fade" id="sistemaPUB">
      
        </div>

        <div role="tabpanel" class="tab-pane fade" id="entidades">
      
        </div>

    </div>
 </div>


<!-- Segundo grupo de tabs -->
    <div class="container">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" href="#ventanilla" role="tab" data-toggle="tab">VENTANILLA BC</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#avance" role="tab" data-toggle="tab">AVANCE EN LA DIGITALIZACIÓN DE TRAMITES Y SERVICIOS</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#muac" role="tab" data-toggle="tab">MUAC</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#apps" role="tab" data-toggle="tab">APPS BC</a>
        </li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="ventanilla">
        <button type="button" class="btn btn-custom">Usuarios adultos mayores de internet</button>
        <button type="button" class="btn btn-custom">Digitalización del registro público</button>
        <button type="button" class="btn btn-custom">Cobertura de redes móviles</button>
        <button type="button" class="btn btn-custom">Usuarios de internet en zonas rurales</button>
        <button type="button" class="btn btn-custom">Usuarios de internet</button>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="avance">
        <button type="button" class="btn btn-custom">Botón 1 Avance</button>
        <button type="button" class="btn btn-custom">Botón 2 Avance</button>
        <button type="button" class="btn btn-custom">Botón 3 Avance</button>
        <button type="button" class="btn btn-custom">Botón 4 Avance</button>
        <button type="button" class="btn btn-custom">Botón 5 Avance</button>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="muac">
        <button type="button" class="btn btn-custom">Botón 1 MUAC</button>
        <button type="button" class="btn btn-custom">Botón 2 MUAC</button>
        <button type="button" class="btn btn-custom">Botón 3 MUAC</button>
        <button type="button" class="btn btn-custom">Botón 4 MUAC</button>
        <button type="button" class="btn btn-custom">Botón 5 MUAC</button>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="apps">
        <button type="button" class="btn btn-custom">Botón 1 APPS BC</button>
        <button type="button" class="btn btn-custom">Botón 2 APPS BC</button>
        <button type="button" class="btn btn-custom">Botón 3 APPS BC</button>
        <button type="button" class="btn btn-custom">Botón 4 APPS BC</button>
        <button type="button" class="btn btn-custom">Botón 5 APPS BC</button>
        </div>
    </div>
</div>

<div class="container">
    <p class="my-text-1 text-left">Mide la población de 60 años o más que ha utilizado Internet en los últimos 3 meses.</p>
    <p class="my-text-3 text-left">Fuente: ENDUTIH 2021, INEGI</p>
    <p class="my-text-2 text-left">Unidades: Porcentaje, a mayor valor mayor digitalización.</p>
</div>



<div class ="container">
                <canvas id="GraficaLinea1" class="full-width-chart"></canvas>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="chart-container">
                                <canvas id="graficaPoblacion" class="full-width-chart"></canvas>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="chart-container">
                                <canvas id="graficaMayores60" class="full-width-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    <div class="chart-container">
                        <canvas id="GraficaBarras1"></canvas>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <div class="chart-container">
                        <canvas id="GraficaBarras2"></canvas>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <div class="chart-container">
                        <canvas id="GraficaBarras3"></canvas>
                    </div>
                    </div>
                </div>
            </div>
    </div>
</div>
		</div>
	</div>

	<footer class="page-footer font-small text-center" style="display: flex;">
	    <div class="footer-line-yellow"></div>
	    <div class="row" style="background-color:#762d41; width: 100%;">
	        <div class="col-md-3 px-5" style="border-right:2px solid #bd945c;  margin-top:3rem!important; margin-bottom:3rem!important">
	            <div class="visible-lg visible-md ">
	                <img style="width:240px;" alt="Logo de Baja California" class="mt-3" src="assets/img/escudo-baja-california.png">
	            </div>
	            <div class="visible-sm visible-xs text-center">
	                <img alt="Logo de Baja California" class="mt-3" style="width:30%" src="assets/img/escudo-baja-california.png">
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
						<!-- <div class="txtb text-center">Gobierno Abierto:</div> -->
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
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
    	var ctx = document.getElementById('graficaPoblacion').getContext('2d');
   var myChart = new Chart(ctx, {
       type: 'doughnut',
       data: {
           labels: ['Poblacion de B.C', 'Poblacion Económica Activa', '% tiene acceso a internet', '% dispone de celular'],
           datasets: [{
               data: [3786923, 1852151, 220342, 220342],
               backgroundColor: [
                   '#131313',
                   '#B17A45',
                   '#6A1C32',
                   '#F9768A'
               ],
               borderWidth: 1
           }]
       },
       options: {
           responsive: true,
           cutout: '50%',
           plugins: {
               legend: {
                   display: true,
                   position: 'right'
               },
             
           }
       }
   });

   var ctx2 = document.getElementById('graficaMayores60').getContext('2d');
   var myLineChart = new Chart(ctx2, {
       type: 'line',
       data: {
           labels: ['2021','2023'],
           datasets: [{
               label: 'Poblacion mayor a 60 años',
               data: [179111, 394111],
               fill: false,
               borderColor: [
                   'rgba(255, 99, 132, 1)',
                   'rgba(54, 162, 235, 1)'
               ],
               borderWidth: 1
           }]
       },
       options: {
           responsive: true,
           scales: {
               y: {
                   beginAtZero: true
               }
           }
       }
   });

   const labels = ['Barra 1', 'Barra 2 ', 'Barra 3 ', 'Barra 4' , 'Barra 5', 'Barra 6', 'Barra 7', 'Barra 8'];

   const data1 = {
       labels: labels,
       datasets: [
           {
               label: 'Hombres',
               data: [50, 25, 60, 75 , 50 , 80, 30,20],
               backgroundColor: '#6A1C32',
           },
           {
               label: 'Mujeres',
               data: [25, 50, 10, 40, 25, 50, 10, 40],
               backgroundColor: '#B17A45',
           }
       ]
   };

   const data2 = {
       labels: labels,
       datasets: [
           {
               label: 'Hombres',
               data: [30, 15, 40, 65 , 30 , 70, 20,10],
               backgroundColor: '#6A1C32',
           },
           {
               label: 'Mujeres',
               data: [15, 30, 5, 20, 15, 30, 5, 20],
               backgroundColor: '#B17A45',
           }
       ]
   };

   const data3 = {
       labels: labels,
       datasets: [
           {
               label: 'Hombres',
               data: [70, 35, 80, 95 , 70 , 100, 40,30],
               backgroundColor: '#6A1C32',
           },
           {
               label: 'Mujeres',
               data: [35, 70, 20, 60, 35, 70, 20, 60],
               backgroundColor: '#B17A45',
           }
       ]
   };

   const config = {
       type: 'bar',
       options: {
           indexAxis: 'y',
           scales: {
               x: {
                   stacked: true,
               },
               y: {
                   stacked: true
               }
           },
           plugins: {
               title: {
                   display: true,
                   text: ['Incidencia de padecimientos en el Estado 2022', 'Incidencia de padecimientos en el Estado 2022', 'Fuente: ENDUTIH 2021, INEGI'],
                   align: 'left',
                   font: {
                       size: 20
                   }
               },
               legend: {
                   display: true,
                   position: 'right',
               }
           }
       }
   };

   var myChart1 = new Chart(
       document.getElementById('GraficaBarras1'),
       {
           ...config,
           data: data1,
       }
   );

   var myChart2 = new Chart(
       document.getElementById('GraficaBarras2'),
       {
           ...config,
           data: data2,
       }
   );

   var myChart3 = new Chart(
       document.getElementById('GraficaBarras3'),
       {
           ...config,
           data: data3,
       }
   );

   var ctxLine = document.getElementById('GraficaLinea1').getContext('2d');
   var dataLine = {
       labels: ['Q1', 'Q2', 'Q3', 'Q4'],
       datasets: [{
           label: 'Año Pasado',
           data: [140, 145, 150, 155],
           backgroundColor: 'rgba(0, 123, 255, 0.5)',
           borderColor: 'rgba(0, 123, 255, 1)',
           borderWidth: 1,
           fill: false
       }, {
           label: 'Año Actual',
           data: [145, 150, 155, 160],
           backgroundColor: 'rgba(220, 53, 69, 0.5)',
           borderColor: 'rgba(220, 53, 69, 1)',
           borderWidth: 1,
           fill: false
       }]
   };
   var myLineChart = new Chart(ctxLine, {
       type: 'line',
       data: dataLine,
       options: {
           responsive: true,
           plugins: {
               title: {
                   display: true,
                   text: 'Población BC por Trimestre'
               },
               legend: {
                   display: true,
                   position: 'top',
               },
               tooltip: {
                   enabled: true,
               },
               interaction: {
                   mode: 'index'
               }
           },
           scales: {
               y: {
                   beginAtZero: true,
                   max: 170
               }
           }
       }
   });

        // Aquí está el botón para descargar la gráfica como imagen
        var downloadButton = document.getElementById('downloadButton');
        downloadButton.addEventListener('click', function() {
            var url_base64jp = document.getElementById("GraficaLinea1").toDataURL("image/jpg");
            var a =  document.getElementById('downloadLink');
            a.href = url_base64jp;
        });
        </script>

        <script>
        $(window).resize(function() {
            // Obtén los gráficos por su id
            var graficaBarras1 = Chart.getChart("GraficaBarras1");
            var graficaBarras2 = Chart.getChart("GraficaBarras2");
            var graficaBarras3 = Chart.getChart("GraficaBarras3");

            // Redibuja cada gráfico
            graficaBarras1.resize();
            graficaBarras2.resize();
            graficaBarras3.resize();
        });
    </script>
</body>
</html>