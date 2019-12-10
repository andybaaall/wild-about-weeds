<?php
/*
Template Name: Two-Column Template
Template Post Type: page
*/

// Block Types:
// core/audio
// core/button
// core/freeform (classic editor)
// core/code
// core/column
// core/columns
// core/cover (img with text overlay)
// core/file
// core/gallery
// core/group (nests child blocks)
// core/heading
// core/html
// core/image
// core/list
// core/media-text (text col beside an image)
// core/more (read more hr)
// core/navigation-link
// core/nextpage
// core/paragraph
// core/post-content (doesn't show in editor)
// core/post-title (doesn't show in editor)
// core/preformatted (plain text with option to transform)
// core/pullquote
// core/quote
// core/separator
// core/site-title (doesn't show in editor)
// core/social-links
// core/spacer
// core/subhead
// core/table
// core/template-part (templates access template parts ('blocks') with get_template_part() )
// core/text-columns
// core/verse
// core/video

$media = array(
    'core/audio ',
    'core/cover (img with text overlay)',
    'core/file',
    'core/gallery',
    'core/group (nests child blocks)',
    'core/image',
    'core/media-text (text col beside an image)',
    'core/video'
);
?>

<?php get_header(); ?>

<h3 class="text-center type-colour "><?php echo the_title();  ?></h1>
    <div class="container page-content overflow-unset">
        <?php
        if(has_blocks()){
            $allBlocks = parse_blocks( get_the_content() );
            for ($i=0; $i < count($allBlocks); $i++) {
                if($allBlocks[$i]['blockName'] == 'core/image' || ''){
                    $block = $allBlocks[$i];
                    echo apply_filters( 'the_content', render_block( $block ) );
                }
            }
        };
        ?>

        <div class="col">
            <!-- non-media elements -->
            <?php
            if(has_blocks()){
                while (has_blocks ()){

                }
                $allBlocks = parse_blocks( get_the_content() );
                for ($i=0; $i < count($allBlocks); $i++) {
                    if($allBlocks[$i]['blockName'] == 'core/image' || ''){
                        $block = $allBlocks[$i];
                        echo apply_filters( 'the_content', render_block( $block ) );
                    }
                }
            }; ?>

        </div>
        <div class="col">
            <!-- media elements -->
            <?php
            $allBlocks = parse_blocks( get_the_content() );
            for ($i=0; $i < count($allBlocks); $i++) {
                $blockname = $allBlocks[$i]['blockName'];
                if (in_array($media, $blockname)) {
                    $block = $allBlocks[$i];
                    echo apply_filters( 'the_content', render_block( $block ) );
                }
            }
            ?>
        </div>

    </div>

    <?php get_footer(); ?>
