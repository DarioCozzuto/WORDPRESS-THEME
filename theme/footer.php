
<footer id="footer">
    <div class="container footer-container">
      <div class="row">
        <div class="col-md-3">

            <?php $image = get_field('logo_footer','option');
            if( !empty( $image ) ): ?>
                <img class="logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> 
            <?php endif; ?>
                <p><?php the_field('paragraph_footer','option'); ?></p>
        
            <?php if( get_field('link_of_the_app','option') && get_field( 'download_applestore','option' )): ?>    
                <a href="<?php the_field('link_of_the_app','option'); ?>" target="_blank"class="app_download">
            <?php endif; ?>
                    <?php if( get_field( 'download_applestore','option' ) ): ?>
                        <img src="<?php echo get_stylesheet_directory_uri().'/images/app-store-download.png'; ?>" alt=""> 
                    <?php endif; ?>
            <?php if( get_field('link_of_the_app','option') && get_field( 'download_applestore','option' )): ?>
                </a>
            <?php endif; 


            $object1 =  get_field('checkbox_twitter','option');
            $object2 =  get_field('checkbox_facebook','option');
            $object3 =  get_field('checkbox_tumblr','option');
            $object4 =  get_field('checkbox_pinterest_p','option');
            $object5 =  get_field('checkbox_linkedin','option');

            if( $object1 || $object2 || $object3 || $object4 || $object5 ): ?>

                <ul class="socials"> <?php

                    if ( get_field('checkbox_twitter','option') )  : ?>

                        <li>
                            <?php if (get_field('link_twitter','option')) : ?>
                            <a href="<?php the_field('link_twitter','option'); ?>" target="_blank">
                            <?php endif; ?>
                                <i class="fa fa-twitter"></i>
                            <?php if (get_field('link_twitter','option')) : ?>
                            </a>
                            <?php endif; ?>
                        </li>

                    <?php endif; 

                    if ( get_field('checkbox_facebook','option') )  : ?>

                        <li>
                            <?php if (get_field('link_facebook','option')) : ?>
                            <a href="<?php the_field('link_facebook','option'); ?>" target="_blank">
                            <?php endif; ?>
                                <i class="fa fa-facebook"></i>
                            <?php if (get_field('link_facebook','option')) : ?>
                            </a>
                            <?php endif; ?>
                        </li>

                    <?php endif; 

                    if ( get_field('checkbox_tumblr','option') )  : ?>

                        <li>
                            <?php if (get_field('link_tumblr','option')) : ?>
                            <a href="<?php the_field('link_tumblr','option'); ?>" target="_blank">
                            <?php endif; ?>
                                <i class="fa fa-tumblr"></i>
                            <?php if (get_field('link_tumblr','option')) : ?>
                            </a>
                            <?php endif; ?>
                        </li>

                    <?php endif; 

                    if ( get_field('checkbox_pinterest_p','option') )  : ?>

                        <li>
                            <?php if (get_field('link_pinterest_p','option')) : ?>
                            <a href="<?php the_field('link_pinterest_p','option'); ?>" target="_blank">
                            <?php endif; ?>
                                <i class="fa fa-pinterest-p"></i>
                            <?php if (get_field('link_pinterest_p','option')) : ?>
                            </a>
                            <?php endif; ?>
                        </li>

                    <?php endif; 

                    if ( get_field('checkbox_linkedin','option') )  : ?>

                        <li>
                            <?php if (get_field('link_linkedin','option')) : ?>
                            <a href="<?php the_field('link_linkedin','option'); ?>" target="_blank">
                            <?php endif; ?>
                                <i class="fa fa-linkedin"></i>
                            <?php if (get_field('link_linkedin','option')) : ?>
                            </a>
                            <?php endif; ?>
                        </li>

                    <?php endif; ?>

                </ul>

            <?php endif; ?>
        </div>
        
        <div class="col-md-2 col-md-offset-3 col-sm-4 col-xs-6 footer-links">
        <?php if( have_rows('first_colum_footer','option') ): ?>
            <ul>
              <li><p class="title"><?php the_field('title_left_column_footer','option'); ?></p></li>
            <?php while( have_rows('first_colum_footer','option') ): the_row(); 
                $link = get_sub_field('link_footer_repeater1','option');
                $text = get_sub_field('text_footer_repeater1','option');
                ?>
                <li>
                    <a href="<?php the_sub_field('link_footer_repeater1','option'); ?>"><?php the_sub_field('text_footer_repeater1','option'); ?></a>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 footer-links">
        <?php if( have_rows('second_colum_footer','option') ): ?>
            <ul>
              <li><p class="title"><?php the_field('title_center_column_footer','option'); ?></p></li>
              <?php while( have_rows('second_colum_footer','option') ): the_row(); 
                  $link = get_sub_field('link_footer_repeater2','option');
                  $text = get_sub_field('text_footer_repeater2','option');
                  ?>
                  <li>
                      <a href="<?php the_sub_field('link_footer_repeater2','option'); ?>"><?php the_sub_field('text_footer_repeater2','option'); ?></a>
                  </li>
              <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 footer-links">
        <?php if( have_rows('third_colum_footer','option') ): ?>
            <ul>
              <li><p class="title"><?php the_field('title_right_column_footer','option'); ?></p></li>
              <?php while( have_rows('third_colum_footer','option') ): the_row(); 
                  $link = get_sub_field('link_footer_repeater3','option');
                  $text = get_sub_field('text_footer_repeater3','option');
                  ?>
                  <li>
                      <a href="<?php the_sub_field('link_footer_repeater3','option'); ?>"><?php the_sub_field('text_footer_repeater3','option'); ?></a>
                  </li>
              <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        </div>
            <!-- <div class="col"> <?php echo do_shortcode('[currency_bcc type="fix" w="200" h="350" c="ffffff" fc="000000" a="1" f="EUR" t="USD" g="off" sh="on" b="on" fl="on" p="c" cs="" s="off" mf="1" df="2" d="1" su="on" lang="en-US"]'); ?> </div> -->
        </div>
    </div>
  </footer>



<script src="<?php echo get_stylesheet_directory_uri().'/js/jquery-2.1.4.min.js'; ?>"></script> <!-- jQuery -->
<script src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.min.js'; ?>"></script>  <!-- Bootstrap -->
<script src="<?php echo get_stylesheet_directory_uri().'/js/wow.min.js'; ?>"></script>  <!-- wow -->
<script src="<?php echo get_stylesheet_directory_uri().'/js/jquery.magnific-popup.min.js'; ?>"></script>  <!-- wow -->
<script src="<?php echo get_stylesheet_directory_uri().'/js/main.js'; ?>"></script>  <!-- Main Script -->
</body>
</html>



 