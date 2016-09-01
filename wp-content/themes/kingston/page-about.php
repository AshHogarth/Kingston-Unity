<?php
/*
 Template Name: About Us w/Sidebar
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
			<div class="row">
				<div class="content-left">
					<?php the_title( '<h1>', '</h1>' ); ?>
					<?php the_content(); ?>
					<?php $values = get_post_custom_values('show_downloads'); ?>
					<?php if ( $values[0] ) { ?>
							<div class="box grey">
								<div class="box-info">
									<h4>Downloads:</h4>
									<?php 
									$posts = get_field('show_downloads');
									if( $posts ): ?>
										<ul>
											<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
												<?php setup_postdata($post); ?>
												<li class="fa fa-file-pdf-o">
													<a href="<?php the_field('pdf_downloads', $p->ID); ?>" download><?php echo get_the_title( $p->ID ); ?></a>
													<span>File Size: <?php the_field('file_size', $p->ID); ?>kb</span>
													<?php the_content(); ?>
												</li>
											<?php endforeach; ?>
										</ul>
										<?php wp_reset_postdata(); ?>
									<?php endif; ?>
								</div>
								<!-- /box -->
							</div>
					<?php }; ?>
					<?php if(is_page('our-people') ) { ?>
						<?php
							$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
							foreach( $mypages as $page ) {		
								$content = $page->post_content;
								if ( ! $content ) // Check for empty page
									continue;
								$content = apply_filters( 'the_content', $content ); ?>
								<div class="downloads">
									<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
									<p><?php the_field('short_description', $page->ID); ?></p>					
								</div>
						<?php }; ?>
					<?php }; ?>

				</div>
				<div class="menu-right">
					<?php wp_nav_menu(array(
						'container' => '',				// remove nav container
						'container_class' => 'footer-links',		// class of container (should you choose to use it)
						'menu' => __( 'About Us Sidebar', '' ),   	// nav name
						'menu_class' => 'sidebar-nav',			// adding custom nav class
						'theme_location' => 'footer-links',		// where it's located in the theme
						'before' => '',					// before the menu
						'after' => '',					// after the menu
						'link_before' => '',				// before each link
						'link_after' => '',				// after each link
						'depth' => 0,					// limit the depth of the nav
						'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
					)); ?>
				</div>
				<!-- /row -->
			</div>
			<?php endwhile; else : ?>
			<!-- /container -->
		</div>
		<?php endif; ?>
		<!-- /content -->
	</div>

<?php get_footer(); ?>