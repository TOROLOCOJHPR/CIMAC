<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="logo CIMAC"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link <?php echo ($title == "inicio")?"bordes t-underline-none":"" ?>" href="/">INICIO<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($title == "nosotros")?"bordes t-underline-none":"" ?>" href="/nosotros">NOSOTROS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($title == "alumnos")?"bordes t-underline-none":"" ?>" href="/alumnos">ALUMNOS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="btn btn-primary bg-cimac border-0 rounded-0" href="/ofertaeducativa">MAESTRÍA<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>