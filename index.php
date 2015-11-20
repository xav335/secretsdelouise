<?
	require_once 'inc/inc.config.php';
	require './admin/classes/Catproduct.php';
	session_start();
	
	$debug = false;
	$rubrique = new Catproduct();
	
	// Recup des rubriques
	//$liste_rubrique = $catproduct->getRubriques();
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<title>Les Secrets de Louise - Bijoux &amp; accessoires</title>
		<meta name="description" content="les secrets de louise - création de bijoux - bijoux & accessoires " />
	    <meta name="keywords" content="bijoux, bijoux fantaisie, colliers, montres, sacs, bagues, bracelets, boucles d'oreilles, créoles, maroquinerie, portes clés, jonc, ras du coup, sautoirs" />
		<? include( "inc/meta.php" ); ?>
	</head>
	
	<body class="index">
	
		<? include( "inc/header.php" ); ?>
				
		<!-- Products list -->
		<div class="row products-list">
			
			<?
			// ---- Votre boutique ----------- //
			echo $rubrique->afficherRubriques( 1, $debug );
			?>
			
			
			<div class="large-4 medium-4 small-12 columns">
				<div class="content bijou">
					<img src="img/mannequin.png" alt="" />
					<h4>Ma robe...</h4>
					<p>mon bijou</p>
					<span class="color" style="background-color:#000;" onclick="location.href='categories.php?id_color=2'"></span>
					<span class="color" style="background-color:#818181;" onclick="location.href='categories.php?id_color=8'"></span>
					<span class="color" style="background-color:#fff;" onclick="location.href='categories.php?id_color=1'"></span>
					<span class="color" style="background-color:#cdcabf;" onclick="location.href='categories.php?id_color=5'"></span>
					<span class="color" style="background-color:#079dbd;" onclick="location.href='categories.php?id_color=3'"></span>
					<span class="color" style="background-color:#7dc60b;" onclick="location.href='categories.php?id_color=4'"></span>
					<span class="color" style="background-color:#f5226d;" onclick="location.href='categories.php?id_color=6'"></span>
					<span class="color" style="background-color:#eab916;" onclick="location.href='categories.php?id_color=7'"></span>
					<button >Trouver mon bijou</button>
				</div>
			</div>
			
			<?
			// ---- Ventes flash ----------- //
			echo $rubrique->afficherRubriques( 2, $debug );
			
			// ---- Promo ! ----------- //
			echo $rubrique->afficherRubriques( 3, $debug );
			
			// ---- Nouveauté ----------- //
			echo $rubrique->afficherRubriques( 4, $debug );
			
			// ---- Coup de cœur ----------- //
			echo $rubrique->afficherRubriques( 5, $debug );
			?>
			
		</div>		
				
		<? include( "inc/footer.php" ); ?>
		
		<script>
			$('.header .content ul li:nth-child(1)').addClass('active');
		</script>
		
	</body>
</html>
