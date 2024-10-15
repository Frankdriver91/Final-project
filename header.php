<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package finalworktheme
 */

$home_image=get_field('home_image');
$home_title=get_field('home_title');
$home_subtitle=get_field('home_subtitle');
$ourservice_title=get_field('ourservice_title');

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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'finalworktheme' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="header-container">
		<div class="site-branding">
		<div class="logo"><?php the_custom_logo();?></div>
		
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'finalworktheme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container_class'=> 'header-design'
				)
			);
			?>
			
		</nav><!-- #site-navigation -->
		<div class="menu-icons"> 
			<a class="icon1" href="#"><img src="<?php echo get_template_directory_uri() . '/assets/images/clarity_favorite-line.png' ?>"  alt=""></a>
			<a class="icon2" href="#"><img src="<?php echo get_template_directory_uri() . '/assets/images/healthicons_ui-user-profile-outline.png' ?>"  alt=""></a> 		
			</div>

			<div class="home-section">
 		 <h1><?php echo $home_title ?></h1>
		 <p><?php echo $home_subtitle ?></p>
		 <button><a href="<?php get_permalink($home_title) ?>">Discover more</a></button>
		</div>

		<img class="home-img" src="<?php echo $home_image ?>"  alt="">
		

		
		</div>
	</header><!-- #masthead -->
