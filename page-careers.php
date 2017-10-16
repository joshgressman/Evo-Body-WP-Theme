<?php
/*
   Template Name: Careers Page
*/

  get_header();
?>

<section id="career.photo">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h1 id="company-overview">Company Overview</h1>
      </div>

    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
       <p id="career-info-heading"><strong>Evo Body Fitness Careers</strong></p>
       <p>At Evo Body Fitness ..... mission</p>
       <p>If you have a passion for health & fitness, exceptional customer service skills and a strong work ethic, we encourage you to apply to Evo Body Fitness.</p>
       <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
       <p>minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

    </div>
  </div>
</section>

<section id="job-listings">
 <div class="container">
   <div class="row">
     <div id="avl-positions" class="col-lg-12 col-md-12 col-sm-12">
       <h3>Available Positions</h3>
     </div>
 </div>

     <div class="row">
       <!-- CREATING AN ARRAY AND ACCESSING THE VALUES AND LOOPING THROUGH THE CUSTOM POST TYPE COURSE FEATURES -->
       <?php $loop = new WP_Query( array('post_type' => 'job_listing', 'orderby' => 'post_id', 'order' => 'ASC') );?>
       <!-- LOOP THROUGH CUSTOM POST TYPES -->
       <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
         <?php
           $job_title = get_field('job_title');
           $job_location = get_field('job_location');
           $shifts = get_field('shifts');
         ?>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 listing">
       <p class="position-title"><?php echo $job_title; ?></p>
       <p class="position-location"> - <?php echo $job_location; ?> Location</p>
       <p class="position-location"> / <?php echo $shifts; ?></p>
       <a href="http://localhost:8888/evobody-website/apply/" target="blank"><button  style="float:right;">Apply</button></a>
      </div>
    <?php endWhile; wp_reset_query(); ?>
   </div>


</section>


<?php get_footer(); ?>
