<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>New Providence</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/fonts/font-awesome/css/font-awesome.min.css'; ?>"> <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/normalize.css'; ?>"> <!-- CSS reset -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.min.css'; ?>"> <!-- Bootstrap Grid -->
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/animate.min.css'; ?>"><!-- Animate -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style.css'; ?>"> <!-- Resource style -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/magnific-popup.css'; ?>"> <!-- Resource style -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<header id="main-nav">
    <div class="container">

      <a id="navigation" href="#"><i class="fa fa-bars"></i></a>

      <div id="slide_out_menu">
        <a href="#" class="menu-close"><i class="fa fa-times"></i></a>
        <div class="logo"><img src="<?php the_field('logo_white','option'); ?>" alt="<?php the_field('name_of_the_logo_white','option'); ?>"></div>
        <ul>
        <?php
        wp_nav_menu( array( 
          'theme_location' => 'pop-up-left-menu'
          ) ); 
        ?>
          	<li><a href="#" class="btn btn-blue"><i class="fa fa-apple"></i> Get App</a></li>
        </ul>

        <div class="slide_out_menu_footer">
          <div class="more-info">
            <p>Made with love by <a href="http://getcraftwork.com">Craft Work</a></p>
            <p>Developed by <a href="http://ruibogasdesign.net/">Rui Bogas</a>
          </div> <?php
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
      </div>

      <div class="row">
        <div class="col-md-4">
          <ul class="left">
          <?php
          wp_nav_menu( array( 
            'theme_location' => 'header-left-menu'
            ) ); 
          ?>
          </ul>
        </div>
        <div class="col-md-4 text-center">
          <a href="#" class="logo"><img src="<?php the_field('logo','option'); ?>" alt="<?php the_field('name_of_the_logo','option'); ?>"></a>
		</div>
        <div class="col-md-4">
          <ul class="right">
            <?php
            wp_nav_menu( array( 
              'theme_location' => 'header-right-menu'
              ) ); 
            ?>
          </ul>
        </div>
      </div>
    </div>
  </header><!-- //Main Nav -->