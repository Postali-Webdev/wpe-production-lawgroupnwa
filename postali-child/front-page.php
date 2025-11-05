<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();

$background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

<section class="home_hero" id="panel1" style="background-image: url('<?php echo $background_img[0]; ?>')">
    <div class="section-overlay">
        <div class="container">
            <div class="columns">
                <div class="column-50 hero">
                    <div class="hero_upper">
                        <div class="icon-holder"><img class="large-icon" src="/wp-content/uploads/2021/12/homepage-hero-icon-1.svg" alt="Law icon"></div>
                        <span class="headline"><?php the_field('hero_title'); ?></span>
                        <p class="desc"><?php the_field('intro'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="panel2" class="grey">
    <div class="container">
        <div class="columns">
            <div class="center-block">
                <div class="green-line-holder">
                    <span class="green-line">&nbsp;</span><h1><?php the_field('subtitle'); ?></h1><span class="green-line">&nbsp;</span>
                </div>
                <h2><?php the_field('main_title'); ?></h2>
            </div>
            <div class="column-50">
                <?php the_field('panel2_left'); ?>
            </div>
            <div class="column-50">
                <?php the_field('panel2_right'); ?>
                <?php $form = get_field('panel2_contact'); 
                echo do_shortcode($form); ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('block', 'awards'); ?>

<section id="panel3" class="white">
    <div class="container">
        <div class="columns narrow">
            <div class="centered">
                <h2><?php the_field('panel3_title'); ?></h2>
                <p><?php the_field('panel3_intro'); ?></p>
                <?php get_template_part('block', 'practice-areas'); ?>
                <?php if( is_page(5280) ) : ?> 
                    <a class="button practice-areas" href="/espanol/areas-de-practica/" title="Ver todas las áreas de práctica">Ver todas las áreas de práctica</a> 
                <?php else : ?>
                    <a class="button practice-areas" href="/practice-areas/" title="See All Practice Areas">See All Practice Areas</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="panel4" class="white">
    <div class="container">
        <div class="columns">
            <div class="column-full centered">
                <h2><?php the_field('panel4_title'); ?></h2>
                <p><?php the_field('panel4_intro'); ?></p>
                <?php if ( have_rows('panel4_images') ) : ?>
                    <div class="image-holder">
                        <?php while ( have_rows('panel4_images') ) : the_row(); 
                            $image = get_sub_field('p4_img'); ?>
                            <img class="comm-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="community-image">
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <div class="spacer-30">&nbsp;</div>
                <?php if ( have_rows('panel4_awards') ) : ?>
                    <div class="award-container">
                        <?php while ( have_rows('panel4_awards') ) : the_row(); 
                            $award = get_sub_field('p4_award'); 
                            $is_text_award = get_sub_field('is_text_based');
                            $text_award = get_sub_field('award_as_text');
                            ?>
                            <?php if ( !$is_text_award ) : ?>
                                <div class="award-holder">
                                    <img class="award" src="<?php echo esc_url($award['url']); ?>" alt="<?php echo esc_attr($award['alt']); ?>" class="community-image">
                                </div>
                            <?php else : echo "<div class='award-holder'><div class='award  text-award'>" . $text_award . "</div></div>"; endif;?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>