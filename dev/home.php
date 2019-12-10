<?php get_header(); ?>

<?php
$typePostArgs = array(
    'post_type'         => 'post',
);
$typePost_query = new WP_Query( $typePostArgs );
$postPage = get_post( get_option('page_for_posts') );
?>

<h3 class="text-center type-colour"><?php echo $postPage->post_title ?></h1>
<div class="text-center type-colour lead"><?php echo $postPage->post_content ?></div>

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

<?php get_footer(); ?>
