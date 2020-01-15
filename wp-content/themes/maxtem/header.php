<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maxtem
 */

global $redux_demo;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="iglesiass__header">
		<div class="container">
			<div class="row">
				<div class="iglesiass__header-button">
					<button class="btn menu open" type="button"><i class="fas fa-bars"></i></button>
					<button class="btn x" type="button"><i class="far fa-times-circle"></i></button>
				</div>
				<div class="iglesiass__header-search">
					<?php echo get_search_form(); ?><!--Поиск-->
				</div>
				<div class="iglesiass__header-logo">
					<a href="<?php echo home_url('/'); ?>">
						<?php if($redux_demo['header_logo_logo']['url']){ ?>
						<img src="<?php echo esc_url($redux_demo['header_logo_logo']['url']) ?>" alt="alt">
						<?}?>
					</a>
				</div>
				<div class="iglesiass__header-icons">
					<?php if($redux_demo['header_icons_vimoe_logo']['url']){ ?>
						<a href="#"><img src="<?php echo esc_url($redux_demo['header_icons_vimoe_logo']['url'])?>" alt="alt"></a>
					<?php } ?>
					<?php if($redux_demo['header_icons_instagram_logo']['url']){ ?>
						<a href="#"><img src="<?php echo esc_url($redux_demo['header_icons_instagram_logo']['url'])?>" alt="alt"></a>
					<?php } ?>
					<?php if($redux_demo['header_icons_twitter_logo']['url']){ ?>
						<a href="#"><img src="<?php echo esc_url($redux_demo['header_icons_twitter_logo']['url'])?>" alt="alt"></a>
					<?php } ?>
					<?php if($redux_demo['header_icons_facebook_logo']['url']){ ?>
						<a href="#"><img src="<?php echo esc_url($redux_demo['header_icons_facebook_logo']['url'])?>" alt="alt"></a>
					<?php } ?>
						
				</div>
				<div class="iglesiass__header-navTop">
					<div class="iglesiass__header-navTop--wrap">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'header-menu-top',
								'menu_id'        => 'header-menu-top-maxtem',
							) );
						?>
						<button class="iglesiass__header-navTop--button btn" type="button">donate</button>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--header для всех странеиц кроме главной-->
	<?php
		if(!is_page_template('template-home.php')){ ?>
			<section class="iglesiass__header--dop">
				<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?><!--хлебные крошки в breadcrumbs.php подключенные в functions.php(сгенерированные css класы можно стилизовать)-->
			</section>
		
	<?php } ?>
	
<!-- <i class="fas fa-angle-right"></i> -->
