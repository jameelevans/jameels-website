<?php
/*
* The Services page template file
*
* @package jameelevans
*/
get_header(); ?>
<!--Main layout-->
<main class="main general-content">
    <?php 
    // If there is a thumbnail show it along with caption
        if ( has_post_thumbnail() ) { ?>
        <!-- Featured image and caption -->
        <figure class="featured-image">
            <?php the_post_thumbnail(); ?>
            <figcaption class="featured-image__caption"><?php the_post_thumbnail_caption( ); ?></figcaption>
        </figure><!-- .Featured image and caption -->
    <?php } ?>

    <!-- Genearl content lead section -->
    <section class="general-content__lead">
        <!-- Lead paragraph and table if any exsist -->
        <div class="lead">
            <?php 
            // Custom lead excerpt
            echo the_excerpt(); 
            // Display table of content list and sublists
            echo table_of_contents();
             ?>
        </div><!-- .Lead paragraph and table if any exsist -->
    </section><!-- .Genearl content lead section -->

    <!-- Main content area-->
    <section class="general-content__main">

        <!-- Streak header -->
        <div id="web-solutions" class="streak">
            <div class="streak__bg streak__bg--blue">
                <h2 class="streak-header">
                    <?php
                    // Display solutions svg icon
                    echo svg_icon('streak-header__icon', 'solutions'); ?>Web Solutions
                </h2>
            </div>
        </div><!-- .Streak header -->

        <h3 class="heading__3--blue-borders">Custom Wordpress Theme Development</h3>
        <p>Does you business depend on ad revenue generated from traffic to you site? A website just milliseconds slower than the competition can be the difference between who gets seen on Google. No cookie cutter themes here. I build custom themes that achieve great Google PageSpeed Insights scores. Which will increase your overall Google ranking.</p>

        <h3 class="heading__3--blue-borders">Site Migrations</h3>
        <p>Do you have an existing site you need migrated to Wordpress? No problem! I'll migrate your site over from any CMS and have you up and running in no time.</p>


        <h3 class="heading__3--blue-borders">Nightly Backups</h3>
        <p>Want to keep up with the progress of you site in real-time Never worry about your website crashing a losing all of your data and blog posts. I conduct a nightly backup. So if anything breaks, we can restore your site back to normal with one click.</p>

        <h3 class="heading__3--blue-borders">Recovering Hacked Website</h3>
        <p>You have a website that has been hacked and you need help gaining access? Are the phantom blog posts taking over your website and you don't know where there coming from? Sounds like you've been HACKED! I can get your secure Wordpress website up and running in no time.</p>

        <!-- Streak header -->
        <div id="professional-branding" class="streak">
            <div class="streak__bg streak__bg--blue">
                <h2 class="streak-header">
                    <?php
                    // Display branding svg icon
                    echo svg_icon('streak-header__icon', 'branding'); ?>Professional Branding
                </h2>
            </div>
        </div><!-- .Streak header -->

        <h3 class="heading__3--blue-borders">Style Guides</h3>
        <p>Most small businesses underestimate the importance of having a professional clean logo. Which is unfortunate because a logo is your business first introduction to consumers. With us we'll do the research so we could formulate the perfect logo that will pique the interests of your potential customers. But you can't just stop at having a nice looking logo. A professional color scheme with a palete that complements your industry is the next step. Couple that along with a modern clean typograpy and positive results are right around the corner.</p>

        <h3 class="heading__3--blue-borders">Print Marketing</h3>
        <p>You may be thinking that everything is digital now days, why would I have to consider print marketing. Because looking the part is everything. </p>

        <!-- Streak header -->
        <div id="search-results" class="streak">
            <div class="streak__bg streak__bg--blue">
                <h2 class="streak-header">
                    <?php
                    // Display rankings svg icon
                    echo svg_icon('streak-header__icon', 'rankings'); ?>Better Search Results
                </h2>
            </div>
        </div><!-- .Streak header -->

        <h3 class="heading__3--blue-borders">SEO Audit</h3>
        <p>I'll check your domain authority, conduct targeted keyword research and identify your backlink profile. With the information gathered I’ll chart an easy to follow plan to increase you domain authority. Improved domain authority will bring in boat loads of organic traffic to your website, which means more money for you.</p>

        <h3 class="heading__3--blue-borders">SEO Resources</h3>
        <p>I'll provide you with SEO resources you can read, print out and study.</p>


    </section> <!-- .Main content area-->

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
<?php get_footer(); ?>
