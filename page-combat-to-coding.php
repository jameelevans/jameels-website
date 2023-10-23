<?php
/*
* The Combat to Coding page template file
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
    <section id="military-service" class="general-content__main">
        <!-- Streak header -->
        <div class="streak">
            <div class="streak__bg streak__bg--blue pb-lg-on-sm">
                <h2 class="streak-header">
                    <?php
                    // Display military svg icon
                    echo svg_icon('streak-header__icon', 'military'); ?> Military Service
                </h2>
            </div>
            <!-- Streak gallery -->
            <div class="streak__gallery">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/jameels-military-service-1.jpg' ); ?>"
                    alt="" class="streak__gallery__image streak__gallery__image--1">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/jameels-military-service-3.jpg' ); ?>"
                    alt="" class="streak__gallery__image streak__gallery__image--2">
            </div><!-- .Streak gallery -->
        </div><!-- .Streak header -->

        <h3 id="my-start" class="heading__3--blue-borders">My Start in the Army</h3>
        <p>Before graduating from high school in 2003, I wanted to go to college but was terrified of the cost. So I began thinking about joining the Army because of the 100% tuition covered advertisements on TV. My father served 23 years in the military, so I thought it would be cool to follow in his footsteps. I began speaking with an Army recruiter who frequented my high school. He assured me that I would get a nice bonus; college would be 100% paid for and I would never have to leave for war because that was only for infantry soldiers.</p>

        <p>I was sold on 100% tuition covered! So I signed up. I knew I wanted a job in the technology field that would give me skills that could transfer to civilian life, so I chose to be an Automated Logistical Specialist. But before I could become a 92A I had to get through about 5 months of rigorous training.</p>

        <p>After my Advanced Individual Training I joined my first unit, the headquarters of 1-121 a field artillery unit out of Milwaukee. In 2006 my unit was alerted a selected to go to war. Not only was I about to go to war, my unit would take on a convoy security escort mission in the red zone of Iraq.</p>

        <h3 id="war-time" class="heading__3--blue-borders">My Time at War</h3>
        <p>I learned that in the Army National Guard you fill whatever position the Army needs. I went from being a computer nerd, to training to be a gunner on a yearlong convoy security escort mission. Training for our 350+ soldiers took about 4 months in Ft. McCoy following 6 months in Camp Shelby, MS. After all the training I officially became a gunner and a part-time driver.</p>

        <p>Command informed us that we would be based just outside of Iraq, right on the border in Camp Navistar, Kuwait and We would be escorting convoys of around 35+ semi-trucks of goods to all of the bases throughout Iraq. The first thing I remember when stepping out of the plane in Kuwait was the hair dryer hot air blowing all over my body and not stopping. After a couple of days of rest it was time for on the job training.</p>

        <p>On one of our very first missions in Iraq our base went into ‘blackout status’ with all contact to home being shut down. This could only mean one thing; one of our own was attacked. We found out later that a fellow soldier lost his life after being attacked with an IED. We would soon realize that being hit by IEDs was a huge problem for us that unfortunately, happened too often.</p>

        <p>After coming home and few months, it was time to go back to training for war. My next deployment I took a promotion a joined a new unit, the 108 Forward Support Company. Of-course we were all re-trained as Detainee Operation Guards and we were headed to Iraq. Even though the detainee operations was not a combat mission, it was still a rough one, and in some ways event more than the first one. A couple months after we arrived in Taji, Iraq, we would soon find out that a platoon sergeant lost his life. Throughout both times in Iraq, I would have traveled to most of the F.O.Bs (Forward Operating Bases) in Iraq and managed to make it back home in one piece.</p>

        <!-- Streak header -->
        <div id="rip" class="streak">
            <div class="streak__bg streak__bg--black pb-lg-on-sm">
                <h2 class="streak-header">
                    <?php
                    // Display dove svg icon
                    echo svg_icon('streak-header__icon', 'dove'); ?> Those We Lost
                </h2>
            </div>
            <!-- Streak gallery -->
            <div class="streak__gallery">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/rip-2.jpg' ); ?>" alt=""
                    class="streak__gallery__image streak__gallery__image--1">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/rip-1.jpg' ); ?>" alt=""
                    class="streak__gallery__image streak__gallery__image--2">
            </div><!-- .Streak gallery -->
        </div><!-- .Streak header -->

        <h3 id="peace" class="heading__3--blue-borders">My Time of Peace</h3>
        <p>After two yearlong deployments, I returned home for 3 months then it was off to Fort Bliss to be a Special Trainer (also known as Observer Controller-Trainer- OC-T) for soldiers deploying for Detainee Operations missions to Iraq and Guantanamo Bay. I ended up getting hurt for the third time in my military career, when training soldiers how to conduct forced cell extractions, but I still finished my mob. After a year of training and preparing thousands of soldiers to go overseas, it was back home for me.</p>

        <p>At home with the 32nd MP co in Milwaukee I became the senior sergeant in the motor pool section. So I stepped into the leadership position as the acting motor pool sergeant. When I first got to the unit, the section of over 10 soldiers was a complete mess with no true leader. After creating a vehicle maintenance process, taking over office space ( which was being used as storage space for junk ), mentoring my team, I received an award for turning the section around and passing the units first section inspection.</p>

        <p>But I couldn’t ignore the fact that I was still in pain and not sleeping as much as I should. So I finally went to the VA to see what was wrong. Turns out I wasn’t sleeping because of PTSD and my knees and shoulder were just beat up from accidents while deployed. After dealing with two sore knees and a shoulder that clicks every time I rotate it and receiving countless awards and commendations, I finally called it a career and medically retired in 2014.</p>

        <!-- Streak header -->
        <div id="education" class="streak">
            <div class="streak__bg streak__bg--blue">
                <h2 class="streak-header">
                    <?php
                    // Display education svg icon
                    echo svg_icon('streak-header__icon', 'education'); ?>Education
                </h2>
            </div>
        </div><!-- .Streak header -->

        <!-- Education accomplishments section -->
        <div class="education">
            <div class="education__accomplishment">
                <?php
                // Display stars svg icon
                echo svg_icon('education__icon', 'stars'); ?>
                <h4 class="heading__4--small">Bachelors of Arts</h4>
            </div>

            <div class="education__accomplishment">
                <?php
                // Display stars svg icon
                echo svg_icon('education__icon', 'stars'); ?>
                <h4 class="heading__4--small">Associates of Science</h4>
            </div>

            <div class="education__accomplishment">
                <?php
                // Display stars svg icon
                echo svg_icon('education__icon', 'stars'); ?>
                <h4 class="heading__4--small">Always Learning</h4>
            </div>
        </div><!-- .Education accomplishments section -->
        <p>Once I got out of the military I went back to school to do the one thing I wanted to do my entire life, I wanted to become a developer and learn how to code. So in 2012 I started on my associates at ITT Technical Institute to learn the basics of graphic design. After a couple years I got my associates with highest honors. With the basic knowledge of graphic design I felt like I was ready to begin learning advanced coding.</p>

        <p>In 2014 I began classes at the Art Institute of Wisconsin for a Web Design and Interactive Media BA. I knew it would be a challenge to take on as many as 5 classes a semester, but I wanted to finish at a certain time. Even with a heavy class load, it only took two years to complete my program while maintaining a 3.5 GPA.</p>
        
        <p>Since graduating in 2016 I've taken about 10 continuing education courses to keep up with the pace of the industry.</p>
    </section><!-- .Main content section -->

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