<html>

<head <?php language_attributes(); ?>>
<?php wp_head() ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/reset.css"></style>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/footer.css"></style>
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
</head>


<footer >

  <img class="logo_footer"
    src="<?php echo get_template_directory_uri();?>/images/Logo_blanc.svg"
    alt="logo de steep en blanc">

    <div class="text1">
      <a href="#"> Comprendre et Agir </a>
    </div>

    <div class="nav_footer">
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </div>

    <div class="tagline">
      <p> Un site conçue par l'agence Bzzz </p>
    </div>

</footer>
</html>
