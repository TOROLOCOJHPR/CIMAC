<?php 
    $title = "oferta";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Sunflower:300,500,700" rel="stylesheet"> 
        <title>CIMAC</title>
    </head>
    <body>
        <?php 
            include "mod/menu.php";
        ?>
        
        <section class=" row mx-0">
            
            <div class="col-12 p-0 bg-secondary text-center text-white bg-cover" style="background-image:url('/img/innovacion.jpg')">
                <div class="capa-negra  py-5">

                    <h2 class="my-5 text-center t-shadow-2-black">
                        ¿Te interesa una Maestría en innovación y desarrollo?
                    </h2>
                
                </div>
            
            </div>
            
            <div class="col-12 col-md-12 py-4">
                <div class="row mx-0 px-4">
                    <div class="col-12 text-center py-4 mb-3 border-bottom">
                        <h2 class="text-cimac">Maestría en Desarrollo e Innovación</h2>
                        <p>
                            Nuestro objetivo es formar profesionales con las aptitudes y competencias necesarias para realizar investigación y desarrollo
                            <br> tecnológico, que contribuya en el desarrollo científico, tecnológico, académico, económico y social de la región y el país.
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>
                            <span class="text-cimac lead mb-0">Duración:</span>
                            <br>
                            2 años(6 cuatrimestres)
                            <br>
                            <br>
                            <span class="text-cimac lead mb-0">Modalidad de formación:</span>
                            <br>
                            La formación es de manera dual, practica al estar trabajando en una empresa durante la semana con su asesor interno y
                             teórica al llevar la parte académica del programa en las instalaciones de CIMAC.
                            <br>
                            <br>
                            <span class="text-cimac lead mb-0">Perfil de ingreso:</span>
                            <br>
                            Razonamiento lógico-matemático indispensable.
                            <br>                    
                            Habilidades en tecnologías de la información y comunicación.
                            <br>
                            <br>
                            Egresado de cualquiera de las áreas:
                        </p>
                        <ul class="mx-3">
                            <li>Ciencias computacionales.</li>
                            <li>Energía y medio ambiente.</li>
                            <li>Mecatrónica y control.</li>
                            <li>Instrumentación y procesamiento de señales.</li>
                            <li>Tecnología de alimentos.</li>
                            <li>Biotecnología.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="mx-3" style="line-height: 1.6em">
                            <span class="text-cimac lead mb-0">Perfil de egreso:</span>
                            <br>
                            Desarrolla e innova tecnologías competitivas, productos, procesos, equipos y sistemas, de acuerdo a las necesidades sociales emergentes.
                            <br>
                            <br>
                            Planifica, evalúa, administra y transfiere proyectos tecnológicos.
                            <br>
                            <br>
                            Desarrolla proyectos innovadores a través del espíritu emprendedor, para estar a la vanguardia en los cambios científicos y tecnológicos mundiales.
                            <br>
                            <br>
                            Lidera equipos interdisciplinarios para la ejecución de proyectos de base tecnológica.
                        </p>
                        <span class=" text-cimac lead">Mapa curricular</span>
                        <br>
                        <a class="d-block" href="/img/mapa-curricular.png" target="blank">
                            <img src="/img/mapa-curricular.png" alt="reticula" class="rounded bg-secondary" style="max-width: 100%;max-height:350px;">
                        </a>
                    </div>
                </div>
            
            </div>
            
        </section>

        <?php 
            include 'mod/footer.php';
        ?>
    </body>
</html>