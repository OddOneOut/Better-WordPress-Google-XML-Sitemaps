<?php
/*
Plugin Name: BWP Google XML Sitemaps
Plugin URI: http://betterwp.net/wordpress-plugins/google-xml-sitemaps/
Description: A more lightweight Google XML Sitemap WordPress plugin that generates a <a href="http://en.wikipedia.org/wiki/Sitemap_index">Sitemap index</a> rather than a single sitemap. Despite its simplicity, it is still very powerful and has plenty of options to choose.
Version: 1.2.4
Text Domain: bwp-simple-gxs
Domain Path: /languages/
Author: Khang Minh
Author URI: http://betterwp.net
License: GPLv3 or later
*/

// In case someone integrates this plugin in a theme or calling this directly
if (class_exists('BWP_SIMPLE_GXS') || !defined('ABSPATH'))
	return;

// Pre-emptive
/* $bwp_gxs_ob_level = @ob_get_level(); */
/* $bwp_gxs_ob_start = ob_start(); */
$bwp_gxs_ob_start = false;

// init plugin
require_once dirname(__FILE__) . '/includes/class-bwp-simple-gxs.php';
$bwp_gxs_gzipped = !BWP_SIMPLE_GXS::is_gzipped() ? false : true;
$bwp_gxs = new BWP_SIMPLE_GXS();
