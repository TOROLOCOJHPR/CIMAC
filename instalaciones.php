<?php
    $title = "Instalaciones";
    include 'inc/header.php';
?>

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
            contain: true,
            freeScroll:false,
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