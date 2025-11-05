<?php
/**
 * Template Name: About Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();

$background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

<section class="home_hero" id="panel1" style="background-image: url('<?php echo $background_img[0]; ?>')">
    <div class="section-overlay">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <div class="columns">
                <div class="column-66 hero">
                    <div class="hero_upper">
                        <div class="icon-holder">&nbsp;</div>
                        <h1><?php the_field('hero_title'); ?></h1>
                        <h2 class="desc-text"><?php the_field('intro'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="panel2" class="grey">
    <div class="container">
        <div class="columns narrow">
            <div class="column-50">
                <?php the_field('panel2_left'); ?>
            </div>
            <div class="column-50">
                <?php the_field('panel2_right'); ?>
            </div>
        </div>
    </div>
</section>

<section id="panel3" class="white">
    <div class="container">
        <div class="columns">
            <div class="column-66 centered">
                <h3><?php the_field('panel3_title'); ?></h3>
                <p><?php the_field('panel3_intro'); ?></p>
            </div>
            <div class="column-full center-block">
                <?php get_template_part('block', 'attorneys'); ?>
            </div>
        </div>
    </div>
</section>

<section id="contact-block" class="grey">
    <div class="container">
        <div class="columns">
            <div class="column-full center-block">
                <div class="green-line-holder">
                    <span class="green-line">&nbsp;</span><span class="subtitle">The Law Group of Northwest Arkansas</span><span class="green-line">&nbsp;</span>
                </div>
                <h2><?php the_field('contact_title'); ?></h2>
            </div>
            <div class="column-50">
                <p><?php the_field('contact_left'); ?></p>
            </div>
            <div class="column-50">
                <?php $shortcode = get_field('contact_form');
                echo do_shortcode($shortcode); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>