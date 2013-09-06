<?php 
/*
	This Index Page will not be shown as the homepage.
*/

get_header(); ?>
<?php get_template_part('nav_header_home');?>
</head>
<body><!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brand" href="<?php echo get_option('home');?>">DevFit - Web Development that Fit your Needs.</a>
                            </h1>
                            <div class="nav-collapse collapse">
                               <ul class="nav pull-right">
                                    <li>
                                        <a href="<?php echo get_option('home');?>"><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/devfit/about/"><i class="icon-user"></i><br />About</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/devfit/contact/"><i class="icon-envelope-alt"></i><br />Contact</a>
                                    </li>
                                    <li class="current-page">
                                        <a href="http://localhost/devfit/blog/"><i class="icon-comments"></i><br />Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<div class="page-title">
	        <div class="container">
	            <div class="row">
	                <div class="span12">
	                    <i class="icon-comments page-title-icon"></i>
	                    <h2>Blog</h2>
	                   
	                </div>
	            </div>
	        </div>
	</div>

	<div class="container blog-list">
		<div class="row-fluid">
			<div class="span9">
				<?php if(have_posts()): ?>
					<?php  while(have_posts()): the_post();?>
					<div class="row-fluid">
						<div class="span6 blog-image well"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('featured-image');?></a></div>
						<div class="span6 blog-preview">
							<h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
							<span>Date Posted: <?php the_date_xml();?></span>
							<p><?php the_excerpt();?></p>
							<div class="readmore_container"><a class="readmore" href="<?php the_permalink();?>">Read More</a></div>
						</div>
					</div>
					<br>
					<?php endwhile;?>
					<span class="next_page pull-right"><?php next_posts_link('Next &raquo; '); ?></span> 
					<span class="previous_page pull-right"><?php previous_posts_link('&laquo; Previous'); ?></span> 
					
					<?php else:?>
					<h1>No Posts to Show :(</h1>
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
<?php get_template_part('testimonials'); ?>	
<?php get_footer(); ?>

