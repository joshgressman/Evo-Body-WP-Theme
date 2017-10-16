<?php
/*
   Template Name: Location Lakeville
*/
$contact_form_Lakeville = get_field('lakeville_form');
$lakeville_map = get_field('lakeville_map');

get_header();
?>

<!-- HERE CAROUSEL -->
<?php get_template_part('template-parts/content','carousel-location-lakeville'); ?>

<!-- LOCATION WITH FORM SECTION -->
<section class="location-form">
 <div class="container">
   <div class="row">
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 location-details">
     <h1 id="location-header">EVO BODY LAKEVILLE</h1>
     <ul>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Zumba&reg;, Boot Camp, Yoga</li>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Spinning&reg;</li>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Personal Training</li>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Small Group Fitness</li>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Cardio Equipment w/ TVs</li>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Free Weights</li>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Circuit Training</li>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Kids Club</li>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Selectorized Machines</li>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Month-to-Month Memberships</li>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>Health Insurance Reimbursement</li>
       <li><i class="fa fa-star fa-1x" aria-hidden="true"></i>24/7 Access </li>
     </ul>
     <button type="button" class="btn btn-default" data-toggle="modal" data-target="#membershipModal">View Membership Options <span class="caret"></span></button>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
      <h3>Get Your Eagan Evo Body Full Access 7 Day Pass Today!</h3>
      <form class="form-inline" role="form">
        <?php echo $contact_form_Lakeville ?>
        <h4 style="text-align: center; margin-top: 30px;">Pass must be activated within 72 hours of submission. Must be 18+ with valid local photo ID.</h4>
        <p class="disclaimer" style="text-align: center;"><em>Privacy Statement: You consent to follow-up voice, text and/or email communications from the Evo Body at the phone numbers and email address given above.</em></p>
      </form>
    </div>
   </div>
 </div>
</section> <!--END -->

<!-- LOCATION INFO SECTION -->
<section id="location-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 location-info-content">
        <h2>OPEN 24 HOURS</h2>

        <h4>Hours of operation:</h4>
          <p>Mon: 5:00am-Close Fri: 9:00pm</p>
          <p>Sat & Sun: 7:00am - 6:00pm</p>
        <h4>Call:</h4>
          <p>952-898-1949</p>
        <h4>Visit:</h4>
          <p>16331 Kenrick Ave <br />
             Lakeville, MN 55044
          </p>
          <a href="https://www.google.com/maps/dir//16331+Kenrick+Ave,+Lakeville,+MN+55044/@44.7128895,-93.2824925,17z/data=!4m16!1m7!3m6!1s0x87f63994ee5469b5:0x4f8a0c582378f9ca!2s16331+Kenrick+Ave,+Lakeville,+MN+55044!3b1!8m2!3d44.7128857!4d-93.2803038!4m7!1m0!1m5!1m1!1s0x87f63994ee5469b5:0x4f8a0c582378f9ca!2m2!1d-93.2803038!2d44.7128857" target="blank"><h4 class="directions">Get Directions &#9758;</h4></a>
        <h4>Email:</h4>
           <p>emailheres@evobody.com</p>
        <h4>Evo Body Kids Club Hours:</h4>
           <p><strong>AM Kids Club</strong></p>
           <p>Mon-Fri: 8:45am - 1:00pm</p>
           <p>Sun: 9:00am - 1:00pm</p>
           <br />
           <p><strong>PM Kids Club</strong></p>
           <p>Mon-Fri: 4:00pm - 8:00pm</p>
      </div>
      <div id="club-info-images" class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
       <div class="row maps">
         <div class="col-sm-6 col-xs-6" style="height: 197px; background-color: white; border-right: solid 1px gray">
           class download goes here
         </div>
         <div class="col-sm-6 col-xs-6"  id="location-meet-trainers">
           <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/workout.jpg">
           <p>Meet Our Personal Trainers</p>
           <a href="http://localhost:8888/evobody-website/lakeville-personal-trainers/"><button class="btn btn-default">More &#62;</button></a>
         </div>
       </div>
       <br />
       <div class="row">
         <div class="col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2">
            <?php echo $lakeville_map ?>
         </div>
       </div>
      </div>
    </div>
  </div>
</section> <!--END -->

<?php get_template_part('template-parts/content','location-amenities'); ?>

<!--**************************** MEMBERSHIP MODAL ************************** -->

<!-- MODAL
	================================================== -->
	<div class="modal fade" id="membershipModal">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
       </button>
       <h4 class="modal-title" id="myModalLabel">$0 Enrollment Promotion Going on Now</h4>
      </div>
      <div class="modal-body">
        <h5 class="text-center">Evo Body Membership Options</h5>
          <table class="table table-striped" id="tblGrid" style="text-align: center">
            <thead id="tblHead">
              <tr>
                <th></th>
                <th style="text-align: center">Option 1</th>
                <th style="text-align: center">Option 2</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Enrollment Fee</td>
                <td>$0.00</td>
                <td>$0.00</td>

              </tr>
               <tr><td>First Month Dues</td>
                <td>$0.00</td>
                <td>$0.00</td>

              </tr>
              <tr>
                <td>Last Month Dues</td>
                <td>$0.00</td>
                <td>$0.00</td>

              </tr>
              <tr>
                <td>Monthly Dues</td>
                <td>$0.00</td>
                <td>$0.00</td>

              </tr>
              <tr>
                <td>Total</td>
                <td>$0.00</td>
                <td>$0.00</td>

              </tr>
              <tr>
                <td></td>
                <td><button class="btn btn-info btn-sm">Sign Up</button></td>
                <td><button class="btn btn-info btn-sm">Sign Up</button></td>

              </tr>
            </tbody>
          </table>
      </div>
     </div>
   </div>
	</div><!-- modal -->

<?php get_footer(); ?>
