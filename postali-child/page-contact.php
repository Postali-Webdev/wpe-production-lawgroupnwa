<?php
/**
 * Template Name: Contact
 * @package Postali Child
 * @author Postali LLC
**/
get_header();

$background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

<section id="panel1" class="short-hero" style="background-image: url('<?php echo $background_img[0]; ?>')">
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
        <div class="columns contact-holder">
            <div class="column-25 contact centered">
                <span class="contact_icon" id="address">&nbsp;</span>
                <span class="contact_title">Address</span>
                <a href="<?php the_field('GMB_link', 'options'); ?>" target="_blank" title="Directions to <?php the_field('address', 'options'); ?>"><?php the_field('address', 'options'); ?></a>
            </div>
            <div class="column-25 contact centered">
                <span class="contact_icon" id="phone">&nbsp;</span>
                <div><span class="contact_title double label">Phone:  </span><a class="double" href="tel:<?php the_field('phone', 'options'); ?>" title="Call <?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a></div>
                <div><span class="contact_title double">Fax:  </span><span class="double no-link"><?php the_field('fax', 'options'); ?></span></div>
            </div>
            <div class="column-25 contact centered">
                <span class="contact_icon" id="email">&nbsp;</span>
                <span class="contact_title">Email</span>
                <a href="mailto:<?php the_field('email', 'options'); ?>" target="_blank" title="Email <?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
            </div>
            <div class="column-25 contact centered">
                <span class="contact_icon" id="hours">&nbsp;</span>
                <span class="contact_title">Working Hours</span>
                <span class="no-link"><?php the_field('hours', 'options'); ?></span>            
            </div>
        </div>
    </div>
</section>

<section id="panel3" class="white">
    <div class="container">
        <div class="columns">
            <div class="center-block">
                <h2><?php echo is_tree(5280) ? 'Solicitar una consulta' : 'Request a Consultation'; ?><h2>
                <div class="form-intro">
                    <?php the_content(); ?>
                </div>
                <?php $shortcode = get_field('contact_form', 'options');
                echo do_shortcode($shortcode); ?>
            </div>
        </div>
    </div>
</section>

<section id="panel4">
    <div class="columns">
        <div class="column-full">
            <iframe src="<?php echo esc_url( get_field('map_embed', 'options') ); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>    
</section>

<?php get_footer();?>