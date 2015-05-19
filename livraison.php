<?php 
require 'admin/classes/Panier.php';
require 'admin/classes/utils.php';
$tva = 0.2;
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
							<li >
								<a href="panier.php"><span>1 -</span> Récapitulatif</a>
							</li>
							<li>
								<a href="adresse.php"><span>2 -</span> Adresses</a>
							</li>
							<li class="active">
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
									<th>Produit <?php echo $_SESSION['id_contact']?></th>
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
									<td><?php echo $value['prix']*(1+$tva) ?> €</td>
									<td>
										<?php echo $value['quantite'] ?>
									</td>
									<td><?php echo ($value['prix']*$value['quantite'])*(1+$tva) ?> €</td>
									
								</tr>
								<?php 
                                endforeach;
                                $totalTVA = $totalHT*$tva;
                                $totalTTC = $totalHT + $totalTVA;
                                $totalLiv = 15.3;
                                ?>
							</tbody>
							<tfoot>
								<tr>
									<td rowspan="4" colspan="2">
										
									</td>
									<td colspan="2">
										Total HT :
									</td>
									<td colspan="2"><?php echo $totalHT?> €</td>
								</tr>
								<tr>
									<td colspan="2">TVA</td>
									<td colspan="2"><?php echo $totalTVA?> €</td>
								</tr>
								<tr>
									<td colspan="2">Frais de livraison</td>
									<td colspan="2"><?php echo $totalLiv?> €</td>
								</tr>
								<tr>
									<td colspan="2">
										<span>Total TTC</span>
									</td>
									<td colspan="2"><?php echo $totalTTC?> €</span>
									</td>
								</tr>
							</tfoot>
						</table>
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                        <input type='hidden' value="39.00" name="amount" />
                        <input name="currency_code" type="hidden" value="EUR" />
                        <input name="shipping" type="hidden" value="9.50" />
                        <input name="tax" type="hidden" value="5.00" />
                        <input name="return" type="hidden" value="http://<?php echo $_SERVER['HTTP_HOST']?>/paiementValide.php" />
                        <input name="cancel_return" type="hidden" value="http://<?php echo $_SERVER['HTTP_HOST']?>/paiementAnnule.php" />
                        <input name="notify_url" type="hidden" value="http://<?php echo $_SERVER['HTTP_HOST']?>/valid.php" />
                        <input name="cmd" type="hidden" value="_xclick" />
                        <input name="business" type="hidden" value="xav335@hotmail.com" />
                        <input name="item_name" type="hidden" value="Commande_23433" />
                        <input name="no_note" type="hidden" value="1" />
                        <input name="lc" type="hidden" value="FR" />
                        <input name="bn" type="hidden" value="PP-BuyNowBF" />
                        <input name="custom" type="hidden" value="ID_ACHETEUR" />
                        
						<div class="row">
							<div class="large-6 medium-6 small-6 columns">
							</div>
							<div class="large-6 medium-6 small-6 columns" style="text-align:right;">
								 <input alt="Effectuez vos paiements via PayPal : une solution rapide, gratuite et sécurisée" name="submit" src="https://www.paypal.com/fr_FR/FR/i/btn/btn_buynow_LG.gif" type="image" /><img src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />
                      
							</div>
						</div>
						 </form>
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
