<?php require_once 'inc/inc.config.php';?>
<?php 
require './admin/classes/Catproduct.php';
require 'admin/classes/Goldbook.php';
require 'admin/classes/utils.php';
session_start();
$goldbook = new Goldbook();
$result = $goldbook->goldbookValidGet();
$goldbook = null;
//print_r($result);
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<title>Les secrets de Louise - Livre d'or</title>
	<meta name="description" content="les secrets de louise - Livre d'or" />
	<meta name="keywords" content="Livre d'or" />
<?php include('inc/meta.php'); ?>
</head>
<body>

<?php include('inc/header.php'); ?>
<div class="row breadcrumb">
	<a href="./">Accueil</a> >  Livre d'or
</div>	
	<div class="row ">
	<!-- Livre d'or -->
	<div class="large-5 medium-5 small-12 columns">
		<br>
		<h3>Signez le livre d'or</h3>
		<div id="resultat">
		
    	</div>
    	<form data-abide id="formulaire">
    		<input type="hidden" name="datepicker" id="datepicker"  value="<?php echo date("d/m/Y")?>">
			<div class="row">
				<div class="large-12 columns">
					<label>Nom
						<input name="name" id="nom" type="text" placeholder="Nom"  />
					</label>
					<small class="error">Votre nom est obligatoire</small>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<label>e-mail
						<input name="email" id="email" type="email" placeholder="e-mail" required />
					</label>
					<small class="error">Votre e-mail est obligatoire</small>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<label>Message
						<textarea name="message" id="message" placeholder="Votre message" required></textarea>
					</label>
					<small class="error">Merci de saisir votre message</small>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<input type="checkbox" id="newsletter" name="newsletter"  checked/> J'accepte de recevoir notre newsletter.
				</div>
			</div>
			<input class="envoi" type="submit" value="Laissez nous votre témoignage"/>
		</form>
	</div>
	<div class="large-7 medium-7 small-12 columns livredor">
		
			<h1>Livre d'or</h1>
			<?php 
				if (!empty($result)) {
					$i=0;
					foreach ($result as $value) { 
					$i++;
					?>
					<div class="row">
						<div class="large-12 columns">
							<h2><?php echo $value['nom']?></h2>
							<p>
								<?php echo nl2br($value['message'])?>
							</p>
						</div>
					</div>
				<?php } ?>
			<?php } ?>	
		</div>
	</div>	
	<!-- Fin Actualités -->
	
	
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
		        url: '/ajax/goldbook.php',
		        type: 'post',
		        data: data,
		        success: function (data) {
		            $("#resultat").html("<h3>Merci pour votre message</h3>");
		        	$("#nom").val("");
		           	$("#email").val("");
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
		$('.header .content ul li:nth-child(4)').addClass('active');
	</script>
	
</body>
</html>
