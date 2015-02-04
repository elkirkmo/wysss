<?php
/**
 * @package wysssv1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '.</a></h1>' ); ?>

			</header><!-- .entry-header -->

	<div class="entry-content">
		<h2>why should I stop saying "<?php the_title(); ?>"?</h2>
		<?php the_content(); ?>
		
		
		<!-- <h2>who was the last idiot to say "<?php the_title(); ?>"?</h2> -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer --></article><!-- #post-## -->

<?php
/**
 * @package wysssv1
 */
?>
