<footer >
  <section class="wrap">
      <div class="logo">
        <img src="<?php echo $image[0]; ?>" alt="Logo" class="logo">
      </div>

      <div class="link">
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/comprendre_et_agir.svg" alt="logo comprendre et agir"></a>
      </div>

    <div class="nav_footer">
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </div>

    <div class="tagline">
      <p>Un site conçue par l'agence Bzzz</p>
    </div>
  </section>
</footer>
</body>
</html>
