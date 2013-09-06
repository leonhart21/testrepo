<?php 
	$args = array('post_type'=>'devfit_content');
	$query = new WP_Query($args);

	if($query->have_posts() ) : while($query->have_posts()) : $query->the_post();?>
	<!-- Slider -->
        <div class="slider">
            <div class="container">
                <div class="row">
                    <div class="span10 offset1">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="<?php the_field('first_slider');?>">
                                    <img src="<?php the_field('first_slider');?>">
                                    <p class="flex-caption"><?php the_field('first_sliders_caption'); ?></p>
                                </li>
                                
                                <li data-thumb="<?php the_field('second_slider');?>">
                                    <img src="<?php the_field('second_slider');?>">
                                    <p class="flex-caption"><?php the_field('second_sliders_caption'); ?></p>
                                </li>

                                <li data-thumb="<?php the_field('third_slider');?>">
                                    <img src="<?php the_field('third_slider');?>">
                                    <p class="flex-caption"><?php the_field('third_sliders_caption'); ?></p>
                                </li>

                                <li data-thumb="<?php the_field('fourth_slider');?>">
                                    <img src="<?php the_field('fourth_slider');?>">
                                    <p class="flex-caption"><?php the_field('fourth_sliders_caption'); ?></p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
<?php endwhile; endif;?>

