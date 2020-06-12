<?php get_header();
/*TEMPLATE NAME: News */
?>


<section class="bg-7 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>THE BEST IN TOWN</b></h5>
                                <h3 class="mt-30 mb-15"><?php echo the_title();?></h3>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>

          <form class="mb-50 mb-sm-30 mt-sm-30 placeholder-1 form-style-1 pos-relative" style="width:50% !important; margin:auto !important; margin-top:2rem !important;">
                  <input class="pr-50" type="text" placeholder="Search">
                  <button class="abs-tbr plr-20" type="submit"><i class="ion-android-search"></i></button>
          </form>

<section class="story-area left-text center-sm-text">
        <div class="container">


<!-- Begin Main Blog Post Repeater -->
          <?php if( have_rows('blog_post') ): ?>


                            <div class="row">
                                    <div class=" col">

          	<?php while( have_rows('blog_post') ): the_row();

          		// vars
          		$image = get_sub_field('image');
          		$title = get_sub_field('title');
          		$entry = get_sub_field('entry');
              $author = get_sub_field('author');
              $comments = get_sub_field('comments');
              $day = get_sub_field('day');
                $month = get_sub_field('month');
                  $year = get_sub_field('year');

          		?>

              <div class="mb-50 mb-sm-30">
                      <div class="pos-relative mb-30 pt-15">
                              <div class="font-8 abs-tl p-20 bg-primary color-white">
                                      <h4><b><?php echo $month;?></b></h4>
                                      <h4><b><?php echo $day;?></b></h4>
                                      <h4><b><?php echo $year;?></b></h4>
                                      <div class="brdr-style-1"></div>
                              </div>
                              <img src="<?php echo $image;?>" alt="">
                      </div>
                      <h4><a href="#"><b><?php echo $title;?></b></a></h4>
                      <h6 class="mt-10 bg-lite-blue dplay-inl-block">
                              <a class="plr-20 mtb-10" href="#"><b>By: <?php echo $author;?></b></a>
                              <a class="plr-20 mtb-10 brder-lr-lite-black-2" href="#"><b>in Recipes</b></a>
                              <?php if($comments):?>
                              <a class="plr-20 mtb-10" href="#"><b>View comments</b></a>
                            <?php endif;?>
                      </h6>
                      <p class="mt-30"><?php echo $entry;?></p>
              </div><!--mb-30-->


          	<?php endwhile; ?>

          </div><!--mx-w-500x-->
    </div><!--col-md-4-->
    </div><!-- row -->

          <?php endif; ?>

                        </div><!--col-md-8-->

                                                    <div class="row">
                                                            <div class=" col">
                        <div class="mb-50 mb-sm-30">
                                <div class="mx-w-400x mlr-auto">


                                        <div class="mb-50 mb-sm-30 pos-relative oflow-hidden">
                                                <div class="bg-trinagle-primary"></div>
                                                <img src="<?php bloginfo('template_directory');?>/images/sidebar-1-400x600.jpg" alt="">
                                                <div class="abs-bl font-18 color-white p-30 z-1">
                                                        <h4 class="lh-1">30%</h4>
                                                        <h4 class="lh-1">off</h4>
                                                        <h6 class="font-5 mt-10">Combo Pack <b>Pizza + Salad</b></h6>
                                                </div>
                                        </div><!--mb-50-->

                                        <div class="mb-50 mb-sm-30">
                                                <h5 class="left-text"><b>Subscribe to our newsletter</b></h5>
                                                <form class="placeholder-1 form-style-1 pos-relative">
                                                        <input class="mtb-20" type="text" placeholder="Your e-mail here">
                                                        <button class="w-100 btn-primaryc" type="submit">subscribe</button>
                                                </form>
                                        </div><!--mb-50-->



</div>
</div><!--col-md-8-->
        </div><!-- container -->
</section>

<?php get_footer(); ?>
