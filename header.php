<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<!-- begin meta -->
<meta name="viewport" content="user-scalablo=no, initial-scale=1.0, maximum-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- end meta -->

<!--Favicon -->

<link rel="icon" type="image/png" href="http://www.wjga.christinapetrie.com/wp-content/themes/test/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="http://www.wjga.christinapetrie.com/wp-content/themes/test/favicon-16x16.png" sizes="16x16" />
<link rel="shortcut icon" href="http://www.wjga.christinapetrie.com/wp-content/themes/test/favicon.ico" type="image/x-icon">
<!--Favicon -->

<!-- begin style -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="<?php bloginfo('template_directory'); ?>/flexslider.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/calendar.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles.css" type="text/css" media="all" />
<!-- end style -->

<!-- Begin Scripts -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>-->
<!-- End Scripts -->

<!-- Begin Flex Slider -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider({
		animation: "fade",
		slideshow: false,
		smoothHeight: true
	}); // call flexslider function
  });
</script>
<!-- End Flex Slider -->

<!-- Start WP head -->
<?php wp_head(); ?>
<!-- End wp head -->
</head>
<body <?php body_class(); ?>>

<!-- Begin HEADER -->
<div id="header-conteiner">
<div id="header">
<!-- begin logo -->
<div id="logo">
<a href="<?php echo get_settings('home'); ?>" title="Link to Washinghton Junior Golf Association">
<img id="mainLogo" src="<?php bloginfo('template_directory'); ?>/images/wjga-logo.png" />
</a>
</div><!-- end logo -->
<!-- Begin Utility Menu -->
<div id="utilities-header">
<!-- Begin Social  Icon-->
<div id="social-header">
<a href="mailto:wjgaoffice@aol.com"><i class="fa fa-envelope-o fa-2x"></i></a>
 <a href="https://www.facebook.com/pages/Washington-Junior-Golf-Association/98124954911" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
 <a href="https://mobile.twitter.com/wjga1976" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
 <a href="https://www.youtube.com/channel/UCOGe4Oqt2qZm8MSD1GBjeZw" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
</div> <!-- end social icon -->
<!--<div id="link2">
<ul>
<li><a href="#">Contact</a></li>
</ul>
</div>-->
</div> <!-- end utiliti menu -->

<!-- begin search form -->
<div id="search">
<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>/">
<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</form> <!-- end search form -->
</div>
</div> <!-- end header container -->

<!-- Begin new Navigation -->
<div id="navigation">
<?php  wp_nav_menu( array(
    'theme_location' => 'main-menu', // Setting up the location for the main-menu, Main Navigation.
    'menu_class' => 'dropdown', //Adding the class for dropdowns
    'container_id' => 'cssmenu', //Add CSS ID to the containter that wraps the menu.
    'fallback_cb' => 'wp_page_menu', //if wp_nav_menu is unavailable, WordPress displays wp_page_menu function, which displays the pages of your blog.
    )
      );
?>
</div>
<!--</div>
<!-- end Navigation -->


</div> <!--end header -->
<!-- END MAIN NAVIGATION -->
			
 <div id="middle">
