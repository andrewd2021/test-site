<?php /* Template Name: Library Template */ ?>

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
                        <p class="page-about-text text-center"><?php the_field('lead_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- group select section ending here -->
    
    <!-- About Us Section Start Here -->
    <div class="about-section style-3 padding-tb section-bg">
        <div class="container">
            <?php 
                if(have_rows('libraries')):
                    while(have_rows('libraries')):the_row();
                    $lib_img = get_sub_field('library_image');
                    $lib_sub = get_sub_field('library_subtitle');
                    $lib_title = get_sub_field('library_title');
                    $lib_text = get_sub_field('library_text');
                    $lib_times = get_sub_field('library_times');
                    $lib_number = get_sub_field('library_number');
            ?>
            <div class="row justify-content-center row-cols-xl-2 row-cols-1 align-items-center">
                <div class="col">
                    <div class="about-left">
                        <div class="about-thumb">
                            <img src="<?php echo $lib_img; ?>" alt="about">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about-right">
                        <div class="section-header">
                            <span class="subtitle"><?php echo $lib_sub; ?></span>
                            <h2 class="title"><?php echo $lib_title; ?></h2>
                            <p><?php echo $lib_text; ?></p>
                        </div>
                        <div class="section-wrapper">
                            <ul class="lab-ul">
                                <li>
                                    <div class="sr-left">
                                        <i class="icofont-clock-time"></i>
                                    </div>
                                    <div class="sr-right">
                                        <h5>Opening Times:</h5>
                                        <p><?php echo $lib_times; ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sr-left">
                                        <i class="icofont-bulb-alt"></i>
                                    </div>
                                    <div class="sr-right">
                                        <h5>Contact Number:</h5>
                                        <p><?php echo $lib_number; ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space"></div>
            <?php endwhile; endif; ?>
        </div>
    </div>
    <!-- About Us Section Ending Here -->

    <!-- group select section start here -->
    <div class="group-select-section">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-center g-4">
                    <div class="col-lg-12 text-center">
                        <p class="course-page-title"><?php the_field('cta_text'); ?></p>
                        <a href="<?php the_field('cta_link'); ?>"><i class="icofont-facebook" style="font-size:50px; color:blue;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- group select section ending here -->

		
<?php get_footer(); ?>