<?php get_header(); ?>

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

    <div class="instructor-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
            <?php    
                the_content(); 
            ?>
            </div>
        </div>
    </div>

<?php
get_footer();
?>