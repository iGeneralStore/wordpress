<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Professional
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-12">
		<div id="home-title">
			<?php 
				//_e('Recent Posts', 'professional'); 
				$arr = get_categories();
				
				$selected_cat_name;
				if($arr){
					foreach( $arr as $element ){
						// need to update archive.php
						if(strcmp($element->cat_name,"Monthly Projects") == 0 || strcmp($element->cat_name, "월별 프로젝트") == 0){
							$selected_cat_name = $element->cat_name;
							break;
						}	
					}
				}

				echo "Projects";
				$custom_category = get_cat_ID($selected_cat_name) . "&orderby=date&order=ASC";			
				
				$custom_args = array(
                                        'cat' => $custom_category,
                                        'posts_per_page' => 10,
                                        'paged' => max( 1, get_query_var('paged') )
                                );

				query_posts($custom_args);
			?>
		</div>
		<main id="main" class="site-main" role="main">
		<?php $count = 0; ?>
		<?php 
			if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					if($count == 0)
						echo "<div class='row'>" ;
					elseif($count%2 == 0)
						echo "</div><!--.row--><div class='row'>";
					 
					if (isset($option_setting['logo'])) :
						get_template_part( 'content', 'grid2' );
					else :
						get_template_part( 'defaults/content', 'grid2-d' );
					endif;
					$count++;
				?>
			<?php endwhile; ?>
			<?php echo "</div><!--.row-->"; ?>
			
			<?php professional_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
