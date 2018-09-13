<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Immaterialize
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<div class="row">
			<div class="container justify-content display-flex">
				<div class="col s9dot5 m9 l10 xl9dot5 content-box">
				<h1 class="page-title"><?php esc_html_e('Nothing Found', 'immaterialize'); ?></h1>
			</div>
		</div>
	</header><!-- .page-header -->

	<div class="page-content">
		<div class="row">
			<div class="container justify-content display-flex">
				<div class="col s9dot5 m9 l10 xl9dot5 content-box">
		<?php
        if (is_home() && current_user_can('publish_posts')) :

            printf(
                '<p>' . wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                    __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'immaterialize'),
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );

        elseif (is_search()) :
            ?>

			<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'immaterialize'); ?></p>
			<?php
//			get_search_form();

        else :
            ?>
			<div class="row">
				<div class="container justify-content display-flex">
					<div class="col s9dot5 m9 l10 xl9dot5 content-box">
			<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'immaterialize'); ?></p>
			<?php
            get_search_form();

        endif;
        ?>
			</div>
		</div>
	</div>
</div><!-- .page-content -->
</section><!-- .no-results -->
