<?php
/**
 * Single template - Staff
 *
 * @package Postali Parent
 * @author Postali LLC
 */

get_header();

$name = get_the_title(); 
$title = get_field('atty_title');
$email = get_field('email');
$phone = get_field('phone');
$vcard = get_field('vcard');
$quote = get_field('quote');
$bio = get_field('bio');
?>

<section id="panel1" class="short-hero" style="background-image: url('/wp-content/uploads/2020/06/about-header.jpg')">
    <div class="section-overlay">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <div class="columns">
                <div class="column-50 hero">
                    <h2>Our Legal Team</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="panel2">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <h1><?php echo $name . ', ' . $title; ?></h1>
            </div>
        </div>
        <div class="columns">
            <div class="column-50 bio_left">
                <div class="bio_left_image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="bio_left_contact">
                    <?php if($email) : ?><span class="contact-link"><span class="contact-link_icon email">&nbsp;</span><a class="email" href="mailto:<?php echo $email; ?>" title="<?php echo 'Email ' . $name; ?>"><?php echo $email; ?></a></span><?php endif; ?>
                    <?php if($phone) : ?><span class="contact-link"><span class="contact-link_icon phone">&nbsp;</span><a class="phone" href="tel:<?php echo $phone; ?>" title="<?php echo 'Call ' . $name; ?>"><?php echo $phone; ?></a></span><?php endif; ?>
                    <?php if($vcard) : ?><span class="contact-link"><span class="contact-link_icon vcard">&nbsp;</span><a class="vcard" href="<?php echo $vcard; ?>" title="<?php echo 'Contact ' . $name; ?>">Download vCard</a></span><?php endif; ?>
                </div>
            </div>
            <div class="column-50 bio_right">
                <div class="bio_right_quote">
                    <span class="bio-quote"><?php echo $quote; ?></span>
                </div>
                <div class="bio_right_content">
                    <h3>Bio</h3>
                    <?php echo $bio; ?>
                    <?php if(get_field('atty_practice_areas')) { ?>
                        <p><strong>Practice Areas</strong></p>
                        <p><?php the_field('atty_practice_areas'); ?></p>
                        <p>&nbsp;</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>