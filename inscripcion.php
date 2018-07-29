<?php 
    $title = "Inscripción";
    include 'inc/header.php';
?>
<body>
    <?php 
        include "mod/menu.php";
    ?>
    <section class="row mx-0 pt-5 text-dark" style="line-height:1.6em">
        <div class="col-12 col-md-6 px-5">
            <h4 class="text-cimac">Periodo de inscripciones</h4>
            <p class="lead">
                Forma parte del Centro de Innovación Markoptic A.C. y realiza una
                <br>
                <strong>maestría en innovación y desarrollo Tecnológico</strong> con nosotros inscripciones del
                6 al 31 de agosto 2018
                <br>
                <br>
                <strong>Documentos requeridos:</strong>
            </p>
                <ul class="text-left lead">
                    <li>Acta de nacimiento original y copia</li>
                    <li>Solicitud de admisión debidamente llenada</li>
                    <li>Titulo de licenciatura en original y copia</li>
                    <li>Presentar carta de motivos</li>
                    <li>4 fotografías tamaño infantil en blanco y negro</li>
                    <li>Cubrir cuotas correspondientes</li>
                </ul>
            <p class="lead">
                Toda la documentación requerida debe ser entregada en nuestras instalaciones.
                <br>Blvd. Enrique Sánchez Alonso #2249-2, Col. Parque Alameda, Culiacán, Sinaloa., México. C.P. 80030.
                <br> Teléfonos 
                <a class="text-cimac" href="tel:7152166">7-15-21-66 </a>
                /
                <a class="text-cimac" href="tel:7151714"> 7-15-17-14</a>
                <br>
                Correo:<a href="mailto:info@markoptic.edu.mx" class="text-cimac lead"> info@markoptic.edu.mx</a>
            </p>
        </div>
        <div class="col-12 col-md-6 px-5">
            <h4 class="text-cimac">Periodo de reinscripciones</h4>
            <p class="lead">
                A ti que formas parte de CIMAC te recordamos que
                el periodo de reinscripciones se llevara acabo del
                27 de Agosto al 14 de Septiembre de 2018
            </p>
            <p class="lead">Documentos requeridos:</p>
            <ul class="text-left lead">
                <li>Boleta de calificaciones</li>
                <li>Cubrir Cuotas correspondientes</li>
            </ul>
            <h4 class="text-cimac">Calendario escolar</h4>
            <br>
            <a href="/img/Calendario 2017-2018.jpg" target="blank">
                <img style="max-width: 100%;max-height: 350px" class="img-fluid" src="/img/Calendario 2017-2018.jpg" alt="Calendario 2017-2018">
            </a>
        </div>
    </section>
    <section class="mb-5">
        <div class="col-12 px-0 mt-3 text-white text-center" style="background-image: url('/img/books.jpg')">
            <div class="py-5" style="width:100%;background-color: rgba(0, 84, 153,.6);">
                <h2>Oferta educativa</h2>
                <p class="lead" style="font-weight: 400">
                    Conoce nuestra Maestría en Innovación y Desarrollo Tecnológico
                </p>
                <a class="btn btn-outline-light rounded-0" href="/ofertaeducativa.php">Más informes</a>
            </div>
        </div>
    </section>
    <?php 
        include 'mod/contacto.php';
        include 'mod/footer.php'
    ?>
    <script type="text/javascript" src="/js/form-ajax.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>

