<?php
/*
Plugin Name: Hardiks BMI Calculator
Plugin URI: www.yourwebsitename.com
Author: Hardik Chavada
Version: 1.0
Description: This is a BMI Calculator Plugin
*/

// REGISTER STYLES AND SCRIPT FILES

function register_my_scripts() {
    // for adding style.css
    wp_enqueue_style("style.css", plugin_dir_url( __FILE__ )."assets/style.css" );

    // will add script.js file
    wp_enqueue_script( "script.js", plugin_dir_url( __FILE__ )."assets/script.js", array(), "1.0", true);

}
add_action("init", "register_my_scripts");


// I will create a shortcode function and include the BMI calculator inside the function

//add shortcode function

function add_my_bmi_shortcode(){
    ob_start();
    include_once plugin_dir_path(__FILE__)."bmi-form.php";
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}
add_shortcode("my-shortcode", "add_my_bmi_shortcode");
// you can add any shortcode text of your choice. I have added my-shortcode

//You can add the shortcode on page/post of your choice





?>