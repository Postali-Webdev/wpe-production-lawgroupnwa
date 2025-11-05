<?php
/**
 * Template Name: Espanol Blog
 * 
 * @package Postali Child
 * @author Postali LLC
 */

get_header(); 

global $wp_query;
$id = $wp_query->get_queried_object_id();

$args = array (
	'post_type' => 'espanolblogs',
	'post_per_page' => '10',
	'post_status' => 'publish',
	'order' => 'DESC',
	'paged' => $paged,
);
$wp_query = new WP_Query($args); ?>

<section id="panel1" class="short-hero">
    <div class="section-overlay">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <div class="columns">
                <div class="column-50 hero">
                    <h1>Legal Blog</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="panel2" class="posts">
    <div class="container">
        <div class="columns">
            <div class="column-full">
				<div class="interact-holder">
					<div class="interact-box" id="search">
						<p>Búsqueda</p>
						<?php get_search_form(); ?>
					</div>
					<div class="interact-box" id="category">
						<p>Categoría</p>
						<div id="app-cover">
							<div id="select-box">
								<input type="checkbox" id="options-view-button">
								<div id="select-button" class="brd">
									<div id="selected-value">
										<span class="filter-holder">Todos Los Mensajes</span>
									</div>
									<div id="chevrons">
										<span class="icon-tick-down"></span>
									</div>
								</div>
								<div id="options">
								<?php if( $terms = get_terms( array(
									'taxonomy' => 'espanol_blog_category', 
									'orderby' => 'name'
								) ) ) : ?>
									<div class="option">
										<a href="/espanol/blog/">Todos Los Mensajes</a>
									</div>
									<?php foreach ( $terms as $term ) : ?>
										<div class="option">
											<a href="/espanol/category/<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
										</div>
									<?php endforeach; ?>
									<?php endif; ?>
									<div id="option-bg"></div>
								</div>
							</div>
						</div> 
					</div>
				</div>
				<div class="spacer-60">&nbsp;</div>
				<div class="post-holder">
					<?php
					while ( have_posts() ) : the_post(); 
						$link = get_the_permalink();
						$title = get_the_title();
						$date = get_the_date();
						$terms = wp_get_post_terms( $post->ID, 'espanol_blog_category');
						?>
						<div class="card">
							<div class="card_img">
								<?php echo ( get_the_post_thumbnail() ?  get_the_post_thumbnail() : "<img src='/wp-content/uploads/2021/12/blog-placeholder-image.jpg' title='The Law Group Blog Image' width='780' height='385' />"); ?>
							</div>
                            <div class="card_content">
                                <div class="card_content_info">
									<div class="post-meta">
										<span><?php echo $date; ?></span>
										<span class="categories">Categoría: 
											<?php
											foreach ( $terms as $term ) {
												$term_link = get_term_link( $term );
												echo '<a href="' . $term_link . '">' . $term->name . ', </a>';
											} ?>
										</span>
									</div>
                                    <a class="post-title" href="<?php echo $link; ?>" title="Read <?php echo $title; ?>"><h2><?php echo $title; ?></h2></a>
									<p class="excerpt"><?php the_excerpt(); ?></p>
								</div>
								<a class="button arrow read-more" href="<?php echo $link; ?>" title="Read <?php echo $title; ?>">Lee Mas<span class="arrow-icon">&nbsp;</span></a>
                            </div>
						</div>

					<?php endwhile; ?>
				</div>
				<div class="pagination">
					<?php the_posts_pagination( array(
						'mid_size'  => 2,
						'prev_text' => __( '<span class="arrow-icon" id="prev">&nbsp;</span>', 'textdomain' ),
						'next_text' => __( '<span class="arrow-icon" id="next">&nbsp;</span>', 'textdomain' ),
					) ); ?>
				</div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
