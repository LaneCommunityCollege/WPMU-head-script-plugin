<?php

/*
Plugin Name: Lane Mega-Menu
Plugin URI:
Description: Adds the Lane Mega Menu to the top of every blog in the network by inserting a bit of javascript to the head section.
Version: 1.0
Author: Matt Danskine, LaneCC
*/



add_action('wp_head','hook_javascript');

function hook_javascript() {
    // Pretty simple.  Just add the script you want inserted into the head section below.
    $output="<script src='//static.lanecc.net/mm/lmm.min.js'></script>";
    echo $output;
}




?>
