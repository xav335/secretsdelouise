<?php require_once 'inc/inc.config.php';
require './admin/classes/Catproduct.php';
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<title>Les secrets de Louise | Contact</title>
	<meta name="description" content="les secrets de louise - Contact " />
	<meta name="keywords" content="Contact" />
<?php include('inc/meta.php'); ?>
</head>
<body>
	
<?php include('inc/header.php'); ?>
<div class="row breadcrumb">
	<a href="./">Accueil</a> >  Formulaire de contact
</div>	
<div class="row contact">
	<div class="large-12 columns">
		<h1>Contactez nous</h1>
			<div class="large-8 medium-8 small-8 columns" >
				
			</div>
		<div id="resultat"></div>
		<form data-abide id="formulaire">
			<div class="row">
				<div class="large-6 columns">
					<label>Nom
						<input type="text" id="nom" name="name" placeholder="Nom" required  />
					</label>
					<small class="error">Votre nom est obligatoire</small>
				</div>
				<div class="large-6 columns">
					<label>Prénom
						<input id="prenom" type="text" name="firstname" placeholder="Prénom" />
					</label>
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<label>Téléphone
						<input type="text" id="tel" name="tel" placeholder="Téléphone" />
					</label>
					<small class="error">Votre téléphone est obligatoire</small>
				</div>
				<div class="large-6 columns">
					<label>e-mail
						<input type="text" id="email" name="email" placeholder="e-mail" required />
					</label>
					<small class="error">Votre e-mail est obligatoire</small>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<label>Sujet
						<select required id="sujet" name="sujet" >
							<option value="les produits">les produits</option>
							<option value="les horaires">les horaires</option>
							<option value="la livraison">la livraison</option>
							<option value="autre">toute autre chose</option>
						</select>
					</label>
					<small class="error">Merci de choisir un sujet</small>
				</div>
			</div>
			
			<div class="row">
				<div class="large-12 columns">
					<label>Message
						<textarea id="message" name="message" placeholder="Votre message" required></textarea>
					</label>
					<small class="error">Merci de saisir votre message</small>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<input type="checkbox" id="newsletter" name="newsletter"  checked/> J'accepte de recevoir la newsletter.
				</div>
			</div>
			<div class="row">
					<div class="large-12 columns">
						<button type="submit">Envoyer votre message</button>
					</div>
				</div>
			
		</form>
	</div>
</div>
<!-- /Content -->
<script type="text/javascript">

	$(document).on('submit','#formulaire',function(e) {
	  e.preventDefault();
	  data = $(this).serializeArray();

	  data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	})

	  console.log(data);

	    /* I put the above code for check data before send to ajax*/
	    $.ajax({
		        url: '/ajax/contact.php',
		        type: 'post',
		        data: data,
		        success: function (data) {
		            $("#resultat").html("<h4>Merci pour votre message - Nous allons y donner suite rapidement</h4>");
		        	$("#nom").val("");
		        	$("#prenom").val("");
		        	$("#email").val("");
		        	$("#tel").val("");
		           	$("#message").val("");
		        },
		        error: function() {
		        	 $("#resultat").html("<h3>Une erreur s'est produite !</h3>");
		        }
		   	});
	return false;
	})

</script>

	
	
	
	
<?php include('inc/footer.php'); ?>
	<script>
		$('.header .content2 ul li:nth-child(2)').addClass('active');
	</script>
</body>
</html>
