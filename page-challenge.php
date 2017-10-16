<?php
/*
   Template Name: Challenge Page
*/
$challenge_form =  get_field('challenge_form');
get_header();
?>

<!--  Hero -->
<section class="hero-section-personal-training">
  <div class="jumbotron" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/challenge.jpg) no-repeat center center;   background-size: cover;" alt="Fitness Challenge" id="pt-hero-img">
</div>
<hr />

<!-- ******************* INFO AND MORE INFO SIGN UP SECTION **************** -->
<section id="challenge-info-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
       <h1 style="margin-top:0px; margin-bottom:5px; ">Evo Body Fitness Challenge</h1>
       <p>Make a life changing transformation with the Evo Body Fitness Challenge. Join a group, learn the principles of body transformation and have fun with the opportunity to WIN $1000s</p>
       <h3>Details</h3>
       <ul id="challenge-details">
         <li><i class="fa fa-star fa-1x" aria-hidden="true"></i> 8 week weight loss challenge</li>
         <li><i class="fa fa-star fa-1x" aria-hidden="true"></i> Chance to WIN $1,000</li>
         <li><i class="fa fa-star fa-1x" aria-hidden="true"></i> Challenge prep goal session </li>
         <li><i class="fa fa-star fa-1x" aria-hidden="true"></i> Weekly challenge team workouts</li>
         <li><i class="fa fa-star fa-1x" aria-hidden="true"></i> Evo Challenge kick off party</li>
       </ul>
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <form class="" role="form">
          <?php echo $challenge_form; ?>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- *****************END INFO AND MORE INFO SIGN UP SECTION *************** -->
<hr>

<!-- ************************ SUCCESS STRORY SECTION *********************** -->
<section id="success-stories">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-xs-12">
         <h2>Challenge Success Stories</h2>
      </div>
    </div>


    <div class="row">
      <!-- CREATING AN ARRAY AND ACCESSING THE VALUES AND LOOPING THROUGH THE CUSTOM POST TYPE COURSE FEATURES -->
      <?php $loop = new WP_Query( array('post_type' => 'success_story', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php
          $success_img = get_field('success_story');
        ?>

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 story" style="border-bottom: solid 4px rgb(56,56,56);">
          <img class="img-responsive" src="<?php echo $success_img['url']; ?>" alt="<?php echo $success_img['alt']; ?>" >
      </div>

       <?php endWhile; wp_reset_query(); ?>

    </div>

  </div>
</section>

<!-- ******************** END SUCCESS STRORY SECTION *********************** -->

<?php get_footer(); ?>
