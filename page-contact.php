<?php
/* Template Name : Contact */?>
<?php require('header.php');?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/contact-page.css">

<section class="contact_section">
  <div class="wrap">

    <div class="contact_title">
      <img src="<?php the_field('contact_picto')?>" class="contact_picto">
      <h1><?php the_field('contact_title'); ?></h1>
    </div>

    <div class="contact_text">
      <p><?php the_field('contact_text')?></p>
    </div>





</section>
<?php require('footer.php');?>
