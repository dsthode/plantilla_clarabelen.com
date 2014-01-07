<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<?php if(is_singular())  { ?>
	<meta property="og:title" content="<?php echo get_the_title(); ?>">
	<meta property="twitter:card" content="summary">
	<meta property="twitter:site" content="">
	<meta property="twitter:creator" content="@clarabelengomez">
	<meta property="og:type" content="article">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<meta property="twitter:title" content="<?php echo get_the_title(); ?>">
		<meta property="og:url" content="<?php echo get_permalink(); ?>">
		<meta property="article:published_time" content="<?php the_time('c'); ?>">
		<meta property="article:modified_time" content="<?php the_modified_time('c'); ?>">
		<meta property="article:publisher" content="https://www.facebook.com/inspirateconclara">
		<meta property="article:author" content="https://www.facebook.com/ClaraBelenGomez">
		<meta property="og:description" content="<?php echo htmlentities(get_the_excerpt(), ENT_QUOTES); ?>">
		<meta property="twitter:description" content="<?php echo htmlentities(get_the_excerpt(), ENT_QUOTES); ?>">
		<?php if(has_post_thumbnail()) { ?>
			<meta property="og:image" content="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
			<meta property="twitter:image" content="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
		<?php } ?>
	<?php endwhile; endif; ?>
	<?php rewind_posts(); ?>
<?php } else { ?>
	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
<?php } ?>
<meta property="og:locale" content="es_ES">

<meta property="fb:admins" content="1621837217">
<meta property="fb:app_id" content="281305141912848">

<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
 
<link rel="profile" href="http://gmpg.org/xfn/11" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/style.min.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="canonical" href="">

<?php
    /* 
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

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
