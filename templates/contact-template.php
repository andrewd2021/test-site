<?php /* Template Name: Contact Template */ ?>

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

    <!-- Map & address us Section Section Starts Here -->
    <div class="map-address-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php the_field('contact_subtitle'); ?></span>
                <h2 class="title"><?php the_field('contact_title'); ?></h2>
            </div>
            <div class="section-wrapper">
                <div class="row flex-row-reverse">
                    <div class="col-xl-4 col-lg-5 col-12">
                        <div class="contact-wrapper">
                        <?php
                            if(have_rows('info_repeater')):
                                while(have_rows('info_repeater')):the_row();
                                $c_icon = get_sub_field('contact_icon');
                                $c_title = get_sub_field('contact_title');
                                $c_info = get_sub_field('contact_info');
                        ?>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <?php echo '<i class="icofont-' . $c_icon . '" aria-hidden="true"></i>' ?>
                                </div>
                                <div class="contact-content">
                                    <h6 class="title"><?php echo $c_title; ?></h6>
                                    <p><?php echo $c_info; ?></p>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="map-area">
                            <div class="maps">
                                <iframe src="<?php the_field('map_link'); ?>" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map & address us Section Section Ends Here -->
    <div class="section-wrapper">
        <h3 class="contacts-title text-center"><?php the_field('c_section_title') ?></h3>
        <div class="row contacts">
            <?php
                if(have_rows('number_repeater')):
                    while(have_rows('number_repeater')):the_row();
                    $title = get_sub_field('number_title');
            ?>
            <div class="col-lg-6 col-md-12">
                <div class="contact-wrapper">
                    <div class="contact-item d-flex justify-content-center">
                        <div class="contact-content">
                            <h6 class="title"><?php echo $title; ?></h6>
                            <?php if(have_rows('numbers')):
                                while(have_rows('numbers')):the_row();
                                $number = get_sub_field('number'); ?>
                            <p><?php echo $number; ?></p>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>  
            <?php endwhile; endif; ?> 
        </div>
    </div>

    <!-- Contact us Section Section Starts Here -->
    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle"><?php the_field('contact_form_sub'); ?></span>
                <h2 class="title"><?php the_field('contact_form_title'); ?></h2>
            </div>
            <div class="section-wrapper form-wrap">
            <?php $posts = get_field('contact_form');
                  if( $posts ): 
                      foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) 
                      $cf7_id= $p->ID;
                      echo do_shortcode( '[contact-form-7 id="'.$cf7_id.'" ]' ); 
                      endforeach;
                  endif; 
                ?>
                <p class="form-message"></p> 
            </div>
        </div>
    </div>
    <!-- Contact us Section Section Ends Here -->
		
<?php get_footer(); ?>