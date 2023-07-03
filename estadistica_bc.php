<!DOCTYPE html>
<html>
<head>
    <title>Estadística BC</title>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <style>
        .chart-container {
            border: 1px solid gray;
            padding: 20px;
            width: 100%;
            margin: 0 auto;
            border-radius: 5px;
            margin-bottom: 20px; 
            
        }

.titulo-estadisticas {
    color: #6A1C32;
    text-align: center;
    font-size: 76px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 800;
    letter-spacing: -1.5px;
}

.texto-descripcion {
    color: #1B1B1B;
    text-align: center;
    font-size: 20px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    line-height: 30px;
    letter-spacing: 0.15px;
}


.banner {
    width: 100%;
    height: auto;
}

.container {
    display: flex;
    flex-wrap: wrap;
    padding: 20px;
}

#graficaPoblacion {
    width: 500px;
    max-width: 500px;
    height: auto;
}

#graficaMayores60 {
    width: 400px;
    max-width: 500px;
    height: auto;
}

.my-card {
    border-radius: 16px;
    background: #6A1C32;
    color: white;
}


.btn-custom {
    border-radius: 4px;
    border: 1px solid #6A1C32;
    background: #FFF;
    color: #6A1C32;
    margin: 10px; /* Agregar un pequeño margen para el espacio entre los botones */
}

.full-width-chart {
        width: 100%;
        height: 500px;
}

.my-text-1 {
    color: #000 !important;
    font-size: 20px !important;
    font-family: Montserrat, sans-serif !important;
    font-weight: 600 !important;
    line-height: 32px !important;
    text-align: left !important;
}

.my-text-2, .my-text-3 {
    color: #000 !important;
    font-size: 14px !important;
    font-family: Montserrat, sans-serif !important;
    font-weight: 500 !important;
    line-height: 20px !important;
    letter-spacing: 0.07px !important;
    text-align: left !important;
}

.nav-link {
  color: #6a1232 !important;
  font-size: 1em; /* ajusta este valor a lo que necesites */
  font-weight: 600;
}

.nav-link:hover, 
.nav-link:focus, 
.nav-link.active {
  color: #6a1232 !important;
  background-color: #dcdcdc;
}

.nav-item {
  flex-grow: 1;
}


    </style>

</head>
<body>

<img src="assets/img/banner_estadistica.png" alt="Descripción del Banner" class = "banner">

 

    <div class="titulo-estadisticas">Estadisticas BC</div>
    <div class="container texto-descripcion">Descubre el panorama detallado de nuestra región a través de datos cuantitativos y tendencias clave. Explora indicadores socioeconómicos, demográficos y de desarrollo que te ayudarán a comprender el estado actual y evaluar el progreso a lo largo del tiempo.</div>
</div>

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
<script>
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
