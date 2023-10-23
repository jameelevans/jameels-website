<?php get_header(); ?>
		<main class="main general-content">
            <section class="general-content__lead">
                <div class="general__heading--center">
                    <h3 class="heading__2 heading__2--blue"><span>Uhh Ohhh!</span></h3>
                    <p class="subheading subheading--orange">Looks like this page was snapped away!</p>
                </div>

                <div class="general-content--center">
					<a class="error-img mb-lg" href="<?php echo esc_url( home_url('/')); ?>">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/404-error-thanos-snap.png' ); ?>" alt="Thanos snap 404 error page">
                    </a>
                    
                    <a href="<?php echo esc_url( home_url('/')); ?>" class="btn btn__cta--blue">
                    Go back home&nbsp;
                        <?php
                        // Display circle right svg icon
                        echo svg_icon('btn__icon', 'circle-right'); ?>
                    </a>
                </div> 
            </section>

            <!-- Featured resources section -->
            <section class="featured-resources">
                <?php
                    // Show featured posts based on acf fields
                    echo featured_posts();
                    // Section divider
                    echo '<hr class="hr hr--white">';
                    // Recommendations section
                    echo recommendations_slider();
                ?>
            </section><!-- .Featured resources section -->
		</main>
<?php get_footer();
