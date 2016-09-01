<?php
/*
This is a custom made template for the post category: Products. Here it will
generate a row for each two products that are populated. 
*/
?>

<?php get_header(); ?>

<div id="content">
	<div class="container">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
		<?php $i = 0; ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php
				if($i == 0) {
					echo '<div class="row">';
				}
				?>
					<div class="col-2">
					<?php has_post_thumbnail( $post_id ); ?> 
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<div class="box products" style="background-image: url('<?php echo $image[0]; ?>')">
							<div class="box-info">
								<h4><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h4>
								<?php the_excerpt(); ?>
								<a class="btn fa fa-chevron-right" href="<?php the_permalink() ?>">Find out more</a>
								<!-- box-info -->
							</div>
							<!-- /bow -->
						</div>
						<!-- /col-2 -->
					</div>
				<?php
				$i++;
				if($i == 2) {
					$i = 0;
					echo '</div>';
				}
				?>
				<?php
					endwhile;
					// Reset Query
					wp_reset_query();
				?>
				<?php
				if($i > 0) {
					echo '</div>';
				}
				?>
				<?php bones_page_navi(); ?>
				<?php else : ?>
					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
							<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>
			<?php endif; ?>
		<!-- /container -->
	</div>
	<!-- /content -->
</div>

<?php get_footer(); ?>