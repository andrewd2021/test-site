<?php /* Template Name: AVV Template */ ?>

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

    <!-- Instructors Section Start Here -->
    <div class="instructor-section style-3 padding-tb section-bg-ash">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php the_field('display_subtitle'); ?></span>
                <h2 class="title"><?php the_field('display_title'); ?></h2>
            </div>
            <div class="section-wrapper">
                <div class="instructor-bottom">
                    <div class="instructor-slider overflow-hidden">
                        <div class="instructor-navi instructor-slider-next"><i class="icofont-rounded-double-right"></i></div>
                        <div class="instructor-navi instructor-slider-prev"><i class="icofont-rounded-double-left"></i></div>
                        <div class="swiper-wrapper">
                        <?php
                            if(have_rows('displays')):
                                while(have_rows('displays')):the_row();
                                $p_item = get_sub_field('post_image');
                                $p_link = get_sub_field('post_link');
                                $p_text = get_sub_field('post_text');
                        ?>
                            <div class="swiper-slide">
                                <div class="instructor-item">
                                    <div class="instructor-inner">
                                        <div class="instructor-thumb">
                                            <img src="<?php echo $p_item; ?>" alt="instructor">
                                        </div>
                                        <div class="instructor-content">
                                            <a href="<?php echo $p_link; ?>"><h5><?php echo $p_text; ?></h5></a>
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
    <!-- Instructors Section Ending Here -->
		
<?php get_footer(); ?>