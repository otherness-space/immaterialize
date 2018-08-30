<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Immaterialize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
            ?>
			<div class="entry-meta">
				<?php
                immaterialize_posted_on();
                immaterialize_posted_by();
                ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php immaterialize_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="row">
			<div class="container justify-content display-flex">
				<div class="col s9dot5 m9 l10 xl9">
		<?php
        the_excerpt(sprintf(
            wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'immaterialize'),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            get_the_title()
        ));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'immaterialize'),
            'after'  => '</div>',
        ));

        ?>
				</div>
			</div>
		</div>
	</div>
<!-- .entry-content -->

	<footer class="entry-footer">
		<div class="row">
			<div class="offset-s1 offset-m2dot5 offset-l1 col s10 m7 l6">
				<?php immaterialize_entry_footer(); ?>
			</div>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
