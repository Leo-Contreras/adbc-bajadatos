
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