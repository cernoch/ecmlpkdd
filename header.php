<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
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

		<!-- For third-generation iPad with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/library/images/ikona144.png">
		<!-- For iPhone with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/ikona114.png">
		<!-- For first- and second-generation iPad: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/ikona72.png">
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/ikona144.png">

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
							<div class="date">23‒27 September</div>
							<div class="year">2013</div>
						</div>
					</a></div>

<?php
$image_set = "one";
switch (1 + crc32($_SERVER['REQUEST_URI']) % 6) {
	case 2:
		$image_set = "two";
		break;
	case 3:
		$image_set = "three";
		break;
	case 4:
		$image_set = "four";
		break;
	case 5:
		$image_set = "five";
		break;
	case 6:
		$image_set = "six";
		break;
}
?>
					<div class="images <?php echo $image_set; ?>">
						<div class="box first"></div>
						<div class="box second"></div>
						<div class="box third"></div> 
						<div class="box fourth"></div>
					</div>
				</div> <!-- end #inner-header -->
			
				<div class="description wrap"><?php bloginfo('description'); ?></div>
				
			</header> <!-- end header -->
