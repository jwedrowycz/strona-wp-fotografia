<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a href="#" class="toggle-button">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
	</a>
	<nav class="navbar-wrapper">
		<ul class="nav-list">
			<li>
				<a href="">
					O mnie
				</a>
			</li>
			<li>
				<a href="">
					Portfolio
				</a>
			</li>
			<li>
				<a href="">
					Kontakt
				</a>
			</li>
		</ul>
	</nav>
	<div class="hero-wrapper">
		<img src="<?php echo get_template_directory_uri() . '/images/header1.png' ?>" alt="header photo" />
		<div class="hero-text-wrapper">
			<div class="hero-text">
				<h1>Lorem Ipsum</h1>
				<h2>Anna Nowak</h2>
			</div>
			
		</div>
	</div>
	