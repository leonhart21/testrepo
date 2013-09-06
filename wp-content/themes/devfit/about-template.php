<!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-user page-title-icon"></i>
                        <h2>About /</h2>
                        <p>"I am good as advertised. Just ask my mom."</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Text -->
        <div class="about-us container">
            <div class="row">
                <div class="about-us-text span12">
                    <h4>Who the heck I am?</h4>
                    <p>Mark, is a Web Developer based in Manila, Philippines. He likes to create neat and readable code for his projects. Mark always do a research about new trends, keeping himself up to date with the latest and ever changing web standards. He usually spend his spare time in sports and reading to keep out any form stress from his doorstep. Basketball, Boxing and Strength Training are his main sporting interest. He loves challenges. He loves to lift heavy. He loves to Code.</p>
					<p>Coding/Web Programming in Mark's perspective is not only a job nor a profession, it is something he enjoys to do. There's a big difference between doing something because you are ought to do it and doing something because you love and enjoy doing it. "Self-fulfillment" we can say. His passion with programming makes him enjoy complex and sophisticate web projects.</p>
                    
					<h4>Outside Interests</h4>
                    <p>Mark is fascinated with sports. He is a big sport fan, most especially the game of hoops, Basketball. Basketball has been the most popular sport in the Philippines so it is no a surprise that a kid that was raised by a die-hard 'Brgy. Ginebra' faithfuls will likely be the same. He plays as a Power Forward in `Barangay Leagues`, he is good in getting rebounds and pounding the ball inside the shaded lane. He's good playing the position of giants even being undersized. Mark only stand 5'8.</p>
					<p>Aside from basketball, Mark excels in the 'sport of brawns', Powerlifting/Strength Training. He loves to lift weights ('barbels as other says'). He lifted up as much as 400 lbs squat, 420 lbs deadlift and 260 lbs Bench Press. Unfortunately, these stats were hiscareer-high about 2 years ago before reaching plateau.
					Reading is also not problem for Mark. Reading for him is important as eating. Life is life-long learning process, so reading is a habitual activity for Mark. He reads mostly, non-fictional books regularly.</p>
                   
                </div>
            </div>
        </div>

        <!-- About Me -->
        <div class="team container">
            <div class="team-title">
                <h3>Meet Mark :)</h3>
            </div>
            <div class="row">
                <div class="team-text span4 offset4">
					<a class="fancybox-effects-b" href="<?php bloginfo('template_url');?>/assets/img/mark/squeeze.jpg" title="Me bearhugging my friend xD">
                           <img src="<?php bloginfo('template_url');?>/assets/img/mark/squeeze.jpg" alt="Me bearhugging my friend xD">
                    </a>
                    <h4>Mark Erick Fagar</h4>
					<p>Mark(left) squeezing Jacob(right) like a lemon.</p>
                    <p><strong>I am good as advertised. Just ask my mom.</strong></p>
					<div class="social-links">
                        <a class="facebook" href="#"></a>
                        <a class="twitter" href="#"></a>
                        <a class="email" href="#"></a>
                    </div>
                </div>
            </div>
        </div>

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
                            <div class="tab-pane" id="A">
                                <img src="<?php the_field('testimonial_avatar_1');?>" height="57" width="57" title="" alt="">
                                <p><?php the_field('first_testimonial');?><br /><span class="violet">
                                  <?php the_field('testimonial_from1');?> &nbsp; <?php the_field('contributor_occupation_and_company1');?></span></p>
                            </div>

                            <div class="tab-pane active" id="B">
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
                           <li><a href="#A" data-toggle="tab"></a></li>
                           <li class="active"><a href="#B" data-toggle="tab"></a></li>
                           <li><a href="#C" data-toggle="tab"></a></li>
                       </ul>
                     
                   </div>
                </div>
            </div>
        </div>        