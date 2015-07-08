<?php require_once 'inc/inc.config.php';?>
<?php 
require 'admin/classes/Panier.php';
require 'admin/classes/ContactCommande.php';
require 'admin/classes/utils.php';
session_start();

(!empty($_SESSION['id_contact'])) ? $id_contact =$_SESSION['id_contact'] : $id_contact = null;
if (!empty($id_contact)){
    $contact = new ContactCommande();
    try {
        $panierlst = $contact->contactGet($id_contact, null, null);
        //print_r($result);exit;
        //Facturation
        
        $id_facturation  = $panierlst[0]['facturation'][0]['id_adresse'];
        $id_livraison    = $panierlst[0]['livraison'][0]['id_adresse'];
        
        $email =    $panierlst[0]['email'];
        $nom =      $panierlst[0]['facturation'][0]['nom'];
        $prenom =   $panierlst[0]['facturation'][0]['prenom'];
        $tel =      $panierlst[0]['facturation'][0]['tel'];
        $adresse =  $panierlst[0]['facturation'][0]['adresse'];
        $cp =       $panierlst[0]['facturation'][0]['cp'];
        $ville =    $panierlst[0]['facturation'][0]['ville'];
        //Livraison
        $nomliv =   $panierlst[0]['livraison'][0]['nom'];
        $prenomliv= $panierlst[0]['livraison'][0]['prenom'];;
        $emailliv = $panierlst[0]['livraison'][0]['email'];
        $telliv =   $panierlst[0]['livraison'][0]['tel'];
        $adresseliv=$panierlst[0]['livraison'][0]['adresse'];
        $cpliv =    $panierlst[0]['livraison'][0]['cp'];
        $villeliv = $panierlst[0]['livraison'][0]['ville'];
        $message=   $panierlst[0]['livraison'][0]['message'];

        $action = 'modif';

    } catch (Exception $e) {
        echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
        $contact = null;
        exit();
    } $contact = null;
} else {
    header('Location: /adresse.php');
}

$panier = new Panier();

try {
		$panierlst = $panier->panierGet(session_id());
		
		//on renseigne la TVA et les frais de livraison au moment de la commande
		$panierlst[0]['tva']=$tva;
		$panierlst[0]['totalLiv']=$totalLiv;
		$id_commande =$panier->ajoutCommande(session_id(), $id_contact, $id_facturation, $id_livraison, serialize($panierlst));
		
} catch (Exception $e) {
	echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
	$panier = null;
	exit();
}

