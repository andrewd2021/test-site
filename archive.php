<?php get_header();?>

    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>All News & Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?php echo get_option("siteurl"); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">The Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- blog section start here -->
    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
            <?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                $posts_query = new WP_Query(
                array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'paged' => $paged
                ) ); ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                <?php rewind_posts(); ?>
                <?php while ( $posts_query->have_posts() ) {
                            $posts_query->the_post(); ?>
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?>" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i><?php echo get_the_author_meta('display_name', $author_id); ?></li>
                                            <li><i class="icofont-calendar"></i><?php echo get_the_date( 'd-m-Y' ); ?></li>
                                        </ul>
                                    </div>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="<?php the_permalink(); ?>" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->

<?php
get_footer();
?>