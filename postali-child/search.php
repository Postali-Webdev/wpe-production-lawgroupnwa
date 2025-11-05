<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); ?>

<section id="panel1" class="short-hero">
    <div class="section-overlay">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <div class="columns">
                <div class="column-50 hero">
                    <h2>Search Results</h2>
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
						<p>Search</p>
						<?php get_search_form(); ?>
					</div>
				</div>
				<div class="spacer-60">&nbsp;</div>
				<div class="post-holder">
					<?php
					while ( have_posts() ) : the_post(); 
						$link = get_the_permalink();
						$title = get_the_title();
						$date = get_the_date();
						$terms = wp_get_post_terms( $post->ID, 'category');
						?>
						<div class="card">
							<div class="card_img">
								<?php the_post_thumbnail(); ?>
							</div>
                            <div class="card_content">
                                <div class="card_content_info">
									<div class="post-meta">
										<span><?php echo $date; ?></span>
										<span class="categories">Categories: 
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
								<a class="button arrow read-more" href="<?php echo $link; ?>" title="Read <?php echo $title; ?>">Read More<span class="arrow-icon">&nbsp;</span></a>
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