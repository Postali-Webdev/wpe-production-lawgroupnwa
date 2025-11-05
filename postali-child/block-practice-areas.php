<?php if ( have_rows( 'practice_areas', 'options') ) : 
    $total = count(get_field('practice_areas', 'options'));
    $count = 0;?>

    <div class="pa-holder">
        <?php while ( have_rows( 'practice_areas', 'options' ) ) : the_row(); $count++;
            $title = get_sub_field('title', );
            $desc = get_sub_field('description');
            $link = get_sub_field('link');
            $img = get_sub_field('image');
            $url = $img['url'];
            $alt = $img['alt'];
            $addHP = get_sub_field('add_to_homepage');

            $esp_title = get_sub_field('spanish_title');
            $esp_desc = get_sub_field('spanish_description');
            $esp_link = get_sub_field('spanish_link');
            $esp_btn_txt = get_sub_field('spanish_button_text');
            $esp_addHP = get_sub_field('spanish_add_to_homepage');

            if ( is_page(2151) ) : 
                if ( $addHP == true ) { ?>
                    <div class="card-background hp-card " style="background-image: url('<?php echo esc_url($url); ?>')">
                        <div class="card overlay">
                            <div class="card_content">
                                <div class="card_content_info">
                                    <h2><?php echo $title; ?></h2>
                                    <p><?php echo $desc; ?></p>
                                </div>
                                <a class="button arrow" href="<?php echo $link; ?>" title="<?php echo $title; ?>">Learn More About <?php echo $title; ?></a>
                            </div>
                        </div>
                    </div>
                <?php } else { } // end first if 
            elseif( is_page(5280) || is_singular(['attorneys-espanol']) ) : ?>
            <?php if ( $esp_addHP == true ) { ?>
                <div class="card-background hp-card" style="background-image: url('<?php echo esc_url($url); ?>')">
                    <div class="card overlay">
                        <div class="card_content">
                            <div class="card_content_info">
                                <h2><?php echo $esp_title; ?></h2>
                                <p><?php echo $esp_desc; ?></p>
                            </div>
                            <a class="button arrow" href="<?php echo $esp_link; ?>" title="<?php echo $esp_btn_txt; ?>"><?php echo $esp_btn_txt; ?></a>
                        </div>
                    </div>
                </div>
            <?php } else { } // end first if 
            elseif( is_tree(5280) && !is_page(5280) ) : ?>
                <div class="card-background hp-card non-gradient-card">
                    <div class="card overlay">

                        <div class="card_image" style="background-image: url('<?php echo esc_url($url); ?>')"></div>
                        <div class="card_content">
                            <div class="card_content_info">
                                <h2><?php echo $esp_title; ?></h2>
                                <p><?php echo $esp_desc; ?></p>
                            </div>
                            <a class="button arrow" href="<?php echo $esp_link; ?>" title="<?php echo $esp_btn_txt; ?>">Lee Mas</a>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="card-background hp-card non-gradient-card">
                    <div class="card overlay">

                        <div class="card_image" style="background-image: url('<?php echo esc_url($url); ?>')"></div>
                        <div class="card_content">
                            <div class="card_content_info">
                                <h2><?php echo $title; ?></h2>
                                <p><?php echo $desc; ?></p>
                            </div>
                            <a class="button arrow" href="<?php echo $link; ?>" title="<?php echo $title; ?>">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>