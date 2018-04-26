<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dandachi
 */

?>

	<footer class="footer-area">
	
	<?php $slider_image_gallery = get_field('slider_image_gallery','options'); 

	if($slider_image_gallery): ?>
	  <div class="carousel-image-gallerty fadeInDown wow">
		  <div class="owl-carousel">
		  
		  <?php foreach($slider_image_gallery as $slide):  ?>
			<div class="single-slide"> <img src="<?php echo  $slide['url']; ?>" alt="<?php echo  $slide['title']; ?>"></div>
		  <?php endforeach; ?>
		  </div>
	  </div>
	  
	  <?php endif; ?>
	  
	  
	  <div class="footer-widget">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-4  col-xs-12 fadeInUp wow">
			<?php $footer_text = get_field('footer_text','options');

			if($footer_text): ?>
            <div class="about-usf">
			<?php echo  $footer_text; ?>

            </div>
			<?php endif; ?>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 fadeInDown wow">
            <div class="footer-maps">
			<?php $footer_map = get_field('footer_map','options');

			if($footer_map): 
			
			 echo  $footer_map; 
			
			 endif; ?>

            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-12 fadeInUp wow">
            <div class="social-link">
			<?php $social_url_title = get_field('social_url_title','options');

			if($social_url_title): 
			
			 echo  $social_url_title; 
			
			 endif; ?>
             
              <div class="linkurl">
			  
			  
				<?php $facebook_url = get_field('facebook_url','options');

				if($facebook_url): ?>
                <a href="<?php echo $facebook_url['url']; ?>"><?php echo $facebook_url['title']; ?><img src="<?php echo get_template_directory_uri();  ?>/images/fb.png" alt=""></a>
				
				<?php  endif; ?>
				
				
				<?php $twitter_url = get_field('twitter_url','options');

				if($twitter_url): ?>
                <a href="<?php echo $twitter_url['url']; ?>"><?php echo $twitter_url['title']; ?> <img src="<?php echo get_template_directory_uri();  ?>/images/tw.png" alt=""></a>
				<?php  endif; ?>
				
				
				<?php $instagram_url = get_field('instagram_url','options');

				if($instagram_url): ?>
                <a href="<?php echo $instagram_url['url']; ?>"><?php echo $instagram_url['title']; ?><img src="<?php echo get_template_directory_uri();  ?>/images/in.png" alt=""></a>
				<?php  endif; ?>
				
				
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right-text">
	<?php $copy_right_text = get_field('copy_right_text','options');

			if($copy_right_text): 
			
			 echo  $copy_right_text; 
			
	endif; ?>
     
    </div>
  </footer>
	<div class="totop">
		<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/images/scroll-top.png" alt="" /></a>
	</div>
   
	<?php wp_footer(); ?>
  </body>
</html>