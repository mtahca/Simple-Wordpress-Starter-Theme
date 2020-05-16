<?php get_header(); ?>
<div class="container pt-5 pb-5">
<div class="row">
<div class="col-md-9">
<h1>archive.php</h1>
<h2 class="pb-5"><?php single_cat_title(); ?></h2>
<?php if (have_posts()) : while (have_posts()) : the_post() ?>
<h2><?php the_title(); ?></h2>
<div class="row">
<div class="col-md-2">
<?php if(has_post_thumbnail()):?>
	<img src="<?php the_post_thumbnail_url('small');?>" class="img-fluid pt-5 pb-5">
<?php endif; ?>
</div>
<div class="col-md-10">
<?php the_excerpt(); ?>
</div>
</div>
<a class="mb-5 d-block" href="<?php the_permalink(); ?>">Devamını Oku</a>
<?php endwhile; endif; ?></div>
<div class="col-md-3">
<?php get_sidebar(); ?>
</div>
</div>



</div>
<?php get_footer(); ?> 



