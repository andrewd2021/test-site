<?php get_header(); ?>

    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2><?php echo the_title(); ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?php echo get_option("siteurl"); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- blog section start here -->
    <div class="blog-section blog-single padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="row row-cols-1 justify-content-center g-4">
                                <div class="col">
                                    <div class="post-item style-2">
                                        <div class="post-inner">
                                            <?php if(get_field('show_blog_img')) { ?>
                                            <div class="post-main-image">
                                                <img src="<?php the_field('blog_image'); ?>" alt="blog thumb">
                                            </div>
                                            <?php } ?>
                                            <div class="post-content">
                                                <h2><?php the_field('blog_title'); ?></h2>
                                                <div class="meta-post">
                                                    <ul class="lab-ul">
                                                        <li><i class="icofont-calendar"></i><?php echo get_the_date( 'd-m-Y' ); ?></li>
                                                        <li><i class="icofont-ui-user"></i><?php echo get_the_author_meta('display_name', $author_id); ?></li>
                                                    </ul>
                                                </div>
                                                <div><?php echo the_content(); ?></div>
                                                <div><?php the_field('blog_text_content_one') ?></div>    
                                                <p><?php the_field('blog_text_content_two') ?></p>
                                                <?php if(get_field('add_image_trio')) { ?>
                                                 <div class="row">
                                                    <?php if(have_rows('image_row')): 
                                                        while(have_rows('image_row')):the_row();
                                                        $row_img = get_sub_field('r_image');
                                                    ?>
                                                        <div class="col-lg-4 col-sm-12 blog_images">
                                                            <img src="<?php echo $row_img; ?>" alt="">
                                                        </div>
                                                        <?php endwhile; endif; ?>
                                                    </div>
                                                <?php } ?>    
                                            </div>
                                        </div>
                                    </div>

                                    <div id="comments" class="comments">
                                        <?php
                                    //  If comments are open or we have at least one comment, load up the comment template
                                    if ( comments_open() || '0' != get_comments_number() )
                                    comments_template();
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->

<?php get_footer(); ?>