<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
$firm_info = is_tree(5280) || is_singular(['attorneys-espanol']) || is_singular(['espanolblogs']) || is_tax(['espanol_blog_category']) ? 'The Law Group of Northwest Arkansas LLP © Todos los derechos reservados' : 'The Law Group of Northwest Arkansas LLP © All Rights Reserved';
?>
</div> <!-- end site content -->
<footer>
    <div class="container footer centered">
        <div class="columns">
            <div class="column-33">
                <div class="footer-menu">
                    <nav role="navigation">
                    <?php
                    $args = array(
                        'container' => false,
                        'theme_location' => 'footer-nav'
                    );

                    if( is_tree(5280) || is_singular(['attorneys-espanol']) || is_singular(['espanolblogs']) || is_tax(['espanol_blog_category']) )  {
                        $args = array(
                            'container' => false,
                            'theme_location' => 'esp-footer-nav'
                        );
                    }
                    
                        wp_nav_menu( $args );
                    ?>	
                    </nav>		
                </div>
            </div>
            <div class="column-33">
                <div class="logo">
                <?php if( is_tree(5280) || is_singular(['attorneys-espanol']) || is_singular(['espanolblogs']) || is_tax(['espanol_blog_category']) ) : ?>
                    <a href="/espanol/">
                <?php else: ?>
                    <a href="/">
                <?php endif; ?>
                        <img src="/wp-content/uploads/2023/06/Logo-Transparency.png" alt="logo" height="80" width="320">
                    </a>
				</div>
                <div class="contact-holder social">
                    <a href="https://www.facebook.com/lawgroupnwa" target="_blank" title="Visit Facebook"><span class="icon icon-facebook">&nbsp;</span></a>
                    <a href="https://twitter.com/lawgroupnwa" target="_blank" title="Visit Twitter"><span class="icon icon-twitter">&nbsp;</span></a>
                    <a href="https://www.linkedin.com/company/the-law-group-of-northwest-arkansas-llp/" target="_blank" title="Visit Linkedin"><span class="icon icon-linkedin">&nbsp;</span></a>
                    <a href="https://www.instagram.com/tlgnwa/" target="_blank" title="Visit Instagram"><span class="icon icon-instagram">&nbsp;</span></a>
                </div>
                <?php if( have_rows('licensed_states', 'options') ) : 
                    $state_string = '<p>';
                    $count = 0; 
                    $total = count( get_field('licensed_states', 'options') );?>
                <div class="licensed-states">
                    <p>Licensed in:</p>
                    <?php while( have_rows('licensed_states', 'options') ) {
                        the_row(); 
                        $count++;
                        if( $count == $total ) {
                            $state_string .= ' & ';
                        }
                        $state_string .= get_sub_field('state_name');
                        if( $count !== $total ) {
                            $state_string .= ', ';
                        }
                    }
                    $state_string .= "</p>"; 
                    echo $state_string;?>
                </div>
                <?php endif; ?>
            </div>
            <div class="column-33">
                <div class="contact-holder">
                    <span class="icon icon-pin"></span><a class="address" href="<?php the_field('GMB_link', 'options'); ?>" target="_blank" title="Directions to <?php the_field('address', 'options'); ?>"><?php the_field('address', 'options'); ?></a>
                    <div class="iframe-container">
                        <iframe src="<?php echo esc_url( get_field('map_embed', 'options') ); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="column-full">
                <?php if(is_page_template('front-page.php')) { ?>
                <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag-reversed.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:0 auto 30px;"></a>
                <?php } ?>
            </div>
        </div>
    </div>

    <a href="#" class="to-top-btn"><span class="icon-page-up-icon"></span></a>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.callrail.com/companies/737842415/f23f86cfec74434a5450/12/swap.js"></script>
</body>
</html>


