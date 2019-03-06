<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Nefateema
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nefateema' ); ?></h1>
				</header><!-- .page-header -->

				<!-- translators: %1$s: smiley -->
				<div class="page-content">
					<!-- translators: %1$s: smiley -->
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'nefateema' ); ?></p>

					<?php
						get_search_form();
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
