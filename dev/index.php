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
                    <?php echo 'post id is ' . $post->ID ?>
                    <br>
                    <?php echo the_title(); ?>
                    <?php
                    // $children = get_children( $post->ID );
                    // if ( !empty($children) ) {
                    //     echo 'this post has children (maybe images)';
                    // } else {
                    //     echo 'this post has no children (maybe images)';
                    // }

                    // print_r( get_children($post->ID) );

                    $images = get_posts(array(
                        'post_parent'    => $post->ID,
                        'post_type'      => 'attachment',
                        'post_mime_type' => 'image',
                        'post_status'    => 'inherit'
                    ));

                    if ($images) {
                        echo "post has images";
                    } else {
                        echo "post has no images";
                    }

                ?>
                <br>
                <br>

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
