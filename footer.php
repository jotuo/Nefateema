<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nefateema
 */

?>

	</div><!-- #content -->

	</div>
	<footer id="colophon" class="site-footer">
		<div id="footer-sidebar" class="footer-widget-area">
			<div id="footer-sidebar1">
				<?php
					if(!function_exists('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
					}
				?>
			</div>
			<div id="footer-sidebar2">
				<?php
					if(!function_exists('footer-sidebar-2')){
					dynamic_sidebar('footer-sidebar-2');
					}
				?>
			</div>
			<div id="footer-sidebar3">
				<?php
					if(!function_exists('footer-sidebar-3')){
					dynamic_sidebar('footer-sidebar-3');
					}
				?>
			</div>
		</div>
		<p class="credit-id"> [page owner copyright information here] </p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
