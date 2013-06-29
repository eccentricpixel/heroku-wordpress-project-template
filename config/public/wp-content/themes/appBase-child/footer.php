<div id="footer">
	<footer class="row">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
		<?php endif; ?>
		<?php if ( has_nav_menu( 'footer-menu' ) ) {
			echo '<div class="row">';
			wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'inline-list', 'container' => 'nav', 'container_class' => 'large-12 columns' ) );
			echo '<div>';
		} ?>
		
		<div class="large-6 small-6 columns padBot">
			<div id="footerText">
				<p>485 W. MILWAUKEE AVE. SUITE 100C, DETROIT, MI 48202</p>
				<p>DC3 IS A PARTNERSHIP BETWEEN BUSINESS LEADERS FOR MICHIGAN AND THE COLLEGE FOR CREATIVE STUDIES</p>
			</div>
			<a href="http://www.detroitcreativecorridorcenter.com/" target="_blank"><img class="dc3Logo" src="<?php echo get_stylesheet_directory_uri();?>/img/dc3LogoWhite.png"></a>
			<div id="footerCopyright" class="padTop">&copy; COPYRIGHT DETROIT CREATIVE CORRIDOR CENTER <?php echo date("Y") ?></div>
			
			
			
			






			
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

<script>
jQuery(document).foundation();
</script>
</body>
</html>