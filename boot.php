<?php
/**
 * ------------------------------------------------------------------------------------
 * boot.php
 * ------------------------------------------------------------------------------------
 *
 * @package Websublime
 * @author 	Miguel Ramos <miguel.marques.ramosgmail.com>
 * @link 	https://www.websublime.com
 * @version 0.3
 */
$autoloader = require __DIR__.'/vendor/autoload.php';

/**
 * Let's define our theme to use thru config files
 */
if(!defined('THEME')){
	define('THEME', strtolower(wp_get_theme()));
}

/**
 * The same thing, just shortcode.
 */
if(!defined('THEMEURL')){
	define('THEMEURL', get_bloginfo('template_url').'/');
}

/**
 * Constant shortcode to base url of site.
 */
if(!defined('BASEURL')){
	define('BASEURL', network_site_url().'/');
}

/**
 * Directory Separator constant
 */
if(!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

/**
 * Constant to define current directory theme
 */
if(!defined('THEMEPATH')){
	define('THEMEPATH', get_stylesheet_directory().DS);
}

/**
 * For debug porpuse.
 */
if(defined('WP_DEBUG') && WP_DEBUG){
	ini_set('include_path', ini_get('include_path'));

	if(file_exists(THEMEPATH.'ChromePhp.php')){
		include THEMEPATH.'ChromePhp.php';
	}
}

$autoloader->add('', THEMEPATH.'engine'.DS);
$autoloader->add('', THEMEPATH.'controllers'.DS);
$autoloader->add('', THEMEPATH.'library'.DS);

/* @end boot.php */
