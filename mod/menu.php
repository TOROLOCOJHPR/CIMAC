<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-0">
  <a class="navbar-brand py-3" href="/">
    <img class="d-none d-lg-block" style="max-height: 45px;" src="/img/logo.png" alt="logo CIMAC slogan">
    <img class="d-block d-lg-none" style="max-height: 40px;" src="/img/logo-limpio.png" alt="logo CIMAC">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link <?php echo ($title == "Inicio")?"bordes t-underline-none":"" ?>" href="/">INICIO<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($title == "Nosotros")?"bordes t-underline-none":"" ?>" href="/nosotros">NOSOTROS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($title == "Oferta")?"bordes t-underline-none":"" ?>" href="/ofertaeducativa">OFERTA EDUCATIVA<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="btn btn-primary bg-cimac border-0 rounded-0" href="/inscripcion">INSCRÍBETE<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>