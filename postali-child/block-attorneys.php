<div class="attorney-holder attorneyBios">
    <?php 
    $post_type = is_tree(5280) ? 'attorneys-espanol' : 'attorneys';
    $args = array (
        'post_type' => $post_type,
        'post_per_page' => '10',
        'post_status' => 'publish',
        'order' => 'DESC',
        'paged' => $paged,
    );
    $wp_query = new WP_Query($args);
    if ( have_posts($wp_query) ):
        while ( have_posts( $wp_query ) ) : the_post($wp_query); 
            $link = get_the_permalink();
			$name = get_the_title();
            $role = get_field('atty_title');
            $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            $headshot = $img[0];
            $practice_areas = get_field('atty_practice_areas'); ?>
            
            <div class="card-background attorney box" style="background-image: url('<?php echo $headshot; ?>')">
                <div id="overlay">
                    <span class="name-title"><?php echo $name . '<br>' . $role; ?></span>
                    <span class="bio-details"><p><?php echo $practice_areas; ?></p></span>
                    <a class="green-button button arrow" href="<?php echo $link; ?>" title="Read <?php echo $name; ?>'s Bio'">Read Bio</a>
                </div>
                <div class="bottomContent">
                    <span class="name"><?php echo $name; ?></span>
                    <span class="title"><?php echo $role; ?></span>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>
</div>