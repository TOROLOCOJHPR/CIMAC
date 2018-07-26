<?php 
    $title = "inicio";
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
    <!-- principal -->
        <section class="row mx-0 bg-cover-b justify-content-center" style="background-image:url('/img/fondo-3.jpg');height:80vh">
            <div class="col-12 col-md-6 h-100 bg-cover d-none d-md-block" style="background-image:url('/img/principal-cimac.png')">
            </div>
            <div class="col-12 col-md-6 p-0 d-flex justify-content-end align-items-center align-items-sm-center">
                <div class="p-5 p-md-4 text-center text-white" style="width:100%;background-color: rgba(0, 84, 153,.6);">
                    <!-- <div class="text-center"> -->
                        <h1 class="t-shadow-2-black mb-2 mb-lg-4">Estudia con nosotros una  Maestría en Innovación y Desarrollo Tecnológico</h1>
                        <a href="/ofertaeducativa" class="btn btn-outline-light rounded-0">Más informes</a>
                        <!-- <img class="w-75 mr-4" src="/img/CIMAC@300x.png" alt="logotipo Cimac"> -->
                </div>
            </div>
        </section>
    <!-- inscribete -->
        <section class="row mx-0 text-dark">
            <div class="col-12 col-md-6 p-0 text-center bg-cover" style="background-image:url('/img/inscripcion.jpg')">
                <div class="capa-blanca p-5 d-flex align-items-center justify-content-center flex-column">
                    <h2 class="t-shadow-2-black. font-weight-bold text-cimac">Inscríbete</h2>
                    <p class="lead"> Inscripciones del 6-31 Agosto 2018 <br/>Realiza una maestría en innovación</p>
                    <a href="/alumnos" class="btn btn-primary bg-cimac rounded-0 border-0">Informes aquí</a>
                </div>
            </div>
        <!-- </section> -->
    <!-- plan estudios -->
        <!-- <section class="row mx-0 text-white"> -->
            <div class="col-12 col-md-6 p-0 text-center bg-cover-center" style="background-image:url('/img/plan-estudios.jpg')">
                <div class="capa-blanca p-5 d-flex align-items-center justify-content-center flex-column">
                    <h2 class="t-shadow-2-black. font-weight-bold text-cimac">Conoce nuestras instalaciones</h2>
                    <p class="lead">Te invitamos a conocer nuestras instalaciones con tecnología de ultima generación</p>
                    <a href="/instalaciones.php" class="btn btn-secondary bg-cimac rounded-0 border-0">Conocer</a>
                </div>
            </div>
        </section>
    <!-- Historia -->
        <section class="row mx-0 text-white bg-cover" style="height:400px;background-image:url('/img/contactanos.jpg')">
            <div class="col-12 text-center d-flex align-items-center justify-content-center flex-column" style="background-color: rgba(0, 84, 153,.6);;">
                <h2>Nuestra Historia</h2>
                <p class="lead">
                    Actualmente en Sinaloa y en el Noroeste del país, la investigación y las innovaciones que se 
                    <br>reportan son escasas y aunado a ello, no existen hasta hoy, otros centros que se conozcan
                    <br>que operen en las áreas que el Centro de Innovación y Desarrollo Tecnológico. 
                    <br>En razón de ello, un grupo de innovadores han decidido...
                </p>
                <a class="btn btn-outline-light rounded-0" href="/nosotros">Leer más</a>
            </div>
        </section>
    <!-- ubicación -->
        <section class="row mx-0">
            <div class="col-12 col-md-6 px-0 text-center text-dark bg-cover" style=" height:400px;background-image: url('/img/edificio-sin-logos.jpg')">
                <div class="capa-blanca d-flex  py-5 px-4 align-items-center justify-content-center flex-column" style="background-color:rgba(255,255,255,.80)">
                    <h2 class="text-cimac">Contáctanos</h2>
                    <p style="font-size: 1.2rem">Blvd. Enrique Sánchez Alonso #2249-2, Col. Parque Alameda, Culiacán, Sin., México. C.P. 80030</p>
                    <p class="mb-0 lead">
                        Teléfonos: 
                        <a class="text-cimac" href="tel:7152166">7-15-21-66 </a>
                        /
                        <a class="text-cimac" href="tel:7151714"> 7-15-17-14</a>
                    </p>
                    <a href="mailto:info@markoptic.edu.mx" class="text-cimac lead">Email: info@markoptic.edu.mx</a>
                </div>
            </div>
            <div class="col-12 col-md-6 text-center p-0" style="height:400px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.9921817002173!2d-107.40153268543236!3d24.829940984068376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDQ5JzQ3LjgiTiAxMDfCsDIzJzU3LjYiVw!5e0!3m2!1ses-419!2smx!4v1508699243840" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>            
            </div>
        </section>
    <?php include 'mod/footer.php'?>
</body>
</html>