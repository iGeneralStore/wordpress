<?php
/*
Template Name: Headerless
*/
?>
<style>
/*
@import url(http://fonts.googleapis.com/css?family=Noto+Sans:400,300,700);
*/
</style>

<!--
<link href="/assets/css/klassipie_notice.css" rel="stylesheet" media="all"/>
-->

<!DOCTYPE html>

<body>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<div style="position:absolute; background-color:efefef; z-index:0; margin:-8">
<img src="http://localhost/wordpress/wp-content/uploads/2015/03/light-bulb_background.png" style="position:absolute; z-index:-5; height:60%; margin: -8">
<br><br><br>
<div id="klassipie-notice-content" style="width: 70%; margin-left:auto; margin-right:auto; font-family: 'Noto Sans', sans-serif;">
	<div id="klassipie-notice-content-caption" style="color: F65A5E;text-align: center"><h2><a href="http://www.naver.com">Klassi-Pie가 새로워졌습니다</a></h2></div>
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
</body>
