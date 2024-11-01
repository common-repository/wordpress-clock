<?php
/*
Plugin Name: Wordpress Clock
Plugin URI: http://mervin.info/wordpress-clock
Description: Provides you with a wordpress clock shortcode [ wpclock ] and Wordpress Clock widget.
Version: 1.1
Author: Mervin Praison
Author URI: http://mervin.info
*/

function wordclock() {

$clockcode = "<style type='text/css'>" ;
$clockcode .= "#clock {	width: 200px; height: 200px; }";
$clockcode .= "</style>";

$clockcode .= "<script type='text/javascript' src='http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js'> flashembed('clock', '/swf/clock.swf');</script> ";
$clockcode .= "<div id='clock'></div>";
$clockcode .= "<script type='text/javascript'> $(document).ready(flashembed('clock', '".plugins_url( 'swf/clock.swf' , __FILE__ )."')) </script>";

return $clockcode;
}

add_shortcode('wpclock', 'wordclock');

function wordclockwidget() {
echo wordclock();
}

wp_register_sidebar_widget(
    'word_clock_1',        // your unique widget id
    'Wordpress Clock',          // widget name
    'wordclockwidget',  // callback function
    array(                  // options
        'Description' => 'Displays a smart clock at your sidebar as a widget'
    )
);
?>