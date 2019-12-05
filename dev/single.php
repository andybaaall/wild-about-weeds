<?php get_header(); ?>

<?php if (have_posts() ): ?>
    <?php while ( have_posts(get_the_ID()) ): ?>
        <?php the_post(); ?>
        <div class="container">
            <h1><?php echo the_title(); ?></h1>
            <small><?php echo the_date(); ?></small>
            <?php echo the_content(); ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
