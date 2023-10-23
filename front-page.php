<?php
/**
 * * The template for displaying the front page
 *
 * @package jameelevans
 */

get_header();

?>
	<main class="main front-page__content">
        <section class="services">
			<div class="services__heading">
				<h2 id="services" class="heading__2 heading__2--blue"><span>Helping your business</span> grow a recognizable brand</h2>
				<p class="subheading subheading--orange">Providing your business with essential services it needs to thrive</p>
			</div>

			<div class="services__container">
				<div class="service">
						<a class="service__circle" href="<?php echo esc_url( site_url( '/services#professional-branding' ) ); ?>">
							<?php
							// Display branding svg icon
							echo svg_icon('service__icon', 'branding'); ?>

							<div class="service__line">&nbsp;</div>
							<div class="service__dot">&nbsp;</div>
						</a>
				
						<h4 class="heading__4 heading__4--blue">Professional Branding</h4>
						<p>Fresh style guides with amazing logos and colors schemes that your customers will remember and trust with their money.</p>
						<a class="btn btn--orange" href="<?php echo esc_url( site_url( '/services#professional-branding' ) ); ?>">Learn more</a>
					</div>

					<div class="service">
						<a class="service__circle" href="<?php echo esc_url( site_url( '/services#web-solutions' ) ); ?>">
							<?php
							// Display branding svg icon
							echo svg_icon('service__icon', 'solutions'); ?>
							<div class="service__line">&nbsp;</div>
							<div class="service__dot">&nbsp;</div>
						</a>
						
						<h4 class="heading__4 heading__4--blue">Web Solutions</h4>
						<p>Get a blazing fast website that ranks great in Google search and makes money for you while you’re sleeping.</p>
						<a class="btn btn--orange" href="<?php echo esc_url( site_url( '/services#web-solutions' ) ); ?>">Learn more</a>
					</div>

					<div class="service">
						<a class="service__circle" href="<?php echo esc_url( site_url( '/services#search-results' ) ); ?>">
							<?php
							// Display branding svg icon
							echo svg_icon('service__icon', 'rankings'); ?>
							<div class="service__line">&nbsp;</div>
							<div class="service__dot">&nbsp;</div>
						</a>

						<h4 class="heading__4 heading__4--blue">Better Search Rankings</h4>
						<p>With an SEO audit, tips and resources, your site will be in position to see a massive organic traffic increase</p>
						<a class="btn btn--orange" href="<?php echo esc_url( site_url( '/services#search-results' ) ); ?>">Learn more</a>
					</div>
				</div>
			</div>
		</section>

		<section class="wordpress">
			<div class="wordpress__heading">
				<h2 class="heading__2 heading__2--white"><span>WORDPRESS DEVELOPMENT &amp; DESIGN</span></h2>
				<p class="subheading subheading--orange">Get your website done the right way</p>
			</div>

			<div class="wordpress__container">
				<p class="wordpress__details">
					For years i’ve been working with WordPress - the world’s leading CMS system which powers over a 1/3 of the internet. I am confident I can take your WordPress project to new levels and increase your brand visibility. Whether you need to develop it, secure it, maintain it or fix it - I’m confident that I’m your guy. 
				</p>

				<div class="wordpress__buttons">
					<a href="<?php echo esc_url( site_url( '/hire-me' ) ); ?>" class="wordpress__link">I NEED A WORDPRESS WEBSITE</a>
					<a href="<?php echo esc_url( site_url( '/hire-me' ) ); ?>" class="wordpress__link">I NEED HELP WITH WORDPRESS</a>
				</div>
				<div class="wordpress__tech">
					<?php
					// Display WordPress tech svg icons
					echo svg_icon('icon icon__wordpress', 'wordpress');
					echo svg_icon('icon icon__woocommerce', 'woocommerce');
					echo svg_icon('icon icon__yoast', 'yoast');
					echo svg_icon('icon icon__visual-studio', 'visual-studio');
					echo svg_icon('icon icon__google', 'google');
					echo svg_icon('icon icon__php', 'php'); ?>
				</div>
			</div>
		</section>

		<section class="about">
			<div class="about__heading">
				<h2 class="heading__2 heading__2--blue">Learn a bit <span>about me</span></h2>
				<p class="subheading subheading--orange">Get to know a bit about me before making a decision</p>
			</div>

			<div class="about__container">
				<div class="about__clip">
					<?php
					// Display military svg icon
					echo svg_icon('about__icon', 'military'); ?>
					
					<div class="heading__4--small">Military Veteran</div>
					<p>I’m a hard-working self motivated veteran who’s always trying to get better and learn new things so I can accomplish my next mission; Your project.</p>
				</div>
				<div class="about__clip">
					<?php
					// Display results svg icon
					echo svg_icon('about__icon', 'results'); ?>
					
					<div class="heading__4--small">Results</div>
					<p>No matter to setting, I’ve always delivered above average results for my clients and co-workers.</p>
				</div>
				<div class="about__clip">
					<?php
					// Display communication svg icon
					echo svg_icon('about__icon', 'communication'); ?>
					
					<div class="heading__4--small">Communication</div>
					<p>Whether it’s online video conferencing, email or a simple call; I always take great pride in keeping you informed and in the loop.</p>
				</div>
				<div class="about__clip">
					<?php
					// Display education svg icon
					echo svg_icon('about__icon', 'education'); ?>
					
					<div class="heading__4--small">Education</div>
					<p>I have a Bachelors degree in my field and enjoy taking new courses every couple months to keep up to date with emerging techniques.</p>
				</div>
			</div>

			<a href="<?php echo esc_url( site_url( '/combat-to-coding' ) ); ?>" class="btn btn__cta--blue">
				Read my story&nbsp;
				<?php
				// Display circle right svg icon
				echo svg_icon('btn__icon--blue', 'circle-right'); ?>
			</a>

		</section>

		<section class="featured-resources">
			<?php
				// Show featured posts based on acf fields
				echo featured_posts();
				// Section divider
				echo '<hr class="hr hr--white">';
				// Recommendations section
				echo recommendations_slider();
			?>
		</section>
	</main>
<?php get_footer(); ?>
