<?php get_header(); ?>
<p>yo i'm page php</p>

<?php if (have_posts() ): ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
        <div class="container page-content overflow-unset">
            <h1><?php echo the_title(); ?></h1>
            <small><?php echo the_date(); ?></small>
            <?php echo the_content(); ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
