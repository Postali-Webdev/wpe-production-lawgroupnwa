<?php
/**
 * Single Espanol Post
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
                    <span class="categories">Categoría: 
                        <?php $terms = wp_get_post_terms( $post->ID, 'espanol_blog_category');
                        foreach ( $terms as $term ) {
                            $term_link = get_term_link( $term );
                            echo '<a href="' . $term_link . '">' . $term->name . ', </a>';
                        } ?>
                    </span>
                    <?php if( get_field('add_author') === true ) :  ?>
                        <div class="author">
                            <span>Escrito Por <?php the_field('authors_name'); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
                <?php the_content(); ?> <!-- WYSIWYG -->
            </div>
        </div>
    </div>
</section>

<?php get_footer();