<?php get_header(); ?>
<?php get_template_part('nav_header_page'); ?>
<?php if(have_posts() ) : while(have_posts()) : the_post();?>
	<?php if(get_the_title()=='Home Page'):?>
			<?php get_template_part('sliders'); ?>
			<?php get_template_part('boxes'); ?>
			<?php get_template_part('testimonials'); ?>	
	<?php endif;?>
	<?php if(get_the_title()=='About Page'):?>
			<?php get_template_part('about-template'); ?>
	<?php endif;?>
	
	<?php if(get_the_title()=='Contact Page'):?>
			<?php get_template_part('contact-template'); ?>
	<?php endif;?>
<?php endwhile; endif;?>
<?php get_footer(); ?>