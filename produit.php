<?php require_once 'inc/inc.config.php';?>
<?php 
require 'admin/classes/Catproduct.php';
require 'admin/classes/utils.php';
require 'admin/classes/pagination.php';
session_start();

(!empty($_GET['id'])) ? $id_produit = $_GET['id'] : $id_produit = null;
(!empty($_GET['idcat'])) ? $idcat = $_GET['idcat'] : $idcat = null;


$catproduct = new Catproduct();
try {
		$result = $catproduct->productGet($id_produit, null, null, null, null,null);
		$produit = $result[0];
		$descriptionTailles = "/photos/categories".$produit['categories'][0]['descat'];
		//print_r($value);
		
		if (empty($idcat)) {
			$idcat = $produit['categories'][0]['catid'];
		}
		
		if (!empty($idcat)) {
			$result2 = $catproduct->catproductGet($idcat);
			$categorie = $result2[0]['label'];
			$libCategorie = '<a href="categories.php?idcat='. $idcat .'">' . $categorie. '</a> > ';
		} else {
			
			$libCategorie ='';
		} 
		
		$catproduct = null;
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
<div class="row breadcrumb">
	<a href="./">Accueil</a> > <a href="categories.php">Produits</a> > <?php echo  $libCategorie ?><?php echo $produit['label']?> 
</div>				
				
				<!-- Produit -->
				<div class="row produit">
					<div class="large-5 medium-5 small-5 columns">
						<a href="/photos/products<?php echo $produit['image1']?>"  class="fancybox lnk-produit<?php echo $produit['id']?>"><img src="/photos/products<?php echo $produit['image1']?>" alt=""  class="img-produit<?php echo $produit['id']?>" /></a> 
						<div class="row thumb">
							<div class="large-4 medium-4 small-4 columns">
								<?php if (!empty($produit['image1'])) { ?>
									<a href="/photos/products<?php echo $produit['image1']?>" id="thumblink1<?php echo $produit['id']?>" class="fancybox" data-fancybox-group="produit<?php echo $produit['id']?>"><img src="/photos/products/thumbs<?php echo $produit['image1']?>" id="thumbimg1<?php echo $produit['id']?>" alt="" /></a>
									<script>
										$(document).ready(function() {
											$('#thumblink1<?php echo $produit['id']?>').mouseover(function() {
												var lien = $('#thumblink1<?php echo $produit['id']?>').attr('href');
												$('.img-produit<?php echo $produit['id']?>').attr('src', lien);
												$('.lnk-produit<?php echo $produit['id']?>').attr('href', lien);
											});
										});	
									</script>
								<?php } ?>	
							</div>
							<div class="large-4 medium-4 small-4 columns">
								<?php if (!empty($produit['image2'])) { ?>
									<a href="/photos/products<?php echo $produit['image2']?>" id="thumblink2<?php echo $produit['id']?>" class="fancybox" data-fancybox-group="produit<?php echo $produit['id']?>"><img src="/photos/products/thumbs<?php echo $produit['image2']?>" id="thumbimg2<?php echo $produit['id']?>" alt="" /></a>
									<script>
										$(document).ready(function() {
											$('#thumblink2<?php echo $produit['id']?>').mouseover(function() {
												var lien = $('#thumblink2<?php echo $produit['id']?>').attr('href');
												$('.img-produit<?php echo $produit['id']?>').attr('src', lien);
												$('.lnk-produit<?php echo $produit['id']?>').attr('href', lien);
											});
										});	
									</script>
								<?php } ?>	
							</div>
							<div class="large-4 medium-4 small-4 columns">
								<?php if (!empty($produit['image3'])) { ?>	
									<a href="/photos/products<?php echo $produit['image3']?>" id="thumblink3<?php echo $produit['id']?>" class="fancybox" data-fancybox-group="produit<?php echo $produit['id']?>"><img src="/photos/products/thumbs<?php echo $produit['image3']?>" id="thumbimg3<?php echo $produit['id']?>" alt="" /></a>
									<script>
										$(document).ready(function() {
											$('#thumblink3<?php echo $produit['id']?>').mouseover(function() {
												var lien = $('#thumblink3<?php echo $produit['id']?>').attr('href');
												$('.img-produit<?php echo $produit['id']?>').attr('src', lien);
												$('.lnk-produit<?php echo $produit['id']?>').attr('href', lien);
											});
										});	
									</script>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="large-7 medium-7 small-7 columns">
						<h1><?php echo $produit['label']?></h1>
						<h2>Réf. : <?php echo $produit['reference']?></h2>
						<p>
							<?php echo nl2br($produit['description'])?>
						</p>
						<form class="row" method="POST" action="admin/panier-fp.php">
							<input type="hidden" name="reference" value="panier">
							<input type="hidden" name="action" value="ajout">
							<input type="hidden" name="idproduit" value="<?php echo $id_produit?>">
							<?php 
							//print_r($produit);
							//$ListeOperatSeri = htmlspecialchars(serialize($produit));
							//echo "<input type='hidden' value='".$ListeOperatSeri."' name='product' />";
							?>
							<!--  <input type="hidden" name="product" value="<?php //echo $ListeOperatSeri?>"> --> 
							
							<span class="prix"><?php echo number_format($produit['prix'], 2, ',', ' ');?>&nbsp;<?php echo $produit['libprix']?></span><br>
							<?php 
								$resultSousRef = $produit['sousref'];
								$yaDesSousRefsAvecStockPositif = false;
								if (!empty($resultSousRef)) {
								    foreach ($resultSousRef as $value2) {
								        if ($value2['stock']>0) $yaDesSousRefsAvecStockPositif =true;
								    }
								}
								if ($yaDesSousRefsAvecStockPositif): 
								?>
								<div class="row">
									<div class="large-8 columns">
									
											<select name="idsousref" id="idsousref">
											<?
											//print_r($value['sousref']);
    											foreach ($resultSousRef as $value2) : 
    											    if ($value2['stock']>0):
    												?>
    												<option value="<?php echo $value2['id'] ?>" >
    													<?php if ($value2['color'] != '- n/a' ) {?>
    													Couleur:&nbsp;<?php echo $value2['color'] ?>&nbsp;-&nbsp;
    													<?php } ?>
    													<?php if ($value2['size'] != '- n/a' ) {?>
    													Taille:&nbsp;<?php echo $value2['size'] ?>&nbsp;-&nbsp;
    													<?php } ?>
    													Quantité dispo:&nbsp;<?php echo $value2['stock'] ?>
    												</option>
    												<?
    												endif;
    											endforeach;
											?>
											</select>	
									</div>
									<div class="large-4 columns">
									   <?php if ($descriptionTailles <> "/photos/categories"):?>
										<a href="<?php echo $descriptionTailles?>" target="_blank">Descriptif des tailles </a>
										<?php endif;?>
									</div>
								</div>
							
							<button>Ajouter au panier</button>
							<?php else: ?>
							<h2>Cet article est en rupture de stock</h2>
							<?php endif; ?>
						</form>
						<div class="plus-produit hide-for-small">
							<h3><?php echo $produit['titreaccroche']?></h3>
							<div class="row">
								<div class="large-12 medium-12 small-12 columns">
									<?php echo nl2br($produit['accroche'])?>
								</div>
							</div>
						</div>
					</div>
					<div class="small-12 columns plus-produit show-for-small">
						<h3><?php echo $produit['titreaccroche']?></h3>
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php echo nl2br($produit['accroche'])?>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Produit -->
				
				
				<!-- Products list -->
				<div class="row products-list">
					<div class="large-3 medium-3 small-6 columns" onclick="location.href='categories.php?idrub=3'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Nouveauté</h4>
						</div>
					</div>
					<div class="large-3 medium-3 small-6 columns" onclick="location.href='categories.php?idrub=4'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Coup de cœur</h4>
						</div>
					</div>
					<div class="large-3 medium-3 small-6 columns" onclick="location.href='categories.php?idrub=2'">
						<div class="content">
							<span>
								<img src="img/couronne.png" alt="" class="couronne" />
								<img src="img/img-bijoux.jpg" alt="" class="img" />
							</span>
							<h4>Vente Flash</h4>
						</div>
					</div>
					<div class="large-3 medium-3 small-6 columns" onclick="location.href='categories.php?idrub=1'">
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
<script>
		$('.header .content ul li:nth-child(2)').addClass('active');
	</script>
	</body>
</html>
