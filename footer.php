<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evo-body-theme
 */

?>

<?php wp_footer(); ?>

	</div><!-- #content -->

	<footer id="colophon" class="footer">
		<div class="container">
	<div class="row">
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 footer-list">
		 <ul class="list-inline">
			 <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo2.png" height="50" width="50" alt="Evo Body Fitness Logo"></li>
			 <li><a href="careers.html">CAREERS</a></li>
			 <li><a href="join-now.html">JOIN NOW</a></li>
			 <li><a href="guest-pass.html">GUEST PASS</a></li>
			 <li><a href="privacy-policy.html">PRIVACY POLICY</a></li>
		 </ul>
		</div>
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 icons">
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
		</div>
	</div>
	 <div class="row">
		 <div class="col-sm-12">
					<p id="copyright">Copyright &copy; Evo Body Fitness Clubs. All Rights Reserved</p>
		 </div>
	 </div>
</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
 <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
 <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
