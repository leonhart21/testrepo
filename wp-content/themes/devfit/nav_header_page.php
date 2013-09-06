<?php if(have_posts() ) : while(have_posts()) : the_post();?>
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
                                    <li class="<?php echo (get_the_title() == 'Home Page') ? 'current-page': ''; ?>">
                                        <a href="<?php echo get_option('home');?>"><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li class="<?php echo (get_the_title() == 'About Page') ? 'current-page': ''; ?>">
                                        <a href="http://localhost/devfit/about/"><i class="icon-user"></i><br />About</a>
                                    </li>
                                    <li class="<?php echo (get_the_title() == 'Contact Page') ? 'current-page': ''; ?>">
                                        <a href="http://localhost/devfit/contact/"><i class="icon-envelope-alt"></i><br />Contact</a>
                                    </li>
                                    <li class="<?php echo (get_the_title() == 'Blog Page') ? 'current-page': ''; ?>">
                                        <a href="http://localhost/devfit/blog/"><i class="icon-comments"></i><br />Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile; endif;?>
	