<?php
/*
 Template Name: Products Page (Don't Use!)
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>
	<div id="content">
		<div class="container">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_title( '<h1>', '</h1>' ); ?>
				<?php the_content(); ?>
			<?php
				endwhile;
				// Reset Query
				wp_reset_query();
			?>
			<?php $i = 0; ?>
				<?php query_posts('cat=24'); while (have_posts()) : the_post(); ?>
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
			<!-- /container -->
		</div>
		<?php endif; ?>
		<!-- /content -->
	</div>
<?php get_footer(); ?>
