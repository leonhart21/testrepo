<!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-envelope-alt page-title-icon"></i>
                        <h2>Contact /</h2>
                        <p>"Get in Touch?"</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us container">
            <div class="row">
                <div class="contact-form span7">
                    <p>Note: <span class="violet">All fields are required to be filled in. Thank you for your visit. :)</span></p>
                    <form method="post" action="<?php bloginfo('template_url');?>/sendmail.php?noajax=1" id="contactform">
                        <label for="name" class="nameLabel">Name</label>
                          <input id="name" type="text" name="name" placeholder="Enter your name...">
                        <label for="email" class="emailLabel">Email</label>
                          <input id="email" type="text" name="email" placeholder="Enter your email...">
                        <label for="subject">Subject</label>
                          <input id="subject" type="text" name="subject" placeholder="Your subject...">
                        <label for="message" class="messageLabel">Message</label>
                          <textarea id="message" name="message" placeholder="Your message..."></textarea>
                        <input type="hidden" name="parser" id="parser" value="<?php bloginfo('template_url');?>">
                        <button type="submit" class="send_mail">Send</button>
                       <span class="feedback"></span>
                    </form>
                </div>
                <div class="contact-address span5">
                    <h4>I am Here</h4>
                    <div class="map"></div>
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

                            <div class="tab-pane" id="B">
                                <img src="<?php the_field('testimonial_avatar_2');?>" height="57" width="57" title="" alt="">
                                <p><?php the_field('second_testimonial');?><br /><span class="violet">
                                  <?php the_field('testimonial_from2');?> &nbsp; <?php the_field('contributor_occupation_and_company2');?></span></p>
                            </div>

                            <div class="tab-pane active" id="C">
                                <img src="<?php the_field('testimonial_avatar_3');?>" height="57" width="57" title="" alt="">
                                <p><?php the_field('third_testimonial');?><br /><span class="violet">
                                  <?php the_field('testimonial_from3');?> &nbsp; <?php the_field('contributor_occupation_and_company3');?></span></p>
                            </div>
                        </div>
                      <?php endwhile; endif; ?>
                       <ul class="nav nav-tabs">
                           <li><a href="#A" data-toggle="tab"></a></li>
                           <li><a href="#B" data-toggle="tab"></a></li>
                           <li class="active"><a href="#C" data-toggle="tab"></a></li>
                       </ul>
                     
                   </div>
                </div>
            </div>
        </div>        
