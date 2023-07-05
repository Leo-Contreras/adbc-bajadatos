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
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <style>

    .chart-container-seccion-2 {
        padding: 20px;
        width: 100%;
        margin: 0 auto;
        border-radius: 5px;
        margin-bottom: 20px; 
        min-height: 200px; /* Modificar a 400px */
    }

    .chart-container-seccion-3 {
        border: 1px solid gray;
        padding: 20px;
        width: 100%;
        margin: 0 auto;
        border-radius: 5px;
        margin-bottom: 20px; 
        height: 500px;
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
    .componente-card-titulo {
        color: var(--white, #FFF);
        /* Headline 28/SemiBold */
        font-size: 28px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        line-height: 36px;
        letter-spacing: -0.28px;
    }

    .banner {
        width: 100%;
        height: auto;
    }

    .container {
        flex-wrap: wrap;
        padding: 20px;
    }

    .custom-card {
    background-color: #6A1C32;
    color: white !important;
    width: 332px;
    height: 141px;
    border-radius: 16px;
    overflow: hidden;
    display: flex;
    justify-content: center;
    }

    .col-lg-4, .col-md-6, .col-sm-12 {
    padding: 0 15px; /* Adding padding to left and right */
}

    #myChart {
        width: 100px; 
        height: 100px;
    }

    #graficaPoblacion, #graficaMayores60 {
    width: 100%;
    height: 400px; /* Define una altura específica para que los gráficos sean del mismo tamaño */
    }


    p {
    display: block;
    width: 100%;
    }

    .btn-custom {
        border-radius: 4px;
        border: 1px solid #6A1C32;
        background: #FFF;
        color: #6A1C32;
        font-size: 20px; /* Cambia el tamaño de la fuente */
        padding: 15px 25px; /* Cambia la altura y el ancho del botón, respectivamente */
        margin: 10px; /* Agregar un pequeño margen para el espacio entre los botones */
    }

    .full-width-chart {
    width: 100%; /* Ancho del 100% para llenar el contenedor padre */
    height: 500px; /* Altura fija de 500px */
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
    font-size: 20px; /* Cambia el tamaño de la fuente */
    padding: 15px 25px; /* Cambia la altura y el ancho del botón, respectivamente */

    font-weight: 600;
    }

    .nav-link:hover, 
    .nav-link:focus, 
    .nav-link.active {
    color: #6a1232 !important;
    background-color: #dcdcdc;
    }

    .nav-item a.nav-link {
        color: var(--gray-500, #3C3C3B);
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        line-height: 28px;
    }

    .nav-item a.nav-link.active {
        color: var(--red, #6A1C32);
        font-weight: 700;
    }

    .small-font {
        font-size: 12px; /* Ajusta este valor a tu preferencia */
    }
    </style>

</head>
<body>

    <img src="assets/img/banner_estadistica.png" alt="Descripción del Banner" class = "banner">
        <div class="titulo-estadisticas">Estadisticas BC</div>
        <div class="container texto-descripcion">Descubre el panorama detallado de nuestra región a través de datos cuantitativos y tendencias clave. Explora indicadores socioeconómicos, demográficos y de desarrollo que te ayudarán a comprender el estado actual y evaluar el progreso a lo largo del tiempo.</div>
    </div>

        <div class="container">
            <!-- Primer grupo de tabs -->   
            <div class="row"> 
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
                    <!-- Control Digital Tab -->
                    <div role="tabpanel" class="tab-pane fade show active" id="controlDigital">  
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <!-- Card 1 -->
                                <div class="card custom-card text-white">
                                    <div class="card-body componente-card-titulo">
                                        <br/>
                                        <div class="card-text">Total: $115,000</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <!-- Card 2 -->
                                <div class="card custom-card">
                                    <div class="card-body">
                                    <div id="ControlDigitalGrafica" style="width:300px; height:110px;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <!-- Card 3 -->
                                <div class="card custom-card text-white">
                                    <div class="card-body">
                                        <br/>
                                        <br/>
                                        <div class="card-text componente-card-titulo">Total Mujeres: 44</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="sistemaPUB">
                
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="entidades">
                
                    </div>

                </div>
            </div>

            <!-- Segundo grupo de tabs -->
        <div class="row">
            
        <div class="container">
             <ul class="nav nav-tabs small-font" role="tablist">
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
        </div>

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
            </div>
    </div>

   
   
    <div class="container">
        <p class="my-text-1 text-left">Mide la población de 60 años o más que ha utilizado Internet en los últimos 3 meses.</p>
        <p class="my-text-3 text-left">Fuente: ENDUTIH 2021, INEGI</p>
        <p class="my-text-2 text-left">Unidades: Porcentaje, a mayor valor mayor digitalización.</p>
    </div>

    <div class ="container">

    
    <h3 class="chart-title">Total Personas</h3> <!-- Título para la gráfica 1 -->  
    <div id="GraficaLinea1" style="width:100%; height:400px;"></div>

            <div class="container">      
                <div class="row">
                <div class="col-md-4">
                    <h3 class="chart-title">Población de 60 años</h3> <!-- Título para la gráfica 1 -->
                    <div class="chart-container-seccion-2">
                        <div id="graficaPoblacion"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="chart-title">Personas Mayores a 60 años</h3> <!-- Título para la gráfica 2 -->
                    <div class="chart-container-seccion-2">
                        <div id="graficaMayores60"></div>
                    </div>
                </div>
                </div>
            </div>

                        
                 

                        <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="chart-container-seccion-3">
                            <div id="GraficaBarras1"></div>  <!-- Gráfica de Highcharts 1 -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="chart-container-seccion-3">
                            <div id="GraficaBarras2"></div>  <!-- Gráfica de Highcharts 2 -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="chart-container-seccion-3">
                            <div id="GraficaBarras3"></div>  <!-- Gráfica de Highcharts 3 -->
                        </div>
                    </div>
                </div>
            </div>

    </div>

<script>

    var ctxNuevoGrafico = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctxNuevoGrafico, {
        type: 'doughnut',
        data: {
            labels: ['Hombres', 'Mujeres'],
            datasets: [{
                label: 'Población',
                data: [285, 125],
                backgroundColor: [
                    'rgba(255, 165, 0, 0.5)',  // Naranja semi-transparente
                    'rgba(255, 255, 255, 0.5)'  // Blanco semi-transparente
                ],
                borderColor: [
                    'rgba(255, 165, 0, 1)',  // Naranja
                    'rgba(255, 255, 255, 1)'  // Blanco
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            aspectRatio: 1,
            cutout: '80%',  // Ajusta este valor para cambiar el grosor de la gráfica
            plugins: {
                legend: {
                    position: 'left',  // Posición de la leyenda
                    labels: {
                        color: 'white',  // Color de las letras
                        padding: 35  // Espacio entre la gráfica y la leyenda
                        
                    }
                }
            }
        }
    });
</script>
        <script>
            Highcharts.chart('graficaPoblacion', {
                chart: {
                    type: 'pie',
                    backgroundColor: '#f2f2f2',
                    spacingBottom: 30,
                    spacingTop: 30
                },
                title: {
                    text: ''
                },
                plotOptions: {
                    pie: {
                        innerSize: '50%', // Esto crea la gráfica de dona
                        dataLabels: {
                            enabled: false
                        },
                        showInLegend: true // Esto muestra la leyenda
                    }
                },
                series: [{
                    name: 'Población',
                    data: [
                        {
                            name: 'Poblacion de B.C',
                            y: 3786923,
                            color: '#131313'
                        },
                        {
                            name: 'Poblacion Económica Activa',
                            y: 1852151,
                            color: '#B17A45'
                        },
                        {
                            name: '% tiene acceso a internet',
                            y: 220342,
                            color: '#6A1C32'
                        },
                        {
                            name: '% dispone de celular',
                            y: 220342,
                            color: '#F9768A'
                        }
                    ]
                }]
            });
            Highcharts.chart('GraficaLinea1', {
                chart: {
                    backgroundColor: '#f2f2f2',
                    spacingTop: 60,
                    spacingBottom: 60
                },
                title: {
                    text: ''
                },
                xAxis: {
                    categories: ['Q1', 'Q2', 'Q3', 'Q4']
                },
                yAxis: {
                    title: {
                        text: 'Población'
                    },
                    min: 0,
                    max: 170
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },
                plotOptions: {
                    series: {
                        allowPointSelect: true
                    }
                },
                series: [{
                    name: 'Año Pasado',
                    data: [140, 145, 150, 155],
                    color: 'rgba(0, 123, 255, 1)',
                }, {
                    name: 'Año Actual',
                    data: [145, 150, 155, 160],
                    color: 'rgba(220, 53, 69, 1)',
                }],
                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }
            });
        </script>
        <script>
                Highcharts.chart('graficaMayores60', {
            chart: {
                type: 'bar',
                backgroundColor: '#f2f2f2',
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ['Años'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Población',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' personas'
            },
            plotOptions: {
                bar: {
                    borderRadius: 5, // Configura esquinas redondeadas
                    pointPadding: 0.4, // Ajusta el padding para hacer las barras más delgadas
                    groupPadding: 0.4  // Ajusta el padding para hacer las barras más delgadas
                },
                series: {
                    stacking: 'normal'
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: '2023',
                data: [{
                    y: 394111,
                    color: 'gold'
                }]
            }, {
                name: '2021',
                data: [{
                    y: 179111,
                    color: '#6A1C32'
                }]
            }]
        });

        // Definición de las categorías
var categories = ['Barra 1', 'Barra 2 ', 'Barra 3 ', 'Barra 4' , 'Barra 5', 'Barra 6', 'Barra 7', 'Barra 8'];

Highcharts.chart('GraficaBarras1', {
    chart: {
        backgroundColor: '#f2f2f2',
        type: 'bar'
    },
    title: {
        text: 'Incidencia de padecimientos en el Estado 2022'
    },
    xAxis: {
        categories: categories
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Incidencia'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'Hombres',
        data: [50, 25, 60, 75 , 50 , 80, 30,20],
        color: '#6A1C32'
    }, {
        name: 'Mujeres',
        data: [25, 50, 10, 40, 25, 50, 10, 40],
        color: '#B17A45'
    }]
});

Highcharts.chart('GraficaBarras2', {
    chart: {
        backgroundColor: '#f2f2f2',
        type: 'bar'
    },
    title: {
        text: 'Incidencia de padecimientos en el Estado 2022'
    },
    xAxis: {
        categories: categories
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Incidencia'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'Hombres',
        data: [30, 15, 40, 65 , 30 , 70, 20,10],
        color: '#6A1C32'
    }, {
        name: 'Mujeres',
        data: [15, 30, 5, 20, 15, 30, 5, 20],
        color: '#B17A45'
    }]
});

Highcharts.chart('GraficaBarras3', {
    chart: {
        backgroundColor: '#f2f2f2',
        type: 'bar'
    },
    title: {
        text: 'Incidencia de padecimientos en el Estado 2022'
    },
    xAxis: {
        categories: categories
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Incidencia'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'Hombres',
        data: [70, 35, 80, 95 , 70 , 100, 40,30],
        color: '#6A1C32'
    }, {
        name: 'Mujeres',
        data: [35, 70, 20, 60, 35, 70, 20, 60],
        color: '#B17A45'
    }]
});


        </script>

    </body>
</html>
