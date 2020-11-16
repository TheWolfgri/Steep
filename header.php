
<html>
<head <?php language_attributes(); ?>>
<?php wp_head() ?>
<meta charset="utf-8">
<title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/header.css"></style>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/reset.css"></style>
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
</head>

<body <?php body_class() ?>>
  <header>
    <div class="logo">

    </div>
    <div class="nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>


  </header>
