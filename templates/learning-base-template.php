<?php
/*
Template Name: Learning Base Template
*/ ?>

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

    <!-- group select section start here -->
    <div class="group-select-section">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-center g-4">
                    <div class="col-lg-12">
                        <p class="course-page-title text-center"><?php the_field('lead_text'); ?>.</p>
                        <p class="text-center text-white"><?php the_field('lead_sub_text'); ?><a class="read-more-btn" href="<?php the_field('lead_sub_link'); ?>"><?php the_field('lead_sub_btn'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- group select section ending here -->


    <!-- course section start here -->
    <div class="course-section padding-30 section-bg">
        <div class="container">
            <div class="course-direct-info">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3><?php the_field('content_title'); ?></h3>
                        <p><?php the_field('content_text_one'); ?></p>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">


                <?php
                    if(have_rows('course_repeater')):
                        while(have_rows('course_repeater')):the_row();
                        $course_img =  get_sub_field('course_image');
                        $course_len =  get_sub_field('course_length');
                        $course_level = get_sub_field('course_level');
                        $course_link =  get_sub_field('course_link');
                        $course_text =  get_sub_field('course_text');
                        $course_freq =  get_sub_field('course_freq');
                        $course_loc =  get_sub_field('course_loc');
                ?>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="<?php echo $course_img; ?>" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price"><?php echo $course_len; ?></div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="<?php echo $course_link; ?>"><?php echo $course_level; ?></a>
                                        </div>
                                    </div>
                                    <a href="<?php echo $course_link; ?>"><h5><?php echo $course_text; ?></h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-clock-time"></i><?php echo $course_len; ?></div>
                                        <div class="couse-topic"><i class="icofont-bar-chart"></i><?php echo $course_freq; ?></div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <i class="icofont-location-pin"></i>
                                            <p><?php echo $course_loc; ?></p>
                                        </div>
                                        <div class="course-btn">
                                            <a href="<?php echo $course_link; ?>" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                        </div>
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
    <!-- course section ending here -->

    <!-- course section start here -->
    <div class="course-section padding-30 section-bg">
        <div class="container">
            <div class="course-direct-info">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3><?php the_field('content_two_title'); ?></h3>
                        <p><?php the_field('content_two_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-2 row-cols-1">

                <?php
                    if(have_rows('opp_repeater')):
                        while(have_rows('opp_repeater')):the_row();
                        $o_image = get_sub_field('opp_image');
                        $o_title = get_sub_field('opp_title');
                        $o_link = get_sub_field('opp_link');
                        $o_type = get_sub_field('opp_type');
                        $o_age = get_sub_field('opp_age');
                        $o_loc = get_sub_field('opp_loc');

                ?>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb-two">
                                    <img src="<?php echo $o_image; ?>">
                                </div>
                                <div class="course-content">
                                    <a href="<?php echo $o_link; ?>"><h5><?php echo $o_title; ?></h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-person"></i><?php echo $o_age; ?></div>
                                        <div class="couse-topic"><i class="icofont-gear"></i><?php echo $o_type; ?></div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <i class="icofont-location-pin"></i>
                                            <p><?php echo $o_loc; ?></p>
                                        </div>
                                        <div class="course-btn">
                                            <a href="<?php echo $o_link; ?>" class="lab-btn-text">Enquire <i class="icofont-external-link"></i></a>
                                        </div>
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
    <!-- course section ending here -->

    <!-- CTA Start Here -->
    <div class="cta-section padding-tb">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col text-center">
                    <div class="section-header">
                        <p class="course-cta-text text-white text-center"><?php the_field('cta_text'); ?></p>
                    </div>
                    <a href="<?php the_field('cta_btn_link'); ?>"><button class="cta-contact-btn">Enquire Now</button></a>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>