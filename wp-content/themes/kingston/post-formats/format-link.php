<div class="row">
	<div class="two-thirds-left">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			<header class="article-header">
				<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
			</header> <?php // end article header ?>

			<section class="entry-content" itemprop="articleBody">
				<?php
					the_content();
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						));
				?>
			</section> <?php // end article section ?>
		</article> <?php // end article ?>
		<!-- /two-thirds-left -->
	</div>
	<div class="one-third-right">
		<div class="contact-box">
			<p>
				For any further details on any of our products please get in touch:
			</p>
			<ul>
				<li class="fa fa-phone-square">01924 240164</li>
				<li class="fa fa-envelope"><a href="mailto:enquiries@kingstonunity.co.uk">enquiries@kingstonunity.co.uk</a></li>
				<li class="fa fa-home"><a href="<?php echo get_page_link(319); ?>">Post me an information pack</a></li>
			</ul>
			<!-- /contact-box -->
		</div>
		<div class="box grey">
			<div class="box-info">
				<h4>Where are my premiums invested?</h4>
				<p>
					The premiums are invested in the Kingston Unity With-Profits Fund which invests in a mixture of assets such as property, fixed deposits, shares and cash.
				</p>
				<a href="http://ku.wp.web.ai-staging.com/?page_id=39" class="btn fa fa-chevron-right">Find out more</a>
			</div>
			<!-- /box-info -->
		</div>
		<div class="box grey">
			<div class="box-info">
				<h4>Downloads:</h4>
				<?php
				$posts = get_field('show_downloads');
				if( $posts ): ?>
					<ul>
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>
							<li>
								<div class="document-icon">
									<?php $image = get_field('pdf_image'); if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
								</div>
								<a href="#" class="side-downloads"><?php echo get_the_title( $p->ID ); ?></a>
								<span>File Size: <?php the_field('file_size', $p->ID); ?>kb</span>
								<?php the_content(); ?>
								<div class="terms-overlay"></div>
								<div class="application-terms">
<a href="#" class="close-btn fa fa-times"></a>
<h4 class="shout">
Please Note: You must confirm you have read the key facts, before downloading this document.
</h4>
<h2 class="shout">Key Facts about our services and costs</h2>
<h3>1. The Financial Conduct Authority (FCA)</h3>
<p>
The FCA is the independent watchdog that regulates financial services. This document is designed by the FCA to be given to consumers buying certain financial products. You need to read this important document. It explains the service you are being offered and how you will pay for it.
</p>
<h3>2. Whose products do we offer?</h3>
<ul class="modal-box">
<li class="fa fa-times">We offer products from the whole market</li>
<li class="fa fa-times">We only offer products from a limited number of companies</li>
<li class="fa fa-check">We only offer our own products</li>
</ul>
<h3>3. Which service will we provide you with?</h3>
<ul class="modal-box">
<li class="fa fa-times">We will advise and make a recommendation for you after we have assessed your needs.</li>
<li class="fa fa-check">You will not receive advice or a recommendation from us. We may ask some questions to narrow down the selection of products that we will provide details on. You will then need to make your own choice about how to proceed.</li>
<li class="fa fa-times">We will provide basic advice on a limited range of stakeholder products and in order to do this we will ask some questions about your income, savings and other circumstances but we will not:
<ul>
<li>conduct a full assessment of your needs;</li>
<li>offer advice on whether a non-stakeholder product may be more suitable.</li>
</ul>
</li>
<li class="fa fa-check">We can only offer products from Kingston Unity Friendly Society. These products will enable you to:
<ul>
<li>protect yourself and your loved ones in the event of death</li>
<li>save and invest with the added benefit of protecting yourself and your loved ones in the event of death</li>
<li>provide benefit cover in the event of sickness</li>
</ul>
</li>
</ul>
<h3>4. What will you have to pay us for our services?</h3>
<p>
Normally, if you buy a financial product direct from us, there will be no payments such as commission or fees payable. If there are any commission or fees payable, we will tell you how we get paid and the amount before we carry out any business for you.
</p>
<h3>5. Who regulates us?</h3>
<p>
Kingston Unity Friendly Society, 9 Navigation Court, Calder Park, Wakefield, WF2 7BJ is authorised by the Prudential Regulation Authority and regulated by the Financial Conduct Authority and .the Prudential Regulation Authority. Kingston Unity Friendly Society's FCA Registered Number is 110056.
</p>
<p>
Kingston Unity Friendly Society permitted business is advising and arranging life assurance and pensions business.
</p>
<p>
You can check this on the FCA’s Register by visiting the FCA’s website www.fsa.gov.uk/register or by contacting the FCA on 0845 606 1234.
</p>
<h3>6. What to do if you have a complaint</h3>
<p>
If you wish to register a complaint, please contact us:<br>
...in writing Write to Kingston Unity Friendly Society, Complaints Department, 9 Navigation Court, Calder Park, Wakefield, WF2 7BJ. ...by phoneTelephone (01924) 240164
</p>
<p>
If you cannot settle your complaint with us, you may be entitled to refer it to the Financial Ombudsman Service.
</p>
<h3>7. Are we covered by the Financial Services Compensation Scheme (FSCS)?</h3>
<p>
We are covered by the FSCS. You may be entitled to compensation from the scheme if we cannot meet our obligations. This depends on the type of business and the circumstances of the claim.
</p>
<p>
Most types of insurance business are covered for 90% of the claim with no upper limit.
</p>
<p>
<a href="<?php the_field('pdf_downloads', $p->ID); ?>" download class="confirm-term">I confirm and have read the above.</a>
</p>
</div>
			
							</li>
						<?php endforeach; ?>
					</ul>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<!-- /box -->
		</div>
		<!-- /one-third-right -->
	</div>
	<!-- /row -->
</div>
<?php $values = get_post_custom_values('product_features'); ?>
<?php if ( $values[0] ) { ?>
	<div class="row">
		<div class="col-2">
			<div class="key-features">
				<h3>Key Features:</h3>
				<?php the_field('product_features'); ?>
				<!-- /key-features -->
			</div>
			<!-- /col-2 -->
		</div>
		<div class="col-2">
			<div class="faqs">
				<h3>Frequently Asked Questions:</h3>
				<?php the_field('frequently_asked_questions'); ?>
			</div>
		</div>
		<!-- /row -->
	</div>
<?php }
