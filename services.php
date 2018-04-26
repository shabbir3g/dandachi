<?php 
/*
Template Name: Services Page
*/
get_header(); ?> 
 
 <div class="banner-menu-area fadeInUp wow">

    <div class="banner">
		<?php while(have_posts()): the_post(); ?>
			<?php the_post_thumbnail(); ?>
		<?php endwhile; ?>
    </div>
    <div class="main-menu">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 <?php get_template_part('template-parts/content','menu'); ?>
      </div><!-- /.navbar-collapse -->
    </div>
  </div>
  
  <div class="dental-tabs wow lightSpeedIn" style="visibility: visible; animation-name: lightSpeedIn;"> 
		<div class="container">
			 <div class="row">
			  <div class="tab-content col-md-10">
			  
			  
			  
			  
			  
			  <?php 
					
					$services = new WP_Query(array(
						'post_type'	=> 'service',
					));
					
					while($services->have_posts()): $services->the_post(); ?>
				<div id="home<?php echo get_the_ID(); ?>" class="tab-pane fade">
					<?php the_title();  ?>
					<?php the_content(); ?>
				</div>
				<?php endwhile; ?>
				
				
				
				
			  </div>
				<ul class="nav nav-tabs col-md-2">
				
					<?php 
					
					$services = new WP_Query(array(
						'post_type'	=> 'service',
					));
					
					while($services->have_posts()): $services->the_post(); ?>
					<li class=""><a data-toggle="tab" href="#home<?php echo get_the_ID(); ?>" aria-expanded="true"><?php the_title();  ?></a></li>
					<?php endwhile; ?>
					
					
				</ul>
			 </div>
		</div>
	</div>
<?php get_footer(); ?>