<!DOCTYPE html>

<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>

<header role="banner">

	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<p><?php bloginfo( 'description' ); ?></p>
	
	<nav role="navigation">
		<ul>
			<?php wp_list_pages('title_li='); ?>
		</ul>
	</nav><!-- end_nav -->

</header><!-- end_header -->

