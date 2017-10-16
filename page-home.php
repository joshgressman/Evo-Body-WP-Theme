<?php
/*
   Template Name: Home Page
*/
$slider_image_1 = get_field('slide1_image');
$slider_image_2 = get_field('slide2_image');
$slider_image_3 = get_field('slide3_image');
$slider_image_4 = get_field('slide4_image');


get_header();
?>

<!-- HERE CAROUSEL -->
<?php get_template_part('template-parts/content','carousel-home'); ?>

<!-- INFO SECTION -->
<section class="info">
  <div class="container">
    <div class="row">
      <div id="info-one" class="col-lg-4 col-md-12 col-sm-12 col-xs-12 call">
       <a href="group-fitness.html">
       <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/group.jpg" alt="group fitness class">
       <div class="info-content">
        <h3>GROUP FITNESS</h3>
          <h4>Get Your Class Pass</h4>
          <p>Enjoy today's most in demand classes</p>
       </div>
       </a>
      </div>
      <div id="info-two" class="col-lg-4 col-md-12 col-sm-12 col-xs-12 call">
        <a href="personal-training.html">
        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pt-hero.jpg" alt="group fitness class">
        <div class="info-content">
         <h3>PERSONAL TRAINING</h3>
           <h4>Book A Free Session</h4>
           <p>Get The Results You Deserve</p>
        </div>
      </a>
      </div>
      <div id="info-three" class="col-lg-4 col-md-12 col-sm-12 col-xs-12 call">
        <a href="join-now.html">
        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/open-gym.jpg" alt="group fitness class">
          <div class="info-content">
           <h3>MEMBERSHIP OPTIONS</h3>
             <h4>Prices & Amenities</h4>
             <p>$0 Enrollment Special Ends Soon</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- CALL TO ACTION SECTION -->
<section class="call-to-action">
 <div class="container">
  <h3 id="call-to-action-header">Experience Evo Body Fitness Today</h3>  <button id="call-to-action-button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">Get Pass</button>
 </div>
</section>
<!-- END CALL TO ACTION SECTION -->

<section id="why-join-section">
  <div class="container">
    <div class="row">
     <h1>WHY JOIN EVO BODY FITNESS</h1>
     <p>At The EDGE Fitness Clubs our mission is to offer extraordinary fitness facilities, innovative programming and an energetic, friendly staff to ensure our members love coming to our clubs, always enjoy their fitness experience, and see the results of their hard work. Ultimately giving our members…an EDGE in life.</p>
    </div>
    <div class="row">
     <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12" id="top-left">
     <i class="fa fa-bolt fa-5x" aria-hidden="true"></i>
     <h2>Results First</h2>
     <p>Evo Body Fitness is committed to your health and fitness goals. We foster a fun, supportive, and energetic atmosphere that inspires results.</p>
     </div>
     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" id="top-right">
       <i class="fa fa-superpowers" aria-hidden="true"></i>
       <h2>Amenities</h2>
       <p>Evo Body Fitness provides today's most popular fitness classes including Zumba, Yoga, and Spin, personal training, and state of the art fitness equipment including, cardio, resistance and free weights.</p>
     </div>
    </div>
    <div class="row">
     <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12" id="bottom-left">
       <i class="fa fa-money" aria-hidden="true"></i>
       <h2>Affordable Fitness</h2>
       <p>Evo Body Fitness memberships are ultra affordable, month-to-month (no contracts) and some programs are eligible for health insurance reimbursements.</p>
     </div>
     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" id="bottom-right">
       <i class="fa fa-clock-o" aria-hidden="true"></i>
       <h2>Convenience</h2>
       <p>24/7 access, AM/PM Kids Club and Evo Body club services app.</p>
     </div>
    </div>
  </div>
</section>

<!-- AMENITIES SECTION -->
<?php get_template_part('template-parts/content', 'amenities')?>

<!-- 7 DAY PASS MODAL -->
<?php get_template_part('template-parts/content', 'pass-modal')?>

<?php
get_footer();
?>
