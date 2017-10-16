<?php
$contact_form = get_field('home_pass');
?>

<!-- MODAL
	================================================== -->
	<div class="modal fade" id="myModal">
   <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
       </button>
       <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumbs-up"></i>Get Your FREE 7 Day All Access Pass </h4>
      </div>
      <div class="modal-body">
       <p id="modal-p">Full access pass includes unlimited club visits, kids room and group fitness classes </p>
        <form class="form-inline" role="form">
          <?php echo $contact_form?>
        </form>
        <hr>
        <p><em>Pass must be activated within 72 hours of submission. Must be 18+ with valid local photo ID. Pass expires 7 days after activation. Valid for first time guests. Must live within 10 miles of the facility.</em></p>
        <p class="disclaimer"><em>Privacy Statement: You consent to follow-up voice, text and/or email communications from the Evo Body Fitness at the phone numbers and email address given above.</em></p>
      </div>
     </div>
   </div>
	</div><!-- modal -->
