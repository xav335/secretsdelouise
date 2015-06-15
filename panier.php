<?php require_once 'inc/inc.config.php';?>
<?php 
require 'admin/classes/Panier.php';
require 'admin/classes/utils.php';
session_start();

$panier = new Panier();

try {
		$result = $panier->panierGet(session_id());
		//print_r($result);
		
} catch (Exception $e) {
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
							<li class="active">
								<a href="#"><span>1 -</span> Récapitulatif</a>
							</li>
							<li>
								<a href="#"><span>2 -</span> Adresses</a>
							</li>
							<li>
								<a href="#"><span>3 -</span> Paiement</a>
							</li>
							<li>
								<a href="#"><span>4 -</span> Validation</a>
							</li>
						</ul>
					</div>
					<div class="large-9 medium-9 small-12 columns">
					<?php 
					if (!empty($result)):
					?>
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
							
							<tbody>
							    <?php 
							    $totalHT = 0;
                                foreach ($result as $value):
                                $totalHT += $value['prix']*$value['quantite'];
                                ?>
								<tr>
									<td>
										<a href="produit.php?id=<?php echo $value['id']?>"><img src="photos/products/thumbs<?php echo $value['image1']?>" alt="Nom du produit" width="70" height="70"></a>
									</td>
									<td>
										<p>
											<a href="produit.php?id=<?php echo $value['id']?>"><?php echo $value['label'] ?></a><br>
											(<?php if ($value['color'] != '- n/a' ) echo $value['color']  ?> - <?php if ($value['size'] != '- n/a' ) echo $value['size'] ?>)
										</p>
									</td>
									<td><?php echo number_format($value['prix']*(1+$tva), 2, ',', ' ') ?> €</td>
									<td>
										<input type="text" value="<?php echo $value['quantite'] ?>" name="quantite" />
										<div class="qte">
											<a href="admin/panier-fp.php?reference=panier&action=quantite&id_panier=<?php echo $value['id_panier']?>&quantite=<?php echo $value['quantite']+1 ?>">+</a> <a href="admin/panier-fp.php?reference=panier&action=quantite&id_panier=<?php echo $value['id_panier']?>&quantite=<?php echo $value['quantite']-1 ?>">-</a>
										</div>
									</td>
									<td><?php echo number_format(($value['prix']*$value['quantite'])*(1+$tva), 2, ',', ' ') ?> €</td>
									<td class="supprimer">
										<a href="admin/panier-fp.php?reference=panier&action=delete&id_panier=<?php echo $value['id_panier']?>"><img src="img/corbeille.png" alt="Supprimer le produit" /></a>
									</td>
								</tr>
								<?php 
                                endforeach;
                                $totalTVA = $totalHT*$tva;
                                $totalTTC = $totalHT + $totalTVA;
                                ?>
							</tbody>
							<tfoot>
								<tr>
									<td rowspan="4" colspan="2">
										
									</td>
									<td colspan="3">
										Total HT :
									</td>
									<td colspan="2"><?php echo number_format($totalHT, 2, ',', ' ')?> €</td>
								</tr>
								<tr>
									<td colspan="3">TVA</td>
									<td colspan="2"><?php echo number_format($totalTVA, 2, ',', ' ')?> €</td>
								</tr>
								<tr>
									<td colspan="3">
										<span>Total TTC</span>
									</td>
									<td colspan="2"><?php echo number_format($totalTTC, 2, ',', ' ')?> €</span>
									</td>
								</tr>
							</tfoot>
						</table>
						<div class="row">
							<div class="large-6 medium-6 small-6 columns">
								<button class="continuer" onclick="location.href='categories.php'">Continuer mes achats</button>
							</div>
							<div class="large-6 medium-6 small-6 columns" style="text-align:right;">
								<button onclick="location.href='adresse.php'">Passer commande</button>
							</div>
						</div>
						<?php 
						else :
						?>
						
						<div class="row">
							<div class="large-6 medium-6 small-6 columns">
							     <br><br><br><br>
							     <h4>Votre panier est vide ! </h4><br>
								<button class="continuer" onclick="location.href='categories.php'">Continuer mes achats</button>
							</div>
						</div>
						<?php 
						endif;
						?>
					</div>
				</div>
				<!-- End Products list -->
				
<?php include('inc/footer.php'); ?>
	</body>
</html>
