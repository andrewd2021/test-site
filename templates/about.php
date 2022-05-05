<?php /* Template Name: About Template */ ?>

<?php get_header();?>

    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2><?php the_field('pageheader_title'); ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- About Us Section Start Here -->
    <div class="about-section style-3 padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center row-cols-xl-2 row-cols-1 align-items-center">
                <div class="col">
                    <div class="about-left">
                        <div class="about-thumb">
                            <img src="<?php the_field('main_about_image'); ?>" alt="about">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about-right">
                        <div class="section-header">
                            <span class="subtitle"><?php the_field('about_subtitle'); ?></span>
                            <h2 class="title"><?php the_field('about_title'); ?></h2>
                            <p><?php the_field('about_text'); ?></p>
                        </div>
                        <div class="section-wrapper">
                            <ul class="lab-ul">
                            <?php
                                if(have_rows('about_repeater')):
                                    while(have_rows('about_repeater')):the_row();
                                    $a_icon = get_sub_field('about_icon');
                                    $a_title = get_sub_field('about_repeater_title');
                                    $a_text = get_sub_field('about_repeater_text');
                            ?>
                                <li>
                                    <div class="sr-left">
                                    <?php echo '<i class="icofont-' . $a_icon . '" aria-hidden="true"></i>' ?>
                                    </div>
                                    <div class="sr-right">
                                        <h5><?php echo $a_title; ?></h5>
                                        <p><?php echo $a_text; ?></p>
                                    </div>
                                </li>
                            <?php endwhile; endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section Ending Here -->

    <!-- Feedback section start here -->
    <div class="student-feedbak-section padding-tb shape-img">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php the_field('feedback_sub'); ?></span>
                <h2 class="title"><?php the_field('feedback_title'); ?></h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center row-cols-lg-2 row-cols-1">
                    <div class="col">
                        <div class="sf-left">
                            <div class="sfl-thumb">
                                <img src="<?php the_field('feedback_img'); ?>" alt="student feedback">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-top">
                                    <div class="sft-left">
                                        <div class="sftl-content">
                                            <h6><?php the_field('feedback_person'); ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="stu-feed-bottom">
                                    <p><?php the_field('feedback_text'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-top">
                                    <div class="sft-left">
                                        <div class="sftl-content">
                                            <h6><?php the_field('feedback_person_two'); ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="stu-feed-bottom">
                                    <p><?php the_field('feedback_text_two'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feedback section ending here -->

    <!-- Vision Section Start Here -->
    <div class="instructor-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php the_field('vision_title'); ?></span>
                <p class="title"><?php the_field('vision_text_one'); ?></p>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-1">
                    <div class="col">
                        <div class="about-text">
                         <p class="text-center"><?php the_field('vision_text_two'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision Section Ending Here -->

    <!-- Service section start here -->
    <div class="skill-section padding-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-12">
                    <div class="section-header">
                        <h2 class="title"><?php the_field('abt_service_title'); ?></h2>
                        <a href="<?php the_field('abt_service_link'); ?>" class="lab-btn"><span><?php the_field('abt_service_btn'); ?></span></a>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="section-wrpper">
                        <div class="row g-4 justify-content-center row-cols-sm-2 row-cols-1">
                            <?php 
                                if(have_rows('abt_services')):
                                    while(have_rows('abt_services')):the_row();
                                    $abt_s_title = get_sub_field('serv_title');
                                    $abt_s_text = get_sub_field('serv_text');
                                    $abt_s_link = get_sub_field('serv_link');
                            ?>
                            <div class="col">
                                <div class="skill-item">
                                    <div class="skill-inner">
                                        <a href="<?php echo $abt_s_link; ?>">
                                            <div class="skill-content">
                                                <h5><?php echo $abt_s_title; ?></h5>
                                                <p><?php echo $abt_s_text; ?></p>
                                            </div>
                                        </a>
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
    <!-- Service section ending here -->

    <!-- Blog Section Start Here -->
    <div class="blog-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php the_field('abt_blog_subtitle'); ?></span>
                <h2 class="title"><?php the_field('abt_blog_title'); ?></h2>
            </div>
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                <?php 
                    $wp_query = new WP_Query(array('posts_per_page'=>3));
                    while ($wp_query->have_posts()) : $wp_query->the_post();?>
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
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section Ending Here -->

    <!-- sponsor section start here -->
    <div class="sponsor-section section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="sponsor-slider">
                    <div class="swiper-wrapper">
                        <?php 
                            if(have_rows('sponsor_repeater')):
                               while(have_rows('sponsor_repeater')):the_row();
                               $sponsor = get_sub_field('sponsor');
                        ?>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <div class="sponsor-thumb">
                                    <img src="<?php echo $sponsor; ?>" alt="sponsor">
                                </div>
                            </div>
                        </div>
                         <?php endwhile; endif; ?>       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sponsor section ending here -->
		
<?php get_footer(); ?>