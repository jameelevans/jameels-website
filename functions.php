<?php
/** 
 * Custom Functions
 *
 * ! What the custom functions do:
 * *    1. Enqueues all styles and scripts
 * *    2. Asynchronously load scripts for speed optimization
 * *    3. Activates the ability to add custom logo in customizer
 * *    4. Enable support for custom sized Post Thumbnails on posts and pages
 * *    5. Add site link to logo on login screen 
 * *    6. Add theme css to login screen
 * *    7. Add theme title to login screen
 * *    8. Enable the quote post format
 * *    9. Enable custom post types (Not in mu-plugins because this is a multisite)
 * *    10. Display site navigation
 * *    11. Display custom heading for home page
 * *    12. Display custom heading for general pages
 * *    13. Display custom excerpts on posts
 * *    14. Display table of contents list and sublists based on acf field options
 * *    15. Display the recommendations slider
 * *    16. Display featured posts based on acf field options
 * *    17. Display inline svg icon from sprite sheet with custom class 
 * *    18. Display custom post pagination 
 * *    19. Display work sample links
 *      
 */

// * * --------| Functions in numerical order |-------- *

  //* 1. Enqueuing all styles and scripts
  function theme_enqueue_scripts() {
  wp_enqueue_script( 'Bundled_js', get_template_directory_uri() . '/assets/js/scripts-bundled.js#asyncload', array(), '1.0.0', true );
  wp_enqueue_style('main_styles', get_stylesheet_uri());
  wp_enqueue_style( 'google-varibale-fonts', 'https://fonts.googleapis.com/css?family=Public+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap', false ); 
  }
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
  // .Enque all styles and scripts

  //* 2. Asynchronously load scripts for speed optimization
  function async_scripts($url){
  if ( strpos( $url, '#asyncload') === false )
    return $url;
  else if ( is_admin() )
    return str_replace( '#asyncload', '', $url );
  else
    return str_replace( '#asyncload', '', $url )."' async='async";
  }
  add_filter( 'clean_url', 'async_scripts', 11, 1 ); 
  // .Asynchronously load scripts for speed optimization

  //* 3. Activates the ability to add custom logo in customizer
function jameelevans_custom_logo_setup() {
  $defaults = array(
      'height'      => 38,
      'width'       => 38,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'Jameel Evans', 'Wordpress Developer & Consultant' ),
  );
  add_theme_support( 'custom-logo', $defaults );

  //* 4. Enable support for custom sized Post Thumbnails on posts and pages
  add_image_size( 'my-thumbnail', 300, 169, false);
  add_image_size( 'x-small', 450, 253, false);
  add_image_size( 'small', 600, 338, false);
  add_image_size( 'medium', 768, 432, false);
  add_image_size( 'regular', 1024, 576, false);
  add_image_size( 'large', 1200, 675, false);
  add_image_size( 'med-large', 1600, 901, false);
  add_image_size( 'x-large', 2000, 1125, false);
  add_image_size( 'xx-large', 3000, 1688, false);
  add_image_size( 'full-size', 3200, 1801, false);
}
add_action( 'after_setup_theme', 'jameelevans_custom_logo_setup' );
add_theme_support( 'post-thumbnails' );
// .Activate the ability to add custom logo in customizer
// .Enable support for Post Thumbnails on posts and pages


//* 5. Add site link to logo on login screen
function ourHeaderUrl() {
  return esc_url(site_url('/'));
}
add_filter('login_headerurl', 'ourHeaderUrl');
// .Add site link to logo on login screen


//* 6. Add theme css to login screen
function ourLoginCSS() {
  wp_enqueue_style('jameelevans_main_styles', get_stylesheet_uri());
}
add_action('login_enqueue_scripts', 'ourLoginCSS');
// .Add theme css to login screen


//* 7. Add theme title to login screen
function ourLoginTitle() {
  return get_bloginfo('name');
}
add_filter('login_headertitle', 'ourLoginTitle');
// .Add theme title to login screen

//* 8. Enable the quote post format
add_theme_support( 'post-formats', 
	array( 
		'quote'
	) 
);
add_post_type_support( 'post', 'post-formats' );
// .Enable the quote post format

//* 9. Enable custom post types
function jameelevans_post_types() {
  // Works post type
  register_post_type('work', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'work'),
    'capability_type' => 'post',
    'show_in_rest' => true,
    'public' => true,
    'publicly_queryable' => true,
		'show_ui'            => true,
    'taxonomies' => array('category'),
    'labels' => array(
      'name' => 'Works',
      'add_new_item' => 'Add New Work',
      'edit_item' => 'Edit Work',
      'all_items' => 'All Works',
      'singular_name' => 'Work'
    ),
    'menu_icon' => 'dashicons-portfolio'
  ));

    // Recommendations post type
    register_post_type('recommendations', array(
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'rewrite' => array('slug' => 'works'),
      'capability_type' => 'post',
      'show_in_rest' => false,
      'public' => false,
      'publicly_queryable' => false,
      'show_ui'            => true,
      'labels' => array(
        'name' => 'Recommendations',
        'add_new_item' => 'Add recommendation',
        'edit_item' => 'Edit recommendation',
        'all_items' => 'All Recommendations',
        'singular_name' => 'Recommendation'
      ),
      'menu_icon' => 'dashicons-format-quote'
    ));
}
add_action('init', 'jameelevans_post_types');
// .Enable custom post types

