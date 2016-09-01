<?php get_header(); ?>

	<div id="content" class="wow fadeIn" data-wow-delay="2s">
		<div class="container">
			<?php if (have_posts()) : while (have_posts()) : the_post(); // start the loop ?>
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('full');
				} ?>
				<?php if(!is_front_page() ) { ?><?php the_title( '<h1>', '</h1>' ); ?><?php }; ?>
				<?php the_content(); ?>
				<?php endwhile; else : ?>
					<article id="post-not-found" class="hentry">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>
			<?php endif; ?>
			<?php if(is_front_page() ) { ?>
				<?php
				$posts = get_field('featured_investment_products');
				if( $posts ): ?>
					<h3 class="title-border">
						<span>Savings and Investment products</span>
					</h3>
					<?php $investment_excerpt = get_post_custom_values('investment_excerpt'); ?>
					<?php if ( $investment_excerpt[0] ) { ?>
						<p><?php the_field('investment_excerpt'); ?></p>
					<?php }; ?>
					<div class="row">
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>
							<div class="col-2">
							<?php has_post_thumbnail( $post_id ); ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<div class="box"  style="background-image: url('<?php echo $image[0]; ?>')">
									<div class="box-info">
										<h4><a href='<?php the_permalink() ?>'><?php echo get_the_title( $p->ID ); ?></a></h4>
										<p><?php the_field('homepage_excerpt')?></p>
										<a href='<?php the_permalink() ?>' class="btn fa fa-chevron-right">Find out more</a>
										<!-- /box-info -->
									</div>
									<!-- /box -->
								</div>
								<!-- /col-2 -->
							</div>
						<?php endforeach; ?>
						<!-- /row -->
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				<?php
				$posts = get_field('featured_savings_products');
				if( $posts ): ?>
					<?php $savings_excerpt = get_post_custom_values('savings_excerpt'); ?>
					<?php if ( $savings_excerpt[0] ) { ?>
						<p><?php the_field('savings_excerpt'); ?></p>
					<?php }; ?>
					<div class="row">
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>
							<div class="col-2">
							<?php has_post_thumbnail( $post_id ); ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<div class="box"  style="background-image: url('<?php echo $image[0]; ?>')">
									<div class="box-info">
										<h4><a href='<?php the_permalink() ?>'><?php echo get_the_title( $p->ID ); ?></a></h4>
										<p><?php the_field('homepage_excerpt')?></p>
										<a href='<?php the_permalink() ?>' class="btn fa fa-chevron-right">Find out more</a>
										<!-- /box-info -->
									</div>
									<!-- /box -->
								</div>
								<!-- /col-2 -->
							</div>
						<?php endforeach; ?>
						<!-- /row -->
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				<h3 class="title-border"><span>Social</span></h3>
					<div class="row">
						<div class="col-2">
							<h2><a href="https://twitter.com/@KingstonUnity" target="_blank">Follow us on Twitter</a></h2>
							<?php echo do_shortcode( '[ap-twitter-feed]' ); ?>
							<!-- /col-2 -->
						</div>
						<div class="col-2">
							<h2><a href="https://www.facebook.com/Kingston-Unity-Friendly-Society-KUFS-173100149407743/" target="_blank">Follow us on Facebook</a></h2>
							<?php echo do_shortcode('[custom-facebook-feed]'); ?>
							<!-- /col-2 -->
						</div>
						<!-- /row -->
					</div>
			<?php } //end if front page ?>
			<!--/container-->
		</div>
		<!--/content-->
	</div>

<?php get_footer(); ?>
