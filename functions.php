<?php
/**
 * Nova Supreme Elite - Functions
 * NOTE: Is file mein main premium fonts (Syne aur Inter) aur animation libraries (AOS) load karwa raha hoon.
 */

function novasupreme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'novasupreme_setup');

function novasupreme_scripts() {
    // Premium Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Syne:wght@400;700;800&display=swap', false);
    
    // AOS Animation CSS (For scroll effects)
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', false);
    
    // Tailwind CSS for rapid premium layouts
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);
    
    // AOS Animation JS
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
    
    // Main Stylesheet
    wp_enqueue_style('novasupreme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'novasupreme_scripts');
?>
