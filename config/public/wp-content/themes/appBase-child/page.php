<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage AppBase
 * @since AppBase 1.0
 */

get_header(); ?>

<div class="row">
	<div id="content" class="large-8 columns" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>

				<footer class="entry-meta">
					<?php edit_post_link( __( 'Edit', 'appBase' ), '<span class="edit-link">', '</span>' ); ?>
				</footer>

			</article>

			<?php comments_template( '', true ); ?>

		<?php endwhile; ?>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>