<!doctype html>  

<!--[if IEMobile 7]><html <?php language_attributes(); ?> class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><html <?php language_attributes(); ?> class="no-js"><![endif]-->
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7 oldie"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 oldie"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><html <?php language_attributes(); ?> class="no-js"><![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/ikona.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/ikona.png">


<!-- For Nokia -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">

		
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">
					<div id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow">
						<div class="title">ECML PKDD</div>
						<div class="details">
							<div class="venue">Prague</div>
							<div class="date">23–27 September</div>
							<div class="year">2013</div>
						</div>
					</a></div>

					<div class="images">
						<div class="box first"></div>
						<div class="box second"></div>
						<div class="box third"></div> 
						<div class="box fourth"></div>
					</div>
				</div> <!-- end #inner-header -->
			
				<div class="description wrap"><?php bloginfo('description'); ?></div>
				
			</header> <!-- end header -->
