<?php if ( have_rows( 'awards_repeater', 'options' ) ): ?>
<section id="awards-panel" class="black">
    <div class="container">
        <div class="columns narrow">
            <div class="column-full centered">
                <div class="awards-holder slides">
                <?php while ( have_rows( 'awards_repeater', 'options' ) ): the_row(); 
                    $award = get_sub_field( 'award' );
                    $url = $award['url'];
                    $alt = $award['alt']; 
                    $link = get_sub_field('award_link');?>
                    <div class="award">
                        <?php echo ( get_sub_field('award_link') ? "<a href='{$link}' title='award link' target='_blank'/>" : "" ); ?>
                            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
                        <?php echo ( get_sub_field('award_link') ? "</a>" : "" ); ?>

                        <?php echo ( get_sub_field('award_link') ? "<a href='{$link}' title='award link' target='_blank'/>" : "" ); ?>
                            <?php echo ( $award ? "<p class='award-sub-text'>" : "<div class='text-based-award'>" ); ?>
                                <?php the_sub_field('award_text'); ?>
                            <?php echo ( $award ? "</p>" : "</div>" ); ?>
                        <?php echo ( get_sub_field('award_link') ? "</a>" : "" ); ?>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>