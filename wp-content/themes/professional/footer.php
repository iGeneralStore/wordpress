<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Professional
 */
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php get_template_part('sidebar', 'footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info col-md-4">
       		     <?php printf( __('© %1$s Co.' ), '<a href="http://www.i-generalstore.com" rel="designer">i-GeneralStore</a>' ); ?>
                     <br><br>
            	     <?php printf( __(' Developed by Kyunghwan Bae') ); ?>
		</div><!-- .site-info -->
		<div class="footer-menu col-md-8">
			<?php 
			//wp_nav_menu( array( 'theme_location' => 'footer' ) );
 			?>
		</div>	
	</div><!--.container-->	
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
