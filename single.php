<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1>This is a post</h1>
        <h2><a hr ef="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <hr>
    <?php endwhile;
else : ?>

<?php endif; ?>

<?php get_footer(); ?>