<?php
/*
This is a custom made template for the post category: Documents. Here will it display
all posts within subcategories and post them on the parent category page.
*/
?>

<?php get_header(); ?>
<div id="content">
	<div class="container">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
		<?php $parentCatName = single_cat_title('',false); $parentCatID = get_cat_ID($parentCatName); $childCats = get_categories( 'child_of='.$parentCatID );
			if(is_array($childCats)):
			foreach($childCats as $child){ ?>
				<div class="box grey">
					<div class="box-info">
						<h3 class="sub-category-title"><?php echo $child->name; ?></h3>
						<?php query_posts('cat='.$child->term_id);
						while(have_posts()): the_post(); $do_not_duplicate = $post->ID; ?>
							<div class="downloads">
								<div class="document-icon">
									<?php $image = get_field('pdf_image'); if( !empty($image) ): ?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
								</div>
								<h5 class="h2 entry-title"><a href="<?php the_field('pdf_downloads'); ?>" download><?php the_title(); ?></a></h5>
								<em>(PDF Size | <?php the_field('file_size'); ?>kb )</em>
								<a href="<?php the_field('pdf_downloads'); ?>" download>Download File</a>
								<section class="entry-content cf">
									<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
									<?php the_excerpt(); ?>
								</section>
							</div>
						<?php endwhile; wp_reset_query(); ?>
						<!-- /box-info -->
					</div>
					<!-- /product-downloads -->
				</div>
			<?php } ?>			
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>