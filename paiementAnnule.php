<?
	require_once 'inc/inc.config.php';
	require 'admin/classes/Panier.php';
	require 'admin/classes/utils.php';
	
	session_start();
	
	$panier = new Panier();
	
	try {
		$result = $panier->panierGet(session_id());
		//print_r($result);
	
	} 
	catch (Exception $e) {
		echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
		$panier = null;
		exit();
	}
	
	$panier =null;
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<title>Les Secrets de Louise - Bijoux &amp; accessoires</title>
		<?php include('inc/meta.php'); ?>
	</head>
	<body class="page-panier">
	
		<?php include('inc/header.php'); ?>
				
		<!-- Products list -->
		<div class="row">
			<div class="large-3 medium-3 small-12 columns menu-panier">
				<ul>
					<li >
						<a href="panier.php"><span>1 -</span> Récapitulatif</a>
					</li>
					<li>
						<a href="adresse.php"><span>2 -</span> Adresses</a>
					</li>
					<li >
						<a href="#"><span>3 -</span> Paiement</a>
					</li>
					<li class="active">
						<a href="#"><span>4 -</span> Validation</a>
					</li>
				</ul>
			</div>
			<div class="large-9 medium-9 small-12 columns">
			
				
				<div class="row">
					<div class="large-6 medium-6 small-6 columns">
					     <br><br><br><br>
					     <h4>Votre commande a été annulée ! </h4><br>
						<button class="continuer" onclick="location.href='categories.php'">Continuer mes achats</button>
					</div>
				</div>
				
			</div>
		</div>
				
		<?php include('inc/footer.php'); ?>
	</body>
</html>
