<?php /* Template Name: Listing Two Template */ ?>

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

    <!-- About Us Section Start Here -->
    <div class="case-study-section padding-tb shape-img">
        <div class="container">
            <?php 
                if(have_rows('info_repeater')):
                    while(have_rows('info_repeater')):the_row();
                     $i_img = get_sub_field('info_img');
                     $i_sub = get_sub_field('info_sub');
                     $i_title = get_sub_field('info_title');
                     $i_text = get_sub_field('info_text');
                     $i_s1_title = get_sub_field('info_sect_title');
                     $i_s1_text = get_sub_field('info_sect_text');
                     $i_s2_title = get_sub_field('info_sect_title_two');
                     $i_s2_text = get_sub_field('info_sect_text_two');
            ?>
            <div class="row justify-content-center row-cols-lg-2 row-cols-1 case-study">
                <div class="col">
                    <div class="sf-left">
                        <div class="sfl-thumb">
                            <img src="<?php echo $i_img; ?>">
                        </div>
                    </div>
                </div>
                <div class="col listing-text">
                    <div class="about-right">
                        <div class="section-header">
                            <span class="subtitle"><?php echo $i_sub; ?></span>
                            <h2 class="title"><?php echo $i_title; ?></h2>
                            <p><?php echo $i_text; ?></p>
                        </div>
                        <div class="section-wrapper">
                            <ul class="lab-ul">
                                <li>
                                    <div class="sr-right">
                                        <h5><?php echo $i_s1_title; ?></h5>
                                        <p><?php echo $i_s1_text; ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sr-right">
                                        <h5><?php echo $i_s2_title; ?></h5>
                                        <p><?php echo $i_s2_text; ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
            <?php endwhile; endif; ?>        
        </div>
    </div>
    <!-- About Us Section Ending Here -->

		
<?php get_footer(); ?>