//* 10. Display site navigation
function site_navigation() { ?>
<!-- navigation -->
<div class="navigation">
  <input id="navi-toggle" type="checkbox" class="navigation__checkbox">
  <!-- navigation menu toggle-->
  <label for="navi-toggle" class="navigation__button">
    <!-- navigation menu icon-->
    <span class="navigation__icon">&nbsp;</span>
  </label>
  <div class="navigation__background">&nbsp;</div>
  <nav class="navigation__nav">
    <ul class="navigation__list">
      <?php if (!is_front_page()) { ?>
      <li class="navigation__item"><a href="<?php echo esc_url( home_url('/')); ?>" class="navigation__link">Start
          Here</a></li>
      <?php } ?>
      <li class="navigation__item">
        <a href="<?php echo esc_url( site_url( '/services' ) ); ?>" class="navigation__link<?php if(is_page('services')){echo ' navigation__current-page';} ?>">Services</a>
      </li>
      <li class="navigation__item">
        <a href="<?php echo esc_url( site_url( '/resources' ) ); ?>" class="navigation__link<?php if(is_home()){echo ' navigation__current-page';} ?>">Useful Resources</a>
      </li>
      <li class="navigation__item">
        <a href="<?php echo esc_url( site_url( '/work-samples' ) ); ?>" class="navigation__link<?php if(is_page('work-samples')){echo ' navigation__current-page';} ?>">Work Samples</a>
      </li>
      <li class="navigation__item">
        <a href="<?php echo esc_url( site_url( '/combat-to-coding' ) ); ?>" class="navigation__link<?php if(is_page('combat-to-coding')){echo ' navigation__current-page';} ?>">From Combat to Coding</a>
      </li>
      <li class="navigation__item">
        <a href="<?php echo esc_url( site_url( '/hire-me' ) ); ?>" class="navigation__link<?php if(is_page('hire-me')){echo ' navigation__current-page';} ?>">Hire Me</a></li>
    </ul>
  </nav>
</div><!-- .navigation -->
<?php }
// .Display site navigation

// * 11. Display custom heading for home page
function home_heading() { ?>
<h1>
  <!-- Blog description displayed off screen-->
  <span><?php echo get_bloginfo( 'description' )?></span>
  <img class="header__main" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/creative-wp-developer.svg' ); ?>" alt="Creative WordPress Develper" draggable="false">
</h1>
<?php }
// .Display custom heading for home page

//* 12. Display custom heading for general pages
function general_heading() { 
  if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb( '<p class="header__breadcrumb">','</p>' );
    }; ?>
<h1 class="header__title">
  <?php
      if (is_home()) {
      echo single_post_title();
      }
      else if (is_404()) {
      echo '404 Error';
      } else {
      echo the_title();
      }
    ?>
</h1>
<?php if (is_single()) { ?>
<div class="header__post-info">
  <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
  <?php
    if (is_singular('work')) { ?>
      <a href="<?php echo esc_url( site_url( '/combat-to-coding' ) ); ?>" class="header__details">Project created by <?php the_author(); ?></a>
  <?php } else { ?>
    <a href="<?php echo esc_url( site_url( '/combat-to-coding' ) ); ?>" class="header__details">Written by <?php the_author(); ?><br />Posted on <?php the_date(); ?></a>
    <?php } ?>
</div>
<?php };
}
// .Display custom heading for general pages

//* 13. Display custom excerpts on posts
function add_custom_excerpts_to_posts() {
  add_post_type_support('page', 'excerpt');
}
add_action('init', 'add_custom_excerpts_to_posts');
// .Display custom excerpts on posts

//* 14. Display table of content list and sublists
function table_of_contents() {
  // check for section rows (parent repeater)
  if( have_rows('section') ): ?>
  <!-- Table of contents-->
  <details id="table-of-contents" class="table-of-contents" open>
    <summary class="table-of-contents__summary">Table of contents</summary>
    <ul class="table-of-contents__list">
      <?php 
      // loop through section rows (parent repeater)
      while( have_rows('section') ): the_row(); ?>
      <li class="table-of-contents__item"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('content'); ?></a>
      </li>
      <?php 
      // check for rows (sub repeater)
      if( have_rows('sub_section') ): ?>
      <ul class="table-of-contents__sublist">
        <?php 
        // loop through rows (sub repeater)
        while( have_rows('sub_section') ): the_row();  ?>
        <li class="table-of-contents__subitem">
          <a href="<?php the_sub_field('sub_link'); ?>"><?php the_sub_field('sub_content'); ?></a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; //if( get_sub_field('sub-section') ): ?>
      <?php endwhile; // while( has_sub_field('section') ): ?>
    </ul>
  </details><!-- .Table of contents-->
<?php endif; // if( get_field('section') ):
}
// .Display table of content list and sublists

