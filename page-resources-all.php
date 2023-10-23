<?php
/*
* The All Resources page template file
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
    
    <!-- Main content section -->
    <section class="featured-resources">
            <!-- Featured resources heading -->
			<div class="featured-resources__heading">
				<h2 class="heading__2 heading__2--white">All Resources By Me</h2>
				<p class="subheading subheading--orange">Here's a couple of featured posts written by yours truly</p>
			</div><!-- .Featured resources heading -->
			<!-- Featured resources -->
			<div class="featured-resources__container">
                <?php
                // Display all Resources
                $allPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
                    if( $allPosts->have_posts() ):
                        while( $allPosts->have_posts() ):
                            $allPosts->the_post();
                            get_template_part('template-parts/content', 'featured'); 
                        endwhile;
                    wp_reset_postdata();
                    endif;
                ?>
			</div><!-- .Featured resources -->

			<hr class="hr hr--white">

			<?php
            // Recommendations section
            echo recommendations_slider(); ?>
        </div>
    </section><!-- .Main content section-->
</main>
<?php get_footer(); ?>