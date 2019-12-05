<?php get_header(); ?>

<div class="container">
    <?php
    $typePageArgs = array(
        'post_type'         => 'page',
    );
    $typePage_query = new WP_Query( $typePageArgs );
    ?>

    <?php if ( $typePage_query->have_posts() ): ?>
        <?php while ( $typePage_query->have_posts() ): ?>

            <?php $typePage_query->the_post();?>
            <h1><?php echo the_title(); ?></h1>
                <?php
                if(has_blocks()){
                    $allBlocks = parse_blocks( get_the_content() );
                    for ($i=0; $i < count($allBlocks); $i++) {
                        $block = $allBlocks[$i];
                        echo apply_filters( 'the_content', render_block( $block ) );
                    }
                };
                ?>
            </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
