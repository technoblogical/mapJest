<!DOCTYPE html>
<html>
<head>
  <title><?php if ( is_home() ) {
      bloginfo('name'); ?> | <?php bloginfo('description');
    } else {
       wp_title('') ?> | <?php bloginfo('name');
    } ?>
  </title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	<link type='text/css' rel='stylesheet'  href='<?php echo get_template_directory_uri(); ?>/style.css'>
	<?php if ( wp_is_mobile() ) { ?>
		<link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/styleMobile.css'
	<?php } else { ?>
		<link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/styleDesktop.css'>
	<?php } ?>
	<link rel="icon" type="image/png" href="http://www.technoblogical.com/favicon.png">
	<link rel="apple-touch-icon-precomposed" href="https://lh6.googleusercontent.com/-5fdEaAi_Jjs/UYHA4cgjcCI/AAAAAAAAA04/0JipiytSOUQ/s800/squinty.png">
	<link rel="shortcut icon" href="http://www.technoblogical.com/favicon.ico" />
	<meta name="application-name" content="technoblogical"/>
	<meta name="msapplication-TileImage" content= "http://lh6.googleusercontent.com/-5fdEaAi_Jjs/UYHA4cgjcCI/AAAAAAAAA04/0JipiytSOUQ/s800/squinty.png"/>
	<meta name="msapplication-TileColor" content ="#0000ff"/>
	<link rel="author" href="https://plus.google.com/104536213394512642005/">
	<?php wp_head(); ?>
</head>
<body>
	<header><div id='header'>
		<nav><div id='nav'>
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</div></nav>
		<p id='companyInfo'><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></p>
		<div style='clear:both'></div>
	</div></header>
	<button id='menuButton'>Menu</button>