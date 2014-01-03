<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
 
<link rel="profile" href="http://gmpg.org/xfn/11" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/style.min.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<?php
    /* 
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    wp_get_archives('type=monthly&format=link');
 
    wp_head();
?>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#inspiraciones-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<?php  /* menu */
			wp_nav_menu( array(
				'menu'              => 'secondary',
				'theme_location'    => 'secondary-menu',
				'depth'             => 3,
				'container'         => 'div',
				'container_id'			=> 'inspiraciones-navbar-collapse',
				'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker())
			); 
		?>
  </div>

<div class="container-logo">
	<div class="pattern-logo"></div>
	<div class="logo-inspiraciones">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-inspiraciones-colorful.png" width="507" height="115"></a>
	</div>
</div>

<div>
	<div class="pull-right social-icons">
		<a href="https://plus.google.com/u/0/106083749576655779266/posts" alt="Mi perfil de Google+"><img src="<?php bloginfo('template_directory') ?>/images/googleplus.png"></a>
		<a href="https://www.facebook.com/inspirateconclara" alt="Mi página de Facebook"><img src="<?php bloginfo('template_directory') ?>/images/facebook.png"></a>
		<a href="https://twitter.com/clarabelengomez" alt="Mi perfil de Twitter"><img src="<?php bloginfo('template_directory') ?>/images/twitter.png"></a>
		<a href="http://www.pinterest.com" alt="Mi perfil de Pinterest"><img src="<?php bloginfo('template_directory') ?>/images/pinterest.png"></a>
		<a href="<?php bloginfo('rss2_url'); ?>" alt="Mi feed RSS"><img src="<?php bloginfo('template_directory') ?>/images/rss.png"></a>
	</div>
</div>

<div class="container container-second-menu">
		<?php  /* menu */
			wp_nav_menu( array(
				'menu'              => 'primary',
				'theme_location'    => 'primary-menu',
				'depth'             => 3,
				'container'         => 'div',
				'container_id'			=> '',
				'container_class'   => '',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker())
			); 
	?>
</div>
<div class="container container-content">
