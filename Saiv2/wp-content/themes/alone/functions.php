<?php



add_filter('pll_get_post_types', 'my_pll_get_post_types');
function my_pll_get_post_types($types) {
    return array_merge($types, array('fw-portfolio' => 'fw-portfolio','fw-event' => 'fw-event'));
}

function my_test(){
	
	session_start();
	if(!isset($_SESSION['donated'])){
		header('Location: https://sai.ngo/');
	}
}
add_shortcode('my_test_output','my_test');


function cool_script() {
	wp_enqueue_script('cool-stuff',get_template_directory_uri() . '/scripts/donate-button-script.js',array('jquery'),'1.0.0',true);

}

add_action('wp_enqueue_scripts','cool_script');


/*

This functions lets me register new custom strings to be translated on Polylang Plugin

function register_strings() {
  pll_register_string("donate-button", "Donate Now", "custom-strings");
}
add_action('init','register_strings');

*/

include_once get_template_directory() . '/theme-includes/init.php';
 register_sidebar(
        array (
            'name' => __( 'Top Bar Social', 'your-theme-domain' ),
            'id' => 'top-bar-social',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
	 register_sidebar(
        array (
            'name' => __( 'Header Top Bar Right', 'your-theme-domain' ),
            'id' => 'header-top-bar-right',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );