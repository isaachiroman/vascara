<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vascara
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'vascara'); ?></a>

		<header id="masthead" class="site-header">
			<div class="row">
				<div class="topbar text-center pt-3 text-white bg-danger">
					<p>[WONDER WEEK] - ƯU ĐÃI TỪ 5% - 50% TẤT CẢ SẢN PHẨM (GIẢM THÊM 10 - 15% KHI ÁP DỤNG VIP) . MUA NGAY
					</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
						?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						$vascara_description = get_bloginfo('description', 'display');
						if ($vascara_description || is_customize_preview()) :
						?>
							<p class="site-description"><?php echo $vascara_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
														?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="row">
					<nav id="site-navigation" class="main-navigation p-3">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'vascara'); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>



		</header><!-- #masthead -->