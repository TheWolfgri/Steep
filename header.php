
<html>
<head>
<?php wp_head() ?>
<meta charset="utf-8">


</head>

<body <?php body_class() ?>>
  <header>
    <div class="nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>


  </header>
