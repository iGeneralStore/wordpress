<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Professional
 */

get_header(); ?>

	<!--
	<section id="primary" class="content-area col-md-8">
	-->
	<section id="primary" class="fullwidth">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<span>
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'professional' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'professional' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'professional' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'professional' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'professional' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'professional' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'professional' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'professional');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'professional');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'professional' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'professional' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'professional' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'professional' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'professional' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'professional' );

						else :
							_e( 'Archives', 'professional' );

						endif;
					?>
					</span>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->
			<?php $count = 0; ?>
			<?php 
				/* Start the Loop */
				// Edit by KH

				$parent = get_cat_name(get_category($cat)->parent);
				
				$posts_per_page = 6;				
				if(strcmp($parent,"Monthly Projects") == 0 || strcmp($parent, "월별 프로젝트") == 0){
					$posts_per_page = -1;
				}
				
				$custom_category = $cat . "&orderby=date&order=ASC";
				$custom_args = array(
					'cat' => $custom_category,
					'posts_per_page' => $posts_per_page,
					'paged' => max( 1, get_query_var('paged') )
				);
				//echo get_cat_name($cat);//$wp_query->post_count;
				//echo "||";
				query_posts($custom_args);
				//echo $wp_query->post_count;

			 ?>
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
					 
					get_template_part( 'content', 'grid2' );
					
					$count++;
				?>

			<?php endwhile; ?>
			<?php echo "</div><!--.row-->"; ?>
			
			<?php 
			// 	edit by KH
			//	professional_paging_nav(); 
				professional_pagination();
			?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #maie -->
	</section><!-- #primary -->

<?php 
	//get_sidebar(); 
?>
<?php get_footer(); ?>
