  <!-- Testimonials -->
        <div class="testimonials container">
            <div class="testimonials-title">
                <h3>Testimonials</h3>
            </div>
            <div class="row">
                <div class="testimonial-list span12">
                    <div class="tabbable tabs-below">
                      <?php $args = array('post_type'=>'devfit_content');
                            $query = new WP_Query($args);

                            if($query->have_posts() ) : while($query->have_posts()) : $query->the_post();?>
                        <div class="tab-content">
                            <div class="tab-pane active" id="A">
                                <img src="<?php the_field('testimonial_avatar_1');?>" height="57" width="57" title="" alt="">
                                <p><?php the_field('first_testimonial');?><br /><span class="violet">
                                  <?php the_field('testimonial_from1');?> &nbsp; <?php the_field('contributor_occupation_and_company1');?></span></p>
                            </div>

                            <div class="tab-pane" id="B">
                                <img src="<?php the_field('testimonial_avatar_2');?>" height="57" width="57" title="" alt="">
                                <p><?php the_field('second_testimonial');?><br /><span class="violet">
                                  <?php the_field('testimonial_from2');?> &nbsp; <?php the_field('contributor_occupation_and_company2');?></span></p>
                            </div>

                            <div class="tab-pane" id="C">
                                <img src="<?php the_field('testimonial_avatar_3');?>" height="57" width="57" title="" alt="">
                                <p><?php the_field('third_testimonial');?><br /><span class="violet">
                                  <?php the_field('testimonial_from3');?> &nbsp; <?php the_field('contributor_occupation_and_company3');?></span></p>
                            </div>
                        </div>
                      <?php endwhile; endif; ?>
                       <ul class="nav nav-tabs">
                           <li class="active"><a href="#A" data-toggle="tab"></a></li>
                           <li><a href="#B" data-toggle="tab"></a></li>
                           <li><a href="#C" data-toggle="tab"></a></li>
                       </ul>
                     
                   </div>
                </div>
            </div>
        </div>