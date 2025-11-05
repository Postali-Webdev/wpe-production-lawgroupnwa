<?php
/**
 * Template Name: Practice Area Parent
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
                <div class="column-66 hero">
                    <h1><?php the_field('subtitle'); ?></h1>
                    <h2><?php the_field('main_title'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if( get_field('panel2_left') || get_field('panel2_right') ) : ?>
<section id="panel2" class="grey">
    <div class="container">
        <div class="columns">
            <div class="column-50">
                <?php the_field('panel2_left'); ?>
            </div>
            <div class="column-50">
                <?php the_field('panel2_right'); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if( get_field('panel3_content') ) : ?>
<section id="panel3" class="white">
    <div class="container">
        <div class="columns">
            <div class="column-66 center-block">
                <?php the_field('panel3_content'); ?> <!-- WYSIWYG -->
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

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
                    <ul class="two-column">
                    <?php if ( have_rows('related_topics') ) : 
                        while ( have_rows('related_topics') ) : the_row();
                        $case = get_sub_field('case_type');
                        $link = get_sub_field('page_link');
                            if ( !empty($link) ) { ?>
                                <li><a class="case-list" href="<?php echo $link; ?>" title="<?php echo $case; ?>"><?php echo $case; ?></a></li>
                                <?php } else { ?>
                                    <li><span class="case-list"><?php echo $case; ?></span></li>
                                <?php } 
                            endwhile; 
                    endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if( get_field('panel4_content') ) : ?>
<section id="panel4" class="white">
    <div class="container">
        <div class="columns">
            <div class="column-66 center-block">
                <?php the_field('panel4_content'); ?> <!-- WYSIWYG -->
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php $include_process = get_field('include_court_process');
if ( $include_process == true ) : ?>
    <section id="court-process-block" class="grey"> <!-- Make this section optional -->
        <div class="container">
            <div class="columns">
                <div class="column-full centered">
                    <h3><?php the_field('process_title'); ?></h3>
                    <p><strong><?php the_field('process_subtitle'); ?></strong></p>
                    <div class="spacer-15">&nbsp;</div>
                    <div class="accordion-holder">
                        <?php if ( have_rows('steps') ) : 
                            $count = 1;
                            while ( have_rows('steps') ) : the_row(); 
                            $title = get_sub_field('step_title');
                            $description = get_sub_field('step_description'); ?>
                                <div class="accordion">
                                    <div class="accordion_title"><span class="title"><?php echo $count . '. ' . $title; ?></span><span class="plus"></span></div>
                                    <div class="accordion_content">
                                        <p><?php echo $description; ?></p>
                                    </div>
                                </div>
                            <?php $count++;
                            endwhile;
                        endif; ?>
                    </div>
                    <div class="spacer-30">&nbsp;</div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if( get_field('panel5_content') ) : ?>
<section id="panel5" class="white">
    <div class="container">
        <div class="columns">
            <div class="column-66 center-block">
                <?php the_field('panel5_content'); ?> <!-- WYSIWYG -->
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_template_part('block', 'contact'); ?>

<?php get_footer();?>