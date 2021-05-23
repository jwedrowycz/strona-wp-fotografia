<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fotografia
 */

get_header();
?>

	<main class="site-main">
		<div class="content-wrapper grey-accent">
			<div class="content">
				<a href="#" class="styled-link">O mnie</a>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lobortis ex sed sapien vestibulum, ut malesuada enim faucibus. Donec rhoncus aliquam mauris, ac ornare nulla dictum ac. Fusce non maximus metus. Vestibulum efficitur libero quis dictum elementum. Sed id gravida arcu, nec cursus turpis. Vestibulum sit amet mauris magna. Praesent pretium dignissim mollis. 
				</p>
			</div>
			<div class="photos-wrapper">
				<div class="one-photo">
					<img src="<?php echo get_template_directory_uri() . '/images/photo1.png' ?>" alt="photo1" class="image-full" />
				</div>
				<div class="second-photo">
					<img src="<?php echo get_template_directory_uri() . '/images/photo2.png' ?>" alt="photo2" class="image-fit" />
				</div>
				<div class="third-photo">
					<img src="<?php echo get_template_directory_uri() . '/images/photo3.png' ?>" alt="photo3" class="image-fit" />
				</div>
			</div>
		</div>
		<div class="content-wrapper l-pink-accent">
			<div class="content">
				<a href="#" class="styled-link">Śluby</a>
			</div>
			<div class="category-photos">
				<img src="<?php echo get_template_directory_uri() . '/images/category-a-1.png' ?>" alt="photo3" />
				<img src="<?php echo get_template_directory_uri() . '/images/category-a-2.png' ?>" alt="photo3" />
				<img src="<?php echo get_template_directory_uri() . '/images/category-a-3.png' ?>" alt="photo3" />
			</div>
		</div>
		<div class="content-wrapper burgundy-accent">
			<div class="content">
				<a href="#" class="styled-link">Modeling</a>
			</div>
			<div class="category-photos">
				<img src="<?php echo get_template_directory_uri() . '/images/category-b-1.png' ?>" alt="photo3" />
				<img src="<?php echo get_template_directory_uri() . '/images/category-b-2.png' ?>" alt="photo3" />
				<img src="<?php echo get_template_directory_uri() . '/images/category-b-3.png' ?>" alt="photo3" />
			</div>
		</div>
		<div class="content-wrapper l-green-accent">
			<div class="content">
				<a href="#" class="styled-link">Architektura</a>
			</div>
			<div class="category-photos">
				<img src="<?php echo get_template_directory_uri() . '/images/category-c-1.png' ?>" alt="photo3" />
				<img src="<?php echo get_template_directory_uri() . '/images/category-c-2.png' ?>" alt="photo3" />
				<img src="<?php echo get_template_directory_uri() . '/images/category-c-3.png' ?>" alt="photo3" />
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #page -->

<?php
get_footer();
