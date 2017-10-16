<?php
/*
   Template Name: Guest Pass
*/
$guest_pass =  get_field('guest_pass');

get_header();
?>

<!-- HERE OPEN GYM -->
<?php get_template_part('template-parts/content','hero-open-gym'); ?>

<section class="pass-data">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
       <h2 id="pass-header">Evo Full Access 7 Day Guest Pass</h2>
       <h4 id="pass-sub-head">Includes: Group Fitness / Kids Club / Specialty Classes / Fitness Assessment / Full Gym Access</h4>

      </div>
    </div>
  </div>
</section>

<section class="guest-pass-form">
  <div class="container form-content">
    <form class="" role="form">
          <?php echo $guest_pass ?>
          <h3 style="text-align: center; margin-top: 30px;">Pass must be activated within 72 hours of submission. Must be 18+ with valid local photo ID.</h3>
          <p class="disclaimer" style="text-align: center;"><em>Privacy Statement: You consent to follow-up voice, text and/or email communications from the Evo Body at the phone numbers and email address given above.</em></p>
    </form>
  </div>
</section>

<!-- AMENITIES SECTION -->
<?php get_template_part('template-parts/content', 'amenities')?>

<?php
get_footer();
?>
