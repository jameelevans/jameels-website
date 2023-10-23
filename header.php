<?php
/**
 * * The template for displaying the header
 *
 * @package jameelevans
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); } ?></title>
	<?php wp_head(); ?>
</head>

<body class="container <?php if (is_front_page()) { echo 'front-page';} else {echo 'general';} ?>">
	<?php
	// Display site navigation
	echo site_navigation();	?>
	<!-- Header -->
	<header id="top" class="header <?php if ( has_post_thumbnail() && is_singular()) {echo 'pb-for-thumbnail';}?>">
		<!-- Logo image and name -->
		<a class="header__logo" href="/">
			<?php
			// If logo uploaded to customizer display it, if not show nothing
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
				echo '<img class="header__icon" src="' . esc_url( $logo[0] ) . '"' . 'alt="' . get_bloginfo( 'name' ) . '" draggable="false">';
			} else {
				echo '';
			} ?>
			<!-- Logo name -->
			<div class="header__name">
				<span class="header__name--first">Jameel</span>
				<span class="header__name--last">Evans</span>
			</div><!-- .Logo name -->
		</a> <!-- .Logo image and name -->
		

		<!-- Share content icons -->
		<div class="share">
			<div class="share__text">SHARE</div>
			<!-- Linked share link -->
			<a class="share__link" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>" title="Click to share this post on Linkedin" target="_new">
				<?php 
				// Display Linkedin svg icon
				echo svg_icon('share__icon', 'linkedin') ?>
			</a><!-- .Linkedin share link -->
			<!-- Twitter share link -->
			<a class="share__link" href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Click to tweet this post on Twitter" target="_blank">
				<?php
				// Display Twitter svg icon
				echo svg_icon('share__icon', 'twitter') ?>
			</a><!-- .Twitter share link -->
			<!-- Feacbook share link -->
			<a class="share__link" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Click to share this post on Facebook" target="_blank">
				<?php
				// Display Facebook svg icon
				echo svg_icon('share__icon', 'facebook') ?>
			</a><!-- .Facebook share link -->
			<!-- Pinterest share link -->
			<a class="share__link" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" title="Click to pin this post on Pinterest" target="_blank">
				<?php
				// Display Pinterest svg icon
				echo svg_icon('share__icon', 'pinterest') ?>
			</a><!-- .Pinterest share link -->
		</div> <!-- .Share content icons -->

		<!-- Site title and heading -->
		<div class="header__heading">
			<?php 
				// If is front page display the home heading else show general heading
				if (is_front_page()) { 
					echo home_heading();
				} else {
					echo general_heading();
				}
			?>
		</div><!-- .Site title and heading -->

		<?php 
		// If on front page show Header CTA
		if(is_front_page()) {?>
			<!-- Header CTA button -->
			<a href="<?php echo esc_url( site_url( '/combat-to-coding' ) ); ?>" class="header__cta">Learn More About Me</a>
		<?php } ?>

		<!--<img class="header__bottom" src="<?php //echo esc_url( get_stylesheet_directory_uri() . '/assets/img/header-bottom.svg' ); ?>" alt="Creative WordPress Develper" draggable="false">-->
	</header><!-- .Header -->