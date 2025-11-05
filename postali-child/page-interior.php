<?php
/**
 * Template Name: Interior Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();

$background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
if ( !empty($background_img) ) { ?>
    <section id="panel1" class="short-hero" style="background-image: url('<?php echo $background_img[0]; ?>')">
<?php } else { ?>
    <section id="panel1" class="short-hero" style="background-image: url('/wp-content/uploads/2017/06/business-law-photo.jpg')">
<?php } ?>
        <div class="section-overlay">
            <div class="container">
                <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
                <div class="columns">
                    <div class="column-66 hero">
                        <h1><?php the_field('h1_title'); ?></h1>
                        <?php $subtitle = get_field('subtitle');
                            if ( !empty($subtitle) ) : ?>
                                <h2><?php echo $subtitle; ?></h2>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="panel2" class="white">
    <div class="container">
        <div class="columns">
            <div class="column-66 center-block">
                <?php the_content(); ?> <!-- WYSIWYG -->
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>