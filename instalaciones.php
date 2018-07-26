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
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/lightbox.css">
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300,500,700" rel="stylesheet">
    <title>CIMAC</title>
</head>
    <body>
        <?php include "mod/menu.php";?>

        <div class="carousel carousel-main" data-flickity>
            <div class="carousel-cell"><img src="/img/instalaciones/Edificio.jpg" alt="edificio CIMAC"></div>
            <div class="carousel-cell"><img src="/img/instalaciones/Auditorio.jpg" alt="auditorio CIMAC"></div>
            <div class="carousel-cell"><img src="/img/instalaciones/Comedor.jpg" alt="comedor CIMAC"></div>
            <div class="carousel-cell"><img src="/img/instalaciones/Herradura.jpg" alt="herradura CIMAC"></div>
        </div>

        <div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
            <div class="carousel-cell"><img class="img-cover" src="/img/instalaciones/Edificio.jpg" alt="edificio CIMAC"></div>
            <div class="carousel-cell"><img class="img-cover" src="/img/instalaciones/Auditorio.jpg" alt="auditorio CIMAC"></div>
            <div class="carousel-cell"><img class="img-cover" src="/img/instalaciones/Comedor.jpg" alt="comedor CIMAC"></div>
            <div class="carousel-cell"><img class="img-cover" src="/img/instalaciones/Herradura.jpg" alt="herradura CIMAC"></div>
        </div>

        <?php include 'mod/footer.php'?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="/js/lightbox.js"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://unpkg.com/flickity-fullscreen@1/fullscreen.js"></script>
        <script>
            $('.carousel-main').flickity({
                // options
                cellAlign: 'left',
                contain: false,
                freeScroll:true,
                wrapAround:true,
                fullscreen: true,
                prevNextButtons: false,
                pageDots: false
            });
            $('.carousel-nav').flickity({
                asNavFor: '.carousel-main',
                contain: true,
                pageDots: false,
                prevNextButtons: false
            });
        
        </script>

    </body>
</html>