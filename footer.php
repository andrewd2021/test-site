<!-- Footer Section Start Here -->
<footer class="style-2">
    <div class="footer-top padding-tb">
        <div class="container">
            <div class="row g-4 row-cols-xl-4 row-cols-sm-2 row-cols-1 justify-content-center">
                <div class="col">
                    <div class="footer-item our-address">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <?php  
                                        $logo = get_field('site_logo', 'option');
                                    ?>
                                    <a class="navbar-brand" href="<?php echo get_option("siteurl"); ?>"><img src="<?php echo $logo; ?>"></a>
                                </div>
                                <div class="content">
                                    <p><?php the_field('footer_text', 'option'); ?></p>                                    
                                    <ul class="lab-ul office-address">
                                        <li><i class="icofont-google-map"></i><?php the_field('avct_address', 'option'); ?></li>
                                        <li><i class="icofont-phone"></i><?php the_field('avct_number', 'option'); ?></li>
                                        <li><i class="icofont-envelope"></i><?php the_field('avct_email', 'option'); ?></li>
                                    </ul>
                                    <ul class="lab-ul social-icons">
                                        <?php
                                            if(have_rows('social_repeater', 'option')):
                                                while(have_rows('social_repeater', 'option')):the_row();
                                                $soc_icon = get_sub_field('social_icon');
                                                $soc_link = get_sub_field('social_link');
                                        ?>
                                        <li><a href="<?php echo $soc_link; ?>"><?php echo '<i class="icofont-' . $soc_icon . '" aria-hidden="true"></i>' ?></a></li>
                                        <?php endwhile; endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h4>Main Links</h4>
                                </div>
                                <div class="content">
                                    <?php 
                                        wp_nav_menu(
                                            array(
                                                'menu' => 'footer_links_one',
                                                'container' => '',
                                                'theme_location' => 'footer_one',
                                                'items_wrap' => '<ul id="" class="lab-ul">%3$s</ul>'
                                            )
                                        );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="content">
                                    <?php 
                                        wp_nav_menu(
                                            array(
                                                'menu' => 'footer_links_two',
                                                'container' => '',
                                                'theme_location' => 'footer_two',
                                                'items_wrap' => '<ul id="" class="lab-ul">%3$s</ul>'
                                            )
                                        );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-item twitter-post">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h4>Recent Updates</h4>
                                </div>
                                <div class="fb-page" data-href="<?php the_field('fb_feed_link'); ?>" data-tabs="timeline" data-width="400" data-height="auto" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="<?php the_field('fb_feed_link'); ?>" class="fb-xfbml-parse-ignore"><a href="<?php the_field('fb_feed_link'); ?>">Alt Valley Community Trust</a></blockquote></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="section-wrapper justify-content-center">
            <div class="row g-4 row-cols-1">
                    <div class="col">
                    <p>&copy; 2022 <a href="<?php echo get_option("siteurl"); ?>">Alt Valley Trust</a> Designed by <a href="https://anddevuk.com" target="_blank">Anddevuk</a></p>
                        <div class="footer-bottom-list">
                            <?php if(have_rows('bottom_links', 'option')):
                                while(have_rows('bottom_links', 'option')):the_row();
                                    $link_url = get_sub_field('link_url');
                                    $link_text = get_sub_field('link_text');
                                ?>
                            <a href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section Ending Here -->

<div class="charity-reg-footer">
    <p class="charity-reg text-center"><?php the_field('charity_info', 'option'); ?></p>
</div>

<?php 
  wp_footer();
?>

</body>

</html>