//* 15. Display the recommendations slider
function recommendations_slider() {
  ?>
<p class="subheading subheading--white">Here's a couple of recommendations from Linkedn</p>
<div class="featured-resources__recommendations slider">
  <?php
          $recommendations = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'recommendations'
          ));
          while ($recommendations -> have_posts()) {
          $recommendations -> the_post();
          $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
          ?>

  <a href="https://www.linkedin.com/in/jameelevans/" target="_blank">
    <figure class="recommendation">
      <blockquote class="recommendation__content"><?php  the_content(); ?></blockquote>
      <div class="recommendation__caption">
        <img src="<?php echo $thumbnail[0]; ?>" alt="" class="recommendation__image">
        <figcaption class="recommendation__content"><?php the_field('name'); ?>,
          <span><?php the_field('title'); ?></span></figcaption>
      </div>
    </figure>
  </a>
  <?php }
              wp_reset_postdata();
      ?>
</div>
<?php }
// .Display the recommendations slider

//* 16. Display featured posts based on acf field options
function featured_posts($args = NULL) {
  if (!$args['number_of_posts']) {
    $args['number_of_posts'] = get_field('#_of_featured_posts');
  }

  if (!$args['filter_by']) {
    $args['filter_by'] = get_field('filtered_by');
  }

  if (!$args['selection']) {
    $args['selection'] = get_field('filter_selection');
  }

  ?>
<div class="<?php if (is_home()) { echo 'streak__heading';} else {echo 'featured-resources__heading';} ?>">
  <h2 class="<?php if (is_home()) { echo 'streak__heading--main';} else {echo 'heading__2 heading__2--white';} ?>">
    Featured <span>Resources</span></h2>
  <p class="subheading subheading--white">Blog posts authored by Jameel with easy-to-navigate table of content</p>
</div>
<div class="featured-resources__container">
  <?php
    // Show first three featured resources
    $featured = new WP_Query(array( 'posts_per_page'=> $args['number_of_posts'], $args['filter_by'] => $args['selection'] ));
      if( $featured->have_posts() ):
        while( $featured->have_posts() ):
          $featured->the_post();
          get_template_part('template-parts/content', 'featured'); 
        endwhile;
      wp_reset_postdata();
      endif;
    ?>
</div>

<a href="<?php if (is_home()) { echo esc_url( site_url( '/resources-all' ));} else {echo esc_url( site_url( '/resources' ) );} ?>"
  class="btn btn__cta">
  <?php if (is_home()) {
    echo 'See all my resources&nbsp;';
    } else {
      echo 'See more resources&nbsp;';
    }

  // Display circle right svg icon
  echo svg_icon('btn__icon--white', 'circle-right'); ?>
</a>
<?php }
// .Display featured posts based on acf field options

//* 17. Display inline svg icon from sprite sheet with custom class
function svg_icon($class, $icon) { ?>
<svg class="<?php echo $class ?>">
  <use
    xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-<?php echo $icon ?>">
  </use>
</svg>
<?php }
// .Display inline svg icon from sprite sheet with custom class

//* 18. Display custom post pagination
function resource_pagination() { ?>
<div class="pagination">
  <?php
        $next_post_link = get_next_post_link('%link');
        $previous_post_link = get_previous_post_link('%link');
    ?>
  <?php if ( $previous_post_link ) : ?>
  <div class="pagination__previous">
    <div class="pagination__icon-wrapper">
      <?php
            // Display left svg icon
            echo svg_icon('pagination__icon', 'left'); ?>
    </div>
    <div class="pagination__details">
      <h4 class="heading__4 heading__4--blue">Previous Resource</h4>
      <?php echo $previous_post_link; ?>
    </div>
  </div>
  <?php else : ?>
  <?php endif; ?>
  <?php if ( $next_post_link ) : ?>
  <div class="pagination__next">
    <div class="pagination__details">
      <h4 class="heading__4 heading__4--blue">Next Resource</h4>
      <?php echo $next_post_link; ?>
    </div>
    <div class="pagination__icon-wrapper">
      <?php
      // Display right svg icon
      echo svg_icon('pagination__icon', 'right'); ?>
    </div>
  </div>
  <?php else : ?>
  <?php endif; ?>
</div>
<?php }
// .Display custom post pagination

//*    19. Display work sample links
function project_links() {
if( get_field('live_link') Or get_field('github_link')) { ?>
  <div class="project__links">
    <h2>Project Links</h2>
    <?php if( get_field('live_link') ): ?>
      <a class="btn btn--large-orange" href="<?php the_field('live_link'); ?>">
        <?php
        // Display web svg icon
        echo svg_icon('btn__icon--white-large', 'web'); ?> See it live</a>
    <?php endif;
    if( get_field('github_link') ): ?>
      <a class="btn btn--large-orange" href="<?php the_field('github_link'); ?>">
        <?php
        // Display Github svg icon
        echo svg_icon('btn__icon--white-large', 'github'); ?> Github repo</a>
    <?php endif; ?>
  </div>
<?php } 
}



//   .Display work sample links