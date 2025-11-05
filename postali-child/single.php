<?php
/**
 * Single Post
 * @package Postali Child
 * @author Postali LLC
**/
get_header(); ?>

<section id="panel1" class="short-hero">
    <div class="section-overlay">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <div class="columns">
                <div class="column-50 hero">
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="panel2" class="white">
    <div class="container">
        <div class="columns">
            <div class="column-75 center-block">
                <div class="spacer-60">&nbsp;</div>
                <?php the_post_thumbnail(); ?>
                <h1><?php the_title(); ?></h1>
                <div class="post-meta">
                    <?php $date = get_the_date(); ?>
                    <span><?php echo $date; ?></span>
                    <span class="categories">Categories: 
                        <?php $terms = wp_get_post_terms( $post->ID, 'category');
                        foreach ( $terms as $term ) {
                            $term_link = get_term_link( $term );
                            echo '<a href="' . $term_link . '">' . $term->name . ', </a>';
                        } ?>
                    </span>
                    <?php if( get_field('add_author') === true ) :  ?>
                        <div class="author">
                            <span>Written By <?php the_field('authors_name'); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
                <?php the_content(); ?> <!-- WYSIWYG -->
                <div class="blog-disclaimer">
                    <p><strong>Disclaimer:</strong> The Law Group of Northwest Arkansas PLLC (TLGNWA) provides general information about a variety of legal issues on this website as a public service. Information contained herein should not be considered legal advice on any specific matter. The use of information and reference links contained in this website do not constitute contractual, de facto, implied or any other form of attorney-client privilege or relationship. TLGNWA is not responsible for the use of information, forms, links, or documents contained in this website.</p>
                    <p>Due to the frequency and speed of changing laws, no guarantee is made as to the current validity or applicability of the information contained herein. Though we try to update information often, we recommend that readers with questions investigate current law or contact TLGNWA directly through our contact form or by calling <a href="tel:479-334-3411">(479) 334-3411</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();