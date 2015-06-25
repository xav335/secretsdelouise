<?php include_once '../inc/inc.config.php'; ?>
<?php include_once 'inc-auth-granted.php';?>
<?php include_once 'classes/utils.php';?>
<?php

require 'classes/Panier.php';
require 'classes/Contact.php';

define('TODO', 'TODO');

try {
    $panier = new Panier();
    $result = $panier->getCommandes($_GET['id']);
    //print_r($result);exit;
    $date_commande = $result[0]['date_ajout'];
    $id_contact = $result[0]['id_contact'];
    $id_facturation  = $result[0]['id_facturation'];
    $id_livraison    = $result[0]['id_livraison'];
    $session = $result[0]['session'];
    
    if (! empty($id_contact)) {
        $contact = new Contact();
        try {
            //$result = $contact->contactGet($id_contact, null, null);
           
            // Facturation
            $result = $contact->contactAddresseGet($id_facturation);
            //print_r($result);exit;
          
            $nom = $result[0]['nom'];
            $prenom = $result[0]['prenom'];
            $email = $result[0]['email'];
            $tel = $result[0]['tel'];
            $adresse = $result[0]['adresse'];
            $cp = $result[0]['cp'];
            $ville = $result[0]['ville'];
            // Livraison
            $result = $contact->contactAddresseGet($id_livraison);
            $nomliv = $result[0]['nom'];
            $prenomliv = $result[0]['prenom'];
            $emailliv = $result[0]['email'];
            $telliv = $result[0]['tel'];
            $adresseliv = $result[0]['adresse'];
            $cpliv = $result[0]['cp'];
            $villeliv = $result[0]['ville'];
            $message = $result[0]['message'];
            
            $action = 'modif';
        } catch (Exception $e) {
            echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
            $panier = null;
            exit();
        }
    }
    
    
    if (! empty($session)) {
        $produitsPanier = null;
        $resultPanier = $panier->panierCommandeGet($session);
        //print_r($resultPanier);
        foreach ($resultPanier as $lignePanier) {
            $prodTmp = null;
            $productOri = unserialize($lignePanier['serialproduct']);
            //print_r($productOri);
            $prodTmp['id_sousref']  = $lignePanier['id_sousref'];
            $prodTmp['quantite'] = $lignePanier['quantite'];
            
            $prodTmp['id_produit']  = $productOri['id'];
            $prodTmp['label'] = $productOri['label'];
            $prodTmp['prix'] =  $productOri['prix'];
            $prodTmp['shipping'] =  $productOri['shipping'];
            $prodTmp['reference'] =  $productOri['reference'];
            foreach ($productOri['sousref'] as $value) {
                if ($value['id'] == $prodTmp['id_sousref']) {
                   $prodTmp['sousref'] = $value['sousref'];
                   $prodTmp['color'] = $value['color'];
                   $prodTmp['size'] = $value['size'];
                }
            }   
            $produitsPanier[] = $prodTmp;
           
        }
    }
    
    
} catch (Exception $e) {
    echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
    $contact = null;
    exit();
}
?>

	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html;">
	<link href="../include/collants_styles_admin.css" rel="stylesheet" type="text/css">
	<title>visualisation de la commande</title>
	</head>
	<body style="background-color: #FFF" onload=window.print();>
	
	
	
	<table cellpadding=0 cellspacing=0  width="100%"  border="0">
		<tr>
			<td class="td_normal">
				<table cellpadding=0 cellspacing=0  width="100%"  border="0">
		        		<tr>
		        			<td class="td_normal" width="30%">
		        				<p><img src="img/logo.png" width="320"><br><br>
		        					26 avenue Gambetta </p>
		   					<p>33120 ARCACHON</p>
		   					<p>T&eacute;l. : 09.67.44.38.98<br>
		   					<p>Mode de paiement : 
		   					Paypal CB
		   					<br>
		   					</p>
						</td>
						<td class="td_normal" width=10>&nbsp;</td>
		        			<td class="td_normal" valign="top" width="69%">
		        				<table cellpadding=0 cellspacing=0  width="100%"  border="1" bordercolor="#000000">
		                        			<tr>
		                        				<td class="td_normal" align=center><b>FACTURE</b></td>
		                        			</tr>
		                        		</table>
							<br>
							<table cellpadding=0 cellspacing=0  width="100%"  border="1" bordercolor="#000000">
		                                		<tr>
		                                			<td class="td_normal" align=center>N&deg; facture </td>
		                                			<td class="td_normal" align=center> Date </td>
		                                			<td class="td_normal" align=center>Code client </td>
		                           			</tr>
		                                		<tr>
		                                			<td class="td_normal" align=center>
		                                			FC<?=$_GET['id']?>
		                                			</td>
		                                			<td class="td_normal" align=center><?= traitement_datetime_affiche($date_commande) ?></td>
		                                			<td class="td_normal" align=center>CL<?=$id_contact?></td>
		                           			</tr>
		                                	</table>
							<br>
						        <table cellpadding=0 cellspacing=0  width="100%"  border="1" bordercolor="#000000">
		                                		<tr>
		                                			<td align="center" class="td_normal">Adresse de livraison</td>
		                                			<td align="center" class="td_normal">Adresse de facturation</td>
		                           			</tr>
		                                		<tr>
		                                			<td class="td_normal">
		                                				<br>
		                                				<?php echo $nom ?>
                                                        <?php echo $prenom ?><br>
                                                        <?php echo $adresse ?><br>
                                                        Tél. <?php echo $tel ?><br>
                                                        <?php echo $cp ?>
                                                        <?php echo $ville ?><br>
		                                			</td>
		                                			<td class="td_normal">
		                                				<br>
		                                				<?php echo $nomliv ?>
                                                        <?php echo $prenomliv ?><br>
                                                        <?php echo $adresseliv ?><br>
                                                         Tél. <?php echo $telliv ?><br>
                                                        <?php echo $cpliv ?>
                                                        <?php echo $villeliv ?><br>
		                                			</td>
		                           			</tr>
		                                	</table>
						</td>
		   			</tr>
		        	</table>
		        	<br>
		        	<br>
			</td>
		</tr>
		<tr>
			<td class="td_normal">
				
				
				<table width="100%" border="0" align="left" cellpadding="10" >
			  <tr>
			    <td align="left" valign="top" id="texte3_blanc">
					  		<table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="B9133C" id="texte2">
							<tr align="left" valign="middle">
							  <td height="30" class="entete_panier">Désignation</td>
							  <td height="30" class="entete_panier">Taille</td>
							  <td height="30" class="entete_panier">Coloris</td>
							  <td height="30" class="entete_panier">Qté.</td>
							  <td height="30" class="entete_panier">Prix unitaire/&euro;</td>
							  <td height="30" class="entete_panier">Prix Total /&euro;</td>
							</tr>
							<?php 
        						if (!empty($result)) :
        						    $totalTTC = 0;
        						    $extraLiv = 0;
        							foreach ($produitsPanier as $value) : 
        							     $totalTTC += $value['prix']*$value['quantite'];
        							     $extraLiv += $value['shipping'];
        							?>
								
							<tr align="left" valign="top"><? //echo $row["lot"] ."  ". $row["quantite"] ?> 
							  <td bgcolor="#FFFFFF"><b><?php echo $value['label'] ?></b></td>
							  <td bgcolor="#FFFFFF"><b><?php echo $value['size'] ?></b></td>
							  <td bgcolor="#FFFFFF"><b><?php echo $value['color'] ?></b></td>
							  <td bgcolor="#FFFFFF"><b><?php echo $value['quantite'] ?></b></td>
							  
							  <td bgcolor="#FFFFFF" align="right"><b><? echo number_format($value['prix'], 2, ',', ' ') ?></b></td>
							  <td bgcolor="#FFFFFF" align="right"><b><? echo number_format($value["prix"] * $value["quantite"], 2, ',', ' '); ?></b></td>
							</tr>
							<?php endforeach; ?>
        						<?php endif; 
            						 $totalTVA = ($totalTTC*$tva)/(1+$tva);
                                     $totalHT = $totalTVA/$tva;
                                     $totalLiv += $extraLiv;
                                     $totalTTCLIV = $totalTTC + $totalLiv;
        						?>	
							
							
							<tr align="left" valign="top"> 
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td colspan="2" bgcolor="#FFFFFF"><b>Montant total</b></td>
							  <td id="fond_rouge" align="right"><span id="texte2_blanc"><? echo number_format($totalTTC, 2, ',', ' ') ?></span></td>
							</tr>
							<tr align="left" valign="top"> 
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td colspan="2" bgcolor="#FFFFFF"><b>Frais de port</b></td>
							  <td id="fond_rouge" align="right"><span id="texte2_blanc"><? echo number_format($totalLiv, 2, ',', ' ') ?></span></td>
							</tr>
							<tr align="left" valign="top"> 
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td colspan="2" bgcolor="#FFFFFF"><b>Dont TVA 20%</b></td>
							  <?
							  // on ajoute les frais de port
							  $totalTTC+=$totalLiv;
							  ?>
							  <td id="fond_rouge" align="right"><span id="texte2_blanc"><? echo number_format($totalTVA, 2, ',', ' ') ?></span></td>
							</tr>
							<tr align="left" valign="top"> 
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td bgcolor="#FFFFFF">&nbsp;</td>
							  <td colspan="2" bgcolor="#FFFFFF"><b>Total</b></td>
							  <?
							  // on ajoute les frais de port
							  //$prix_total+=$row2["frais_port"];
							  ?>
							  <td id="fond_rouge" align="right"><span id="texte2_blanc"><? echo number_format($totalTTC, 2, ',', ' ') ?></span></td>
							</tr>
						  	</table>
						  	<br>
						
						
			    
				</td>
			  </tr>
			</table>
				
				
			</td>
		</tr>
		<!-- <tr>
			<td class="td_normal">
				<p>TVA non applicable<br>
				Article 239b du code des imp&ocirc;ts</p>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td class="td_normal">
				<table cellpadding=0 cellspacing=0  width="100%"  border="1" bordercolor="#000000">
					<tr>
						<td class="td_normal" align=center>% TVA </td>
						<td class="td_normal" align=center>BASE</td>
						<td class="td_normal" align=center>Montant TVA </td>
						<td class="td_normal" align=center>Total TVA </td>
						<td class="td_normal" align=center>Total TTC </td>
						<td class="td_normal" align=center>D&eacute;ja r&eacute;gl&eacute; TTC </td>
					</tr>
					<tr>
						<td class="td_normal" align=right>Exon&eacute;r&eacute;</td>
						<td class="td_normal" align=right><?=$prix_total?></td>
						<td class="td_normal" align=right>N/A</td>
						<td class="td_normal" align=right>0</td>
						<td class="td_normal" align=right><?=$prix_total?></td>
						<td class="td_normal" align=right><?=$prix_total?></td>
					</tr>
				</table>
			</td>
		</tr> -->
		<tr>
			<td class="td_normal">&nbsp;</td>
		</tr>
		<tr>
			<td class="td_normal">
				<table cellpadding=0 cellspacing=0  width="100%"  border="1" bordercolor="#000000">
					<tr>
						<td class="td_normal">Entreprise individuelle - SIRET 22222222222 </td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="td_normal">
				<br><p>Madame, Monsieur,<br>
				Nous vous remercions de votre commande et esp&eacute;rons qu'elle vous donnera toute satisfaction.
				</p>
			</td>
		</tr>
		<tr>
			<td class="td_normal">&nbsp;</td>
		</tr>
	</table>
	</body>
	</html>
