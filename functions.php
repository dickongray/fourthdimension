<?php 

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
// Adding excerpt length
//function fourthdimension_excerpt_length( $length ) {
//	return 16;
//}
//add_filter( 'excerpt_length', 'fourthdimension_excerpt_length', 999 );
// Adding menus
function register_theme_menus() {

	register_nav_menus(
		array(
			'main-menu' 	=> __( 'Main-Menu', 'fourthdimension' )			
		)
	);

}
add_action( 'init', 'register_theme_menus' );

// Adding a widget
function fourthdimension_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

fourthdimension_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
fourthdimension_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

//Below adds orginal css styling to site,
function fourthdimension_theme_styles() {
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
// Below is adding a google font
	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Lato:400,300,200%7cOpen+Sans' );
// Adding the styles from the themes css
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css' );
}
// Adding the wp_enqueue_scripts to make the fourthdimension_theme_styles function work
add_action( 'wp_enqueue_scripts', 'fourthdimension_theme_styles' );
//Below adds orginal js to site,
function fourthdimension_theme_js() {
	global $wp_scripts;
	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9');

	wp_enqueue_script( 'bootstrap.min_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );		
}
// Adding the wp_enqueue_scripts to make the fourthdimension_theme_js function work
add_action( 'wp_enqueue_scripts', 'fourthdimension_theme_js' );
//this removes the user login bar at the top 
add_filter( 'show_admin_bar', '__return_false' );
// controls the length of the excerpt from a post
function custom_excerpt_length( $length ) {
	return 90;
}
//add_filter( 'excerpt_length', 'custom_excerpt_length', 999 ); 

function et_excerpt_more($more) {
    global $post;
    return '<div><a href="'. get_permalink($post->ID) . '" > ... Click to View Full Post</a></div>;';
}
add_filter('excerpt_more', 'et_excerpt_more');

?>