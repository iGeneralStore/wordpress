<?php
/*
Template Name: Headerless_test
*/
 ?>

<style>
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
</style>


<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<div style="width:500px; height: 500px; position:absolute; background-color:efefef; z-index:0; margin:-8">
<img src="http://www.i-generalstore.com/wp-content/uploads/2015/04/light-bulb_background.png" style="position:absolute; z-index:-5; height:60%; margin: -8">
<br><br><br>
<div id="klassipie-notice-content" style="width: 70%; margin-left:auto; margin-right:auto; font-family: 'Nanum Gothic', sans-serif;">
	<div id="klassipie-notice-content-caption" style="color: F65A5E;text-align: center"><h2>Klassi-Pie is to inform you</h2></div>
<div style="height:1px;font-size:1px;">&nbsp;</div>
	<div id="klassipie-notice-content-primary">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php 
			//get_template_part( 'content', 'page' ); 
			the_content();
			?>
			<?php endwhile; // end of the loop. ?>
	</div>
</div>
</div>
