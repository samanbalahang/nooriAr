<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= get_template_directory_uri()  ?>/assets/css/mine.css">
	<?php if(is_front_page()) { ?>
	<link rel="stylesheet" href="<?= get_template_directory_uri()  ?>/assets/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri()  ?>/assets/css/swiper-init.css">
	<?php 
	$image1 = get_field("firstsiler");
	$image2 = get_field("secsilder");
	$image3 = get_field("thirdsilder");
	
	
	?>
	<style>
		.first-slider{
			background: url(<?php echo esc_url($image1['url']); ?>);
		}
		.second-slider{
			background: url(<?php echo esc_url($image2['url']); ?>);
		}
		.third-slider{
			background: url(<?php echo esc_url($image3['url']); ?>);
		}
		.home-slider{
			background-size:cover !important;
			background-position:bottom center !important;
			width: 100%;
			min-height: 100vh;
		}
		.home-slider .content h1,
		.home-slider .content h2,
		.home-slider .content h3,
		.home-slider .content h4,
		.home-slider .content h5,
		.home-slider .content h6
		{
			color: #ffffff;
		}
	</style>
	<?php } ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>
	<header id="masthead" class="site-header d-flex justify-content-between align-items-center fixed-top" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="logo">
			<?= "<a href=" . esc_url(home_url('/')) . ">" . get_custom_logo() . "</a>"; ?>
		</div>
		<div class="d-block d-md-none bars-parent">
			<span class="bars">
				&equiv;
			</span>
		</div>
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'primary-navigation',
			)
		);
		?>


	</header>
	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">