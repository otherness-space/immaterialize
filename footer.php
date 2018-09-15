<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Immaterialize
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="row">
				<div class="container justify-content display-flex">
					<div class="col s9dot5 m9 l10 xl9 center-align">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'immaterialize')); ?>">
				<?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf(esc_html__('Proudly powered by %s', 'immaterialize'), 'WordPress');
                ?>
			</a>
			<span class="sep"> | </span>
				<?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf(esc_html__('Theme: %1$s by %2$s.', 'immaterialize'), 'immaterialize', '<a href="https://github.com/otherness-space/immaterialize">Rob Goodfellow</a>');
                ?>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
