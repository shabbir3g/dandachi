<?php 
/*
Template Name: Library Page
*/
get_header(); ?>


 <div class="banner-menu-area fadeInUp wow">

   <?php $library_banner = get_field('library_banner');
		if($library_banner): ?>
    <div class="banner">
         <img src="<?php echo $library_banner['url']; ?>" alt="<?php echo $library_banner['title']; ?>">
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
         <?php $library_first_image = get_field('library_first_image');
		if($library_first_image): ?>
          <div class="ham-img">
            <img src="<?php echo $library_first_image['url']; ?>" alt="<?php echo $library_first_image['title']; ?>">
          </div>
		   <?php endif; ?>
        </div>
        <div class="col-md-9 col-sm-7 col-xs-12 fadeInUp wow">
            <div class="hamb-cont">
			<?php $library_first_text = get_field('library_first_text');

				if($library_first_text): 
				
				 echo  $library_first_text; 
					
			endif; ?>
              
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hamid-dondes ">
    <div class="container">
      <div class="row">
		<div class="col-md-9 col-sm-7 col-xs-12 fadeInUp wow">
            <div class="hamb-cont">
			<?php $library_second_text = get_field('library_second_text');

				if($library_second_text): 
				
				 echo  $library_second_text; 
					
			endif; ?>
             
            </div>
        </div>
        <div class="col-md-3 col-sm-5 col-xs-12 fadeInDown wow">
          <?php $library_second_image = get_field('library_second_image');
		if($library_second_image): ?>
          <div class="ham-img">
            <img src="<?php echo $library_second_image['url']; ?>" alt="<?php echo $library_second_image['title']; ?>">
          </div>
		   <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>