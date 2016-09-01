	<footer>
		<div class="container">
			<div class="row">
				<div class="col-3">
					<h5>Extra Links</h5>
					<?php wp_nav_menu(array(
						'container' => '',				 // remove nav container
						'container_class' => 'footer-links',		// class of container (should you choose to use it)
						'menu' => __( 'Footer Links', '' ),   		// nav name
						'menu_class' => 'footer-nav',			// adding custom nav class
						'theme_location' => 'footer-links',		// where it's located in the theme
						'before' => '',					// before the menu
						'after' => '',					// after the menu
						'link_before' => '',				// before each link
						'link_after' => '',				// after each link
						'depth' => 0,					// limit the depth of the nav
						'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
					)); ?>
				</div>
				<div class="col-3">
					<h5>Contact Details</h5>
					<p>
						Tel: 01924 240164 <br>
						Email: <a href="mailto:enquiries@kingstonunity.co.uk">enquiries@kingstonunity.co.uk</a> <br>
						9 Navigation Court, Calder Park, Wakefield, WF2 7BJ
					</p>
				</div>
				<div class="col-3">
					<a href="http://www.financialmutuals.org/" target="_blank" id="afm">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/afm-logo.png" alt="Association of Financial Mutals">
					</a>
				</div>
				<!-- /row -->
			</div>
			<p id="disclaimer">
				Kingston Unity is authorised by the Prudential Regulation Authority and regulated by the Financial Conduct Authority and the Prudential Regulation Authority FRN 110056. This site and services are only intended for UK residents. Content is copyright 2013 Kingston Unity, all rights reserved. Kingston Unity is committed to treating customers fairly. In ensuring that our members are treated fairly, the Kingston Unity Friendly Society aims to maintain that no customer or customers are disadvantaged in any way. We are covered by the FSCS. If you hold investments with us, you may be entitled to compensation from the scheme if we cannot meet our obligations. This depends on the type of business and the circumstances of the claim.
			</p>
			<!-- footer container -->
		</div>
	</footer>
<?php wp_footer();// all js scripts are loaded in library/bones.php ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/g/enquire.js@2.0.2,wow@1.1.2,jquery.owlcarousel@1.31,jquery.equalheights@1.5.2"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/libs/validate.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/libs/javascript.js"></script>
<script>
$(".side-downloads").click(function(e){
	e.preventDefault();
	$(this).siblings("div").toggle("slow");
	$(".terms-overlay").show("slow");
});
$(".terms-overlay, .close-btn").click(function(e){
	e.preventDefault();
	$(".terms-overlay, .application-terms").hide("slow");
});
$(".confirm-term").click(function(){
	$(".terms-overlay, .application-terms").hide("slow");
});
</script>
</body>
</html>