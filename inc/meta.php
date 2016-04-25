	<meta charset="utf-8" />
	<meta name="description" content="Les Secrets de Louise vente de bijoux et accessoires - Arcachon" />
	<meta name="google-site-verification" content="" />
	<meta name="msvalidate.01" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-title" content="Secrets de Louise" />
	<link rel="icon" type="image/vnd.microsoft.icon" href="../img/favicon.ico" />
	<link rel="apple-touch-icon" href="../img/favicon.png" />
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="../css/foundation.css" />
	<link rel="stylesheet" href="../js/vendor/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="../js/vendor/fancybox/helpers/jquery.fancybox-buttons.css" />
	<link rel="stylesheet" href="../js/vendor/fancybox/helpers/jquery.fancybox-thumbs.css" />
	<link rel="stylesheet" href="../style.css" />
	<script src="../js/vendor/modernizr.js"></script>
	<!-- Scripts -->
		<script src="../js/vendor/jquery.js"></script>
		<script src="../js/vendor/jquery.mousewheel-3.0.6.pack.js"></script>
		<script src="../js/vendor/fancybox/jquery.fancybox.js?v=2.1.5"></script>
		<script src="../js/vendor/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script src="../js/vendor/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script src="../js/vendor/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
		<script>
			
			$(document).ready(function() {
				$('.fancybox').fancybox({
					  padding: 0,
					  helpers: {
					    overlay: {
					      locked: false
					    }
					  }
				});
				
				$('.thumb a img').mouseover(function() {
					var lien = $(this).attr('src');
					$('.img-produit').attr('src', lien);
				});
			});
		</script>
		<!-- End Scripts -->
