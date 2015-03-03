
				<!-- Footer -->
				<div class="row footer fullwidth">
					<div class="row">
						<div class="large-6 medium-6 columns">
							<div>
								<a href="#">Promo !</a>
								<a href="#">Ventes flash</a>
								<a href="#">Nouveauté</a>
								<a href="#">Coup de cœur</a>
							</div>
							<div class="contacts">
								<a href="#">Votre boutique</a>
								<a href="actualites.php">Actualités</a>
								<a href="livre-d-or.php">Livre d'or</a>
								<a href="contact.php">Contact</a>
							</div>
						</div>
						<div class="large-6 medium-6 columns">
							<h1>Les secrets de Louise</h1>
							<p>Bijoux &amp; accessoires</p>
						</div>
						<div class="large-12 columns mentions">
							© les secrets de Louise <a href="#">mentions légales</a> <a href="http://www.iconeo.fr" target="_blank">création iconeo</a>
						</div>
					</div>
				</div>		
				<!-- End Footer -->
				
			</div>
		</div>
		
		<!-- Scripts -->
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script src="js/vendor/jquery.mousewheel-3.0.6.pack.js"></script>
		<script src="js/vendor/fancybox/jquery.fancybox.js?v=2.1.5"></script>
		<script src="js/vendor/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script src="js/vendor/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script src="js/vendor/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
		<script>
			$(document).foundation();
			
			$(document).ready(function() {
				$('.fancybox').fancybox();
				
				$('.thumb a img').mouseover(function() {
					var lien = $(this).attr('src');
					$('.img-produit').attr('src', lien);
				});
			});
		</script>
		<!-- End Scripts -->