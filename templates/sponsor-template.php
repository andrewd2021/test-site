<?php /* Template Name: Sponsors Template */ ?>

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

    <!-- category section start here -->
    <div class="sponsor-head-section padding-tb section-bg style-3">
        <div class="container">
            <div class="section-header text-center">
                <span><?php the_field('main_subtitle'); ?></span>
                <h2 class="title"><?php the_field('main_title'); ?></h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-1">
                    <div class="col">
                        <div class="sponsor-head-item text-center">
                            <div class="sponsor-head-inner">
                                <div class="sponsor-head-img">
                                    <img src="<?php the_field('main_image'); ?>" alt="category">
                                </div>
                                <div class="sponsor-head-content">
                                    <p><?php the_field('main_text'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category section start here -->

    <!-- student feedbak section start here -->
    <div class="project-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="title"><?php the_field('second_title'); ?></h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center main-sponsors">
                    <div class="col-lg-12">
                        <div class="sponsor-info">
                            <p><?php the_field('second_text_one'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-item">
                            <div class="sponsor-feed-inner">
                                <div class="sponsor-feed-top">
                                    <div class="sponsor-image">
                                        <img src="<?php the_field('second_img_one'); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-item">
                            <div class="sponsor-feed-inner">
                                <div class="sponsor-feed-top">
                                    <div class="sponsor-image">
                                        <img src="<?php the_field('second_img_two'); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sponsor-info">
                            <p><?php the_field('second_text_two'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="project-item">
                            <div class="sponsor-feed-inner">
                                <div class="sponsor-feed-top">
                                    <div class="sponsor-image">
                                        <img src="<?php the_field('third_main_img'); ?>">
                                    </div>
                                </div>
                                <div class="sponsor-info">
                                    <p><?php the_field('third_main_text'); ?></p>
                                </div>
                                <div class="sponsor-image">
                                    <img src="<?php the_field('fourth_main_img'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- student feedback section ending here -->

    <div class="project-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="title"><?php the_field('section_title_two'); ?></h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center sponsor-logos">
                    <?php
                    if(have_rows('sponsors')):
                        while(have_rows('sponsors')):the_row();
                            $s_img = get_sub_field('sponsor_img');
                    ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="sponsor-image">
                            <img src="<?php echo $s_img; ?>">
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
		
<?php get_footer(); ?>