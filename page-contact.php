<?php
/* Template Name : Contact */?>
<?php require('header.php');?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/contact-page.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/home.css">
<section class="contact_section">
  <div class="wrap">

    <div class="contact_title">
      <img src="<?php the_field('contact_picto')?>" class="contact_picto">
      <h1><?php the_field('contact_title'); ?></h1>
    </div>
    <!--------------------------------------------------------------->
    <div class="contact_text">
      <p><?php the_field('contact_text')?></p>
    </div>
    <!--------------------------------------------------------------->
  <section class="info">

      <div class="mail_conf">
      <p><?php the_field('contact_info_1')?></p>
      <a  href="mailto:<?php the_field('contact_mail_1')?>"><?php the_field('contact_mail_1')?></a>
    </div>
    <!--------------------------------------------------------------->
    <div class="mail_team">
      <p><?php the_field('contact_info_2')?></p>
      <a  href="mailto:<?php the_field('contact_mail_2')?>"><?php the_field('contact_mail_1')?></a>
    </div>
    <!--------------------------------------------------------------->
    <div class="join_team">
      <p><?php the_field('contact_info_3')?></p>
      <a href="#"><?php the_field('contact_info_4')?></a>
    </div>
    <!--------------------------------------------------------------->
    <div class="other">
      <p><?php the_field('contact_info_5')?></p>
      <a  href="mailto:<?php the_field('contact_mail_3')?>"><?php the_field('contact_mail_1')?></a>
      <a href="#"><?php the_field('contact_num')?>
    </div>



</section>
</section>
<?php require('footer.php');?>
