<?php /* Template Name: Info Template */ ?>

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
        <div class="instructor-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
            <div class="row g-4 justify-content-center row-cols-1">
                    <div class="col">
                        <div class="info-page-images">
                            <div class="row">
                            <?php if(have_rows('logo_repeater')):
                            while(have_rows('logo_repeater')):the_row();
                                $i_logo = get_sub_field('info_logo');                    
                            ?>  
                                <div class="col-lg-3 col-xs-12 info-logos">
                                    <img src="<?php echo $i_logo; ?>" alt="">
                                </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                        <div class="about-text">
                            <?php the_field('about_text'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instructors Section Ending Here -->
    
<?php get_footer(); ?>