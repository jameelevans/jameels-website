
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

    
    <!-- Contact details-->
    <div id="form" class="form">
      <div class="form__details">
        <div class="form__header">
          <h2 class="heading__2 heading__2--form">A CREATIVE FREELANCE WORDPRESS DEVELOPER FOR HIRE</h2>
          <span class="form__divider">&nbsp;</span>
          <p>I'd love to find out more about your project. Please complete my project form to tell me more. I reply to all enquiries within 48 hours.</p>
        </div>

        <div class="form__availability">
          <h4 class="heading__3 heading__3--form">My Availability</h4>
            <p>April - <span class="limited">Limited</span></p>
            <p>May - <span class="available">Available</span></p>
            <p>June - <span class="available">Available</span></p>
        </div>

        <div class="form__email">
          <h4 class="heading__3 heading__3--form">My Rates</h4>
          <p>Hourly rate is $25.</p>
          <p>Day rate is $200.</p>
          <p>I work on fixed price projects as well</p>
        </div>
      </div>

      <!-- Form content-->
      <div class="form__content">
        <?php the_content(); ?>
      </div>
    </div>


    <!-- Featured resources section -->
    <section class="featured-resources">
        <?php
            // Recommendations section
            echo recommendations_slider();
        ?>
    </section><!-- .Featured resources section -->
</main>
<?php get_footer(); ?>