<?php 
require 'admin/classes/Catproduct.php';
require 'admin/classes/utils.php';
require 'admin/classes/pagination.php';
session_start();

if (!empty($_GET)){
	$id = $_GET['id'];
}else {
	$id = null;
}

$catproduct = new Catproduct();
try {
		$result = $catproduct->productGet($id, null, null, null, null);
		$value = $result[0];
		//print_r($value);
		
	
} catch (Exception $e) {
	echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
	$catproduct = null;
	exit();
}
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<title>Les Secrets de Louise - Bijoux &amp; accessoires</title>
<?php include('inc/meta.php'); ?>
	</head>
	<body class="page-produit">
	
<?php include('inc/header.php'); ?>
				
				
				<!-- Produit -->
				<div class="row produit">
					<div class="large-5 medium-5 small-5 columns">
						<a href="/photos/products<?php echo $value['image1']?>"  class="fancybox lnk-produit<?php echo $value['id']?>"><img src="/photos/products<?php echo $value['image1']?>" alt=""  class="img-produit<?php echo $value['id']?>" /></a> 
						<div class="row thumb">
							<div class="large-4 medium-4 small-4 columns">
								<?php if (!empty($value['image1'])) { ?>
									<a href="/photos/products<?php echo $value['image1']?>" id="thumblink1<?php echo $value['id']?>" class="fancybox" data-fancybox-group="produit<?php echo $value['id']?>"><img src="/photos/products/thumbs<?php echo $value['image1']?>" id="thumbimg1<?php echo $value['id']?>" alt="" /></a>
									<script>
										$(document).ready(function() {
											$('#thumblink1<?php echo $value['id']?>').mouseover(function() {
												var lien = $('#thumblink1<?php echo $value['id']?>').attr('href');
												$('.img-produit<?php echo $value['id']?>').attr('src', lien);
												$('.lnk-produit<?php echo $value['id']?>').attr('href', lien);
											});
										});	
									</script>
								<?php } ?>	
							</div>
							<div class="large-4 medium-4 small-4 columns">
								<?php if (!empty($value['image2'])) { ?>
									<a href="/photos/products<?php echo $value['image2']?>" id="thumblink2<?php echo $value['id']?>" class="fancybox" data-fancybox-group="produit<?php echo $value['id']?>"><img src="/photos/products/thumbs<?php echo $value['image2']?>" id="thumbimg2<?php echo $value['id']?>" alt="" /></a>
									<script>
										$(document).ready(function() {
											$('#thumblink2<?php echo $value['id']?>').mouseover(function() {
												var lien = $('#thumblink2<?php echo $value['id']?>').attr('href');
												$('.img-produit<?php echo $value['id']?>').attr('src', lien);
												$('.lnk-produit<?php echo $value['id']?>').attr('href', lien);
											});
										});	
									</script>
								<?php } ?>	
							</div>
							<div class="large-4 medium-4 small-4 columns">
								<?php if (!empty($value['image3'])) { ?>	
									<a href="/photos/products<?php echo $value['image3']?>" id="thumblink3<?php echo $value['id']?>" class="fancybox" data-fancybox-group="produit<?php echo $value['id']?>"><img src="/photos/products/thumbs<?php echo $value['image3']?>" id="thumbimg3<?php echo $value['id']?>" alt="" /></a>
									<script>
										$(document).ready(function() {
											$('#thumblink3<?php echo $value['id']?>').mouseover(function() {
												var lien = $('#thumblink3<?php echo $value['id']?>').attr('href');
												$('.img-produit<?php echo $value['id']?>').attr('src', lien);
												$('.lnk-produit<?php echo $value['id']?>').attr('href', lien);
											});
										});	
									</script>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="large-7 medium-7 small-7 columns">
						<h1><?php echo $value['label']?></h1>
						<h2>Réf. : <?php echo $value['reference']?></h2>
						<p>
							<?php echo nl2br($value['description'])?>
						</p>
						<form class="row" action="panier.php">
							<span class="prix"><?php echo $value['prix']?>&nbsp;<?php echo $value['libprix']?></span>
							<span class="quantite"><input type="text" name="quantite" value="1" /></span>
							<button>Ajouter au panier</button>
						</form>
						<div class="plus-produit hide-for-small">
							<h3><?php echo $value['titreaccroche']?></h3>
							<div class="row">
								<div class="large-12 medium-12 small-12 columns">
									<?php echo nl2br($value['accroche'])?>
								</div>
							</div>
						</div>
					</div>
					<div class="small-12 columns plus-produit show-for-small">
						<h3><?php echo $value['titreaccroche']?></h3>
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php echo nl2br($value['accroche'])?>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Produit -->
				
				
				<!-- Products list -->
				<div class="row products-list">
					<div class="large-3 medium-3 small-6 columns" onclick="location.href='#'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Nouveauté</h4>
						</div>
					</div>
					<div class="large-3 medium-3 small-6 columns" onclick="location.href='#'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Coup de cœur</h4>
						</div>
					</div>
					<div class="large-3 medium-3 small-6 columns" onclick="location.href='categories.php'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Votre boutique</h4>
						</div>
					</div>
					<div class="large-3 medium-3 small-6 columns" onclick="location.href='#'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Promotions</h4>
						</div>
					</div>
				</div>		
				<!-- End Products list -->
<?php include('inc/footer.php'); ?>
	</body>
</html>
