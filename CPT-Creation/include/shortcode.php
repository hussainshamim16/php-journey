<?php

function services_slider($atts)
{
    ob_start();

    $atts = shortcode_atts(array(
        'title' => 'Default Title',
        'desc' => 'Default description goes here.',
        'button' => 'Request a Free Estimate',
    ), $atts);

    // geting services dynamicly
    $args = array(
        'post_type' => 'services',  // your custom post type slug
        'posts_per_page' => 9,           // get all posts
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $services_query = new WP_Query($args);

    ?>

    <div class="services slider-section">
        <div class="swiper servicesSwiper">
            <div class="swiper-wrapper">

                <?php
                if ($services_query->have_posts()) {

                    while ($services_query->have_posts()) {
                        $services_query->the_post();
                        ?>

                        <div class="swiper-slide">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                            <div class="content">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>


                        <?php

                    }
                    wp_reset_postdata(); 
                }
                ?>

            </div>


        </div>
        <!-- Arrows -->
        <div class="perantBtn">
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="button-sections">
                <span class="swiperbtn prev">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.2041 22.0977L4.81938 14.7129L12.2041 7.32821" stroke="white" stroke-width="1.5"
                            stroke-miterlimit="10" stroke-linejoin="round" />
                        <path d="M25.501 14.7134L5.02571 14.7134" stroke="white" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="swiperbtn next">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.7959 22.0977L25.1806 14.7129L17.7959 7.32821" stroke="#030202" stroke-width="1.5"
                            stroke-miterlimit="10" stroke-linejoin="round" />
                        <path d="M4.49902 14.7134L24.9743 14.7134" stroke="#030202" stroke-width="1.5"
                            stroke-miterlimit="10" stroke-linejoin="round" />
                    </svg>

                </span>

            </div>
            <div class="line">
                <img src="https://p85.d76.myftpupload.com/wp-content/uploads/2025/08/Line-1.png" alt="divLine">
            </div>
            <div class="cta-button">
                <a href="#">Request a Free Estimate →</a>
            </div>
        </div>
        <!-- Button -->

    </div>


    <?php
    return ob_get_clean();
}

add_shortcode('services-shortcode', 'services_slider');

// add project cpt inside of project short code 
function projects_slider($atts)
{
    ob_start();


    $atts = shortcode_atts(array(
        'title' => 'Default Title',
    ), $atts);


    $args = array(
        'post_type' => 'projects',  // your custom post type slug
        'posts_per_page' => 9,           // get all posts
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $projects_query = new WP_Query($args);



    ?>

    <div class="projectsmaincontainer">
        <div class="contentSection">
            <div class="heading">
                <h1><?php echo $atts['title']; ?></h1>
            </div>
            <div class="button-sections">
                <span class="swiperbtn projectprev">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.2041 22.0977L4.81938 14.7129L12.2041 7.32821" stroke="white" stroke-width="1.5"
                            stroke-miterlimit="10" stroke-linejoin="round" />
                        <path d="M25.501 14.7134L5.02571 14.7134" stroke="white" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="swiperbtn projectnext">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.7959 22.0977L25.1806 14.7129L17.7959 7.32821" stroke="#030202" stroke-width="1.5"
                            stroke-miterlimit="10" stroke-linejoin="round" />
                        <path d="M4.49902 14.7134L24.9743 14.7134" stroke="#030202" stroke-width="1.5"
                            stroke-miterlimit="10" stroke-linejoin="round" />
                    </svg>

                </span>

            </div>
        </div>
        <div class="project-slider">
            <!-- Swiper -->

            <div class="swiper ProjectSwiper">
                <div class="swiper-wrapper">
                    <?php
                    if ($projects_query->have_posts()) {

                        while ($projects_query->have_posts()) {
                            $projects_query->the_post();
                            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="swiperImage">
                            </div>
                            <?php
                        }
                        wp_reset_postdata(); 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('projects-shortcode', 'projects_slider');  

// add testimonials cpt inside of project short code 
function testimonials_slider($atts)
{
    ob_start();


    $atts = shortcode_atts(array(
        'title' => 'Default Title',
    ), $atts);


    $args = array(
        'post_type' => 'testimonials',  // your custom post type slug
        'posts_per_page' => 9,           // get all posts
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $testimonials_query = new WP_Query($args);



    ?>
    <div class="testimonial">
        <div class="testimonial-slider-one">
            <div class="swiper testimonialSwiper">
                <div class="swiper-wrapper">
                    <?php
                    if ($testimonials_query->have_posts()) {

                        while ($testimonials_query->have_posts()) {
                            $testimonials_query->the_post();
                            ?>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <p><?php the_excerpt(); ?> </p>
                                    <hr>
                                    <div class="footer-testimonial">
                                        <div class="usersection">
                                            <div class="userimg">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="userImage">
                                            </div>
                                            <div class="userName">
                                                <h2><?php the_title(); ?></h2>
                                            </div>
                                        </div>
                                        <div class="starimg">
                                            <?php
                                            $rating = get_post_meta(get_the_ID(), 'client_rating', true);
                                            $rating = intval($rating);

                                            for ($i = 1; $i <= 5; $i++) {
                                                if ($i <= $rating) {
                                                    // Filled star
                                                    echo '<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M20.1568 22.9624C19.2966 23.5751 13.7773 19.6913 12.7202 19.6828C11.6631 19.6743 6.08166 23.4688 5.23151 22.8423C4.38136 22.2159 6.38002 15.7814 6.06151 14.7764C5.743 13.7713 0.39909 9.65061 0.733836 8.65078C1.06866 7.65094 7.82321 7.55807 8.68339 6.94538C9.54358 6.33276 11.8224 -0.00845414 12.8795 8.46255e-06C13.9365 0.00854465 16.1124 6.3856 16.9625 7.01205C17.8127 7.63843 24.5649 7.84006 24.8835 8.84512C25.202 9.85018 19.7922 13.8843 19.4574 14.8842C19.1226 15.884 21.017 22.3497 20.1568 22.9624Z" fill="#FF6500"/>
                                                    </svg>';
                                                } 
                                            }
                                            ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata(); 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('testimonials-shortcode', 'testimonials_slider');







function show_blogs() {
    ob_start();

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'ASC',
        'paged'          => 1
    );

    $blogs_query = new WP_Query($args);
    $total_posts = $blogs_query->found_posts;
    ?>

    <div class="blogs">
        <div class="blogs-wrapper" id="blogs-container">
            <?php
            if ($blogs_query->have_posts()) {
                while ($blogs_query->have_posts()) {
                    $blogs_query->the_post();
                    ?>
                    <div class="blog-item">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                        <div class="content">
                            <h4><?php the_title(); ?></h4>
                            <p class="date-wrapper">
                                <img src="http://localhost/upgrade-spray-foam/wp-content/uploads/2025/08/Calendar.svg" class="date-icon-image" alt="icon-cal">
                                <span class="blog-date"><?php echo get_the_date(); ?></span>
                            </p>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">
                                Learn More
                                <img src="http://localhost/upgrade-spray-foam/wp-content/uploads/2025/08/Icon.svg" width="20" alt="icon">
                            </a>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            }
            ?>
        </div>

        <?php if ($total_posts > 9) : ?>
            <div class="load-more-wrap" style="text-align:center; margin-top:20px;">
                <button id="load-more-btn" data-page="1">Show More Blogs</button>
            </div>
        <?php endif; ?>
    </div>

    <?php
    return ob_get_clean();
}
add_shortcode('blogs-shortcode', 'show_blogs');


// AJAX handler
function load_more_blogs() {
    $paged = isset($_POST['page']) ? intval($_POST['page']) + 1 : 1;

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'ASC',
        'paged'          => $paged
    );

    $blogs_query = new WP_Query($args);

    if ($blogs_query->have_posts()) {
        while ($blogs_query->have_posts()) {
            $blogs_query->the_post();
            ?>
            <div class="blog-item">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                <div class="content">
                    <h4><?php the_title(); ?></h4>
                    <p class="date-wrapper">
                        <img src="http://localhost/upgrade-spray-foam/wp-content/uploads/2025/08/Calendar.svg" class="date-icon-image" alt="icon-cal">
                        <span class="blog-date"><?php echo get_the_date(); ?></span>
                    </p>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">
                        Learn More
                        <img src="http://localhost/upgrade-spray-foam/wp-content/uploads/2025/08/Icon.svg" width="20" alt="icon">
                    </a>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo 'no-more';
    }

    wp_die();
}
add_action('wp_ajax_load_more_blogs', 'load_more_blogs');
add_action('wp_ajax_nopriv_load_more_blogs', 'load_more_blogs');
