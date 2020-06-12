<?php get_header();
/* TEMPLATE NAME: Menu*/
?>
<section class="bg-5 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>THE BEST IN TOWN</b></h5>
                                <h2 class="mt-30 mb-15"><?php echo the_title();?></h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>

<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading"><h3>Choose from Pizza</h3></div>

<!-- Begin 'Choose From Pizza' Repeater -->

                  <?php if( have_rows('featured_pizza') ): ?>

                      <div class="row">

                  	<?php while( have_rows('featured_pizza') ): the_row();

                  		// vars
                  		$image = get_sub_field('image');
                  		$title = get_sub_field('title');
                  		$price = get_sub_field('price');
                      $offer = get_sub_field('offer');
                      $link = get_sub_field('link');
                  		?>

                      <div class="col-lg-4 col-md-4 col-sm-6 ">
                              <div class="center-text mb-30">
                                      <div class="ïmg-200x mlr-auto pos-relative">
                                        <?php if($offer):?>
                                              <h6 class="ribbon-cont"><div class="ribbon primary"></div><b>NEW</b></h6>
                                            <?php endif;?>
                                              <img src="<?php echo $image;?>" alt="">
                                      </div>
                                      <h5 class="mt-20"><?php echo $title;?></h5>
                                      <h4 class="mt-5 color-primary"><b>$<?php echo $price;?></b></h4>
                                      <?php if($link):?>
                                        <h6 class="mt-20"><a href="<?php echo $link;?>" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
                                      <?php endif;?>
                              </div><!--text-center-->
                      </div><!-- col-md-3 -->

                  	<?php endwhile; ?>
                  </div><!-- row-->
                <?php endif; ?>
        </div><!-- container -->
</section>

<!-- End Featured Pizza Repeater -->
<section class="bg-lite-blue">
        <div class="container">
<!-- Begin Pizzas Repeater -->

<?php if( have_rows('pizza') ): ?>

  <div class="row">

	<?php while( have_rows('pizza') ): the_row();

		// vars
		$image = get_sub_field('image');
		$title = get_sub_field('title');
		$description = get_sub_field('description');
    $price = get_sub_field('price');

		?>
    <div class="col-md-6">
            <div class="sided-90x mb-30 ">
                    <div class="s-left"><img class="br-3" src="<?php echo $image;?>" alt="Menu Image"></div><!--s-left-->
                    <div class="s-right">
                            <h5 class="mb-10"><b><?php echo $title;?></b><b class="color-primary float-right">$<?php echo $price;?></b></h5>
                            <p class="pr-70"><?php echo $description;?></p>
                    </div><!--s-right-->
            </div><!-- sided-90x -->
    </div><!-- food-menu -->
	<?php endwhile; ?>

  </div><!-- row -->
<?php endif; ?>


        </div><!-- container -->
</section>
<!-- End  Pizza Repeater -->

<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <h4 class="font-30 font-sm-20  center-text mb-25">Add a zesty <b>Pasta</b> to your order</h4>
        </div><!-- container -->
</section>

<section>
        <div class="container">
                <div class="heading mb-sm-10"><h3>Choose from Pasta</h3></div>
<!-- Begin Featured Pasta Repeater -->

<?php if( have_rows('featured_pasta') ): ?>

  <div class="row">

	<?php while( have_rows('featured_pasta') ): the_row();

  // vars
  $image = get_sub_field('image');
  $title = get_sub_field('title');
  $price = get_sub_field('price');
  $offer = get_sub_field('offer');
  $link = get_sub_field('link');
  ?>

    <div class="col-md-12 col-lg-6">
            <div class="sided-220x responsive mb-30 left-text center-sm-text">
                    <div class="s-left mlr-sm-auto"><img  src="<?php echo $image;?>" alt="Menu Image"></div>
                    <div class="s-right">
                            <h5><?php echo $title;?></h5>
                            <h4 class="mtb-10"><b class="color-primary">$<?php echo $price;?></b></h4>
                            <p><?php echo $description;?></p>
                    </div><!--s-right-->
            </div><!-- sided-90x -->
    </div><!-- col-md-6 -->

	<?php endwhile; ?>
    </div><!-- row -->

<?php endif; ?>
</div><!-- container -->
</section>

<!-- End Featured Pasta Repeater -->

<section class="bg-lite-blue">
        <div class="container">

<!-- Begin Pasta Repeater -->

<?php if( have_rows('pasta') ): ?>

  <div class="row">

	<?php while( have_rows('pasta') ): the_row();

		// vars
		$image = get_sub_field('image');
		$title = get_sub_field('title');
		$description = get_sub_field('description');
    $price = get_sub_field('price');

		?>
    <div class="col-md-6">
            <div class="sided-90x mb-30 ">
                    <div class="s-left"><img class="br-3" src="<?php echo $image;?>" alt="Menu Image"></div><!--s-left-->
                    <div class="s-right">
                            <h5 class="mb-10"><b><?php echo $title;?></b><b class="color-primary float-right">$<?php echo $price;?></b></h5>
                            <p class="pr-70"><?php echo $description;?></p>
                    </div><!--s-right-->
            </div><!-- sided-90x -->
    </div><!-- food-menu -->

	<?php endwhile; ?>

  </div><!-- row -->
  <?php endif; ?>
        </div><!-- container -->
</section>

<!-- End  Pasta Repeater -->

<?php get_footer();

?>
