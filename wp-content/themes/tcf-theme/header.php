<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title(''); ?><?php if(is_front_page()) {bloginfo('name');}?></title>
		<?php wp_head(); ?>
	</head>
	<body class="<?php echo join(' ', get_body_class()) . ' ' . (is_front_page() ? 'frontpage' : ''); ?>">
	<header class="">
		<div class="topbar bg-theme-alt text-white">
			<div class="container">
				<div class="d-flex">
					<ul class="navbar-nav flex-row ml-md-auto hidden-lg-down">
						<?php if($facebook = get_field('facebook', 'option')){ ?>
						<li class="nav-item">
							<a class="nav-link link-white p-2" href="<?php echo $facebook; ?>" target="_blank">
								<i class="far fa-share-alt"></i> Share
							</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-menu">
			<div class="bg main-menu-bg"></div>
			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="<?php echo site_url(); ?>">
						<img src="<?php echo the_field('logo', 'option'); ?>" alt="Planstin" class="img-fluid">
					</a>
					<button class="navbar-toggler align-self-end align-self-lg-middle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="far fa-bars"></i>
					</button>

					<div class="collapse navbar-collapse align-self-end align-self-xl-center" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<?php wp_nav_menu(array(
								'container' => false,
								'menu' => __( 'The Main Menu' ),
								'menu_class' => 'nav navbar-nav',
								'theme_location' => 'main-nav',
								'before' => '',
								'after' => '',
								'link_before' => '',
								'link_after' => '',
								'depth' => 0,
								'fallback_cb' => '',
								'walker' => new WP_Bootstrap_Navwalker()
							)); ?>
						</ul>
						
					</div>
				</nav>
			</div>
		</div>
	</header>

	
		