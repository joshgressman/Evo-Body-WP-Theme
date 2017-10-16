<?php
/*
   Template Name: Apply Page
*/

$application_form = get_field('application_form');

get_header();
?>

<section id="application-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
       <h1>Apply Now To Join The Evo Body Fitness Team</h1>
      </div>
    </div>
    <form id="application-form">
     <?php echo $application_form; ?>

    </form>
  </div>
</section>



<?php get_footer(); ?>
