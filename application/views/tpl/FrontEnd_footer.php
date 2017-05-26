<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<footer>
			<div class="ct-footer--extended ct-u-paddingBoth60">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<h4 class="text-uppercase ct-u-marginBottom30">Descrizione</h4>
							<div class="ct-u-marginBottom30">
								<span>Estato is new and powerfull real estate theme. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum nulla vel.</span>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<h4 class="text-uppercase ct-u-marginBottom30">Contatti</h4>
							<ul class="list-unstyled ct-phoneNumbers ct-u-marginBottom30">
								<li>
									<i class="fa fa-phone"></i>
									<span class="ct-fw-600">0 800 123 4567</span>
								</li>
								<li>
									<i class="fa fa-mobile"></i>
									<span class="ct-fw-600">+1 500 700 800</span>
								</li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3 ">
							<h4 class="text-uppercase ct-u-marginBottom30">Social</h4>
							<ul class="ct-panel--socials ct-panel--navbar list-inline list-unstyled ct-u-marginBottom30">
								<li><a href="https://www.facebook.com/createITpl"><div class="ct-socials ct-socials--circle"><i class="fa fa-facebook"></i></div></a></li>
								<li><a href="https://twitter.com/createitpl"><div class="ct-socials ct-socials--circle"><i class="fa fa-twitter"></i></div></a></li>
								<li><a href="#"><div class="ct-socials ct-socials--circle"><i class="fa fa-instagram"></i></div></a></li>
							</ul>
							
							<div class="ct-contactList ">
								<a href="#"><i class="fa fa-envelope-o"></i>questions@estato.com</a>
								<a href="#"><i class="fa fa-envelope-o"></i>sales@estato.com</a>
							</div>
						</div>
						
						<div class="col-sm-6 col-md-6 col-lg-3 ">
							<h4 class="text-uppercase ct-u-marginBottom30">Link rapidi</h4>
							<div class="row">
								<div class="ct-links">
									<div class="col-md-6">
										<a class="text-capitalize" href="#">List Property</a>
										<a class="text-capitalize" href="#">Home</a>
										<a class="text-capitalize" href="#">Properties</a>
										<a class="text-capitalize" href="#">Agents</a>
										<a class="text-capitalize" href="#">Fratures</a>
										<a class="text-capitalize" href="#">About Us</a>
										<a class="text-capitalize" href="#">Contact Us</a>
									</div>
									<div class="col-md-6">
										<a class="text-capitalize" href="#">Login</a>
										<a class="text-capitalize" href="#">Register</a>
										<a class="text-capitalize" href="#">Pricing</a>
										<a class="text-capitalize" href="#">Terms & Conditions</a>
										<a class="text-capitalize" href="#">Privacy Policy</a>
										<a class="text-capitalize" href="#">Purchase Estato</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ct-postFooter ct-u-paddingBoth20">
				<a href="#" class="ct-scrollUpButton ct-js-btnScrollUp">
					<span class="ct-sectioButton--square">
						<i class="fa fa-angle-double-up"></i>
				   </span>
				</a>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-6 col-sm-push-6">
							<div class="ct-newsletter text-right">
								<span class="text-uppercase ct-u-text--white ct-fw-600">Iscriviti all Newsletter</span>
								<input id="newsletter" placeholder="Your E-mail Address" required type="text" name="field[]" class="form-control input-lg">
								<button type="submit" class="btn btn-primary btn-transparent--border ct-u-text--motive text-capitalize">Subscribe</button>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-sm-pull-6">
							<span class="ct-copyright">&copy; 2015 Estato. All rights reserved. We accept:  </span>
							<ul class="icons list-unstyled list-inline">
								<li>
									<i class="fa fa-cc-stripe" data-toggle="tooltip" data-placement="top" title="Stripe"></i>
								</li>
								<li>
									<i class="fa fa-cc-paypal" data-toggle="tooltip" data-placement="top" title="PayPal"></i>
								</li>
								<li>
									<i class="fa fa-cc-mastercard" data-toggle="tooltip" data-placement="top" title="Mastercard"></i>
								</li>
								<li>
									<i class="fa fa-cc-visa" data-toggle="tooltip" data-placement="top" title="Visa"></i>
								</li>
								<li>
									<i class="fa fa-cc-discover" data-toggle="tooltip" data-placement="top" title="Discover"></i>
								</li>
								<li>
									<i class="fa fa-cc-amex" data-toggle="tooltip" data-placement="top" title="Amex"></i>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- JavaScripts -->

	<script src="<?php echo asset_js(); ?>jquery.min.js"></script>
	<script src="<?php echo asset_js(); ?>bootstrap.min.js"></script>
	<script src="<?php echo asset_js(); ?>dependencies.js"></script>

	<script src="<?php echo asset_js(); ?>select2.min.js"></script>

	<script src="<?php echo asset_js(); ?>bootstrap-slider.js"></script>

	<script src="<?php echo asset_js(); ?>jquery.stellar.min.js"></script>

	<script src="<?php echo asset_js(); ?>owl.carousel.min.js"></script>

	<script src="<?php echo asset_js(); ?>main.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$("#add").click(function() {
	        var intId = $("#buildyourform div").length + 1;
	        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
	        var fName = $("<input type=\"text\" class=\"fieldname\" />");
	        var fType = $("<select class=\"fieldtype\"><option value=\"checkbox\">Checked</option><option value=\"textbox\">Text</option><option value=\"textarea\">Paragraph</option></select>");
	        var removeButton = $("<input type=\"button\" class=\"remove\" value=\"-\" />");
	        removeButton.click(function() {
	            $(this).parent().remove();
	        });
	        fieldWrapper.append(fName);
	        fieldWrapper.append(fType);
	        fieldWrapper.append(removeButton);
	        $("#buildyourform").append(fieldWrapper);
	    });
	});	
	</script>

	</body>
</html>
