<?php 
/*
Template Name: Laboratory Page
*/
get_header(); ?>

<div class="banner-menu-area fadeInUp wow">
	<?php $laboratory_banner = get_field('laboratory_banner');
		if($laboratory_banner): ?>
    <div class="banner">
         <img src="<?php echo $laboratory_banner['url']; ?>" alt="<?php echo $laboratory_banner['title']; ?>">
    </div>
	 <?php endif; ?>
     <div class="main-menu">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 <?php get_template_part('template-parts/content','menu'); ?>
      </div><!-- /.navbar-collapse -->
    </div>
  </div>
  <div class="hamid-dondes ">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-5 col-xs-12 fadeInDown wow">
			<?php $laboratory_image = get_field('laboratory_image');
		if($laboratory_image): ?>
          <div class="ham-img">
            <img src="<?php echo $laboratory_image['url']; ?>" alt="<?php echo $laboratory_image['title']; ?>">
          </div>
		   <?php endif; ?>
        </div>
        <div class="col-md-9 col-sm-7 col-xs-12 fadeInUp wow">
            <div class="hamm-cont">
			<?php $laboratory_text = get_field('laboratory_text');

				if($laboratory_text): 
				
				 echo  $laboratory_text; 
					
			endif; ?>
            </div>
        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>