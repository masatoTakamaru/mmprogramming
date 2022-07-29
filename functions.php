<?php 

function theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

function enqueue_scripts() {
    wp_enqueue_style('main-css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function widgetarea_init() {
    register_sidebar(array(
        'name'=>'サイドバー',
        'id' => 'side-widget',
        'before_widget'=>'<div id="%1$s" class="%2$s sidebar-wrapper">',
        'after_widget'=>'</div>',
        'before_title' => '<h4 class="sidebar-title">',
        'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'widgetarea_init' );
  