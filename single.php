<?php require('header.php');?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/page_default.css">
<section class="contenu wrap">
  <h1 id="first_of_page"><?php the_title(); ?></h1>
<?php the_content() ?>
</section>
<?php require('footer.php');?>
