<!doctype html>
<html class="no-js" lang="en">
<head>
	<title>Allée du Bio | Contact</title>
<?php include('inc/meta.php'); ?>
</head>
<body>
	
<?php include('inc/header.php'); ?>
	
	<!-- Contact -->
	<div class="row contact">
		<div class="large-12 columns">
			<h1>Contactez-nous</h1>
			<form>
				<div class="row">
					<div class="large-6 medium-6 columns">
						<label>Nom
							<input type="text" placeholder="Nom" />
						</label>
					</div>
					<div class="large-6 medium-6 columns">
						<label>Prénom
							<input type="text" placeholder="Prénom" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Adresse
							<input type="text" placeholder="Adresse" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-4 medium-4 columns">
						<label>Code postal
							<input type="text" placeholder="Code postal" />
						</label>
					</div>
					<div class="large-8 medium-8 columns">
						<label>Ville
							<input type="text" placeholder="Ville" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Question sur
							<select>
								<option value="les produits">les produits ?</option>
								<option value="les horaires">les horaires ?</option>
								<option value="la livraison">la livraison ?</option>
								<option value="autre">toute autre chose ?</option>
							</select>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Inscription à la newsletter</label>
						<input type="radio" name="newsletter" value="Oui" id="newsletterOui"><label for="newsletterOui">Oui</label>
						<input type="radio" name="newsletter" value="Non" id="newsletterNon"><label for="newsletterNon">Non</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Votre message
							<textarea placeholder="Votre message"></textarea>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<button>Envoyer le message</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Fin Contact -->
	
	<!-- Google maps -->
	<div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2825.5787808515875!2d-0.3935797!3d44.91156420000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5531420a3b61a1%3A0x9187996c4e9373e3!2s20+Avenue+de+Maucaillou%2C+33450+Saint-Sulpice-et-Cameyrac!5e0!3m2!1sfr!2sfr!4v1422202196329" frameborder="0" class="gmaps"></iframe>
	</div>
	<!-- Fin Google maps -->
	
	
<?php include('inc/footer.php'); ?>
	<script>
		$('.header ul li:last-child').addClass('active');
	</script>
</body>
</html>
