<?php
/*
Template Name: Community Learning Template
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
                        <p class="course-page-title text-center"><?php the_field('lead_text'); ?></p>
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
                        <h3><?php the_field('info_title'); ?></h3>
                        <p><?php the_field('info_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                <?php
                    if(have_rows('courses')):
                        while(have_rows('courses')):the_row();
                        $c_img = get_sub_field('course_image');
                        $c_title = get_sub_field('course_title');
                        $c_date = get_sub_field('course_date');
                        $c_len = get_sub_field('course_length');
                        $c_loc = get_sub_field('course_location');
                        $c_cta = get_sub_field('course_cta');
                ?>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="<?php echo $c_img; ?>" alt="course">
                                </div>
                                <div class="course-content">
                                    <a href="<?php echo $c_cta; ?>"><h5><?php echo $c_title; ?></h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-date"></i><?php echo $c_date; ?></div>
                                        <div class="couse-topic"><i class="icofont-clock-time"></i><?php echo $c_len; ?></div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <i class="icofont-location-pin"></i>
                                            <a href="<?php echo site_url('/contact'); ?>" class="ca-name"><?php echo $c_loc; ?></a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="<?php echo $c_cta; ?>" class="lab-btn-text">Enquire Now <i class="icofont-external-link"></i></a>
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
                        <h3><?php the_field('course_info_title'); ?></h3>
                        <p><?php the_field('course_info_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-2 row-cols-1">
                <?php if(have_rows('course_acc_repeater')): ?>
                    <?php $count=0;
                        while(have_rows('course_acc_repeater')):the_row();
                        $c_acc_name = get_sub_field('course_acc_name');
                        $c_acc_title = get_sub_field('course_acc_title');
                        $c_acc_date = get_sub_field('course_acc_date');
                        $c_acc_text = get_sub_field('course_acc_text');
                        $c_acc_info = get_sub_field('course_acc_info');
                        $c_acc_cta= get_sub_field('course_acc_cta');
                        $c_acc_loc = get_sub_field('course_acc_loc');
                    ?>
                    <div class="col">
                        <div class="accordion" id="courseAccordion<?php echo $count; ?>">
                            <div class="accordion-item">
                                <div class="accordion-header als-acc-header" id="accordion<?php echo $count; ?>">
                                    <button class="d-flex flex-wrap justify-content-between" data-bs-toggle="collapse" data-bs-target="#courseList<?php echo $count; ?>" aria-expanded="true" aria-controls="courseList<?php echo $count; ?>">
                                    <span><?php echo $c_acc_name; ?></button>
                                </div>
                                <div id="courseList<?php echo $count; ?>" class="accordion-collapse collapse" aria-labelledby="accordion<?php echo $count; ?>" data-bs-parent="#courseAccordion<?php echo $count; ?>">
                                    <div class="course-item">
                                        <div class="course-inner">
                                            <div class="course-content">
                                                <h5><?php echo $c_acc_title; ?></h5>
                                                <div class="course-details">
                                                    <p><?php echo $c_acc_date; ?></p>
                                                    <p><?php echo $c_acc_text; ?></p>  
                                                    <p><?php echo $c_acc_info; ?></p>     
                                                </div>
                                                <div class="course-footer">
                                                    <div class="course-author">
                                                        <i class="icofont-location-pin"></i>
                                                        <a href="<?php echo $c_acc_cta; ?>" class="ca-name"><?php echo $c_acc_loc; ?></a>
                                                    </div>
                                                    <div class="course-btn">
                                                        <a href="<?php echo $c_acc_cta; ?>" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                    <?php $count++; endwhile; ?>
                    <?php endif; ?>  
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
                    <a href="<?php the_field('cta_link'); ?>"></a><button class="cta-contact-btn">Enquire Now</button>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>