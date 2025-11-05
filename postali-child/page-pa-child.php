<?php
/**
 * Template Name: Practice Area Child
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
                    <h1><?php the_field('main_title'); ?></h1>
                    <h2><?php the_field('subtitle'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="panel2" class="white">
    <div class="container">
        <div class="columns">
            <div class="column-66 center-block">
                <?php the_field('panel2_content'); ?> <!-- WYSIWYG -->
            </div>
        </div>
    </div>
</section>

<?php $include_related = get_field('include_related_cases');
if ( $include_related == true ) : ?>
    <section id="related-cases-block" class="black"> <!-- Make this section optional -->
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <h3><?php the_field('related_title'); ?></h3>
                    <p><?php the_field('related_intro'); ?></p>
                </div>
                <div class="column-50">
                    <?php if ( have_rows('related_topics') ) : 
                        while ( have_rows('related_topics') ) : the_row();
                        $case = get_sub_field('case_type');
                        $link = get_sub_field('page_link');
                            if ( !empty($link) ) { ?>
                                <a class="case-list" href="<?php echo $link; ?>" title="<?php echo $case; ?>"><?php echo $case; ?></a>
                                <?php } else { ?>
                                    <span class="case-list"><?php echo $case; ?></span>
                                <?php } 
                            endwhile; 
                    endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section id="panel3" class="white">
    <div class="container">
        <div class="columns">
            <div class="column-66 center-block">
                <?php the_field('panel3_content'); ?> <!-- WYSIWYG -->
            </div>
        </div>
    </div>
</section>

<?php get_template_part('block', 'contact'); ?>

<?php get_footer();?>