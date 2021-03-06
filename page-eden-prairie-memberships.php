<?php
/*
   Template Name: Eden Prairie Memberships
*/

get_header();

?>
<section class="join-location-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <h2>Eden Prairie</h2>
        <p>
          10165 Hennepin Town Rd. <br />
          Eden Prairie, MN 55347 <br />
          952-949-1131
        </p>
        <a href="https://www.google.com/maps/dir//10165+Hennepin+Town+Rd,+Eden+Prairie,+MN+55347/@44.8211253,-93.4035989,17z/data=!4m16!1m7!3m6!1s0x87f62294fd79a34f:0x2f07b30b1cf55d67!2s10165+Hennepin+Town+Rd,+Eden+Prairie,+MN+55347!3b1!8m2!3d44.8211215!4d-93.4014102!4m7!1m0!1m5!1m1!1s0x87f62294fd79a34f:0x2f07b30b1cf55d67!2m2!1d-93.4014102!2d44.8211215" target="blank"><h4>Get Directions &#9758;</h4></a>
      <hr>
      <p class="join-header-text">Staffed Hours</p>
      <p>Monday-Thursday 5:00am-11:00pm <br />
         Friday 5:00am-10:00pm
         Staurday & Sunday 9:00am-4:00pm
      </p>

      <p class="join-header-text">Kids Room</p>
      <p>Monday-Thursday AM 8:45am-1:00pm<br />
         Monday-Thursday PM 4:00pm-8:00pm
         Staurday 9:00am-1:00pm
      </p>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <h2>Club pricing imported here</h2>
      </div>
    </div>
  </div>
</section>
<hr>

<!-- ******************** LOCATION AMENITIES SECTION ***********************-->
<?php get_template_part('template-parts/content','location-amenities'); ?>

<?php get_footer(); ?>
