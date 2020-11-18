<?php require('header.php');?>


<section class="Sec_one">
  <div class="wrap">
  <div class="Flex">

    <div class="s1_bloc_1">

        <div>
        <p><?php the_field('text_sect_one'); ?></p>
<!--button-->
        <a href="" class="button_link_0">
          <div class="button_0"><p class="button_txt_0">EN SAVOIR PLUS</p></div>
        </a>
<!--button-->
      </div>


      </div>
        <div class="s1_bloc_2">
          <?php get_field('image_sect_one');?>
          <img src="<?php the_field('image_sect_one'); ?>" class="image_so" />
        </div>
    </div>
  </div>
</section>


<!--------------------------------------------------------------->

<section class="missions">
  <div class="content_mission">

  <div class="wrap">


    <div>
      <img src="<?php the_field('logo_section_2')?>" class="logo_section">
      <h1><?php the_field('mission'); ?></h1>
    </div>


    <div class="Flex margin">

      <div class="t_mission">

        <div class="menu1">
          <?php the_field('menu1'); ?>
        </div>
        <div class="menu2">
          <?php the_field('menu2'); ?>
        </div>

      </div>

      <div class="tt_mission">
        <p id="p1_mission"><?php the_field('paragraphe_section_two'); ?></p>
        <p id="p2_mission" style="display: none;"><?php the_field('paragraphe_section_two_1'); ?></p>
      </div>
  </div>
      </div>
</div>

</section>


<!--------------------------------------------------------------->

<section class="conferance">
  <div class="wrap">
    <img src="<?php the_field('logo_section_3')?>" class="logo_section">
    <h1><?php the_field('conferance_title'); ?></h1>
  </div>

</section>
<!--------------------------------------------------------------->
<section class="Actu">
  <div class="wrap">
    <img src="<?php the_field('logo_section_4')?>" class="logo_section">
    <h1><?php the_field('actu_title'); ?></h1>
  </div>
</section>
<!--------------------------------------------------------------->
<section class="partner">
  <div class="wrap">
<img src="<?php the_field('logo_section_5')?>" class="logo_section">
  <h1><?php the_field('partenaire_title'); ?></h1>

  <div class="logo_partenairs">
    <div class="Flex logo_partners">
    <?php
     $images = get_field('partenairs_logo');
     foreach ($images as $logo): ?>
      <div>   <img src="<?php echo $logo ?>" class="logo_partners_img"></div> <?php
    endforeach;
    ?>

  </div>
  </div>
  </div>
</section>
<!--------------------------------------------------------------->
<?php require('footer.php');?>
