<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    } ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<header class="top">
<div class="container pt-2">
<div class="logo"><a href="/"><img src="<?php echo wp_get_attachment_url(get_theme_mod('mf-logo')) ?>" alt="<?php bloginfo('name'); ?>"></a></div>
<nav>
<?php wp_nav_menu (
array(
    'theme_location' => 'top-menu',
    'menu_class' => 'navigation'
)); ?>
</nav>

</div>
</header>






