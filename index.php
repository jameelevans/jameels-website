<?php
/*
* The Resources page template file
*
* @package jameelevans
*/
get_header(); ?>
<!--Main layout-->
<main class="main general-content">
    <!-- Page lead area -->
    <section class="general-content__lead">
        <div class="lead">
            <h2>Just making things easier for you and me</h2>
            <p>In the past few years I’ve been learning so much about web development and WordPress. But I’ve also found out first hand that many of those great resources are not too easy to find and are scattered across the Internet. So I put this together so all o these good resources can be found in one place. With my own posts I try to go into detail as much as possible and even include table of contents. It’s all about making things simpler for you.</p>
        </div>
    </section><!-- .Page lead area -->
    <!-- Main content area-->
    <section class="general-content__main">
        <!-- Featured posts streak -->
        <div class="streak">
            <div class="streak__featured streak__bg--blue">
                <?php echo featured_posts() ?>
            </div>
        </div> <!-- .Featured posts streak -->

        <div class="tools">
            <div class="tools__header">
                <h2 class="heading__2 heading__2--blue">Web Development <span>Resources</span></h2>
                <div class="featured-resources__container">
                    <?php
                    // Show all posts
                    $webdevelopment = get_category_by_slug( 'web-development' );

                    $all_posts = new WP_Query(array(
                        'cat' => $webdevelopment->term_id,
                        'posts_per_page' => -1

                    )); // -1 means all posts
                    if ($all_posts->have_posts()):
                    while ($all_posts->have_posts()):
                        $all_posts->the_post();
                        get_template_part('template-parts/content', 'featured');
                    endwhile;
                    wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <h3 class="heading__3--blue-borders">Web Development Tools</h3>
            </div>

            <div class="tools__content ">
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Visual Studio Code</h4>
                    <p>My new go to choice for editors. It has everything from a built-in command line to built-in Git commands. Plus it's supported by Microsoft</p>
                    <a href="https://code.visualstudio.com/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Brackets Text Editor</h4>
                    <p>Before switching to Visual Studio I was using Brackets for years. It is still s good editor and it's supported by Adobe.</p>
                    <a href="http://brackets.io/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Codepen</h4>
                    <p>I use Codepen as sort of a playground to have some fun and test out ideas.</p>
                    <a href="https://codepen.io/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                

                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Emmet</h4>
                    <p>With Emmet you can quickly write a bunch of code, wrap code with new tags, quickly traverse and select important code parts and more!</p>
                    <a href="https://emmet.io/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Brackets Text Editor</h4>
                    <p>A modern, open source text editor that understands web design.</p>
                    <a href="http://brackets.io/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Semantic HTML5 Guide</h4>
                    <p>HTML5 Semantic Tags: What Are They & How To Use Them! - SEMrush</p>
                    <a href="https://www.semrush.com/blog/semantic-html5-guide/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>

                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Clippy from Bennett Feely</h4>
                    <p>A usful visual CSS clip path maker</p>
                    <a href="https://bennettfeely.com/clippy/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">CSSmatic | Gradient Generator</h4>
                    <p>A tool I use to quickly generate creative CSS gradients </p>
                    <a href="https://www.cssmatic.com/gradient-generator" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">CubicBezier.com</h4>
                    <p>Allows you to easily create and compare cubic bezier curves</p>
                    <a href="https://cubic-bezier.com/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                
            </div>
        </div>

        

        <div class="tools">
            <div class="tools__header">
                <h2 class="heading__2 heading__2--blue">Wordpress <span>Resources</span></h2>
                <div class="featured-resources__container">
                    <?php
                    // Show all posts
                    $wordpress = get_category_by_slug( 'wordpress' );

                    $all_posts = new WP_Query(array(
                        'cat' => $wordpress->term_id,
                        'posts_per_page' => -1

                    )); // -1 means all posts
                    if ($all_posts->have_posts()):
                    while ($all_posts->have_posts()):
                        $all_posts->the_post();
                        get_template_part('template-parts/content', 'featured');
                    endwhile;
                    wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <h3 class="heading__3--blue-borders">Wordpress Tools</h3>
            </div>

            <div class="tools__content ">
            <div class="tool">
                    <h4 class="heading__4 heading__4--blue">WP Beginner</h4>
                    <p>WPBeginner is a free WordPress resource site for Beginners.</p>
                    <a href="https://www.wpbeginner.com/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">WordPress Codex</h4>
                    <p>The online manual for WordPress and a living repository for WordPress information and documentation.</p>
                    <a href="https://codex.wordpress.org/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">WP Gulp</h4>
                    <p>An Easy to Use WordPress Gulp Boilerplate</p>
                    <a href="https://ahmadawais.com/introducing-wpgulp-an-easy-to-use-wordpress-gulp-boilerplate/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                
            </div>
        </div>

        <div class="tools">
            <div class="tools__header">
                <h2 class="heading__2 heading__2--blue">SEO <span>Resources</span></h2>
                <div class="featured-resources__container">
                    <?php
                    // Show all SEO posts
                    $seo = get_category_by_slug( 'seo' );

                    $all_posts = new WP_Query(array(
                        'cat' => $seo->term_id,
                        'posts_per_page' => -1

                    )); // -1 means all posts
                    if ($all_posts->have_posts()):
                    while ($all_posts->have_posts()):
                        $all_posts->the_post();
                        get_template_part('template-parts/content', 'featured');
                    endwhile;
                    wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <h3 class="heading__3--blue-borders">SEO Tools</h3>
            </div>

            <div class="tools__content ">
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">The Beginner's Guide to SEO</h4>
                    <p>This guide is designed to describe all major aspects of SEO, from finding keywords, to making your site friendly to search engines, to building links.</p>
                    <a href="https://moz.com/beginners-guide-to-seo" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Moz | Link Explorer</h4>
                    <p>This highly accurate link tool lets you check the backlink profile and Domain Authority of any site. Link Explorer</p>
                    <a href="https://moz.com/link-explorer" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Brandon Gaille | SEO Boss</h4>
                    <p>Brandon Gaille is one of the leading names in SEO optimization. He is also known as the Blog Millionaire</p>
                    <a href="https://brandongaille.com/category/seo/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                
            </div>
        </div>

        <div class="tools">
            <div class="tools__header">
                <h2 class="heading__2 heading__2--blue">Design <span>Resources</span></h2>
                <div class="featured-resources__container">
                    <?php
                    // Show all SEO posts
                    $design = get_category_by_slug( 'design-process' );

                    $all_posts = new WP_Query(array(
                        'cat' => $design->term_id,
                        'posts_per_page' => -1

                    )); // -1 means all posts
                    if ($all_posts->have_posts()):
                    while ($all_posts->have_posts()):
                        $all_posts->the_post();
                        get_template_part('template-parts/content', 'featured');
                    endwhile;
                    wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <h3 class="heading__3--blue-borders">Design Tools</h3>
            </div>

            <div class="tools__content ">
            <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Google Fonts</h4>
                    <p>Making the web more beautiful, fast, and open through great typography.</p>
                    <a href="https://fonts.google.com/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Google Variable Fonts</h4>
                    <p>Learn more about how to use Googles new variable fonts.</p>
                    <a href="https://developers.google.com/fonts/docs/css2#list_of_variable_fonts" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Ico Moon</h4>
                    <p>Pixel Perfect Icon Solutions</p>
                    <a href="https://icomoon.io/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>

                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Coverr</h4>
                    <p>Beautiful Free Stock Video Footage</p>
                    <a href="https://coverr.co/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Color Hexa</h4>
                    <p>Color encyclopedia : Information and conversion.</p>
                    <a href="https://www.colorhexa.com/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="tool">
                    <h4 class="heading__4 heading__4--blue">Coolers</h4>
                    <p>The super fast color schemes generator!</p>
                    <a href="https://coolors.co/" class="tool__btn" target="_blank">
                        Learn more&nbsp; <svg class="tool__icon">
                            <use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-circle-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
                
        </div>

        <div class="tools">
            <div class="tools__header">
                <h2 class="heading__2 heading__2--blue">Business <span>Resources</span></h2>
                <div class="featured-resources__container">
                    <?php
                    // Show all SEO posts
                    $business = get_category_by_slug( 'business' );

                    $all_posts = new WP_Query(array(
                        'cat' => $business->term_id,
                        'posts_per_page' => -1

                    )); // -1 means all posts
                    if ($all_posts->have_posts()):
                    while ($all_posts->have_posts()):
                        $all_posts->the_post();
                        get_template_part('template-parts/content', 'featured');
                    endwhile;
                    wp_reset_postdata();
                    endif;
                    ?>
                </div>
             
            </div>
        </div>

        <div class="tools">
            <div class="tools__header">
                <h2 class="heading__2 heading__2--blue">Inspirational <span>Quotes</span></h2>
                <div class="featured-resources__container">
                    <?php
                    // Show all SEO posts
                    $quotes = get_category_by_slug( 'quotes' );

                    $all_posts = new WP_Query(array(
                        'cat' => $quotes->term_id,
                        'posts_per_page' => -1

                    )); // -1 means all posts
                    if ($all_posts->have_posts()):
                    while ($all_posts->have_posts()):
                        $all_posts->the_post();
                        get_template_part('template-parts/content', 'featured');
                    endwhile;
                    wp_reset_postdata();
                    endif;
                    ?>
                </div>
             
            </div>
        </div>

     

       
    </section> <!-- .Main content area-->

    <!-- Reccomendations section -->
    <section class="featured-resources">
        <?php echo recommendations_slider(); ?>
    </section><!-- .Reccomendations section -->
</main>
<?php get_footer(); ?>