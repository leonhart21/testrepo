<?php get_header(); ?>
<?php get_template_part('nav_header_page'); ?>
<div class="container">
	<div class="row-fluid">
		<div class="span8 well single-blog-container">
			<?php if(have_posts() ) : while(have_posts()) : the_post();?>

				<h3 class="violet"><?php the_title();?></h3>
				<div><?php the_post_thumbnail('singlepost-image');?></div>
				<p><?php the_content();?></p>
				

			<?php endwhile;?>
				<span>
				<?php previous_post_link();?><br /><?php next_post_link();?>
				</span>
			<?php endif;?>
		</div>
		
		<div class="span3 row-fluid">
				<div class="span12 well">
					<?php dynamic_sidebar('Widget4');?>
					<?php dynamic_sidebar('Widget3');?>
					<?php dynamic_sidebar('Widget1');?>
				</div>

		</div>	
	</div>
</div>
<?php get_footer(); ?>