<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/

$header_location =  is_tree(5280) || is_singular(['attorneys-espanol']) || is_singular(['espanolblogs']) || is_tax(['espanol_blog_category']) ? 'esp-header-nav' : 'header-nav';

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<?php if (has_post_thumbnail()) {
    $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
    echo '<link rel="preload" as="image" href="'.$attachment_image.'">';
    echo '<link rel="preload" as="image" href="'.$attachment_image.'.webp">';
} ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PWQ55MX');</script>
<!-- End Google Tag Manager -->

<!-- Add JSON Schema here -->
<?php 
// Global Schema
$global_schema = get_field('global_schema', 'options');
if ( !empty($global_schema) ) :
    echo '<script type="application/ld+json">' . $global_schema . '</script>';
endif;

// Single Page Schema
$single_schema = get_field('single_schema');
if ( !empty($single_schema) ) :
    echo '<script type="application/ld+json">' . $single_schema . '</script>';
endif; ?>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1186342318863681');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1186342318863681&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWQ55MX"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

    <a class="skip-link" href='#main-content'>Skip to Main Content</a>

	<header>
		<div class="above-header mobile_accordion">
			<div class="mobile_accordion_title"><span class="superheader-title">See Contact Info</span></div>
			<div class="container superheader mobile_accordion_content">
				<div class="superheader_left">
					<span class="icon icon-pin">&nbsp;</span><a href="<?php the_field('GMB_link', 'options'); ?>" title="Directions to <?php the_field('address', 'options'); ?>"><?php the_field('address', 'options'); ?></a>
				</div>
				<div class="superheader_right">
					<div class="contact-holder">
						<span class="icon icon-phone">&nbsp;</span><a href="tel:<?php the_field('phone', 'options'); ?>" title="Call <?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a>
					</div>
					<div class="contact-holder">
						<span class="icon icon-email">&nbsp;</span><a href="mailto:<?php the_field('email', 'options'); ?>" title="Email <?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
					</div>
					<div class="contact-holder social">
						<a href="https://www.facebook.com/lawgroupnwa" target="_blank" title="Visit Facebook"><span class="icon icon-facebook">&nbsp;</span></a>
						<a href="https://twitter.com/lawgroupnwa" target="_blank" title="Visit Twitter"><span class="icon icon-twitter">&nbsp;</span></a>
						<a href="https://www.linkedin.com/company/the-law-group-of-northwest-arkansas-llp/" target="_blank" title="Visit Linkedin"><span class="icon icon-linkedin">&nbsp;</span></a>
						<a href="https://www.instagram.com/tlgnwa/" target="_blank" title="Visit Instagram"><span class="icon icon-instagram">&nbsp;</span></a>
					</div>
				</div>
			</div>
			<div class="translate-btns">
				<?php if( is_tree(5280) || is_singular(['attorneys-espanol']) || is_singular(['espanolblogs']) || is_tax(['espanol_blog_category']) ) : ?>
					<a href="<?php echo ( get_field('english_version') ? get_field('english_version') : '/'); ?>">In English</a>
				<?php elseif( is_home() ) : ?>
					<a href="<?php echo ( get_field('spanish_version', 72) ? get_field('spanish_version', 72) : '/espanol/'); ?>">En Espanol</a>
				<?php else : ?>
					<a href="<?php echo ( get_field('spanish_version') ? get_field('spanish_version') : '/espanol/'); ?>">En Espanol</a>
				<?php endif; ?>
			</div>
		</div>
		<div id="header-top" class="container">
			<div id="header-top_left">
				<?php //the_custom_logo(); ?>
				<div class="logo">
				<?php if( is_tree(5280) || is_singular(['attorneys-espanol']) || is_singular(['espanolblogs']) || is_tax(['espanol_blog_category']) ) : ?>
					<a href="/espanol/">
				<?php else: ?>
					<a href="/">
				<?php endif; ?>
						<img src="/wp-content/uploads/2023/06/Logo-Transparency.png" alt="logo" height="80" width="320">
					</a>
				</div>		
			</div>
			
			<div id="header-top_right">
				<div id="header-top_menu">
                    <nav role="navigation">
						<?php
							$args = array(
								'container' => false,
								'theme_location' => $header_location
							);
							wp_nav_menu( $args );
						?>		
                    </nav>	
					<div class="head-search"><?php get_search_form(); ?></div>
					<div id="header-top_mobile">
						<div id="menu-icon">
							<a href="#" class="closed"><hr><hr><hr></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php //endif; ?>

    <span id="main-content"></span>

	<div id="content" class="site-content">
