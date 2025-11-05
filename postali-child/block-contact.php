<?php
$sub_title = is_tree(5280) || is_singular(['attorneys-espanol']) || is_singular(['espanolblogs']) || is_tax(['espanol_blog_category']) ? 'El Grupo Legal Del Noroeste De Arkansas' : 'The Law Group of Northwest Arkansas';
?>
<section id="contact-block" class="grey">
    <div class="container">
        <div class="columns">
            <div class="column-full center-block">
                <div class="green-line-holder">
                    <span class="green-line">&nbsp;</span><span class="subtitle"><?php esc_html_e($sub_title); ?></span><span class="green-line">&nbsp;</span>
                </div>
                <h2><?php ( is_page_template('page-about.php') ? the_field('contact_section_title') : the_field('contact_title') ); ?></h2>
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