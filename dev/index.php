<?php get_header(); ?>

<div class="container page-content overflow-scroll">
    <div class="row top-level-blogs-container">
        <?php
        $typePostArgs = array(
            'post_type'         => 'post',
            'posts_per_page'    => 10
        );
        $typePost_query = new WP_Query( $typePostArgs );
        ?>
    </div>
    <div class="card-group">
        <?php if ( $typePost_query->have_posts() ): ?>
            <?php while ( $typePost_query->have_posts() ): ?>

                <?php $typePost_query->the_post();?>
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
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

        <!-- services -->
        <?php
        $typeServiceArgs = array(
            'post_type'         => 'service',
        );
        $typeService_query = new WP_Query( $typeServiceArgs );
        ?>
        <?php if ( $typeService_query->have_posts() ): ?>
            <h3 class="text-center type-colour mt-4">Our Services:</h3>
            <div class="row dividers-parent">
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
            <?php endif; ?>
        </div>

        <!-- static pages --->
        <?php
        $typePageArgs = array(
            'post_type'         => 'page',
        );
        $typePage_query = new WP_Query( $typePageArgs );
        ?>

        <?php if ( $typePage_query->have_posts() ): ?>
            <?php while ( $typePage_query->have_posts() ): ?>
                <?php $typePage_query->the_post();?>
                <h4><?php echo the_title(); ?></h4>
                <?php
                if(has_blocks()){
                    $allBlocks = parse_blocks( get_the_content() );
                    for ($i=0; $i < count($allBlocks); $i++) {
                        $block = $allBlocks[$i];
                        echo apply_filters( 'the_content', render_block( $block ) );
                    }
                };
                ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>

    <?php get_footer(); ?>


</div> <!-- container -->
<?php get_footer(); ?>
