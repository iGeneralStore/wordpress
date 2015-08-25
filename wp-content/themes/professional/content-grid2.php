<?php
/**
 * @package Professional
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 col-sm-6 grid2'); ?>>

		<div class="featured-thumb col-md-6">
			<?php if (has_post_thumbnail()) : ?>	
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('grid2'); ?></a>
			<?php else: ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
			<?php endif; ?>
		</div><!--.featured-thumb-->
			
		<div class="out-thumb col-md-6">
			<header class="entry-header">
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php 

					// edit by KH
					$strTitle = substr(get_the_title(),0,15);

					if(strlen(get_the_title()) > 15) $strTitle = $strTitle . "...";
					
					echo $strTitle;
				
					$strCatName;
					$strCatLink;
					
					$categories = get_the_category();	
					foreach( $categories as $category ){
						if( cat_is_ancestor_of($cat, $category->term_id) == TRUE){
							$strCatName = get_cat_name( $category->term_id );
							$strCatLink = get_category_link( $category->term_id );
							break;
						}
					}
					

				?></a></h1>
				<div class="entry-category"><a href="<?php echo $strCatLink;?> " rel="bookmark"><?php echo $strCatName; ?></a></div>
				<div class="entry-excerpt"><?php echo substr(get_the_excerpt(),0,200)."..."; ?></div>
				<div class="readmore"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php _e('Read More...','professional') ?></a></div>
			</header><!-- .entry-header -->
		</div><!--.out-thumb-->
			
		
		
</article><!-- #post-## -->
