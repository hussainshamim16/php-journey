<?php get_header(); ?>

<?php if(have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <section class="single-service-hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
            <div class="custom-container">
                <div class="hero-content">
                    <h2>Service</h2>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>    
        </section>

        <!-- OverView Area Start -->
         <?php
            $overview_image           = get_field('overview_image');
            $heading_overview         = get_field('heading_overview');
            $content_overview         = get_field('content_overview');
            $heading_with_bullet_point = get_field('heading_with_bullet_point');

            if ( $overview_image && $heading_overview && $content_overview) : ?>
            <section class="overview">
                <div class="custom-container">
                    <div class="row">
                        <div class="overview-image">
                            <img src="<?php echo esc_url($overview_image); ?>" alt="img">
                        </div>
                        <div class="overview-content">
                            <h2><?php echo esc_html($heading_overview); ?></h2>
                            <p><?php echo esc_html($content_overview); ?></p>
                            <div class="overview-bullets">
                                <?php echo $heading_with_bullet_point; ?>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <?php endif; ?>

        <!-- OverView Area ENd -->

        <!-- Matter Area Start -->
        <?php
            $matter_main_heading      = get_field('heading_matters'); 
            $matter_heading_below_text = get_field('heading_below_text'); 

            $matter_image_one   = get_field('matter_image_one');
            $matter_text_one    = get_field('matter_text_one');

            $matter_image_two   = get_field('matter_image_two');
            $matter_text_two    = get_field('matter_text_two');

            $matter_image_three = get_field('matter_image_three');
            $matter_text_three  = get_field('matter_text_three');

            $matter_image_four  = get_field('matter_image_four');
            $matter_text_four   = get_field('matter_text_four');

            if ( $matter_main_heading || $matter_heading_below_text || $matter_image_one || $matter_text_one || $matter_image_two || $matter_text_two || $matter_image_three || $matter_text_three || $matter_image_four || $matter_text_four ) :
        ?>
        <section class="matters">
            <?php if ( $matter_main_heading ) : ?>
                <h2><?php echo esc_html($matter_main_heading); ?></h2>
            <?php endif; ?>

            <?php if ( $matter_heading_below_text ) : ?>
                <p><?php echo esc_html($matter_heading_below_text); ?></p>
            <?php endif; ?>

            <div class="custom-container">
                <div class="row">
                    <?php if ( $matter_image_one || $matter_text_one ) : ?>
                        <div class="metter-item">
                            <?php if ( $matter_image_one ) : ?>
                                <img src="<?php echo esc_url($matter_image_one); ?>" alt="matter-image">
                            <?php endif; ?>
                            <?php if ( $matter_text_one ) : ?>
                                <p><?php echo esc_html($matter_text_one); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( $matter_image_two || $matter_text_two ) : ?>
                        <div class="metter-item">
                            <?php if ( $matter_image_two ) : ?>
                                <img src="<?php echo esc_url($matter_image_two); ?>" alt="matter-image">
                            <?php endif; ?>
                            <?php if ( $matter_text_two ) : ?>
                                <p><?php echo esc_html($matter_text_two); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( $matter_image_three || $matter_text_three ) : ?>
                        <div class="metter-item">
                            <?php if ( $matter_image_three ) : ?>
                                <img src="<?php echo esc_url($matter_image_three); ?>" alt="matter-image">
                            <?php endif; ?>
                            <?php if ( $matter_text_three ) : ?>
                                <p><?php echo esc_html($matter_text_three); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( $matter_image_four || $matter_text_four ) : ?>
                        <div class="metter-item">
                            <?php if ( $matter_image_four ) : ?>
                                <img src="<?php echo esc_url($matter_image_four); ?>" alt="matter-image">
                            <?php endif; ?>
                            <?php if ( $matter_text_four ) : ?>
                                <p><?php echo esc_html($matter_text_four); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- Matter Area End -->

        <!-- Offer Area Strat -->
         <?php
            $main_heading_offer = get_field('main_heading_offer');
            $text_offer = get_field('text_offer');

            $offer_col_one   = get_field('offer_col_one');
            $offer_col_two   = get_field('offer_col_two');
            $offer_col_three = get_field('offer_col_three');

            if ( !empty($main_heading_offer) || !empty($text_offer) || !empty(array_filter((array)$offer_col_one)) || !empty(array_filter((array)$offer_col_two)) || !empty(array_filter((array)$offer_col_three)) ) :
            ?>
            <section class="offers">
                <div class="custom-container">
                    <div class="row">
                        <?php if ( !empty($main_heading_offer) ) : ?>
                            <h2 class="sec-title"><?php echo esc_html($main_heading_offer); ?></h2>
                        <?php endif; ?>

                        <?php if ( !empty($text_offer) ) : ?>
                            <p class="sec-text"><?php echo esc_html($text_offer); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="custom-container">
                    <div class="row">
                        <?php if ( !empty(array_filter((array)$offer_col_one)) ) : ?>
                            <div class="offer-item">
                                <?php if ( !empty($offer_col_one['col_image_one_offer']) ) : ?>
                                    <img src="<?php echo esc_url($offer_col_one['col_image_one_offer']); ?>" alt="">
                                <?php endif; ?>
                                <?php if ( !empty($offer_col_one['col_one_heading_offer']) ) : ?>
                                    <h3><?php echo esc_html($offer_col_one['col_one_heading_offer']); ?></h3>
                                <?php endif; ?>
                                <?php if ( !empty($offer_col_one['col_text_one_offer']) ) : ?>
                                    <p><?php echo esc_html($offer_col_one['col_text_one_offer']); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( !empty(array_filter((array)$offer_col_two)) ) : ?>
                            <div class="offer-item">
                                <?php if ( !empty($offer_col_two['col_image_two_offer']) ) : ?>
                                    <img src="<?php echo esc_url($offer_col_two['col_image_two_offer']); ?>" alt="">
                                <?php endif; ?>
                                <?php if ( !empty($offer_col_two['col_two_heading_offer']) ) : ?>
                                    <h3><?php echo esc_html($offer_col_two['col_two_heading_offer']); ?></h3>
                                <?php endif; ?>
                                <?php if ( !empty($offer_col_two['col_text_two_offer']) ) : ?>
                                    <p><?php echo esc_html($offer_col_two['col_text_two_offer']); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( !empty(array_filter((array)$offer_col_three)) ) : ?>
                            <div class="offer-item">
                                <?php if ( !empty($offer_col_three['col_image_three_offer']) ) : ?>
                                    <img src="<?php echo esc_url($offer_col_three['col_image_three_offer']); ?>" alt="">
                                <?php endif; ?>
                                <?php if ( !empty($offer_col_three['col_three_heading_offer']) ) : ?>
                                    <h3><?php echo esc_html($offer_col_three['col_three_heading_offer']); ?></h3>
                                <?php endif; ?>
                                <?php if ( !empty($offer_col_three['col_text_three_offer']) ) : ?>
                                    <p><?php echo esc_html($offer_col_three['col_text_three_offer']); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php endif; ?>
        <!-- Offer Area End -->
        
        <!-- Common Problem Area Start -->
         <?php
            $bg_image_com_problems    = get_field('bg_image_com_problems');
            $main_heading_com_problems = get_field('main_heading_com_problems');
            $text_com_problems        = get_field('text_com_problems');
            $main_image_com_problems  = get_field('main_image_com_problems_copy');

            $common_prob_row_one   = get_field('content_row_one_com_problems');
            $common_prob_row_two   = get_field('content_row_two_com_problems');
            $common_prob_row_three = get_field('content_row_three_com_problems');
            $common_prob_row_four  = get_field('content_row_four_com_problems');

            if ( !empty($bg_image_com_problems) || !empty($main_heading_com_problems) || !empty($text_com_problems) || !empty($main_image_com_problems) || !empty(array_filter((array)$common_prob_row_one)) || !empty(array_filter((array)$common_prob_row_two)) || !empty(array_filter((array)$common_prob_row_three)) || !empty(array_filter((array)$common_prob_row_four)) ) :
            ?>
            <section class="common-problems" style="background-image: url(<?php echo esc_url($bg_image_com_problems); ?>)">
                <div class="custom-container">
                    <div class="row">
                        <?php if ( !empty($main_heading_com_problems) ) : ?>
                            <h2 class="sec-title"><?php echo esc_html($main_heading_com_problems); ?></h2>
                        <?php endif; ?>

                        <?php if ( !empty($text_com_problems) ) : ?>
                            <p class="sec-text"><?php echo esc_html($text_com_problems); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="common-container">
                        <div class="row">
                            <?php if ( !empty($main_image_com_problems) ) : ?>
                                <div class="common-problem-image">
                                    <img src="<?php echo esc_url($main_image_com_problems); ?>" alt="">
                                </div>
                            <?php endif; ?>

                            <div class="common-problem-content">
                                <ul>
                                    <?php if ( !empty(array_filter((array)$common_prob_row_one)) ) : ?>
                                        <li>
                                            <?php if ( !empty($common_prob_row_one['number_image_one']) ) : ?>
                                                <img src="<?php echo esc_url($common_prob_row_one['number_image_one']); ?>" alt="icon">
                                            <?php endif; ?>
                                            <div>
                                                <?php if ( !empty($common_prob_row_one['row_heading_one_com_problems']) ) : ?>
                                                    <strong><?php echo esc_html($common_prob_row_one['row_heading_one_com_problems']); ?></strong>
                                                <?php endif; ?>
                                                <?php if ( !empty($common_prob_row_one['row_text_one_com_problems']) ) : ?>
                                                    <span><?php echo esc_html($common_prob_row_one['row_text_one_com_problems']); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ( !empty(array_filter((array)$common_prob_row_two)) ) : ?>
                                        <li>
                                            <?php if ( !empty($common_prob_row_two['number_image_two']) ) : ?>
                                                <img src="<?php echo esc_url($common_prob_row_two['number_image_two']); ?>" alt="icon">
                                            <?php endif; ?>
                                            <div>
                                                <?php if ( !empty($common_prob_row_two['row_heading_two_com_problems']) ) : ?>
                                                    <strong><?php echo esc_html($common_prob_row_two['row_heading_two_com_problems']); ?></strong>
                                                <?php endif; ?>
                                                <?php if ( !empty($common_prob_row_two['row_text_two_com_problems']) ) : ?>
                                                    <span><?php echo esc_html($common_prob_row_two['row_text_two_com_problems']); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ( !empty(array_filter((array)$common_prob_row_three)) ) : ?>
                                        <li>
                                            <?php if ( !empty($common_prob_row_three['number_image_three']) ) : ?>
                                                <img src="<?php echo esc_url($common_prob_row_three['number_image_three']); ?>" alt="icon">
                                            <?php endif; ?>
                                            <div>
                                                <?php if ( !empty($common_prob_row_three['row_heading_three_com_problems']) ) : ?>
                                                    <strong><?php echo esc_html($common_prob_row_three['row_heading_three_com_problems']); ?></strong>
                                                <?php endif; ?>
                                                <?php if ( !empty($common_prob_row_three['row_text_three_com_problems']) ) : ?>
                                                    <span><?php echo esc_html($common_prob_row_three['row_text_three_com_problems']); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ( !empty(array_filter((array)$common_prob_row_four)) ) : ?>
                                        <li>
                                            <?php if ( !empty($common_prob_row_four['number_image_four']) ) : ?>
                                                <img src="<?php echo esc_url($common_prob_row_four['number_image_four']); ?>" alt="icon">
                                            <?php endif; ?>
                                            <div>
                                                <?php if ( !empty($common_prob_row_four['row_heading_four_com_problems']) ) : ?>
                                                    <strong><?php echo esc_html($common_prob_row_four['row_heading_four_com_problems']); ?></strong>
                                                <?php endif; ?>
                                                <?php if ( !empty($common_prob_row_four['row_text_four_com_problems']) ) : ?>
                                                    <span><?php echo esc_html($common_prob_row_four['row_text_four_com_problems']); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>
        <!-- Common Problem Area End -->

        <!-- Process Area Start -->
        <?php
            $main_heading_process = get_field('main_heading_process');
            $sub_heading_process  = get_field('sub_heading_process');
            $stepOne   = get_field('step_one'); 
            $stepTwo   = get_field('step_two'); 
            $stepThree = get_field('step_three'); 
            $stepFour  = get_field('step_four'); 
            if (
                !empty($main_heading_process) ||
                !empty($sub_heading_process) ||
                (!empty($stepOne['number_image_one']) || !empty($stepOne['step_one_heading']) || !empty($stepOne['step_one_text'])) ||
                (!empty($stepTwo['number_image_two']) || !empty($stepTwo['step_two_heading']) || !empty($stepTwo['step_two_text'])) ||
                (!empty($stepThree['number_image_three']) || !empty($stepThree['step_three_heading']) || !empty($stepThree['step_three_text'])) ||
                (!empty($stepFour['number_image_four']) || !empty($stepFour['step_four_heading']) || !empty($stepFour['step_four_text']))
            ) :
            ?>
            <section class="process">
                <?php if ( !empty($main_heading_process) ) : ?>
                    <h2><?php echo esc_html( $main_heading_process ); ?></h2>
                <?php endif; ?>

                <?php if ( !empty($sub_heading_process) ) : ?>
                    <h3><?php echo esc_html( $sub_heading_process ); ?></h3>
                <?php endif; ?>

                <div class="custom-container">
                    <div class="row">
                        <?php if ( !empty($stepOne['number_image_one']) || !empty($stepOne['step_one_heading']) || !empty($stepOne['step_one_text']) ) : ?>
                            <div class="process-item">
                                <img src="<?php echo esc_url( $stepOne['number_image_one'] ); ?>" alt="icon">
                                <h4><?php echo esc_html( $stepOne['step_one_heading'] ); ?></h4>
                                <p><?php echo esc_html( $stepOne['step_one_text'] ); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if ( !empty($stepTwo['number_image_two']) || !empty($stepTwo['step_two_heading']) || !empty($stepTwo['step_two_text']) ) : ?>
                            <div class="process-item">
                                <img src="<?php echo esc_url( $stepTwo['number_image_two'] ); ?>" alt="icon">
                                <h4><?php echo esc_html( $stepTwo['step_two_heading'] ); ?></h4>
                                <p><?php echo esc_html( $stepTwo['step_two_text'] ); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if ( !empty($stepThree['number_image_three']) || !empty($stepThree['step_three_heading']) || !empty($stepThree['step_three_text']) ) : ?>
                            <div class="process-item">
                                <img src="<?php echo esc_url( $stepThree['number_image_three'] ); ?>" alt="icon">
                                <h4><?php echo esc_html( $stepThree['step_three_heading'] ); ?></h4>
                                <p><?php echo esc_html( $stepThree['step_three_text'] ); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if ( !empty($stepFour['number_image_four']) || !empty($stepFour['step_four_heading']) || !empty($stepFour['step_four_text']) ) : ?>
                            <div class="process-item">
                                <img src="<?php echo esc_url( $stepFour['number_image_four'] ); ?>" alt="icon">
                                <h4><?php echo esc_html( $stepFour['step_four_heading'] ); ?></h4>
                                <p><?php echo esc_html( $stepFour['step_four_text'] ); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Process Area End -->

        <!-- Material Area Start -->
         <?php
            $main_heading_materials = get_field('main_heading_materials');
            $content_materials      = get_field('content_materials');
            $image_materials        = get_field('image_materials');

            if ( !empty($main_heading_materials) || !empty($content_materials) || !empty($image_materials) ) :
            ?>
            <section class="materials-methods">
                <div class="custom-container">
                    <div class="row">
                        <div class="material-content">
                            <?php if ( !empty($main_heading_materials) ) : ?>
                                <h2><?php echo esc_html( $main_heading_materials ); ?></h2>
                            <?php endif; ?>

                            <?php if ( !empty($content_materials) ) : ?>
                                <div class="materials-text">
                                    <?php echo wp_kses_post( $content_materials ); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if ( !empty($image_materials) ) : ?>
                            <div class="material-images">
                                <img src="<?php echo esc_url( $image_materials ); ?>" alt="">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Material Area End -->

        <section class="single-service-testimonials-sec">
            <?php echo do_shortcode("[hfe_template id='2163']"); ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
