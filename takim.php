<?php 
/*
Template Name: Takim Page
*/
get_header(); ?>	
<div class="banner-menu-area fadeInUp wow">
	<?php $page_banner_takim = get_field('page_banner_takim');
		if($page_banner_takim): ?>
    <div class="banner">
         <img src="<?php echo $page_banner_takim['url']; ?>" alt="<?php echo $page_banner_takim['title']; ?>">
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
        <div class="col-md-3 col-sm-6 col-xs-12 fadeInDown wow">
			<?php $first_image_takim = get_field('first_image_takim');
		if($first_image_takim): ?>
          <div class="ham-img">
             <img src="<?php echo $first_image_takim['url']; ?>" alt="<?php echo $first_image_takim['title']; ?>">
          </div>
		  <?php endif; ?>
        </div>
		<div class="col-md-3 col-sm-6 col-xs-12 fadeInDown wow">
		<?php $second_image_takim = get_field('second_image_takim');
		if($second_image_takim): ?>
          <div class="ham-img">
             <img src="<?php echo $second_image_takim['url']; ?>" alt="<?php echo $second_image_takim['title']; ?>">
          </div>
		  <?php endif; ?>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 fadeInUp wow">
            <div class="hamm-cont">
			<?php $page_text_takim = get_field('page_text_takim');

					if($page_text_takim): 
					
					 echo  $page_text_takim; 
					
				endif; ?>
             
            </div>
        </div>
      </div>
    </div>
  </div>
  
<?php get_footer(); ?>