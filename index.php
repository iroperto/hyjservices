<?php require_once 'header.php'; ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carrousel/slide01.jpg" alt="Equipos de Oficina" class="d-block w-100">
      <div class="carousel-caption">
        <h3>Muebles de Oficina</h3>
        <p>Nuestros muebles contribuyen a una mejor organización de tus espacios.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrousel/slide02.jpg" alt="Material Gastable" class="d-block w-100">
      <div class="carousel-caption">
        <h3 style="color: white;">Material Gastable</h3>
        <p>Materiales de calidad y alta duración.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrousel/slide03.jpg" alt="Productos de Limpieza" class="d-block w-100">
      <div class="carousel-caption">
        <h3 style="color: white;">Toners y Cartuchos</h3>
        <p>Más impresiones  de alta calidad en tus documentos.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrousel/slide04.jpg" alt="Dispensadores" class="d-block w-100">
      <div class="carousel-caption">
        <h3>Dispensadores</h3>
        <p>Dispensadores ajustados para todo tipo de espacios y necesidad.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrousel/slide05.jpg" alt="Equipos y Materiales de Limpieza" class="d-block w-100">
      <div class="carousel-caption">
        <h3 style="color: white;">Equipos y Materiales de Limpieza</h3>
        <p>Equipos de alto volumen y multifuncionales.</p>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" onclick="$('#carouselExampleSlidesOnly').carousel('prev')">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" onclick="$('#carouselExampleSlidesOnly').carousel('next')">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container-fluid clientes" style="display: none;">
  <div>
    <h1 class="text-center">clientes satisfechos</h1>
    <p class="text-center">Nuestros clientes son la parte mas importante y mejor cuidada de nuestra actividad comercial, ellos mismos lo confirman</p>
  </div>
</div>
<div class="clientes" style="display:none;">
  <div class="row  justify-content-center">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
      <p><i class="fas fa-quote-left fa-lg"></i></p>
      <p style="font-style: italic;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,</p>
      <img src="img/clientes/01.jpg" alt="Cliente 1" class="rounded-circle mx-auto d-block shadow img-fluid img-thumbnails">
      <p>Cliente 1</p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center cliente-centro">
      <p><i class="fas fa-quote-left fa-lg"></i></p>
      <p style="font-style: italic;"> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
      <img src="img/clientes/02.jpg" alt="Cliente 2" class="rounded-circle mx-auto d-block shadow img-fluid img-thumbnails">
      <p>Cliente 2</p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
      <p><i class="fas fa-quote-left fa-lg"></i></p>
      <p style="font-style: italic;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
      <img src="img/clientes/03.jpg" alt="Cliente 3" class="rounded-circle mx-auto d-block shadow img-fluid img-thumbnails">
      <p>Cliente 3</p>
    </div>
  </div>
</div>
<?php require_once 'footer.php'; ?>
