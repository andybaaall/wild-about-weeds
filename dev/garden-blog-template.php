<?php
/*
Template Name: Garden Blog Template
Template Post Type: page
*/
?>

<?php get_header(); ?>

<h3 class="text-center type-colour page-content">Garden Blog</h1>

    <div class="container page-content">
        <div class="row top-level-blogs-container">
            <?php
            $typePostArgs = array(
                'post_type'         => 'post',
            );
            $typePost_query = new WP_Query( $typePostArgs );
            ?>
            <div class="card-group">
                <?php if ( $typePost_query->have_posts() ): ?>
                    <?php while ( $typePost_query->have_posts() ): ?>
                        <?php $typePost_query->the_post(); ?>
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
            </div>r
        </div>
    </div>
</div>


<?php get_footer(); ?>
