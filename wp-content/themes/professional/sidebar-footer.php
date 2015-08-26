<?php
/*
 * The Footer Widget Area
 * @package professional
 */
 ?>
<?
// edit by KH
// i update the parts which have col-sm-12
?>
 <?php if ( is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') ) : ?>
	 <div id="footer-sidebar" class="widget-area">
	 	<div class="container">
		 	<?php 
				if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="footer-column col-sm-12"> 
						<?php dynamic_sidebar( 'footer-1'); ?> 
					</div> 
				<?php endif;
					
				if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<div class="footer-column col-sm-12"> 
						<?php dynamic_sidebar( 'footer-2'); ?> 
					</div> 
				<?php endif;
		
				if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<div class="footer-column col-sm-12"> <?php
						dynamic_sidebar( 'footer-3'); ?> 
					</div>
				<?php endif; ?>
	 	</div>
	 </div>	<!--#footer-sidebar-->	
<?php endif; ?>
