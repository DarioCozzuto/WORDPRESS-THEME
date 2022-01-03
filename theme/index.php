<?php get_header(); ?>

<section id="header" <?php if( get_field('background_image_sub_header','option') ): ?> style="background-image: url('<?php the_field('background_image_sub_header','option'); ?>');" <?php endif; ?> >
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h1 class="wow fadeInUp"><?php the_field('title_subheader','option'); ?></h1>
        <p class="wow fadeInUp" data-wow-delay=".2s"><?php the_field('paragraph_subheader','option'); ?></p>
        <?php if( get_field('url_video_subheader','option') != "" ): ?>
        <a href="<?php the_field('url_video_subheader','option'); ?>" class="btn btn-lg video-btn wow fadeInUp lightbox mfp-iframe" data-wow-delay=".3s" data-effect="mfp-zoom-in"><i class="fa fa-play"></i>Watch the video</a>
        <?php endif; ?>
      </div>

      <!-- iPhone -->  
      <?php if( get_field('fadeinup_image_sub_header','option') ): ?>
      <img class="header_iphone wow fadeInUp" src="<?php the_field('fadeinup_image_sub_header','option'); ?>" alt="" data-wow-delay=".4s">
      <?php endif; ?>
      <!-- //iPhone -->

    </div>
  </div>
</section><!-- //Header -->

