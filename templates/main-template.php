<?php /* Template Name: Main Template */ ?>

<?php get_header();?>

    <!-- banner section start here -->
    <section class="banner-section style-3">
        <div class="container">
            <div class="section-wrapper">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="banner-content"> 
                            <h2 class="title"><?php the_field('hero_title'); ?></h2>
                            <p class="desc"><?php the_field('hero_desc'); ?> </p>
                            <a href="<?php the_field('hero_btn_link'); ?>" class="lab-btn"><span><?php the_field('hero_btn_text'); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section ending here -->

    <!-- features section start here -->
    <div class="feature-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php the_field('f_link_sub'); ?></span>
                <h2 class="title"><?php the_field('f_link_title'); ?></h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center home-link-boxes">
 
                <?php if(have_rows('feature_links')):
                    while(have_rows('feature_links')):the_row(); ?>
                    <div class="col">
                        <div class="feature-item">
                            <div class="feature-inner">
                                <div class="link-icon">
                                    <img src="<?php echo get_sub_field('f_img'); ?>" alt="feature">
                                </div>
                                <div class="link-desc">
                                    <h5><?php echo get_sub_field('f_title'); ?></h5>
                                    <a href="<?php echo get_sub_field('f_cta_link'); ?>" class="lab-btn-text"><?php get_sub_field('f_cta_text'); ?><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>    
                </div>
            </div>
        </div>
    </div>
    <!-- features section ending here -->

    <!-- Course Section Start Here -->
    <div class="course-section style-2 padding-tb">
        <div class="container">
            <div class="section-header">
                <span class="subtitle"><?php the_field('home_course_sub'); ?></span>
                <h2 class="title"><?php the_field('home_course_title'); ?></h2>
                <div class="course-navigations">
                    <div class="course-navi course-navi-next"><i class="icofont-double-left"></i></div>
                    <div class="course-navi course-navi-prev"><i class="icofont-double-right"></i></div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="course-slider p-2">
                    <div class="swiper-wrapper">

                    <?php
                        if(have_rows('home_courses')):
                            while(have_rows('home_courses')):the_row();
                    ?>
                        <div class="swiper-slide">
                            <div class="course-item style-3">
                                <div class="course-inner text-center">
                                    <div class="course-thumb">
                                        <img src="<?php echo get_sub_field('h_course_img'); ?>" alt="course">
                                        <ul class="course-info lab-ul">
                                            <li><span class="course-name"><?php echo get_sub_field('h_course_tag_one'); ?></span></li>
                                            <li><span class="price"><?php echo get_sub_field('h_course_tag_two'); ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="course-content">
                                        <a href="course-single.html"><h4><?php echo get_sub_field('h_course_title'); ?></h4></a>
                                        <div class="course-details">
                                            <div class="couse-count"><i class="icofont-users-alt-3"></i><?php echo get_sub_field('h_course_info_one'); ?></div>
                                            <div class="couse-topic"><i class="icofont-info"></i><?php echo get_sub_field('h_course_info_two'); ?></div>
                                        </div>
                                        <a href="<?php echo get_sub_field('h_course_cta_link'); ?>" class="lab-btn"><span><?php echo get_sub_field('h_course_cta_text'); ?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Section Ending Here -->

    <!-- Stat section start here -->
    <div class="achievement-section style-3 padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="counter-part">
                    <div class="row g-4 row-cols-lg-4 row-cols-sm-2 row-cols-1 justify-content-center">
                       
                    <?php if(have_rows('stats')):
                        while(have_rows('stats')):the_row();
                        $stat_icon = get_sub_field('stat_icon');
                        $stat_number = get_sub_field('stat_number');
                        $stat_name = get_sub_field('stat_name');
                    ?>
                    <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-icon">
                                        <?php echo '<i class="icofont-' . $stat_icon . '" aria-hidden="true"></i>' ?>
                                    </div>
                                    <div class="count-content">
                                        <h2><span class="count" data-to="<?php $stat_number; ?>" data-speed="1500"></span><span>+</span></h2>
                                        <p><?php echo $stat_name; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Achievement section ending here -->

    <!-- Event Section Start Here -->
    <div class="event-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php the_field('h_event_subheading'); ?></span>
                <h2 class="title"><?php the_field('h_event_heading'); ?></h2>
                <p class="desc"><?php the_field('h_event_desc'); ?></p>
            </div>
            <div class="section-wrapper">
                <div class="row row-cols-lg-2 row-cols-1 g-4">
                    <div class="col">
                        <div class="event-left">
                            <div class="event-item">
                                <div class="event-inner">
                                    <div class="event-thumb">
                                        <img src="<?php the_field('h_event_image'); ?>" alt="education">
                                    </div>
                                    <div class="event-content">
                                        <div class="event-date-info">
                                            <div class="edi-box">
                                                <h4><?php the_field('h_event_day'); ?></h4>
                                                <p><?php the_field('h_event_date'); ?></p>
                                            </div>
                                        </div>
                                        <div class="event-content-info">
                                           <h4><?php the_field('h_event_title'); ?></h4>
                                            <ul class="lab-ul">
                                                <li><i class="icofont-clock-time"></i> <?php the_field('h_event_time'); ?></li>
                                                <li><i class="icofont-google-map"></i> <?php the_field('h_event_loc'); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">           
                        <div class="event-right">
                        <?php if(have_rows('home_events')):
                            while(have_rows('home_events')):the_row(); 
                            $e_day = get_sub_field('event_day');
                            $e_date = get_sub_field('event_date');
                            $e_time = get_sub_field('event_time');
                            $e_title = get_sub_field('event_title');
                            $e_loc = get_sub_field('event_loc');
                            ?>
                            <div class="event-item">
                                <div class="event-inner">
                                    <div class="event-content">
                                        <div class="event-date-info">
                                            <div class="edi-box">
                                                <h4><?php echo $e_day; ?></h4>
                                                <p><?php echo $e_date; ?></p>
                                            </div>
                                        </div>
                                        <div class="event-content-info">
                                            <h5><?php echo $e_title; ?></h5>
                                            <ul class="lab-ul">
                                                <li><i class="icofont-clock-time"></i> <?php echo $e_time; ?></li>
                                                <li><i class="icofont-google-map"></i><?php echo $e_loc; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Section Ending Here -->

    <!-- panel Section Start Here -->
    <div class="panel-section padding-tb">
        <div class="container">
            <div class="row row-cols-xl-2 row-cols-1">
                <div class="col">
                    <div class="section-header">
                        <span class="subtitle"><?php the_field('h_desc_subtitle'); ?></span>
                        <h2 class="title fw-normal text-white"><?php the_field('h_desc_text'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-join">
            <div class="container">
                <div class="section-wrapper">
                    <div class="panel-title">
                        <h5><?php the_field('h_desc_cta'); ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- panel Section Ending Here -->

    <!-- Blog Section Start Here -->
    <div class="blog-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php the_field('home_blog_sub'); ?></span>
                <h2 class="title"><?php the_field('home_blog_title'); ?></h2>
            </div>
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                <?php if(have_posts()):  while(have_posts()):
                    the_post(); ?>
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <img src="<?php echo $image[0]; ?>" class="blog-thumb">
                                    <?php endif; ?>
                                </div>
                                <div class="post-content">
                                    <a href="<?php the_permalink(); ?>"><h4><?php if (strlen($post->post_title) > 20) {
                                        echo substr(the_title($before = '', $after = '', FALSE), 0, 25) . '...'; } else {
                                        the_title();
                                        } ?></h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i><?php echo get_the_author_meta('display_name', $author_id); ?></li>
                                            <li><i class="icofont-calendar"></i><?php echo get_the_date( 'd-m-Y' ); ?></li>
                                        </ul>
                                    </div>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="<?php the_permalink(); ?>" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section Ending Here -->
        
    <!-- gallerys Section Start Here -->
    <div class="gallerys-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="gallery-title"><?php the_field('gallery_title'); ?></span>   
            </div>
            <div class="section-wrapper">
                <div class="gallerys-slider overflow-hidden">
                    <div class="swiper-wrapper">
                    <?php if(have_rows('gallery_repeater')):
                        while(have_rows('gallery_repeater')):the_row();
                        $g_image = get_sub_field('gallery_image') ?>
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <div class="gallery-inner">
                                        <img src="<?php echo $g_image; ?>">
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallerys Section Ending Here -->

    <!--Subscription Section Start Here -->
    <div class="newsletters-section padding-tb">
        <div class="container">
            <div class="newsletter-area">
                <div class="news-mass">
                    <i class="icofont-email"></i>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="section-header">
                            <h2 class="title"><?php the_field('subscribe_title'); ?></h2>
                            <p><?php the_field('subscribe_text'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="section-wrapper">
                            <h5>Enter Your Name & Email Press to Submit Button</h5>
                            <?php $posts = get_field('sub_contact_form');
                                if( $posts ): 
                                    foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) 
                                    $cf7_id= $p->ID;
                                    echo do_shortcode( '[contact-form-7 id="'.$cf7_id.'" ]' ); 
                                    endforeach;
                                endif; 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subcription Section Ending Here -->
		
<?php get_footer(); ?>