<?php
/*
Template Name: Course-Template
Template Post Type: courses
*/ ?>

<?php get_header();?>

    <!-- Page Header section start here -->
    <div class="pageheader-section style-2">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center flex-row-reverse">
                <div class="col-lg-7 col-12 course-img">
                    <div class="pageheader-thumb">
                        <img src="<?php the_field('course_image'); ?>" alt="avct">
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="pageheader-content">
                        <div class="course-category">
                            <p class="course-cate"><?php the_field('course_tag_one'); ?></p>
                        </div>
                        <h2 class="phs-title"><?php the_field('course_main_title'); ?></h2>
                        <p class="phs-desc"><?php the_field('course_sub_text'); ?></p>
                        <div class="phs-thumb">
                            <i class="icofont-location-pin"></i>
                            <span><?php the_field('course_location'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- course section start here -->
    <div class="course-single-section padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-part">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-content">
                                    <h3><?php the_field('course_overview_title'); ?></h3>
                                    <p><?php the_field('course_overview_text'); ?></p>
                                    <h4><?php the_field('course_modules_title'); ?></h4>
                                    <ul class="lab-ul">
                                        <?php
                                            if(have_rows('course_goal_repeater')):
                                                while(have_rows('course_goal_repeater')):the_row();
                                                $course_goal = get_sub_field('course_goal');
                                        ?>
                                        <li><i class="icofont-tick-mark"></i><?php echo $course_goal; ?></li>
                                        <?php endwhile; endif; ?>
                                    </ul>
                                    <p><?php the_field('course_about_one'); ?></p>
                                    <p><?php the_field('course_about_two'); ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="course-information">
                            <div class="course-info-title">
                                <h4><?php the_field('course_content_title'); ?></h4>
                            </div>
                            <div class="course-info-content">
                                <div class="accordion" id="course-accordion">

                                <?php 
                                    if(have_rows('module_acc_repeater')):
                                        while(have_rows('module_acc_repeater')):the_row();
                                        $course_acc_title = get_sub_field('course_acc_title');
                                        $course_acc_text = get_sub_field('course_acc_text');
                                ?>
                                 
                                    <div class="accordion-item">
                                    <?php $count=0; ?>
                                        <div class="accordion-header" id="accordion' .$count. '">
                                            <?php echo '<button class="d-flex flex-wrap justify-content-between" data-bs-toggle="collapse" data-bs-target="#modulelist' .$count. '" aria-expanded="true" aria-controls="modulelist' .$count. '">'?>
                                                <span><?php echo $course_acc_title; ?> : </span> <span><?php echo $course_acc_text; ?></span> </button>
                                        </div>
                                        <?php echo '<div id="modulelist' .$count. '" class="accordion-collapse collapse" aria-labelledby="accordion' .$count. '" data-bs-parent="#course-accordion">'?>
                                            <ul class="lab-ul course-item_list">
                                            <?php 
                                                if(have_rows('module_repeater')):
                                                    while(have_rows('module_repeater')):the_row();
                                                    $module_title = get_sub_field('module_title');
                                            ?>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="course-item-title"><?php echo $module_title; ?></div> 
                                                </li>
                                                <?php endwhile; endif ?>
                                            </ul>
                                        </div>        
                                    </div>
                                    <?php $count++; ?>
                                <?php endwhile; endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="authors">
                            <div class="author-thumb">
                                <img src="<?php the_field('course_loc_logo'); ?>" alt="">
                            </div>
                            <div class="author-content">
                                <h5><?php the_field('course_loc_name'); ?></h5>
                                <span><?php the_field('course_loc_address'); ?></span>
                                <p><?php the_field('course_loc_about'); ?></p>
                                <!-- <ul class="lab-ul social-icons">
                                    <li>
                                        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-part">
                        <div class="course-side-detail">
                            <div class="csd-title">
                                <div class="csdt-left">
                                    <h4 class="mb-0">Course Information</h4>
                                </div>
                                <div class="csdt-right">
                                    <p class="mb-0"><i class="icofont-clock-time"></i><?php the_field('course_start_date'); ?></p>
                                </div>
                            </div>
                            <div class="csd-content">
                                <div class="csdc-lists">
                                    <ul class="lab-ul">
                                    <?php 
                                        if(have_rows('course_info_repeater')):
                                            while(have_rows('course_info_repeater')):the_row();
                                            $c_icon = get_sub_field('course_icon');
                                            $c_title = get_sub_field('course_title');
                                            $c_desc = get_sub_field('course_desc');
                                    ?>
                                        <li>
                                            <div class="csdc-left"><?php echo '<i class="icofont-' . $c_icon . '" aria-hidden="true"></i>' ?></i><?php echo $c_title; ?></div>
                                            <div class="csdc-right"><?php echo $c_desc; ?></div>
                                        </li>
                                        <?php endwhile; endif; ?>
                                    </ul>
                                </div>

                                <div class="course-enroll">
                                    <a href="<?php the_field('course_cta_link'); ?>" class="lab-btn"><span><?php the_field('course_cta_btn'); ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course section ending here -->
		
<?php get_footer(); ?>