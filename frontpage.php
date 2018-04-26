<?php 
/*
Template Name: Home Page
*/
get_header(); ?>	
	<div class="banner-menu-area fadeInUp wow">
	<?php $home_page_banner = get_field('home_page_banner');
		if($home_page_banner): ?>
    <div class="banner">
        <img src="<?php echo $home_page_banner['url']; ?>" alt="<?php echo $home_page_banner['title']; ?>">
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
		<?php $first_image_home = get_field('first_image_home');
		if($first_image_home): ?>
          <div class="ham-img">
            <img src="<?php echo $first_image_home['url']; ?>" alt="<?php echo $first_image_home['title']; ?>">
          </div>
		 <?php endif; ?>
        </div>
        <div class="col-md-9 col-sm-7 col-xs-12 fadeInUp wow">
            <div class="ham-cont">
			<?php $first_text_home = get_field('first_text_home');

					if($first_text_home): 
					
					 echo  $first_text_home; 
					
				endif; ?>
              
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hamid-goal">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-7 col-xs-12 fadeInUp wow">
            <div class="ham-goalcont">
				<?php $second_text_home = get_field('second_text_home');

					if($second_text_home): 
					
					 echo  $second_text_home; 
					
				endif; ?>
              
            </div>
        </div>
        <div class="col-md-3 col-sm-5 col-xs-12 fadeInDown wow">
		<?php $second_image_home = get_field('second_image_home');
		if($second_image_home): ?>
          <div class="ham-img">
             <img src="<?php echo $second_image_home['url']; ?>" alt="<?php echo $second_image_home['title']; ?>">
          </div>
		   <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  
<?php get_footer(); ?>