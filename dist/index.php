<?php get_header(); ?>

<div class="container index-page-content">

    <?php $test = 'test'; ?>
    <!-- blog posts -->
    <div class="row">
        <div class="col">
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

                    <div class="card blogCard">
                        <h5 class="card-header"><?php the_title(); ?></h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
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
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<div class="row">
    <div></div>
</div>
