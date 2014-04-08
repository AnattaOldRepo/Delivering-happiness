<?php
/*
Plugin Name: Shortcode Support in Text Widgets
Plugin URI: http://anattadesign.com/
Description: This plugin simply adds the shortcode support to the wordpress text widgets.
Author: Mridul Aggarwal
Version: 1.0
Author URI: http://anattadesign.com/
*/

add_filter('widget_text', 'do_shortcode', 20);
