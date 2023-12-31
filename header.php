<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 */
global $site;
$site = array(
	'tel' => '080-3657-5345',
	'mail' => 'info@otaa.co.jp',
	'name' => '太田 雄太郎',
	'company' => '合同会社太太建築設計事務所',
	'company_slug' => '太太',
	'slug' => 'OTAA',
);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/script/index.css" >
</head>

<body <?php body_class(); ?>>
<div class="cursor"></div>
<?php wp_body_open(); ?>
<div id="page" class="<?php echo $site['slug']; ?>">
	<div id="masthead" class="masthead">
		<div class="masthead__wrapper">
			<div class="masthead__logo">
				<a href="<?php echo home_url(); ?>">
				<?php if( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<h2><?php echo $site['company_slug']; ?></h2>
				<?php endif; ?>
				</a>
			</div><!-- .masthead__logo -->
			<div class="masthead__work">
				<a href="<?php echo home_url('/work'); ?>">
					<h3 class="masthead__work-title">View All Works</h3>
				</a>
				<a href="<?php echo home_url('/work'); ?>">
					<div class="masthead__work-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 16 16" class="">
						<rect width="2" height="2"></rect>
						<rect x="5" width="2" height="2"></rect>
						<rect x="10" width="2" height="2"></rect>
						<rect y="5" width="2" height="2"></rect>
						<rect x="5" y="5" width="2" height="2"></rect>
						<rect x="10" y="5" width="2" height="2"></rect>
						<rect y="10" width="2" height="2"></rect>
						<rect x="5" y="10" width="2" height="2"></rect>
						<rect x="10" y="10" width="2" height="2"></rect>
						</svg>
					</div>
				</a>
			</div><!-- .masthead__work -->
			<div class="masthead__navigation js-menuNavigation">
				<ul>
					<li>
						<a class="js-menuLink" href="<?php echo home_url('/about'); ?>">About<i class="fa-thin fa-arrow-up"></i></a>
					</li>
					<li>
						<a class="js-menuLink" href="<?php echo home_url('/contact'); ?>">Contact<i class="fa-thin fa-arrow-up"></i></a>
					</li>
				</ul>
			</div><!-- .masthead__navigation -->
			<div class="masthead__burger">
				<div id="hamburger" class="hamburger">
					<span class="hamburger__top"></span>
					<span class="hamburger__middle"></span>
					<span class="hamburger__bottom"></span>
				</div>
			</div>
		</div>
	</div><!-- #masthead -->
	<?php //get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
