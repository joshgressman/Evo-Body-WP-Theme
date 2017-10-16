<?php
/*
   Template Name: Group Fitness
*/

$class_pass = get_field('class_pass');

get_header();
?>

<!--  Hero -->
<section class="hero-section-personal-training">
  <div class="jumbotron" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/spin.jpg) no-repeat center center;   background-size: cover;" alt="group fitness class" id="pt-hero-img">
</div>
</section>
<!-- END HERO SECTION -->
<hr>

<!-- ********************** GROUP FITNESS TOP INFO SECTION ******************-->
<section id="group-fitness-info-top">
 <div class="container">
   <div class="row">
    <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
     <h1>Evo Body Group Fitness</h1>
     <p>Evo Body Fitness offers a huge variety of enerjetic in demand classe. "Our instructors are all certified and come with years of experience. EDGE studios are state of the art with only the most up-to-date equipment. Our classes provide an intense, upbeat and motivating atmosphere that will help you get your EDGE in life." Change to Less Mills info</p>
    </div>
    <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12">
     <div class="row">
       <div class="col-md-5 col-md-offset-1">
         <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/class.jpeg">
         <h3>Class Schedule</h3>
       </div>
       <div class="col-md-5" >
         <img id="class-pass-img" class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/class-pass.png" alt="group fitness class pass">
         <button id="class-pass-btn" class="btn btn-info" data-toggle="modal" data-target="#classPassModal">Get Pass</button>
       </div>
     </div>
    </div>
   </div>
 </div>
</section>
<!-- ********************END GROUP FITNESS TOP INFO SECTION *****************-->

<!-- List of classes -->
<?php get_template_part('template-parts/content','class-list'); ?>

<!-- MODAL
	================================================== -->
	<div class="modal fade" id="classPassModal">
   <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
       </button>
       <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumbs-up"></i>Get Your FREE 7 Day Class Pass</h4>
      </div>
      <div class="modal-body">
       <p id="modal-p">Full access pass includes unlimited club visits, kids room and group fitness classes </p>
       <form>
         <?php echo $class_pass ?>
       </form>
        <hr>
        <p><em>7 day full access passes expire after 7 days after expiration. Valid for first time guests. Must live within 10 miles of the facility.</em></p>
        <p class="disclaimer"><em>Privacy Statement: You consent to follow-up voice, text and/or email communications from the Evo Body at the phone numbers and email address given above.</em></p>
      </div>
     </div>
   </div>
	</div><!-- modal -->

<?php get_footer(); ?>
