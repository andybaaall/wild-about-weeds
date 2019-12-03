<?php get_header(); ?>

<div class="container index-page-content">

    <?php $test = 'test'; ?>
    <!-- blog posts -->
    <div class="row">
        <?php
        $typePostargs = array(
            'post_type'         => 'post',
            'posts_per_page'    => 10
        );
        $typePost_query = new WP_Query( $typePostargs );
        ?>
        <?php if ( $typePost_query->have_posts() ): ?>
            <?php while ( $typePost_query->have_posts() ): ?>

                <?php $typePost_query->the_post();?>

                <div class="blog-preview-container col-12 col-md-3">
                    <h2>blog title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <br>
                    img
                </div>
                
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

<div class="row">
    <div></div>
</div>
