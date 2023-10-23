<?php
/**
 * * The template for displaying the footer
 *
 * @package jameelevans
 */

?>
<!--Footer-->
<footer class="footer <?php if(is_front_page()) {echo 'footer--higher-z-index';}else{echo 'footer--lower-z-index';} ?> ">
    <!-- cta -->
    <div class="cta">
        <p class="cta__header">Let's get started on your WordPress project today</p>
        <a class="cta__link" href="<?php echo esc_url( site_url( '/combat-to-coding' ) ); ?>">Learn More About Me</a>
    </div><!-- .cta -->

    <!-- Contact section -->
    <div class="contact">
        <!-- Bio -->
        <div class="contact__bio">
            <!-- Bio image -->
            <figure>
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/jameel-evans.jpg' ); ?>"
                    alt="" class="contact__image">
            </figure><!-- .Bio image -->
            <!-- Contact content -->
            <article class="contact__content">
                <h4 class="heading__4--white">From Combat to Coding</h4>
                <p class="contact__body">After 11 years in the military and serving two tours to Iraq, Jameel retired in 2014.  Soon after he began studying web design and interactive media. Jameel is currently a front-end developer who went from <a class="inline-link" href="<?php echo esc_url( site_url( '/combat-to-coding' ) ); ?>">combat to coding</a>. </p>
            </article><!-- .Contact content -->
        </div><!-- .Bio -->
        <!-- Social -->
        <div class="social">
            <h4 class="heading__4--white">Connect With Me</h4>
            <!-- Social content -->
            <div class="social__section">
                <a class="social__link" href="https://www.linkedin.com/in/jameelevans/" target="_blank">
                    <?php
                    // Display Linkedin svg icon
                    echo svg_icon('social__icon', 'linkedin'); ?>
                </a>
                <a class="social__link" href="https://twitter.com/jameelevans" target="_blank">
                    <?php
                    // Display Twitter svg icon
                    echo svg_icon('social__icon', 'twitter'); ?>
                </a>
                <a class="social__link" href="https://github.com/jameelevans" target="_blank">
                    <?php
                    // Display Github svg icon
                    echo svg_icon('social__icon', 'github'); ?>
                </a>
                <a class="social__link" href="https://www.pinterest.com/jameelevans12/" target="_blank">
                    <?php
                    // Display Pinterest svg icon
                    echo svg_icon('social__icon', 'pinterest'); ?>
                </a>
            </div><!-- .social content -->
        </div><!-- .social -->
    </div><!-- .contact section-->
    
    <!-- Footer copyright -->
    <p class="footer__copyright">© 2015 -
        <?php echo date('Y');?> All rights reserved | <a href="#">Privacy Policy</a><br />
        All content, designs, theme and graphics are Jameel's unless otherwise stated
    </p><!-- .Footer copyright -->
</footer>

<div class="share-modal__button open-share-modal">
    <?php
    // Display share svg icon
    echo svg_icon('share-modal__button--icon', 'share'); ?>
</div>

<a href="#top" class="back-top__button">
    <?php
    // Display up svg icon
    echo svg_icon('back-top__icon', 'up'); ?>
</a>

<!-- Share modal -->
<div class="share-modal">

 <!-- Share modal content -->
 <div class="share-modal__content">

        <!-- Share modal header -->
        <div class="share-modal__header">
            <h2 class="heading__2 heading__2--white-large">Share this <strong>Now</strong></h2>
            <p class="share-modal__description">Share <strong>
                <?php
                    if (is_home()) {
                        echo 'these useful resources';
                    } else if (is_front_page()) {
                        echo 'Jameel | Creative WordPress Developer';
                    } else if (is_404()) {
                        echo 'Jameel\'s 404 Error Page';
                    } else {
                        echo the_title();
                    }
                    ?></strong> with your audience then I'll repost, retweet and like it. I appreciate the support.</p>
        </div><!-- .Share modal header -->

        <!-- Share modal social icons -->
        <div class="share-modal__social">
            <a href="#" class="share-modal__link" target="_blank">
                <?php
                // Display Linkedin svg icon
                echo svg_icon('share-modal__icon', 'linkedin'); ?>
            </a>
            <a href="#" class="share-modal__link" target="_blank">
                <?php
                // Display Twitter svg icon
                echo svg_icon('share-modal__icon', 'twitter'); ?>
            </a>
            <a href="#" class="share-modal__link" target="_blank">
                <?php
                // Display Github svg icon
                echo svg_icon('share-modal__icon', 'facebook'); ?>
            </a>
            <a href="#" class="share-modal__link" target="_blank">
                <?php
                // Display mail svg icon
                echo svg_icon('share-modal__icon', 'pinterest'); ?>
            </a>
        </div> <!-- .Share modal social icons -->

        <!-- Close share modal -->
        <div class="share-modal__close">
            X
        </div><!-- .Close modal -->
</div><!-- .Share modal -->



<?php wp_footer(); ?>
</body>

</html>