$panier =null;
$extraLiv =0;
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
					if (!empty($panierlst)):
					?>
						<table name="panier">
						  <thead>
								<tr>
									<th>Commande N° <?php echo $id_commande?></th>
								</tr>
							</thead>
							<thead>
								<tr>
									<th>Produit</th>
									<th>Description</th>
									<th class="text-right">Prix unitaire</th>
									<th>Quantité</th>
									<th class="text-right">Total</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							
							<tbody>
							    <?php 
							    $totalTTC = 0;
							    
                                foreach ($panierlst as $value):
                                    $totalTTC += $value['prix']*$value['quantite'];
                                    $extraLiv += $value['shipping'];
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
									<td><?php echo number_format($value['prix'], 2, ',', ' ') ?> €</td>
									<td>
										<?php echo $value['quantite'] ?>
									</td>
									<td><?php echo number_format(($value['prix']*$value['quantite']), 2, ',', ' ') ?> €</td>
									
								</tr>
								<?php 
                                endforeach;
                                
                                $totalTVA = ($totalTTC*$tva)/(1+$tva);
                                $totalHT = $totalTVA/$tva;
                                $totalLiv += $extraLiv;
                                $totalTTCLIV = $totalTTC + $totalLiv;
                                ?>
							</tbody>
							<tfoot>
								<tr>
									<td rowspan="5" colspan="2">
										
									</td>
									<td colspan="2">
										Total HT :
									</td>
									<td colspan="2"><?php echo number_format($totalHT, 2, ',', ' ')?> €</td>
								</tr>
								<tr>
									<td colspan="2">Frais de livraison</td>
									<td colspan="2"><?php echo number_format($totalLiv, 2, ',', ' ')?> €</td>
								</tr>
								<tr>
									<td colspan="2">TVA</td>
									<td colspan="2"><?php echo number_format($totalTVA, 2, ',', ' ')?> €</td>
								</tr>
								<tr>
									<td colspan="2">Total TTC</td>
									<td colspan="2"><?php echo number_format($totalTTC, 2, ',', ' ')?> €</td>
								</tr>
								<tr>
									<td colspan="2">Total TTC + livraison</td>
									<td colspan="2"><?php echo number_format($totalTTCLIV, 2, ',', ' ')?> €</td>
								</tr>
							</tfoot>
						</table>
						
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
						<!-- Prepopulate the PayPal checkout page with customer details, -->
                        <input type="hidden" name="first_name" value="<?php echo $prenom?>">
                        <input type="hidden" name="last_name" value="<?php echo $nom?>">
                        <input type="hidden" name="email" value="<?php echo $email?>">
                        <input type="hidden" name="address1" value="<?php echo $adresse?>">
                        <input type="hidden" name="address2" value="">
                        <input type="hidden" name="city" value="<?php echo $ville?>">
                        <input type="hidden" name="zip" value="<?php echo $cp?>">
                        <input type="hidden" name="day_phone_a" value="">
                        <input type="hidden" name="day_phone_b" value="<?php echo $tel?>">
                        
                        <input type="hidden" name="same_as_billing" value="false">
                        
                        <input type="hidden" name="shipping_first_name" value="<?php echo $prenomliv?>">
                        <input type="hidden" name="shipping_last_name" value="<?php echo $nomliv?>">
                        <input type="hidden" name="shipping_email" value="<?php echo $emailliv?>">
                        <input type="hidden" name="shipping_address1" value="<?php echo $adresseliv?>">
                        <input type="hidden" name="shipping_address2" value="">
                        <input type="hidden" name="shipping_city" value="<?php echo $villeliv?>">
                        <input type="hidden" name="shipping_zip" value="<?php echo $cpliv?>">
                       
                        <input type="hidden" name="shipping_day_phone_b" value="<?php echo $telliv?>">
						
						
                        <input type='hidden' value="<?php echo number_format($totalHT, 2, '.', ' ')?>" name="amount" />
                        <input name="currency_code" type="hidden" value="EUR" />
                        <input name="shipping" type="hidden" value="<?php echo number_format($totalLiv, 2, '.', ' ')?>" />
                        <input name="tax" type="hidden" value="<?php echo number_format($totalTVA, 2, '.', ' ')?>" />
                        <input name="return" type="hidden" value="http://<?php echo $_SERVER['HTTP_HOST']?>/paiementValide.php" />
                        <input name="cancel_return" type="hidden" value="http://<?php echo $_SERVER['HTTP_HOST']?>/paiementAnnule.php" />
                        <input name="notify_url" type="hidden" value="http://<?php echo $_SERVER['HTTP_HOST']?>/valid.php" />
                        <input name="cmd" type="hidden" value="_xclick" />
                        <input name="business" type="hidden" value="xav335@hotmail.com" />
                        <input name="item_name" type="hidden" value="Commande_<?php echo $id_commande?>" />
                        <input name="no_note" type="hidden" value="1" />
                        <input name="lc" type="hidden" value="FR" />
                        <input name="bn" type="hidden" value="PP-BuyNowBF" />
                        <input name="custom" type="hidden" value="<?php echo $_SESSION['id_contact']?>" />
                        <div class="row">
            				<div class="large-12 columns">
            					<input type="checkbox" id="conditions" name="conditions"  /> J'accepte les <a href="conditions.php">conditions de vente du site</a>.
            				</div>
            			</div>
						<div class="row">
							<div class="large-6 medium-6 small-6 columns">
							</div>
							<div class="large-6 medium-6 small-6 columns" style="text-align:right;">
								 <input onclick="javascript:return ($('#conditions').is(':checked'));" alt="Effectuez vos paiements via PayPal : une solution rapide, gratuite et sécurisée" name="submit" src="https://www.paypal.com/fr_FR/FR/i/btn/btn_buynow_LG.gif" type="image" /><img src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />
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
