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
  <div class="accordion-section">
	<div class="container">
		<h2>اسئلة واجوبة</h2>
		<div id="accordion" role="tablist" aria-multiselectable="true">
		
		
		
		
		
	<?php while(have_posts()): the_post(); ?>
	<div class="card">
    <div class="card-header" role="tab" id="heading<?php echo get_the_ID(); ?>">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo get_the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php echo get_the_ID(); ?>">
         <?php the_title(); ?>
        </a>
    </div>
    <div id="collapse<?php echo get_the_ID(); ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo get_the_ID(); ?>">
      <div class="card-block">
       <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  
  
	
	
	</div>
	</div>
  </div>

<?php
get_footer();
