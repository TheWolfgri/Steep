<?php
/* Template Name : Contact */
 require('header.php');?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/contact-page.css">
  <div class="wrap">
    <div class="all">

    <!-- Titre contact-->
    <section class="contact">
      <div class="contact_title">
        <img src="<?php the_field('contact_picto')?>" class="picto_title">
        <h1><?php the_field('contact_title'); ?></h1>
      </div>

      <div class="contact_text">
        <p><?php the_field('contact_text')?></p>
      </div>

    <!-- info contact -->
      <div class="mail_conf info_box" >
          <img src="<?php the_field('contact_picto_1')?>" class="picto_info">
        <div>
          <p><?php the_field('contact_info_1')?></p>
          <a  href="mailto:<?php the_field('contact_mail_1')?>"><?php the_field('contact_mail_1')?></a>
        </div>
      </div>

      <div class="mail_team info_box">
        <img src="<?php the_field('contact_picto_2')?>" class="picto_info">
      <div>
          <p><?php the_field('contact_info_2')?></p>
          <a  href="mailto:<?php the_field('contact_mail_2')?>"><?php the_field('contact_mail_1')?></a>
        </div>
      </div>

      <div class="join_team info_box">
        <img src="<?php the_field('contact_picto_3')?>" class="picto_info">
        <div>
          <p><?php the_field('contact_info_3')?></p>
          <a href="#"><?php the_field('contact_info_4')?></a>
        </div>
      </div>

      <div class="other info_box">
        <img src="<?php the_field('contact_picto_4')?>" class="picto_info">
        <div>
          <p><?php the_field('contact_info_5')?></p>
          <a  href="mailto:<?php the_field('contact_mail_3')?>"><?php the_field('contact_mail_1')?></a>
          <a href="tel:<?php the_field('contact_num')?>"><?php the_field('contact_num')?></a>
        </div>
      </div>
  </section><!--fin section contact-->

    <!-- info <address-->
  <section class="adress">

    </address>
      <div class="adress_title">
        <img src="<?php the_field('contact_adresse_picto')?>" class="picto_title">
        <h1><?php the_field('contact_adresse_title'); ?></h1>
      </div>

      <div class="adress_maps">
        <img src="<?php the_field('contact_adresse_maps')?>" class="maps">
      </div>

      <div class="adress_text">
        <p><?php the_field('contact_adresse_text')?></p>
      </div>

  </section><!-- fin section adress -->
</div><!--fin div all -->
</div><!-- fin div wrap-->
<?php require('footer.php');?>
