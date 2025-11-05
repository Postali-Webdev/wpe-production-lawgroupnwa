<?php
/**
 * Template Name: Sitemap
 *
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
                    <div class="column-50 hero">
                        <h1>Sitemap</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="panel2">
    <div class="container">
        <div class="columns">
            <div class="column-75 center-block">
                <h3>Pages</h3> 
                <ul>
                    <?php wp_list_pages("title_li=" ); ?>
                </ul> 
                <div class="spacer-60">&nbsp;</div>
                <h3>Blog Posts</h3> 
                <ul>
                    <?php wp_get_archives('type=postbypost'); ?>
                </ul>
			</div>
        </div>
    </div>
</section>

<?php get_footer();
