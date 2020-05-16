
<?php

//Stil Dosyalarının Tanımlanması
function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts','load_stylesheets');

//Javascript Dosyalarının Tanımlanması
function load_scripts()
{
    wp_register_script('customjs', get_template_directory_uri() . '/main.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts','load_scripts');


//Klasik Editörü Kullan
add_filter('use_block_editor_for_post_type', '__return_false', 100);


//Menü Tanımlaması
add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

//Öne Çıkan Görsel Tanımlanması
add_theme_support('post-thumbnails');
add_image_size('small',150,150, true);
add_image_size('medium',500,281, false);
add_image_size('large',1200,674, false);

//Sidebar Widget Alanı Tanımlaması
register_sidebar (
    array(
        'name' => 'Primary Sidebar',
        'id' => 'primary',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

//Google Analytics
add_action('wp_head','teknofikir_analytics', 20);
 
function teknofikir_analytics() {
?>
<script>
<?php echo get_theme_mod('mf-analytics') ?>
</script>
 
<?php
}

// Tema Özelleştirmesi İçin customizer dosyasını çağırıyoruz
include('customizer.php');