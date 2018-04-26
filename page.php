<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dandachi
 */

get_header();
?>

	 <div class="banner-menu-area fadeInUp wow">
	 
	<?php $blog_page_banner = get_field('blog_page_banner','options');
	if($blog_page_banner): ?>
    <div class="banner">
        <img src="<?php echo $blog_page_banner['url']; ?>" alt="<?php echo $blog_page_banner['title']; ?>">
    </div>
	<?php endif; ?>
	
	
    <div class="main-menu">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <?php get_template_part('template-parts/content','menu'); ?>
      </div><!-- /.navbar-collapse -->
    </div>
  </div>
  <div class="accordion-sections">
	<div class="container">
		
		
		
		
		
		
	<?php while(have_posts()): the_post(); ?>
		<div class="wrapss" style="padding: 20px 0;"> 
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
  
  
	
	
	</div>
	</div>
  </div>

<?php
get_footer();
