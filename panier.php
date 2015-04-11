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
							<li class="active">
								<a href="#"><span>1 -</span> Récapitulatif</a>
							</li>
							<li>
								<a href="#"><span>2 -</span> Adresses</a>
							</li>
							<li>
								<a href="#"><span>3 -</span> Livraison</a>
							</li>
							<li>
								<a href="#"><span>4 -</span> Paiement</a>
							</li>
						</ul>
					</div>
					<div class="large-9 medium-9 small-12 columns">
						<table name="panier">
							<thead>
								<tr>
									<th>Produit</th>
									<th>Description</th>
									<th>Prix unitaire</th>
									<th>Quantité</th>
									<th>Total</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td rowspan="4" colspan="2">
										<form action="" method="post" id="reduction">
											<h6>Bons de réduction</h6>
											<input type="text" value="">
											<button type="submit" class="button">ok</button>
										</form>
									</td>
									<td colspan="3">
										Total produits TTC :
									</td>
									<td colspan="2">23,70 €</td>
								</tr>
								<tr>
									<td colspan="3">Total frais de port (TTC)</td>
									<td colspan="2">9,67 €</td>
								</tr>
								<tr>
									<td colspan="3">
										<span>Total</span>
									</td>
									<td colspan="2">33,37 €</span>
									</td>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td>
										<a href="produit.php"><img src="img/img-bijoux.jpg" alt="Nom du produit" width="70" height="70"></a>
									</td>
									<td>
										<p>
											<a href="produit.php">Nom du produit</a>
										</p>
									</td>
									<td>23,70 €</td>
									<td>
										<input type="text" value="1" name="quantite" />
										<div class="qte">
											<a href="#">+</a> <a href="#">-</a>
										</div>
									</td>
									<td>23,70 €</td>
									<td class="supprimer">
										<a href="#"><img src="img/corbeille.png" alt="Supprimer le produit" /></a>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="row">
							<div class="large-6 medium-6 small-6 columns">
								<button class="continuer" onclick="location.href='categories.php'">Continuer mes achats</button>
							</div>
							<div class="large-6 medium-6 small-6 columns" style="text-align:right;">
								<button>Passer commande</button>
							</div>
						</div>
					</div>
				</div>
				<!-- End Products list -->
				
<?php include('inc/footer.php'); ?>
	</body>
</html>
