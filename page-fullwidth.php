<?php 
/*
Template Name: Tam Genişlik
*/
get_header(); ?>
<div class="full-width p-5">
<h1>page-fullwidth.php</h1>
<h1><?php the_title(); ?></h1>
<?php if (have_posts()) : while (have_posts()) : the_post() ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?> 