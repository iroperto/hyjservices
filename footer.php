<!--Footer Start-->
<div class="footer_wrap">
  <div id="footer" class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <h5>sobre nosotros</h5>
        <p>H & J Service S.R.L. es una empresa de suministros de oficina establecida en 2019. Dedicada a suplir las necesidades de la industria y los proveedores de equipos de oficina.</p>
        <p>Garantizamos el mejor servicio al cliente, por parte de  nuestro equipo de expertos y nos aseguraremos de ofrecer los mejores productos a precios inmejorables.</p>
        <div class="spacecode" style="height:20px;"></div>
        <div class="social-icons">
          <a href="http://www.facebook.com/hyjservices" target="_blank" title="facebook"><i class="fab fa-facebook fa-1x"></i></a>
          <a href="http://www.twitter.com/hyjservices" target="_blank" title="twitter"><i class="fab fa-twitter fa-1x"></i></a>
          <a href="https://wa.me/18497541713" target="_blank" title="whatsapp"><i class="fab fa-whatsapp fa-1x"></i></a>
          <a href="https://www.linkedin.com/in/hyjservices/" target="_blank" title="linkedin"><i class="fab fa-linkedin fa-1x"></i></a>
          <a href="https://www.instagram.com/hyjservices/" target="_blank" title="instagram"><i class="fab fa-instagram fa-1x"></i></a>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <h5>enlaces</h5>
        <div class="menu-footer-menu-container">
          <ul id="menu-footer-menu" class="footmenu">
            <li><a href="index.php"><i class="fas fa-angle-right"></i> Inicio</a>
            </li>
            <li>
              <a href="about-us/empresa.php"><i class="fas fa-angle-right"></i> Empresa</a>
            </li>
            <li>
              <a href="buttons/productos.php"><i class="fas fa-angle-right"></i> Productos</a>
            </li>
            <li>
              <a href="gallery-filters/servicios.php"><i class="fas fa-angle-right"></i> Servicios</a>
            </li>
            <li>
              <a href="accordion/contacto.php"><i class="fas fa-angle-right"></i> Contacto</a>
            </li>
            <li>
              <a href="recent-posts-style4/cotiza.php"><i class="fas fa-angle-right"></i> Solicitar Cotización</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <h5>contactanos</h5>
        <p> Póngase en contacto con nosotros hoy mismo para saber más sobre lo que podemos hacer por usted.</p>
        <p><i class="fas fa-map-marker-alt"></i> Club de Leones No. 330, Almarosa II, Sto Dgo Este</p>
        <p><i class="fas fa-phone"></i> 809.620.0233  LUN-VIE , 08.AM - 5.PM</p>
        <p><i class="fas fa-envelope"></i> <a href="mailto:info@hyjservice.com">info@hyjservice.com</a></p>
      </div>
    </div>
  </div>
</div>
  <div id="copyright">
    <div class="container">
      <div class="copytext">
        <div class="float-left">&copy; <?php echo date("Y"); ?> H y J Services,  S.R.L. Todos los derechos reservados</div>
        <div class="float-right"> Powered by <a href="http://www.ivanroperto.com/" target="_blank" rel="nofollow">Ivan Roperto</a></div>
        <div class="float-none">&nbsp;</div>
        </div>
    </div>
  </div>

  <!--Footer END-->

<script src="jquery/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<?php
$estado = strpos($_SERVER['REQUEST_URI'], 'cotiza.php');
if ($estado !== false) { ?>
  <script type="text/javascript" src="js/formularios.js"></script>
<?php } ?>
<script type="text/javascript" src="js/site.js">

</script>
</body>
</html>
