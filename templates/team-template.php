<?php /* Template Name: Teams Template */ ?>

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
                <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-3">
                    <?php if(have_rows('partners')): ?>
                        <?php $count=0;
                            while(have_rows('partners')):the_row();
                            $pa_img = get_sub_field('partner_image');
                            $pa_name = get_sub_field('partner_name');
                            $pa_pos = get_sub_field('partner_pos');
                            $pa_info = get_sub_field('partner_info');
                    ?>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb partner-img">
                                    <img src="<?php echo $pa_img; ?>" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <h4><?php echo $pa_name; ?></h4>
                                    <p><?php echo $pa_pos; ?></p>
                                </div>

                                <div class="accordion" id="partner<?php echo $count; ?>">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accordion<?php echo $count; ?>">
                                            <button class="d-flex flex-wrap justify-content-between part-btn" data-bs-toggle="collapse" data-bs-target="#partnerChar<?php echo $count; ?>" aria-expanded="true" aria-controls="partnerChar<?php echo $count; ?>"> 
                                            <span>Read More</span></button>
                                        </div>
                                        <div id="partnerChar<?php echo $count; ?>" class="accordion-collapse collapse" aria-labelledby="accordion<?php echo $count; ?>" data-bs-parent="#partner<?php echo $count; ?>">
                                            <div class="partner-about">
                                                <p><?php echo $pa_info; ?></p>
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
		
<?php get_footer(); ?>