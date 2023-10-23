<?php
/*
* The single template for each work item
*
* @package jameelevans
*/
get_header(); ?>
<!--Main layout-->
<main class="main general-content">

    <?php 
    // If there is a thumbnail show without a caption
        if ( has_post_thumbnail() ) { ?>
        <!-- Featured image -->
        <figure class="featured-image">
            <?php the_post_thumbnail(); ?>
        </figure><!-- .Featured image -->
    <?php } ?>

    <!-- Post lead section -->
    <section class="general-content__lead">
        <!-- Post lead content -->
        <div class="lead">
            <?php 
            // Custom lead excerpt
            echo the_excerpt(); 
            // Display table of content list and sublists
            echo table_of_contents();
             ?>
        </div><!-- .Post lead content -->
    </section><!-- .Post lead section -->

    <!-- Main post content -->
    <section class="general-content__main">
        <div class="blog-container">
            <?php
            // Show post content
            the_content(); 
            project_links();
            ?>
        </div>
    </section><!-- .Main post content -->

    <!-- Featured resources -->
    <section class="featured-resources">
        <?php
            // Show featured posts based on acf fields
            echo featured_posts();
            // Section divider
            echo '<hr class="hr hr--white">';
            // Recommendations section
            echo recommendations_slider();
        ?>
    </section><!-- .Featured resources -->
</main>
<?php get_footer(); ?>