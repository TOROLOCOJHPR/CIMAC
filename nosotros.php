<?php 
    $title = "nosotros";
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
    <title>CIMAC</title>
</head>
<body>
    <?php 
        include "mod/menu.php";
    ?>
    <!-- misión -->
    <div class="row mx-0 text-center">

        <div class="col-12 col-md-6 p-0 order-2 order-md-1 bg-secondary d-flex align-items-center justify-content-center">
            <div class="text-white p-5">
                <h2 class="text-white bordes-title-white"><strong>Misión</strong></h2>
                <p class="lead">
                    “Somos una institución de educación superior que forma
                    <br>profesionales con sólidos principios éticos, con
                    <br>conocimiento científico y tecnológico capaces
                    <br>de desarrollar e innovar tecnologías 
                    <br>competitivas que permitan contribuir y 
                    <br>participar en el actual mundo globalizado”
                </p>
            </div>
        </div>
    
        <div class="col-12 col-md-6 p-0 order-1 order-md-2">
            <img class="img-cover" src="/img/mision.jpg" alt="misión CIMAC">
        </div>
    
    </div><!-- misión -->

    <!-- visión -->
    <div class="row mx-0 text-center">
    
        <div class="col-12 col-md-6 p-0">
            <img class="img-cover" src="/img/vision.jpg" alt="visión CIMAC">
        </div>
    
        <div class="col-12 col-md-6 p-0">
            <div class="capa-blanca text-dark p-5">
                <h2 class="text-cimac bordes-title-cimac"><strong>Visión</strong></h2>
                <p class="lead">
                    “Ser una institución de educación superior líder en lograr una educación integral de calidad, formado profesionistas con valores y principios éticos, capaces de solucionar problemas a través de la innovación y desarrollo de tecnología competitiva dando respuesta a desafíos en un mundo globalizado” 
                </p>
            </div>
        </div>
    
    </div><!-- visión -->

    <!-- historia -->
    <div class="row mx-0 text-center">
        
        <div class="col-12 p-0 text-center bg-cimac bg-cover" style="background-image:url('/img/todos.JPG')">
            <div class="capa-cimac text-white p-5">
                <h2 class="font-weight-bold bordes-title-white">Historia</h2>
                <p class="lead" style="line-height: 1.6em">
                    Actualmente en Sinaloa y en el Noroeste del país, la investigación y las innovaciones que se reportan son escasas y aunado
                    <br>a ello,no existen hasta hoy, otros centros que se conozcan que operen en las áreas que el Centro de Innovación y Desarrollo
                    <br>Tecnológico. En razón de ello, un grupo de innovadores han decidido iniciar actividades en áreas relacionadas conla 
                    <br><strong>mecánica, mecatrónica, las TICS, nanotecnología, electrónica, biotecnología y las ciencias de la salud;</strong>
                    <br>                   
                    <br>                   
                    convencidos de que, incursionando en éstas, se podrá canalizar e impulsar profesionales con alto nivel
                    <br>de formación y cultura multidisciplinaria, fomentando así, la creatividad y generación de ideas que 
                    <br>finalmente se vean reflejadas en el desarrollo local, regional y nacional.
                </p>
            </div>
        </div>

    </div><!-- historia -->

    <!-- objetivos -->
    <div class="row mx-0 text-center">
    
        <div class="col-12 col-md-6 p-0">
            <img class="img-cover" src="/img/objetivos.jpg" alt="objetivos CIMAC">
        </div>

        <div class="col-12 col-md-6 p-0">
            <div class="capa-blanca text-dark p-5">
                <h2 class="text-cimac bordes-title-cimac"><strong>Objetivos</h2></strong>
                <p class="lead">
                    El Centro de Innovación y Desarrollo Tecnológico Markoptic, A.C. tiene por objeto promover, apoyar y realizar actividades para el desarrollo de tecnología, y la formación especializada de profesionales en los campos de la mecánica, electrónica, mecatrónica, biomedicina, nanotecnología y área de la salud, y disciplinas afines; a través de la investigación científica básica y aplicada; así como lograr que los resultados de innovaciones y desarrollo de tecnologías de sus investigaciones, permitan participar en la solución de desafíos globales.
                </p>
            </div>
        </div>
    
    </div><!-- objetivos -->

    <!-- valores -->
    <div class="row mx-0 text-center">
        
        <div class="col-md-6 bg-secondary p-0 order-2 order-md-1 d-flex justify-content-center align-items-center">
            <div class="text-white p-5">
                <h2 class="text-white bordes-title-white"><strong>Valores</strong></h2>   
                <ul class="list-unstyled t-shadow-2-black lead">
                    <li class="d-inline-block pl-2">-Responsabilidad</li>
                    <li class="d-inline-block pl-2">-Colaboración</li>
                    <li class="d-inline-block pl-2">-Honestidad</li>
                    <li class="d-inline-block pl-2">-Identidad</li>
                    <li class="d-inline-block pl-2">-Fidelidad</li>
                    <li class="d-inline-block pl-2">-Respeto</li>
                    <li class="d-inline-block pl-2">-Servicio</li>
                    <li class="d-inline-block pl-2">-Lealtad</li>
                    <li class="d-inline-block pl-2">-Calidad</li>
                </ul>
            </div>
        </div>
        
        <div class="col-12 col-md-6 p-0 order-1 order-md-2">
            <img class="img-cover" src="/img/todos.jpg" alt="alumnos CIMAC">
        </div>
    
    </div><!-- valores -->
    
    <?php include 'mod/footer.php'?>

</body>
</html>