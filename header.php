<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
<?php wp_head() ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>

<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/header.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/home.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/footer.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/button.css">


  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

</head>

<body <?php body_class() ?>>

  <header>
    <div class="center_nav">
      <div class="logo">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo $image[0]; ?>" alt="Logo" class="logo">
              </a>
      </div>

      <div class="nav">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );  get_search_form();  ?>
      </div>
  </div>

  </header>
