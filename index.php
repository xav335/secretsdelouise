<?php require_once 'inc/inc.config.php';?>
<?php 
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<title>Les Secrets de Louise - Bijoux &amp; accessoires</title>
<?php include('inc/meta.php'); ?>
	</head>
	<body class="index">
	
<?php include('inc/header.php'); ?>
				
				<!-- Products list -->
				<div class="row products-list">
					<div class="large-4 medium-4 small-12 columns" onclick="location.href='categories.php'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Votre boutique</h4>
							<p>Bague, bracelets, colliers...</p>
							<a href="categories.php" class="bt-voir">Voir</a>
						</div>
					</div>
					
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
					<div class="large-4 medium-4 small-12 columns" onclick="location.href='categories.php?idrub=1'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Promo !</h4>
							<p>Toutes nos promos du moment...</p>
							<a href="categories.php?idrub=1" class="bt-voir">Voir</a>
						</div>
					</div>
					<div class="large-4 medium-4 small-12 columns" onclick="location.href='categories.php?idrub=2'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Ventes flash</h4>
							<p>Bague, bracelets, colliers...</p>
							<a href="categories.php?idrub=2" class="bt-voir">Voir</a>
						</div>
					</div>
					<div class="large-4 medium-4 small-12 columns" onclick="location.href='categories.php?idrub=3'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Nouveauté</h4>
							<p>Ne loupez pas nos derniers articles arrivés...</p>
							<a href="categories.php?idrub=3" class="bt-voir">Voir</a>
						</div>
					</div>
					<div class="large-4 medium-4 small-12 columns" onclick="location.href='categories.php?idrub=4'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Coup de cœur</h4>
							<p></p>
							<a href="categories.php?idrub=4" class="bt-coeur"></a>
						</div>
					</div>
					
				</div>		
				<!-- End Products list -->
				
<?php include('inc/footer.php'); ?>
<script>
		$('.header .content ul li:nth-child(1)').addClass('active');
	</script>
	</body>
</html>
