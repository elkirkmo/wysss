<?php
/**
 * Template Name: List Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package wysssv1
 */

get_header(); ?>

	<?php
/*
Template Name: All posts
*/
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			$debut = 0; //The first article to be displayed
			?>
			<?php while(have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<ul>
			<?php
			$myposts = get_posts('numberposts=-1&offset=$debut');
			foreach($myposts as $post) :
			?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
			</ul>
<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
