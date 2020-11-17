<?php require('header.php');?>



<section class="Sec_one">
  <div class="s1_first">
    <div class="s1_bloc_1">
      <div>
        <p><?php the_field('text_sect_one'); ?></p>

        <a href="" class="button_link_0">
          <p class="button_p_0"><div class="button_0"><p class="button_txt_0">EN SAVOIR PLUS</p></div></p>
        </a>
      </div>

    </div>
    <div class="s1_bloc_2">
      <?php get_field('image_sect_one');?>
      <img src="<?php the_field('image_sect_one'); ?>" class="image_so" />
    </div>
  </div>
</section>


<!--------------------------------------------------------------->

<section class="missions">

  <h1><?php the_field('mission'); ?></h1>

    <div class="t_mission">




        <?php the_field(''); ?>
        <?php the_field(''); ?>


    </div>

    <div class="tt_mission">

      <p><?php the_field('paragraphe_section_two'); ?></p>
    </div>
</section>


<!--------------------------------------------------------------->

<section class="conferance">

</section>

<section class="Actu">

</section>

<section class="partner">

</section>

<?php require('footer.php');?>
