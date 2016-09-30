<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<link rel="alternate" type="application/rss2+xml" title="<?php bloginfo('name'); ?> &raquo; RSS 2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<meta name="keywords" content="">
		<meta name="author" content="Gradska opština Palilula" />
		<meta name="copyright" content="http://www.palilula.eu" />
		<meta name="publisher" content="http://www.palilula.eu" />
		<meta name="description" content="Gradska opština Palilula - Zvanična Internet prezentacija opštine Palilula." />
		<meta name="Revisit-after" content="1 day" />


		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>

	<?php

		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;

	?>
<body <?php body_class( $awesome_classes ); ?>>

				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/sr_RS/sdk.js#xfbml=1&version=v2.3&appId=179145445497255";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

<div class="container">
				<!-- <div class="container1">
					<!-- <h1>Gradska opstina Palilula</h1> -->
					<!-- <div class="topHeader ">
						<div class="container">
							<!-- <?php global $blog_id;
								if( $blog_id == '2' ) {
							?>
								<p style="display:inline;float:right"><a href="<?php echo  network_home_url(); ?>">ћирилица</a> | latinica | english</p>
							<?php }	else {	?>
								<p style="display:inline;float:right"> &nbsp; | <a href="<?php echo site_url() . '/en'; ?>"> english</a></p>
								<?php dynamic_sidebar('topsidebar'); ?>
							<?php 	} ?>
				</div> -->
	<!--	</div> -->
		
			<!-- <img src="<?php echo bloginfo('template_directory') . '/img/gop9b.jpg'; ?>" alt="Gradska opstina Palilula"> 
			-->
	<img src="<?php header_image(); ?>" class="img-responsive" alt="" />
		

		<div class="row">
			<div class="col-xs-12">


			<!-- Static navbar -->
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'nav navbar-nav',
					'walker' => new Walker_Nav_Primary()
					)
				);
			?>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>
			</div>
		</div>
