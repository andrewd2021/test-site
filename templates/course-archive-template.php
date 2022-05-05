<?php
/*
Template Name: Archive-Template
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
                <div class="course-showing-part">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="course-showing-part-left">
                            <p>Showing 1-6 of 10 results</p>
                        </div>
                        <div class="course-showing-part-right d-flex flex-wrap align-items-center">
                            <span>Sort by :</span>
                            <div class="select-item">
                                <select>
                                    <option value="">Select Oder</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="php">PHP</option>
                                    <option value="java">JAVA</option>
                                    <option value="javascript">JAVASCRIPT</option>
                                </select>
                                <div class="select-icon">
                                    <i class="icofont-rounded-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/01.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Adobe XD</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="rating">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                            <span class="rating-count">
                                                03 reviews
                                            </span>
                                        </div>
                                    </div>
                                    <a href="course-single.html"><h5>Fundamentals of Adobe XD Theory Learn New</h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/01.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">William Smith</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/02.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Photoshop</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="rating">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                            <span class="rating-count">
                                                03 reviews
                                            </span>
                                        </div>
                                    </div>
                                    <a href="course-single.html"><h5>Certified Graphic Design with Free Project Course</h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/02.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Lora Smith</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/03.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Photoshop</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="rating">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                            <span class="rating-count">
                                                03 reviews
                                            </span>
                                        </div>
                                    </div>
                                    <a href="course-single.html"><h5>Theory Learn New Student And Fundamentals</h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/03.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Robot Smith</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/04.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Adobe XD</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="rating">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                            <span class="rating-count">
                                                03 reviews
                                            </span>
                                        </div>
                                    </div>
                                    <a href="course-single.html"><h5>Computer Fundamentals Basic Startup Ultricies Vitae</h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/04.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Zinat Zaara</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/05.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Adobe XD</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="rating">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                            <span class="rating-count">
                                                03 reviews
                                            </span>
                                        </div>
                                    </div>
                                    <a href="course-single.html"><h5>Boozy Halloween Drinks for the Grown Eleifend Kuismod</h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/05.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Billy Rivera</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/06.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Adobe XD</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="rating">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                            <span class="rating-count">
                                                03 reviews
                                            </span>
                                        </div>
                                    </div>
                                    <a href="course-single.html"><h5>Student Want to Learn About Science And Arts</h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/06.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Subrina Kabir</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="default-pagination lab-ul">
                    <li>
                        <a href="#"><i class="icofont-rounded-left"></i></a>
                    </li>
                    <li>
                        <a href="#">01</a>
                    </li>
                    <li>
                        <a href="#" class="active">02</a>
                    </li>
                    <li>
                        <a href="#">03</a>
                    </li>
                    <li>
                        <a href="#"><i class="icofont-rounded-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- course section ending here -->
<?php get_footer(); ?>