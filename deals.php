<?php
/**
 * Plugin Name: Ashish_Deals
 * Description: This is the plugin used to create deals section.
 * Version: 1.0
 * Author: Ashish Sharma
 */


// Registering New Posttype at the time of the activation
 function deals_posttype() {

     register_post_type( 'deals',
         array(
             'labels' => array(
                 'name' => __( 'Deals' ),
                 'singular_name' => __( 'Deal' )
             ),
 						 'supports' => array('thumbnail','title'),
             'public' => true,
             'menu_icon' => 'dashicons-cart',
             'has_archive' => true,
             'rewrite' => array('slug' => 'deal')

         )
     );
 }
 add_action( 'init', 'deals_posttype' );




//Creating Abstract Class Method For Adding Form and Saving Data.

abstract class Inc_Deals_Function
{
	public static function add()
	{
			$screens = ['deals'];
			foreach ($screens as $screen) {
					add_meta_box(
							'inc_deals',             // Unique ID for the box
							'Deals Info',            // Title for the Meta Box
							[self::class, 'html'],   // Content callback, must be of type callable
							$screen                  // Post type in which this section needed to be shown.
					);
			}
	}

	public static function save($post_id)
	{
      //This code helps to update value in the database when the value is updated.
			if (array_key_exists('deals_name', $_POST)) {
					update_post_meta(
							$post_id,
							'deals_name',
							$_POST['deals_name']
					);
			}
			if (array_key_exists('deal_sectors', $_POST)) {
					update_post_meta(
							$post_id,
							'deal_sectors',
							$_POST['deal_sectors']
					);
			}
			if (array_key_exists('launch_year', $_POST)) {
					update_post_meta(
							$post_id,
							'launch_year',
							$_POST['launch_year']
					);
			}
			if (array_key_exists('founders', $_POST)) {
					update_post_meta(
							$post_id,
							'founders',
							$_POST['founders']
					);
			}
			if (array_key_exists('deal_stage', $_POST)) {
					update_post_meta(
							$post_id,
							'deal_stage',
							$_POST['deal_stage']
					);
			}
			if (array_key_exists('funding_amount', $_POST)) {
					update_post_meta(
							$post_id,
							'funding_amount',
							$_POST['funding_amount']
					);
			}
			if (array_key_exists('investors', $_POST)) {
					update_post_meta(
							$post_id,
							'investors',
							$_POST['investors']
					);
			}
			if (array_key_exists('article_title', $_POST)) {
					update_post_meta(
							$post_id,
							'article_title',
							$_POST['article_title']
					);
			}
			if (array_key_exists('article_link', $_POST)) {
					update_post_meta(
							$post_id,
							'article_link',
							$_POST['article_link']
					);
			}

	}

	public static function html($post)
	{
			$deal_name = get_post_meta($post->ID, 'deals_name', true);
			$deal_sectors = get_post_meta($post->ID, 'deal_sectors', true);
			$launch_year = get_post_meta($post->ID, 'launch_year', true);
			$founders = get_post_meta($post->ID, 'founders', true);
			$deal_stage = get_post_meta($post->ID, 'deal_stage', true);
			$funding_amount = get_post_meta($post->ID, 'funding_amount', true);
			$investors = get_post_meta($post->ID, 'investors', true);
			$article_title = get_post_meta($post->ID, 'article_title', true);
			$article_link = get_post_meta($post->ID, 'article_link', true);


      include('templates/admin-form-template.php');  //this template contains form layout for the admin side.

	}
}

add_action('add_meta_boxes', ['Inc_Deals_Function', 'add']);  //hook to add "add" method of class Inc_Deals_Function on add_meta_box event
add_action('save_post', ['Inc_Deals_Function', 'save']); //hook to add "save" method of class Inc_Deals_Function on save_post event.


//Single deal shortcode decleration
function single_deal($atts) {

		ob_start();
    $atts = shortcode_atts( array('post-id' => ''), $atts, 'deal-card' );
    include( plugin_dir_path( __FILE__ ) . 'templates/single_deal.php');
    return ob_get_clean();
}
add_shortcode('deal-card', 'single_deal');


//All deals shortcode decleration
function all_deals() {

		ob_start();
    include( plugin_dir_path( __FILE__ ) . 'templates/all_deals.php');
    return ob_get_clean();
}
add_shortcode('all-deals', 'all_deals');

// Register script and styles

function deal_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style1', $plugin_url . 'assets/css/deals.css' );
    wp_enqueue_style( 'style2', $plugin_url . 'assets/css/back.css' );
}
add_action( 'wp_enqueue_scripts', 'deal_plugin_css' );
add_action( 'admin_enqueue_scripts', 'deal_plugin_css' );
