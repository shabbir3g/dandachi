<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dandachi
 */

?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
  </head>
  <body <?php body_class('rtl'); ?> >
	<header class="fadeInDown wow">
		<nav class="navbar navbar-default">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">
				<span class="icon-bar"><span class="inner"></span></span>
				<span class="icon-bar"><span class="inner"></span></span>
				<span class="icon-bar"><span class="inner"></span></span>
			  </button>
			  <div class="logo-all">
			  
			<?php 
			
			$arabic_title_uploader = get_field('arabic_title_uploader','options');

			if($arabic_title_uploader): ?>
			<a class="navbar-brand-en" href="<?php echo home_url(); ?>"><img src="<?php echo $arabic_title_uploader['url']; ?>" alt="<?php echo $arabic_title_uploader['title']; ?>" /></a>
			<?php endif; 
			
			$main_logo_uploader = get_field('main_logo_uploader','options');

			if($main_logo_uploader): ?>
			<a class="navbar-brand-lo" href="<?php echo home_url(); ?>"><img src="<?php echo $main_logo_uploader['url']; ?>" alt="<?php echo $main_logo_uploader['title']; ?>" /></a>
			<?php endif; 
		  
		  
			
			$english_title_uploader = get_field('english_title_uploader','options');

			if($english_title_uploader): ?>
			<a class="navbar-brand-ar" href="<?php echo home_url(); ?>"><img src="<?php echo $english_title_uploader['url']; ?>" alt="<?php echo $english_title_uploader['title']; ?>" /></a>
		   <?php endif; ?>
		  
        </div>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->

		  </div><!-- /.container-fluid -->
		</nav>
	</header>