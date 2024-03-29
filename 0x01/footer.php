  <!-- FOOTER -->
  <footer class="footer">
    <!-- LOGO -->
    <figure class="footer-logo">
      <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"
          alt="ENFÓCATE CON PROPÓSITO" /></a>
    </figure>
    <!-- ADDRESS -->
    <address>
      info <i class="fas fa-at"></i> enfocateconproposito.org<br />
      Calle 54 # 34 - 05 Sur Bogotá D.C. - Colombia
    </address>
    <hr />
    <!-- SECONDARY MENU -->
    <nav class="foot-nav">
      <?php wp_nav_menu(array(
        'container' => false,
        'menu_class' => '',
        'items_wrap' => '<ul class="foot-links">%3$s</ul>',
        'theme_location' => 'secondary-menu'
      ));?>
    </nav>
    <!-- COPYRIGHT -->
    <div class="small-text copy">&copy; 2020 Diego Armando Díaz Rincón.</div>
  </footer>
  <?php wp_footer(); ?>
</body>
<noscript>
  <p>Bienvenido a el sitio web de Enfócate con propósito</p>
  <p>
    Esta página requiere para su funcionamiento el uso de JavaScript.&nbsp; Si
    lo has deshabilitado intencionadamente, por favor vuelve a activarlo.
  </p>
</noscript>
</html>