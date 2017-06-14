<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<footer>
			<div class="ct-footer--extended ct-u-paddingBoth60">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<h4 class="text-uppercase ct-u-marginBottom30">Descrizione</h4>
							<div class="ct-u-marginBottom30">
								<span>Sito operante nel mercato della " <i>Sharing Economy</i> ", per il noleggio e compravendita di beni e servizi.</span>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<h4 class="text-uppercase ct-u-marginBottom30">Contatti</h4>
							<ul class="list-unstyled ct-phoneNumbers ct-u-marginBottom30">
								<li>
									<i class="fa fa-phone"></i>
									<span class="ct-fw-600">095/7383025</span>
								</li>
								<li>
									<i class="fa fa-fax"></i>
									<span class="ct-fw-600">095/330094</span>
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
								<a href="#"><i class="fa fa-envelope-o"></i>info@3g-rental.com</a>
								<a href="#"><i class="fa fa-envelope-o"></i>sales@3g-rental.com</a>
							</div>
						</div>
						
						<div class="col-sm-6 col-md-6 col-lg-3 ">
							<h4 class="text-uppercase ct-u-marginBottom30">Link rapidi</h4>
							<div class="row">
								<div class="ct-links">
									<div class="col-md-6">
										<a class="text-capitalize" href="#">Home</a>
										<a class="text-capitalize" href="#">Nuovi arrivi</a>
										<a class="text-capitalize" href="#">Servizi</a>
										<a class="text-capitalize" href="#">Chi siamo</a>
									</div>
									<div class="col-md-6">
										<a class="text-capitalize" href="#">Login</a>
										<a class="text-capitalize" href="#">Registrati</a>
										<a class="text-capitalize" href="#">Staff</a>
										<a class="text-capitalize" href="#">Contattaci</a>
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
								<input id="newsletter" placeholder="Indirizzo E-mail" required type="text" name="field[]" class="form-control input-lg">
								<button type="submit" class="btn btn-primary btn-transparent--border ct-u-text--motive text-capitalize">Conferma</button>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-sm-pull-6">
							<span class="ct-copyright">&copy; 2017 3g-rental. All rights reserved. We accept:  </span>
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

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script src="<?php echo asset_js(); ?>bootstrap.min.js"></script>

	<script src="<?php echo asset_js(); ?>bootstrap-datepicker.min.js"></script>

	<script src="<?php echo asset_js(); ?>dependencies.js"></script>

	<script src="<?php echo asset_js(); ?>select2.min.js"></script>

	<script src="<?php echo asset_js(); ?>bootstrap-slider.js"></script>

	<script src="<?php echo asset_js(); ?>jquery.stellar.min.js"></script>

	<script src="<?php echo asset_js(); ?>owl.carousel.min.js"></script>

	<script src="<?php echo asset_js(); ?>main.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$("#dateStart, #dateEnd").datepicker({ minDate: 0, dateFormat: 'yy-mm-dd'});

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

		$("#checkPrd").click(function() {
			var dateStart = $('#dateStart').val();
			var dateEnd = $('#dateEnd').val();
  			$.post('<?php echo base_url().'checkPrd'; ?>', {prd: <?php echo $this->uri->segment(2); ?>,  dateStart : dateStart}, function(data) {
				alert(data.info);
			}, 'json');
		});

		$("#sendEmailInfoPrd").click(function() {
			var mail = $('#contact_email').val();
			var mess = $('#contact_message').val();
			var id = $('#id_prd').val();
			var name = $('#name_prd').val();
			$.post('<?php echo base_url().'sendEmailInfoPrd'; ?>', {prd: <?php echo $this->uri->segment(2); ?>,  mail: mail, mess: mess, id: id, name: name}, function(data) {
				alert(data.info);
			}, 'json');
		});
	});	
	</script>

	</body>
</html>
