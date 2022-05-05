<?php get_header();?>

<article class="content px-3 py-5 p-md-5">

<h1>Page not Found - Take a look at our posts</h1>

    <!-- blog section start here -->
    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">

            <?php
              $args = array(
                  'post_type' => 'post'
              );

              $post_query = new WP_Query($args);
              if($post_query->have_posts() ) {
                
                  while($post_query->have_posts() ) {
                      $post_query->the_post();
                      ?>
                      
                      <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail( $post->ID ) ): ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <img src="<?php echo $image[0]; ?>">
                                    <?php endif; ?></a>
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
                      <?php
                      }
                  }
            ?>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->

</article>

<?php
get_footer();
?>