<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evo-body-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/assets/css/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:600i" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'evo-body-theme' ); ?></a> -->

	<header class="site-header" role="banner">
 <!-- NAV BAR -->
 <div class="navbar-wrapper">
   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle Navigatio</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="http://localhost:8888/evobody-website/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo2.png" height="35" width="80"  alt="Evo Body Fitness Logo"></a>
      </div>
       <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
           <li><a href="http://localhost:8888/evobody-website/">HOME</a></li>
           <!-- <li><a href="blog.html">Locations</a></li> -->
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOCATIONS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"></a></li>
            <li><a href="http://localhost:8888/evobody-website/location-eagan/">EAGAN</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="http://localhost:8888/evobody-website/evo-body-eden-prairie/">EDEN PRAIRIE</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="http://localhost:8888/evobody-website/evo-body-lakeville/">LAKEVILLE</a></li>
          </ul>
        </li>
            <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEMBERSHIPS<span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="#"></a></li>
             <li><a href="http://localhost:8888/evobody-website/join-now/">JOIN NOW</a></li>
             <li role="separator" class="divider"></li>
             <li><a href="http://localhost:8888/evobody-website/guest-pass/">FREE GUEST PASS</a></li>
           </ul>
         </li>
            <li><a href="http://localhost:8888/evobody-website/personal-training/">PERSONAL TRAINING</a></li>
            <li><a href="http://localhost:8888/evobody-website/group-fitness/">GROUP FITNESS</a></li>
            <li><a href="http://localhost:8888/evobody-website/challenges/">EVO CHALLENGES</a></li>
            <!-- <li><a href="blog.html">BLOG</a></li> -->
            <li><a href="http://localhost:8888/evobody-website/careers/">CAREERS</a></li>
         </ul>
       </div>
    </div>
   </div>
 </div>

</header>
