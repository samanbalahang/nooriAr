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
    <?php 
	$image1 = get_field("petrolFirstImage");
	$image2 = get_field("petrolThirdImage");
	$image3 = get_field("petrolfifthimage");
	$image4 = get_field("petrolsevenimage");
	$image5 = get_field("petrolnineImage");	
	?>
    <style>
        .section-1{
			background: url(<?php echo esc_url($image1['url']); ?>);
		}
        .section-3{
			background: url(<?php echo esc_url($image2['url']); ?>);
		}
        .section-5{
			background: url(<?php echo esc_url($image3['url']); ?>);
		}
        .section-7{
			background: url(<?php echo esc_url($image4['url']); ?>);
		}
        .section-9{
			background: url(<?php echo esc_url($image5['url']); ?>);
		}
        .section-1,
        .section-3,
        .section-5,
        .section-7,
        .section-9{
            width: 100%;
            background-size:cover ;
            background-attachment: fixed;
            padding: 3rem;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: center;
        }
        .section-1 *,
        .section-3 *,
        .section-5 *,
        .section-7 *,
        .section-9 *{
            color: white;
        }
        .content{
            width: 100%;  
            background: #b8b6b6c4;
            padding: 1rem; 
        }
        @media (min-width:768px){
            .content{
                width: 50%;      
            }
        }
    </style>
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
		<div class="col-full"></div>