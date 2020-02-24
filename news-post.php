<?php
/*
 * Template name: News
 * Template post type: post
 */
?>
<?php get_header(); ?>

<div class="news-post__wrapper">
	<div class="container">
	<?php the_title( '<h1 class="main__title news__title">', '</h1>' ); ?>
<!--    <div class="news-post__date"><?php the_date('d F Y') ?></div>-->
    <div class="news-post__box text-center">
        <?php the_content(); ?>
    </div>
</div>
</div>

<?php get_footer(); ?> 