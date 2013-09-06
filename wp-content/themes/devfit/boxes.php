<div class="presentation container">
        <h2>I am <span class="violet">Mark</span>, a Web Developer Based in Manila, Philippines.</h2> 
     </div>

     <!-- 3 Widget Section -->
        <div class="what-we-do container">
            <div class="row">
            	<?php 
            	$args = array('post_type'=>'devfit_content');
				$query = new WP_Query($args);

            	if($query->have_posts() ) : while($query->have_posts()) : $query->the_post();?>
                <div class="service span4">
                    <div class="icon-awesome">
                        <i class="icon-user"></i>
                    </div>
                    <h4><?php the_field('widget_1_title');?></h4>
                    <p><?php the_field('widget_1_content');?></p>
                    <a href="<?php the_field('widget_1_url');?>">More</a>
                </div>

                <div class="service span4">
                    <div class="icon-awesome">
                        <i class="icon-tasks"></i>
                    </div>
                    <h4><?php the_field('widget_2_title');?></h4>
                    <p><?php the_field('widget_2_content');?></p>
                    <a href="<?php the_field('widget_2_url');?>">More</a>
                </div>

                <div class="service span4">
                    <div class="icon-awesome">
                        <i class="icon-globe"></i>
                    </div>
                    <h4><?php the_field('widget_3_title');?></h4>
                    <p><?php the_field('widget_3_content');?></p>
                    <a href="<?php the_field('widget_3_url');?>">More</a>
                </div>
                
                <?php endwhile; endif;?>
            </div>
</div>