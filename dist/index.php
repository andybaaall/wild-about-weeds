<?php get_header(); ?>

<div class="container page-content overflow-unset">
    <div class="card-group">
        <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ): ?>

                <?php the_post();?>

                <?php if (!is_singular()): ?>
                <div class="card card-width m-2">
                    <div class="card-body">
                        <h4 class="text-center type-colour"><?php the_title(); ?></h2>
                        <p class="type-color"><?php the_excerpt(); ?></p>
                        <div class="blog-preview-image-container">
                            <?php
                            if(has_blocks()){
                                $allBlocks = parse_blocks( get_the_content() );
                                for ($i=0; $i < count($allBlocks); $i++) {
                                    if($allBlocks[$i]['blockName'] == 'core/image'){
                                        $block = $allBlocks[$i];
                                        echo apply_filters( 'the_content', render_block( $block ) );
                                    }
                                }
                            };
                            ?>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-center align-items-center">
                        <a href="<?php the_permalink(); ?>" class="btn btn-round type-colour hamburger-menu-dropdown-bg">See more</a>
                    </div>
                </div> <!-- card -->
                <?php else: ?>
                <div class="card card-width m-2">
                    <div class="card-body">
                        <h4 class="text-center type-colour"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div> <!-- card -->
                <?php endif; ?> <!-- if ( is_singular()) -->
            <?php endwhile; ?> <!-- while ( have_posts() ) -->
        <?php endif; ?> <!-- if ( have_posts() ) -->
        <?php wp_reset_postdata(); ?>

    </div> <!-- card-group -->
</div> <!-- container -->
<?php get_footer(); ?>
