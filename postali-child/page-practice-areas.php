<?php
/**
 * Template Name: Practice Areas
 * @package Postali Child
 * @author Postali LLC
**/
get_header();

$background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

<section id="panel1" style="background-image: url('<?php echo $background_img[0]; ?>')">
    <div class="section-overlay">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <div class="columns">
                <div class="column-50 hero">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="panel2" class="white">
    <div class="container">
        <div class="columns">
            <div class="center-block">
                <div class="intro-holder">
                    <?php the_content(); ?>
                </div>
                <?php get_template_part('block', 'practice-areas'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>