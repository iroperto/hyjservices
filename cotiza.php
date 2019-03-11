<?php require_once 'header.php'; ?>
<div>
  <img src="img/cotizar.jpg" alt="equipo"  class="d-block w-100" style="min-width: 100%;">
</div>
<div class="container" style="margin-top: 32px;">
  <h1>Solicitud de Cotización</h1>
  <div class="card">
    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Cotización</strong>
    </h5>
     <div class="card-body px-lg-5 pt-0">
    <form class="text-center" id="cotizador" style="color: #757575;" enctype="multipart/form-data">
      <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="input-group">
          <input name="nombre" type="text" class="form-control" id="nombre">
          <label for="nombre">Nombre</label>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="input-group">
          <input name="empresa" type="text" class="form-control" id="empresa">
          <label for="empresa">Empresa</label>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="input-group">
          <input name="email" type="email" class="form-control" id="email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="input-group">
          <input name="telefono" type="text" class="form-control" id="telefono">
          <label for="telefono">Teléfono</label>
        </div>
      </div>
    </div>
      <div class="input-group">
        <textarea name="direccion" id="direccion" class="form-control"></textarea>
        <label for="direccion">Dirección</label>
      </div>
      <div class="input-group">
        <textarea name="cotizacion" id="cotizacion" class="form-control"></textarea>
        <label for="cotizacion">Articulos a cotizar</label>
      </div>
      <button id="enviar">Enviar</button>
    </form>
    <div id="respuesta"></div>
  </div>
</div>
</div>
<?php require_once 'footer.php'; ?>