<section id="features">
    <div class="container">
      <div class="row">
        <div class="col-md-6 feature-item">
          <div class="feature wow fadeInUp">
            <div class="f-icon"><i class="lnr <?php the_field('icon_left','option'); ?>"></i></div>
            <div class="f-description">
              <h4><?php the_field('title_left_features_section','option'); ?></h4>
              <p><?php the_field('paragraph_left_features_section','option'); ?></p>
             </div>
          </div>
        </div>
        <div class="col-md-6 feature-item">
          <div class="feature wow fadeInUp" data-wow-delay=".1s">
            <div class="f-icon"><i class="lnr <?php the_field('icon_right','option'); ?>"></i></div>
            <div class="f-description">
              <h4><?php the_field('title_right_features_section','option'); ?></h4>
              <p><?php the_field('paragraph_right_features_section','option'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //Features -->

  <section id="iphone-feature">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-7">
          <h2>
            <?php the_field('title_iphone_features','option'); ?>
          </h2>
          <p>
            <?php the_field('paragraph_iphone_features','option'); ?>
          </p>
          <div class="btns-container">
            <?php 
            $link_left = get_field('button_left_ifeatures','option');
            if( $link_left ): 
                $link_left_url = $link_left['url'];
                $link_left_title = $link_left['title'];
                $link_left_target = $link_left['target'] ? $link_left['target'] : '_self';
                ?>
                <a class="btn btn-blue" href="<?php echo esc_url( $link_left_url ); ?>" target="<?php echo esc_attr( $link_left_target ); ?>"><?php echo esc_html( $link_left_title ); ?></a>
            <?php endif; 

            $link_right = get_field('button_right_ifeatures','option');
            if( $link_right ): 
                $link_right_url = $link_right['url'];
                $link_right_title = $link_right['title'];
                $link_right_target = $link_right['target'] ? $link_right['target'] : '_self';
                ?>
                <a class="btn" href="<?php echo esc_url( $link_right_url ); ?>" target="<?php echo esc_attr( $link_right_target ); ?>"><?php echo esc_html( $link_right_title ); ?></a>
            <?php endif; ?>
          </div>
        </div>

        <div class="iphone-showcase wow fadeInLeft">
          <div class="device">
          <?php $image = get_field('image_ifeatures','option'); 
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> 
            <?php endif; ?>
          </div>
        </div><!-- //iPhone Showcase -->


      </div>
    </div>
  </section><!-- //iPhone Feature -->

  <section id="map-feature">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h2><?php the_field('title_map_features','option'); ?></h2>
          <p>
            <?php the_field('paragraph_map_features','option'); ?>
          </p>
          <div class="partners">
            <div class="title"><?php the_field('subtitle_map_features','option'); ?></div>
            <ul>
              <li>
                <?php if (get_field('link_subimage_left_mapfeatures','option')) : ?> <a href="<?php the_field('link_subimage_left_mapfeatures','option'); ?>"> <?php endif; ?>
                  <?php $image = get_field('subimage_left_mapfeatures','option'); 
                  if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> 
                  <?php endif; ?>
                <?php if (get_field('link_subimage_left_mapfeatures','option')) : ?> </a> <?php endif; ?>
              </li> 
              <li>
                <?php if (get_field('link_subimage_right_mapfeatures','option')) : ?> <a href="<?php the_field('link_subimage_right_mapfeatures','option'); ?>"> <?php endif; ?>
                  <?php $image = get_field('subimage_right_mapfeatures','option'); 
                  if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> 
                  <?php endif; ?>
                <?php if (get_field('link_subimage_right_mapfeatures','option')) : ?> </a> <?php endif; ?>
              </li>   
            </ul>
          </div>
        </div>

        <div class="map-showcase wow fadeInRight">
          <div class="map">
              <?php $image = get_field('image_mapfeatures','option'); 
                if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> 
                <?php endif; ?>
          </div>
        </div><!-- //Map Showcase -->

      </div>
    </div>
  </section><!-- //Map Feature -->

  <section id="iphone-screens">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2><?php the_field('title_iphone_screen','option'); ?></h2>
          <hr>
          <p class="subtitle"><?php the_field('paragraph_iphone_screen','option'); ?></p>
        </div>
      </div>
    </div>

    <div class="images-showcase wow fadeIn">
      <ul class="images-list">

        <li>
            <?php $image = get_field('image_1_iscreen','option'); 
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> 
            <?php endif; ?>      
        </li>
        <li>
            <?php $image = get_field('image_2_iscreen','option'); 
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> 
            <?php endif; ?>      
        </li>
        <li class="main-img">
            <?php $image = get_field('image_3_iscreen','option'); 
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> 
            <?php endif; ?>      
        </li>
        <li>
            <?php $image = get_field('image_4_iscreen','option'); 
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> 
            <?php endif; ?>      
        </li>
        <li>
            <?php $image = get_field('image_5_iscreen','option'); 
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> 
            <?php endif; ?>      
        </li>

      </ul>
    </div>
    
  </section><!-- //iPhone Screens -->

  <section id="ready-to-buy">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="subtitle">Text<span class="f-w-400">Here</span></p>
          <h2><?php the_field('title_readytobuy','option'); ?></h2>
          <form action="">
            <div class="form-group">
              <input type="email" placeholder="Email here">
              <a href="#" class="btn btn-green">Send Invite <i class="fa fa-arrow-right"></i></a>
            </div>
          </form>
          <p class="subtitle">Or Download From</p>
          <div class="download-btn">
            <a href="#" class="btn btn-dark">
              <i class="fa fa-apple"></i>
              <span>
                Dowload on the <br>
                <b>App Store</b>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //Ready to Buy -->

  <section id="plan">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Choose your perfect plan</h2>
          <p class="subtitle">You are</p>
          <div class="toggle-container cf">
            <div class="switch-toggles">
              <div class="individual">Individual</div> <!-- active -->
              <div class="company">Company</div>
            </div>
          </div>
          <p>
            Thus much I thought proper to tell you in relation to yourself, and to the trust I reposed in you.
          </p>
          <p class="info">Have a bigger team? <a href="#">Let‘s talk</a></p>
        </div>
        <div id="price_tables" class="col-md-7 col-md-offset-1">
          <div class="individual cf">
            <div class="price-table highlighted">
              <div class="table-inner text-center">
                <h3>Starter</h3>
                <span class="price">Free</span>
                <p class="phrase">Build your schedule<br> every day</p>
                <ul class="feature-list">
                  <li><i class="fa fa-check"></i> Unlimeted events</li>
                  <li><i class="fa fa-check"></i> Connect Dropbox & Evernote</li>
                  <li>&nbsp;</li>
                </ul>
                <a href="" class="btn btn-blue">Get Started</a>                
              </div>
            </div>
            <div class="price-table">
              <div class="table-inner text-center">
                <h3>Pro</h3>
                <span class="price">$4.99</span>
                <p class="phrase">Make your life<br> better</p>
                <ul class="feature-list">
                  <li><i class="fa fa-check"></i> Unlimeted events</li>
                  <li><i class="fa fa-check"></i> Connect Dropbox & Evernote</li>
                  <li><i class="fa fa-check"></i> Personal assistant</li>
                </ul>
                <a href="" class="btn btn-blue">Make me a pro</a>                
              </div>
            </div>
          </div><!-- /Individual -->

          <div class="company cf">
            <div class="price-table highlighted">
              <div class="table-inner text-center">
                <h3>Starter</h3>
                <span class="price">Free</span>
                <p class="phrase">Build your schedule<br> every day</p>
                <ul class="feature-list">
                  <li><i class="fa fa-check"></i> Unlimeted events</li>
                  <li><i class="fa fa-check"></i> Connect Dropbox & Evernote</li>
                  <li>&nbsp;</li>
                </ul>
                <a href="" class="btn btn-blue">Get Started</a>                
              </div>
            </div>
            <div class="price-table">
              <div class="table-inner text-center">
                <h3>Pro</h3>
                <span class="price">$4.99</span>
                <p class="phrase">Make your life<br> better</p>
                <ul class="feature-list">
                  <li><i class="fa fa-check"></i> Unlimeted events</li>
                  <li><i class="fa fa-check"></i> Connect Dropbox & Evernote</li>
                  <li><i class="fa fa-check"></i> Personal assistant</li>
                </ul>
                <a href="" class="btn btn-blue">Make me a pro</a>                
              </div>
            </div>
          </div><!-- /Company -->
        </div>
      </div>
    </div>
  </section><!-- //Plan -->

  <section id="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="subtitle"></p>
          <h2>Subscribe our newsletters</h2>
          <form action="">
            <div class="form-group">
              <input type="email" placeholder="Email here">
              <a href="#" class="btn btn-green">Subscribe</a>
            </div>
          </form>
          <p class="promise">We promise to never spam you.</p>
        </div>
      </div>
      </div>
    </div>
  </section><!-- //Subscribe -->



<?php get_footer(); ?>