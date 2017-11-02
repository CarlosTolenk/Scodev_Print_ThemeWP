<!--Footer : Begin-->
	<footer>
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12 about-us footer-col">
						<h2>About Us</h2>
						<div class="footer-content">
							<a href="<?php echo esc_url(home_url('/')); ?>" title="Cmsmart logo footer" class="logo-footer">
								<img src=" <?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="logo footer">
							</a>
							<ul class="info">
								<li>
									<i class="fa fa-home"></i>
									<span>102580 Santa Monica Los Angeles</span>
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<span>+3 045 224 33 12</span>
								</li>
								<li>
									<i class="fa fa-envelope-o"></i>
									<span><a href="mailto:support@netbaseteam.net" title="send mail to Cmsmart">support@netbaseteam.net</a></span>
								</li>
							</ul>
							<ul class="footer-social">
								<?php
										$args = array(
											'theme_location' => 'social-menu',
											'container' => 'nav',
											'container_class' => 'menu-social',
											'container_id' => 'menu-social',
											'link_before' => '<span class = "sr-text">',
											'link_after' => '</span>'
										);
										wp_nav_menu($args);
								 ?>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12 corporate footer-col">
						<h2>Corporate</h2>
						<div class="footer-content">
							<ul>
								<li>
									<a href="about-us.html" title="About us">About</a>
								</li>
								<li>
									<a href="cart.html" title="Green">Green</a>
								</li>
								<li>
									<a href="checkout.html" title="Afiliates">Afiliates</a>
								</li>
								<li>
									<a href="contact.html" title="Non-profits and Government">Non-profits and Government</a>
								</li>
								<li>
									<a href="detail.html" title="Terms of Service">Terms of Service</a>
								</li>
								<li>
									<a href="faq.html" title="Privacy Policy">Privacy Policy</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12 support footer-col">
						<h2>Support</h2>
						<div class="footer-content">
							<ul>
								<li>
									<a href="myaccount-information.html" title="My Account">My Account</a>
								</li>
								<li>
									<a href="#" title="Design Guide">Design Guide</a>
								</li>
								<li>
									<a href="faq.html" title="FAQ">FAQ</a>
								</li>
								<li>
									<a href="#" title="Design Service">Design Services</a>
								</li>
								<li>
									<a href="contact.html" title="Contact Us">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-xs-12 other-info footer-col hidden-sm">
						<h2>Other Info</h2>
						<div class="footer-content">
							<p>
								Printmart provides fast online printing for both homes and businesses. We  provide high quality business cards, postcards, flyers, brochures, stationery and  other premium online print products.
							</p>
							<img src=" <?php echo get_template_directory_uri(); ?>/images/footer-payment.png" alt="Payment method">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copy-right">NicoMultimedia - Copyright © 2017 | All Rights Reserved</p>
						<a href="#" id="back-to-top">
							<i class="fa fa-chevron-up"></i>
							Top
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

		<?php wp_footer(); ?>
	</body>
</html>
