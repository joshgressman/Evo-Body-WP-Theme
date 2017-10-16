<?php
/*
   Template Name: Personal Training
*/
 $assessment_form = get_field('assessment_form');
get_header();
?>

<!-- HERE OPEN GYM -->
<?php get_template_part('template-parts/content','pt-hero'); ?>

<section class="pt-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12" style="padding-bottom: 10px;">
       <h2 id="pt-page-header">Personal Training</h2>
       <p>Whether your goal is to lose weight, tone up, get healthier or gain muscle, achieve maximal results with individualized personal training specific to your goal, your body type and your lifestyle.</p>
       <p>Achieve fitness happiness with engaging workouts that focus on fun exercises and informative sessions that encompasses nutrition and overall daily wellbeing.</p>
       <br />
       <h3>Book Your Complimentary Fitness Assessment Today</h3>
       <ul>
         <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Exercise Programs Specific To Your Goals</li>
         <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Introduction To Functional Fitness</li>
         <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Cardiovascular Training</li>
         <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Nutrition Solutions For People On The Go</li>
         <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Learn the Keys to Permanent Fat Loss </li>
       </ul>
      <!-- <button id="book-assessment" class="btn btn-info">Book Now <i class="fa fa-calendar" style="color:white;" aria-hidden="true"></i></button> -->
      <button id="book-assessment" class="btn btn-info" data-toggle="modal" data-target="#myModal">Get Started <i class="fa fa-calendar" style="color:white;" aria-hidden="true"></i></button>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pt-info">
       <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/success1.png" alt="client before and after picture">
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pt-info">
       <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/success1.png">
      </div>
    </div>
  </div>
</section>

<section id="training-icons">
  <div class="container">
    <div class="row">
      <div class="col-lg-3  col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-12 col-xs-12">
        <i class="fa fa-book fa-5x" aria-hidden="true"></i>
        <h4>Education</h4>
        <p>Learn key principles of fitness, specific to your goal that can be applied your whole life.</p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i>
        <h4>Motivation</h4>
        <p>Experience optimal results within the first 30 days to set motivation level to overdrive.</p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <i class="fa fa-superpowers fa-5x" aria-hidden="true"></i>
        <h4>Accountability</h4>
        <p>Achieve goal specific milestones that create long term health & fitness accountability.</p>
      </div>
    </div>
  </div>
</section>

<!-- MODAL
	================================================== -->
	<div class="modal fade" id="myModal">
   <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
       </button>
       <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar" aria-hidden="true"></i>Book A Complimentary Fitness Assessment </h4>
      </div>
      <div class="modal-body">
       <p id="modal-p">Evo Body Fintess's personal trianers are cartified fitness professionals, who's mission is to help you reach your fitness goals. We make fitness fun, informative and most importantly results based.</p>
       <p>Includes:</p>
        <ul id="assessment-item-list">
          <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>60 Minutes</li>
          <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Goal Setting</li>
          <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Workout</li>
        </ul>
        <hr>
        <form class="form-inline" role="form">
          <?php echo $assessment_form; ?>
        </form>
      </div>
     </div>
   </div>
	</div><!-- modal -->

<?php
get_footer();
?>
