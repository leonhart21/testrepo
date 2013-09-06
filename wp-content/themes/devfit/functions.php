<?php
add_theme_support( 'menus' );


if(function_exists('register_nav_menus')){
	register_nav_menus (array('primary'=>'Header Navigation'));
}

if(function_exists('add_theme_support')){
	add_theme_support('post-thumbnails');
}

if(function_exists('add_image_size')){
	add_image_size('singlepost-image', 700, 400, true); // for the single post view
	add_image_size('featured-image', 400, 250, true); //for post preview
	add_image_size('thumbnail-image', 200, 125, true); //for thumnail view
}

function create_post_type(){

	//Custom Post Type for the home page
	register_post_type('devfit_content',
		array('labels'=> 
			array(
			'name' => __('DevFit')
		),
		'public' => true,
		'menu_position' => 5,
		'rewrite' => array('slug' => 'devfit_c'),
		//other params for supports array = title,editor,author,excerpt,comments
		'supports' =>array('title') 
		)
		
	);

}

//execute the create_post_type function
add_action('init', 'create_post_type');	

//activates the widget capability of wordpress
if(function_exists(register_sidebar)){
	register_sidebar(
		array(
				'name'=> 'Widget1',
				'id'=>'widget1',
				'description'=>'Blog Left Sidebar: Categories',
				'before_widget'=>'<div class="widget">',
				'after_widget'=>'</div>'));

	register_sidebar(
		array(
				'name'=> 'Widget2',
				'id'=>'widget2',
				'description'=>'Footer Widget for Recent Posts',
				'before_widget'=>'<div class="widget">',
				'after_widget'=>'</div>'));


	register_sidebar(
		array(
				'name'=> 'Widget3',
				'id'=>'widget3',
				'description'=>'Blog Left Sidebar: Search',
				'before_widget'=>'<div class="widget">',
				'after_widget'=>'</div>'));

	register_sidebar(
		array(
				'name'=> 'Widget4',
				'id'=>'widget4',
				'description'=>'Blog Left Sidebar: BlogRoll',
				'before_widget'=>'<div class="widget">',
				'after_widget'=>'</div>'));


}
