
<?php
/**
* Plugin Name: Fancybox For Wordpress
* Description: Just a compilation of Fancybox jquery plugin: http://fancybox.net/
* Version: 1.0.0
* Author: Elizeu Oliveira da Silva
**/

add_action('wp_enqueue_scripts', 'load_scripts');

function load_scripts(){
    //Add css
    wp_enqueue_style( 'fancybox',plugins_url( '/fancybox/jquery.fancybox-1.3.4.css',  __FILE__ ) );

    //Add js
    wp_enqueue_script( 'fancybox', plugin_dir_url('/fancybox/jquery.fancybox-1.3.4.js', __FILE__ ) , true );
}



