<?php require('header.php');?>
<section class="Sec_one">
  <div>
    <p><?php the_field('text_sect_one'); ?></p>
  </div>
  <div>
    <img src="" alt="image">
  </div>
</section>

<section class="missions">
  <div class="ttt_mission">
    <div class="t_mission">

        <h1><?php the_field('mission'); ?></h1>


        <?php the_field(''); ?>
        <?php the_field(''); ?>


    </div>
    <div class="tt_mission">
      <p><?php the_field('paragraphe_section_two'); ?></p>
    </div>
</div>
</section>

<section class="conferance">

</section>

<section class="Actu">

</section>

<section class="partner">

</section>

<?php require('footer.php');?>
