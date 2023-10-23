<?php
/*
* The Work Samples page template file
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
        <!-- Lead paragraph from custom excerpt-->
        <div class="lead">
            <?php echo the_excerpt(); ?>
        </div><!-- .Lead paragraph frm custom excerpt-->
    </section><!-- .Genearl content lead section -->
    <!-- Main content area-->
    <section class="general-content__main">
        <div class="streak">
            <div class="streak__bg streak__bg--blue">
                <h2 class="streak-header">
                <?php
                    // Display solutions svg icon
                    echo svg_icon('streak-header__icon', 'solutions'); ?>Skills and Qualities
                </h2>
            </div>
        </div>

        <?php the_content(); ?>

        <div class="streak">
            <div class="streak__bg streak__bg--blue">
                <h2 class="streak-header">
                <?php
                    // Display solutions svg icon
                    echo svg_icon('streak-header__icon', 'solutions'); ?>Work Samples
                </h2>
            </div>
        </div>
        <!-- Work samples -->
        <div class="work-samples">
            <?php
            // Show my work from acf fields and work custom posts
            echo do_shortcode('[ess_grid alias="my-work"]');  ?>
        </div><!-- .Work samples -->

        
    </section> <!-- .Main content area-->

    <!-- Featured resources section -->
    <section class="featured-resources">
        <?php
            // Recommendations section
            echo recommendations_slider();
        ?>
    </section><!-- .Featured resources section -->
</main>
<?php get_footer(); ?>
