<?php
/*
    Template Name: Headerless
*/
?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<div style="width:100%; height:100%">
<?php while ( have_posts() ) : the_post(); ?>
<?php 
    the_content();
?>
<?php endwhile; // end of the loop. ?>
</div>
