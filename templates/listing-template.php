<?php /* Template Name: Listing Template */ ?>

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

    <!-- student feedbak section start here -->
    <div class="case-study-section padding-tb shape-img">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php the_field('page_subtitle'); ?></span>
                <h2 class="title"><?php the_field('page_title'); ?></h2>
            </div>
            <div class="section-wrapper">
            <?php
                if(have_rows('listings')):
                    while(have_rows('listings')):the_row();
                    $l_img = get_sub_field('listing_image');
                    $l_title = get_sub_field('listing_title');
                    $l_subtitle = get_sub_field('listing_subtitle');
                    $l_text = get_sub_field('listing_text');
            ?>
                <div class="row justify-content-center row-cols-lg-2 row-cols-1 case-study">
                    <div class="col">
                        <div class="sf-left">
                            <div class="sfl-thumb">
                                <img src="<?php echo $l_img; ?>" alt="student feedback">
                            </div>
                        </div>
                    </div>
                    <div class="col listing-text">
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-bottom">
                                    <h4><?php echo $l_title; ?></h4>
                                    <h5><?php echo $l_subtitle; ?></h5>
                                    <p><?php echo $l_text; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    <!-- student feedbak section ending here -->

		
<?php get_footer(); ?>