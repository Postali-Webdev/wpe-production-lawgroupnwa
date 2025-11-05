<?php
/**
 * 404 Page Not Found.
 *
 * @package Postali Child
 * @author Postali LLC
**/
get_header();

$background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
if ( !empty($background_img) ) { ?>
    <section id="panel1" style="background-image: url('<?php echo $background_img[0]; ?>')">
<?php } else { ?>
    <section id="panel1" style="background-image: url('/wp-content/uploads/2017/06/business-law-photo.jpg')">
<?php } ?>
        <div class="section-overlay">
            <div class="container">
                <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
                <div class="columns">
                    <div class="column-50 hero">
                        <h1>Page Not Found</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="panel1">
    <div class="container">
        <div class="columns">
            <div class="column-75 centered">
                <span class="numbers">404</span>
                <p>We can’t seem to find the page you were looking for. If you typed in the url, double check that you spelled everything correctly. Otherwise, let’s head back to the <a href="/" title="visit homepage">homepage</a>.</p>
            </div>
        </div>
    </div>
</section>


<?php get_footer();