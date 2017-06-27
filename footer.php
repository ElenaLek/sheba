		<footer id="site-footer">
			<div class="wrapper">
				<?php
					// check to see if the logo exists and add it to the page
					if ( get_theme_mod( 'footer_logo' ) ) { ?>
					<div class="footer-logo">
						<img src="<?php echo get_theme_mod( 'footer_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
					</div><!-- /.footer-logo -->
				<?php } ?>

				<?php
					theme_slug_show_social_icons();
				?>
			</div>
		</footer>

		<?php wp_footer(); ?>
		<script src="<?php bloginfo('template_directory'); ?>/js/wp.js"></script>

	</body>
</html>