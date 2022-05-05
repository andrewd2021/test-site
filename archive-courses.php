<?php get_header(); ?>
    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Archives: Courses</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?php echo get_option("siteurl"); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Full Time Courses</li>
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
                        <p class="course-page-title">We have courses running throughout the year at Alt Valley, please get in touch to enrol</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- group select section ending here -->

    <!-- course section start here -->
    <div class="course-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                    <?php rewind_posts(); ?>
                    <?php if(have_posts()) : while(have_posts()) : the_post();
                    $course_tag = get_field('course_tag_one'); ?>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="course-content">
                                    <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <a href="<?php the_permalink(); ?>" class="ca-name">Full Time Course</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="<?php the_permalink(); ?>" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
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


<?php get_footer(); ?>