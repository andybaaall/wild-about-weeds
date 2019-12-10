<?php
/*
Template Name: Services Template
Template Post Type: page
*/
?>

<?php get_header(); ?>

<h3 class="text-center type-colour "><?php echo the_title();  ?></h1>
    <div class="container page-content overflow-unset">
        <div class="row dividers-parent">
            <?php
            $typeServiceArgs = array(
                'post_type'         => 'service',
            );
            $typeService_query = new WP_Query( $typeServiceArgs );
            ?>

            <?php if ( $typeService_query->have_posts() ): ?>
                <?php while ( $typeService_query->have_posts() ): ?>

                    <?php $typeService_query->the_post();?>
                    <div class="row divider d-flex justify-content-center">

                        <div class="col">
                            <h5><?php echo the_title(); ?></h5>
                            <br>
                            <small><?php echo get_post_meta(get_the_ID(), 'wildWeeds_servicePricing', true) ?></small>
                        </div>
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

    </div>

    <?php get_footer(); ?>
