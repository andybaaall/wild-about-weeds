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

                <div class="col-12 col-md-4 my-4 blog-preview-container">
                    <h4 class="text-center type-colour mt-5"><?php the_title(); ?></h2>
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
                    <p class="type-colour"><?php the_excerpt(); ?></p>
                    <a class="btn btn-round type-colour hamburger-menu-dropdown-bg absolute-centered mb-5">See more</a>
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
