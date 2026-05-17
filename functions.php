<?php
/**
 * Nova Core Theme Functions
 * * NOTE: Ye file WordPress ko batati hai ke theme mein kya kya features support hote hain. 
 * Is file mein aapko aam taur par kuch change karne ki zaroorat nahi paregi jab tak aap advance developer na hon.
 */

function novacore_setup() {
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    
    // Adds support for post thumbnails (featured images)
    add_theme_support('post-thumbnails');
    
    // Adds support for custom logo upload in Customizer
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'novacore_setup');

// Enqueue Tailwind CSS via CDN for futuristic utility classes
function novacore_scripts() {
    // Calling Tailwind via CDN so you get the world's best styling without compiling!
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);
    
    // Loading the main style.css
    wp_enqueue_style('novacore-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'novacore_scripts');
?>
