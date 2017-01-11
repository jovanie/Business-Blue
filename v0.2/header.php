<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="author" content="Jovanie De La Cruz">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/css/fonts.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/css/wordpress-parallax-skeleton.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' );?>/js/parallax.min.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>
	<header>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'full-nav' ) ); ?>
				<div class="mobile-nav-bar">
					<div class="mob-menu-button"><a href="javascript:;" class="mob"><i class="fa fa-bars fa-3x" aria-hidden="true">&nbsp;</i></a></div>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'mobile-nav' ) ); ?>
				</div>
				<script>
					$(document).ready(function(){
						$(".mobile-nav").slideUp();
					    $(".mob").click(function(){
					    	if ($(".mobile-nav").hasClass('closed')) {
						        $(".mobile-nav").slideUp();
						        $(".mobile-nav").removeClass('closed');
					    	}
					    	else {

						        $(".mobile-nav").slideDown();
						        $(".mobile-nav").addClass('closed');
					    	}
					    });
					});
					</script>
				<div class="title-head">
					<h1><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
				</div>
				<div class="join-head">
					<h2><a href="#">JOIN PBL</a></h2>
				</div>
	</header>	
	<div class="container">