<?php
/*
Plugin Name: Resume Templates
Plugin URI: 
Description: Resume Templates simple way to create resumes.
Version: 1.0
Author: paratheme
Author URI: http://paratheme.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 

define('resume_templates_plugin_url', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('resume_templates_plugin_dir', plugin_dir_path( __FILE__ ) );
define('resume_templates_wp_url', 'https://wordpress.org/plugins/resume-templates/' );
define('resume_templates_wp_reviews', 'http://wordpress.org/support/view/plugin-reviews/resume-templates' );
define('resume_templates_pro_url','http://paratheme.com/items/resume-templates-awesome-resume-builder-for-wordpress/' );
define('resume_templates_demo_url', 'http://paratheme.com/demo/resume-templates/' );
define('resume_templates_conatct_url', 'http://paratheme.com/contact' );
define('resume_templates_qa_url', 'http://paratheme.com/qa/' );
define('resume_templates_plugin_name', 'Resume Templates' );
define('resume_templates_share_url', 'https://wordpress.org/plugins/resume-templates/' );
define('resume_templates_tutorial_video_url', '//www.youtube.com/embed/8OiNCDavSQg?rel=0' );

require_once( plugin_dir_path( __FILE__ ) . 'includes/meta.php');
require_once( plugin_dir_path( __FILE__ ) . 'includes/functions.php');

require_once( plugin_dir_path( __FILE__ ) . 'themes/flat/index.php');



function resume_templates_paratheme_init_scripts()
	{

		wp_enqueue_script('jquery');
		wp_enqueue_script('resume_templates_js', plugins_url( '/js/scripts.js' , __FILE__ ) , array( 'jquery' ));

		wp_enqueue_style('resume_templates_style', resume_templates_plugin_url.'css/style.css');		

		wp_enqueue_script('masonry.pkgd.min.js', plugins_url( '/js/masonry.pkgd.min.js' , __FILE__ ) , array( 'jquery' ));
		
		// Style for themes
		wp_enqueue_style('resume_templates-style-flat', resume_templates_plugin_url.'themes/flat/style.css');			
	
		
		
	}
add_action("init","resume_templates_paratheme_init_scripts");

// to work upload button on user profile
add_action( 'admin_enqueue_scripts', 'wp_enqueue_media' ); 


function resume_templates_admin_scripts()
	{

		wp_enqueue_script('resume_templates_admin_js', plugins_url( '/admin/js/scripts.js' , __FILE__ ) , array( 'jquery' ));
		
	wp_localize_script( 'resume_templates_admin_js', 'resume_templates_ajax', array( 'resume_templates_ajaxurl' => admin_url( 'admin-ajax.php')));
		
		
		wp_enqueue_style('resume_templates_admin_style', resume_templates_plugin_url.'admin/css/style.css');


		wp_enqueue_script('jquery.tablednd.js', plugins_url( '/js/jquery.tablednd.js' , __FILE__ ) , array( 'jquery' ));
		wp_enqueue_script('jscolor.js', plugins_url( '/admin/js/jscolor.js' , __FILE__ ) , array( 'jquery' ));		
		
		
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'resume_templates_color_picker', plugins_url('/admin/js/color-picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
	
	
		//ParaAdmin
		wp_enqueue_style('ParaAdmin', resume_templates_plugin_url.'ParaAdmin/css/ParaAdmin.css');
		//wp_enqueue_style('ParaIcons', resume_templates_plugin_url.'ParaAdmin/css/ParaIcons.css');		
		wp_enqueue_script('ParaAdmin', plugins_url( 'ParaAdmin/js/ParaAdmin.js' , __FILE__ ) , array( 'jquery' ));
	
	
	
	}



add_action( 'admin_enqueue_scripts', 'resume_templates_admin_scripts' );











register_activation_hook(__FILE__, 'resume_templates_paratheme_activation');


function resume_templates_paratheme_activation()
	{
		$resume_templates_version= "1.0";
		update_option('resume_templates_version', $resume_templates_version); //update plugin version.
		
		$resume_templates_customer_type= "free"; //customer_type "pro"
		update_option('resume_templates_customer_type', $resume_templates_customer_type); //update plugin version.

	}


function resume_templates_paratheme_display($atts, $content = null ) {
		$atts = shortcode_atts(
			array(
				'id' => "",

				), $atts);


			$post_id = $atts['id'];

			$resume_templates_themes = get_post_meta( $post_id, 'resume_templates_themes', true );

			$html = '';


			$html.= resume_templates_themes_flat($post_id);


			return $html;



}

add_shortcode('resume_templates', 'resume_templates_paratheme_display');









add_action('admin_menu', 'resume_templates_paratheme_menu_init');


	
function resume_templates_paratheme_menu_help(){
	include('resume-templates-help.php');	
}





function resume_templates_paratheme_menu_init()
	{

			
		add_submenu_page('edit.php?post_type=resume', __('Help & Upgrade','menu-wpt'), __('Help & Upgrade','menu-wpt'), 'manage_options', 'resume_templates_paratheme_menu_help', 'resume_templates_paratheme_menu_help');

	}





?>