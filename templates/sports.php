<?php /* Template Name: Sports Template */ ?>

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
    
    <!-- gallerys Section Start Here -->
    <div class="sport-gallery-section">
        <div class="container">
            <div class="section-wrapper">
                <div class="gallerys-slider overflow-hidden">
                    <div class="swiper-wrapper">
                        <?php
                        if(have_rows('sports_gallery')):
                            while(have_rows('sports_gallery')):the_row();
                            $s_img = get_sub_field('sports_image');
                        ?>
                        <div class="swiper-slide">
                            <div class="gallery-item">
                                <div class="gallery-inner">
                                        <img src="<?php echo $s_img; ?>">
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

    <!-- instructor Single Section Starts Here -->
    <section class="instructor-single-section padding-tb section-bg">
		<div class="container">
			<div class="instructor-wrapper">
                <h2 class="text-center"><?php the_field('timetable_title');?></h2>
				<div class="instructor-single-bottom d-flex flex-wrap mt-4">
					<div class="col-xl-12 pb-5 pb-xl-0 d-flex flex-wrap justify-content-lg-start justify-content-between">
                        <?php
                            if(have_rows('timetable_one')):
                                while(have_rows('timetable_one')):the_row();
                                $day = get_sub_field('day'); 
                        ?>
                        <div class="col-lg-3 col-sm-12" id="home-box">
                            <div class="schedule-header">
                                <div class="space"></div>
                                <h2><?php echo $day; ?></h2>
                                <div class="space"></div>
							</div>
                            <ul class="list-group">
                                <?php
                                if(have_rows('class')):
                                    while(have_rows('class')):the_row();
                                    $class = get_sub_field('class_name'); 
                                ?>
                                <li class="list-group-item"><span class="icofont-clock-time"></span> <?php echo $class; ?></li>
                                <?php endwhile; endif; ?>
                            </ul>
                        </div>
                        <?php endwhile; endif; ?>

                        <?php
                            if(have_rows('timetable_two')):
                                while(have_rows('timetable_two')):the_row();
                                $day = get_sub_field('day'); 
                        ?>
                        <div class="col-md-4 col-sm-12" id="home-box">
                            <div class="schedule-header">
                                <div class="space"></div>
                                <h2><?php echo $day; ?></h2>
                                <div class="space"></div>
							</div>
                            <ul class="list-group">
                            <?php
                                if(have_rows('class')):
                                    while(have_rows('class')):the_row();
                                    $class = get_sub_field('class_name'); 
                                ?>
                                <li class="list-group-item"><span class="icofont-clock-time"></span> <?php echo $class; ?></li>
                                <?php endwhile; endif; ?>
                            </ul>
                        </div>
                        <?php endwhile; endif; ?>
				    </div>
			    </div>
            </div>
		</div>
	</section>
    <!-- instructor Single Section Ends Here -->

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