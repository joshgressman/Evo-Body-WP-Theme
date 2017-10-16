<?php
/*
   Template Name: Lakeville Personal Trainers
*/

get_header()
?>

<section id="meet-our-trainers">
  <div class="container">
    <div class="row">
     <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12">
       <h1>Meet Our Trainers</h1>
       <hr>
       <h3>Lakeville</h3>
     </div>
    </div>

  <div class="row">
    <!-- CREATING AN ARRAY AND ACCESSING THE VALUES AND LOOPING THROUGH THE CUSTOM POST TYPE COURSE FEATURES -->
    <?php $loop = new WP_Query( array('post_type' => 'lakeville_trainer', 'orderby' => 'post_id', 'order' => 'ASC') );?>
    <!-- LOOP THROUGH CUSTOM POST TYPES -->
    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php
        $bio_image = get_field('bio_image');
        $bio_name = get_field('bio_name');
      ?>
  <div class="col-lg-2 col-lg-offset-1 col-md-3 col-sm-12 col-xs-12 bio">
    <img class="img-responsive bio-picture" style="width:165px; height:226.28px;" src="<?php echo $bio_image['url']; ?>" alt="<?php echo $slider_image_1['alt'] ?>">
    <p class="trainer-name"><?php echo $bio_name ?></p>
  </div>
  <?php endWhile; wp_reset_query(); ?>
</div>

  </div>
</section>


<?php get_footer() ?>
