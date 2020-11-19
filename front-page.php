<?php require('header.php');?>


<section class="Sec_one">
  <div class="wrap_2">
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
        <div class="s1_bloc_2" >
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

        <div id="menu1" class="menu_section_2" onclick="MenuO_Sect()">
          <p><?php the_field('menu1'); ?></p>
          <img src="<?php echo get_template_directory_uri();?>/images/assets/FlecheBleue.svg" alt=">" id="Tar_B_1" class="Bltarget">
        </div>

        <div id="menu2" class="menu_section_2" onclick="MenuT_Sect()">
        <p>  <?php the_field('menu2'); ?></p>
        <img src="<?php echo get_template_directory_uri();?>/images/assets/FlecheBleue.svg" alt=">" id="Tar_B_2" class="Bltarget" style="display: none;">
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
<script>
	new Splide( '.splide' ).mount();
</script>
<script>
document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '#card-slider', {
		perPage    : 3,
		breakpoints: {
			600: {
				perPage: 1,
			}
		}
	} ).mount();
} );
</script>


<section class="Actu">
  <div class="wrap">
    <img src="<?php the_field('logo_section_4')?>" class="logo_section">
    <h1><?php the_field('actu_title'); ?></h1>

        <div class="splide" id="card-slider">
          <div class="splide__slider">
            <div class="splide__track">
              <ul class="splide__list">
                <?php
                $POSTS = get_posts('numberposts=5');//nb posts par pages
                foreach ($POSTS as $post):setup_postdata($post);// boucle qui charge les articles
                 ?>
                 <li class="splide__slide">
                 <div class="actu_article ">
                   <div  style="display: table; width: 100%;">
                          <article>
                            <div class="wrap_articles">
                              <div class="h2_article"><h2><a href="<?php echo get_the_permalink() ?>"> <?php the_title(); ?> </a></h2></div>
                              <div class="category_article"><?php the_category(); ?></div>
                            </div>

                            <div class="bloc_img_article"><?php the_post_thumbnail(); ?></div>

                            <div class="wrap_articles">
                              <div class="content">
                                  <?php the_excerpt(); ?>
                              </div>
                            <div class="article_button">
                              <!--button-->
                                      <a href="<?php echo get_the_permalink() ?>" class="button_link_0" >
                                        <div class="button_0" id="button_footer"><p class="button_txt_0">Lire la suite</p></div>
                                      </a>
                              <!--button-->
                            </div>
                            </div>
                          </article>
                    </div>
                  </div>
                  </li>
              <?php
          endforeach;
          unset($post); // Détruit la référence sur le dernier élément
        ?></ul>
      </div>
    </div>
  </div>
<div class="Bl_link">
  <div class="BlLine"></div>
  <div><img src="<?php echo get_template_directory_uri();?>/images/assets/arrow_right.svg" alt=">" class="Bltarget"> </div>
    <div>  <a href=""><?php the_field('actu_link'); ?></a></div>
</div>

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
      <div class="partner_div">   <img src="<?php echo $logo ?>" class="logo_partners_img"></div> <?php
    endforeach;
    ?>

  </div>
  </div>
  </div>
</section>
<!--------------------------------------------------------------->
<?php require('footer.php');?>
