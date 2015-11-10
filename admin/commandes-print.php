<?
	include_once '../inc/inc.config.php';
	include_once 'classes/utils.php';
	require 'classes/Panier.php';
	require 'classes/ContactCommande.php';
	
	if ( !empty( $_GET[ "id" ] ) ) {
	    try {
	        $panier = new Panier();
	        $commande = $panier->getCommandes( $_GET[ "id" ] );
	        //print_pre( $commande );

	        $id_contact = $commande[ 0 ][ "id_contact" ];
	        $id_facturation  = $commande[ 0 ][ "id_facturation" ];
	        $id_livraison    = $commande[ 0 ][ "id_livraison" ];
	        $statut_paiement = $commande[ 0 ][ "statut_paiement" ];
	        $statut_commande = $commande[ 0 ][ "statut_commande" ];
	        $date_commande = $commande[ 0 ][ "date_ajout" ];
	        $colissimo = $commande[ 0 ][ "colissimo" ];
	        $session = $commande[ 0 ][ "session" ];
	        $liste_article = unserialize( $commande[ 0 ][ "panier" ] );
	        
	        // ---- Contact trouvé --------------------------------- //
	        if ( !empty( $id_contact ) ) {
	            $contact = new ContactCommande();
	            try {
	                //$result = $contact->contactGet($id_contact, null, null);
	               
	                // ---- Facturation ------------------- //
	                if ( 1 == 1 ) {
		                $contactResult = $contact->contactAddresseGet( $id_facturation );
		              
		                $nom = $contactResult[ 0 ][ "nom" ];
		                $prenom = $contactResult[ 0 ][ "prenom" ];
		                $email = $contactResult[ 0 ][ "email" ];
		                $tel = $contactResult[ 0 ][ "tel" ];
		                $adresse = $contactResult[ 0 ][ "adresse" ];
		                $cp = $contactResult[ 0 ][ "cp" ];
		                $ville = $contactResult[ 0 ][ "ville" ];
		            }
	                // ------------------------------------ //
	                
	                // ---- Livraison --------------------- //
	                if ( 1 == 1 ) {
		                $contactResult = $contact->contactAddresseGet( $id_livraison );
		                
		                $nomliv = $contactResult[ 0 ][ "nom" ];
		                $prenomliv = $contactResult[ 0 ][ "prenom" ];
		                $emailliv = $contactResult[ 0 ][ "email" ];
		                $telliv = $contactResult[ 0 ][ "tel" ];
		                $adresseliv = $contactResult[ 0 ][ "adresse" ];
		                $cpliv = $contactResult[ 0 ][ "cp" ];
		                $villeliv = $contactResult[ 0 ][ "ville" ];
		                $message = $contactResult[ 0 ][ "message" ];
		            }
	                // ------------------------------------ //
	                
	                $action = 'modif';
	            } 
	            catch (Exception $e) {
	                echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
	                $panier = null;
	                exit();
	            }
	        }
	        // ----------------------------------------------------- //
	        
	        // ---- Traitement du panier --------------------------- //
	        if ( ! empty( $liste_article[ "panier" ] ) ) {
	            $contenu_tableau = '';

	            foreach ( $liste_article[ "panier" ] as $_article ) {
					$contenu_tableau .= "<tr align='left' valign='top'>\n";
					$contenu_tableau .= "	<td bgcolor='#FFFFFF'><b>" . $_article[ "label" ] . "</b></td>\n";
					$contenu_tableau .= "	<td bgcolor='#FFFFFF'><b>" . $_article[ "reference" ] ." / ". $_article[ "sousref" ] . "</b></td>\n";
					$contenu_tableau .= "	<td bgcolor='#FFFFFF'><b>" . $_article[ "size" ] . "</b></td>\n";
					$contenu_tableau .= "	<td bgcolor='#FFFFFF'><b>" . $_article[ "color" ] . "</b></td>\n";
					$contenu_tableau .= "	<td bgcolor='#FFFFFF'><b>" . $_article[ "quantite" ] . "</b></td>\n";
					$contenu_tableau .= "	<td bgcolor='#FFFFFF' align='right'><b>" . number_format( $_article[ "prix" ], 2 ) . " €</td>\n";
					$contenu_tableau .= "	<td bgcolor='#FFFFFF' align='right'><b>" . number_format( $_article[ "prix" ] * $_article[ "quantite" ], 2 ) . " €</td>\n";
					$contenu_tableau .= "</tr>\n";
				}
	        }
	        // ----------------------------------------------------- //
	        
	        // ---- Informations diverses -------------------------- //
	        if ( 1 == 1) {
	        	$taux_tva = $liste_article[ "divers" ][ "tva" ] * 100;
	            $totalLiv = $liste_article[ "divers" ][ "frais_livraison_pratique" ];
	            $totalTVA = $liste_article[ "divers" ][ "total_ht_commande_hors_fdp" ] * $liste_article[ "divers" ][ "tva" ];
	            $totalTTC = $liste_article[ "divers" ][ "total_ht_commande_hors_fdp" ] * ( 1 + $liste_article[ "divers" ][ "tva" ] );
	            $totalTTCLIV = $totalTTC + $totalLiv;
	        }
	        // ----------------------------------------------------- //
	        
	    } 
	    catch ( Exception $e ) {
	        echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
	        $contact = null;
	        exit();
	    }
	} 
	else {
	    echo "pas d'id defini";
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
						<p>
							<img src="img/logo.png" width="320"><br><br>
							www.lessecretsdelouise.com     <br><br>
							clients@lessecretsdelouise.com <br>
						</p>
						<p>T&eacute;l. : 05.57.52.24.99</p>
						<p>Mode de paiement : Paypal CB</p>
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
								FC<?=$_GET[ "id" ]?>
							</td>
							<td class="td_normal" align=center><?= traitement_datetime_affiche($date_commande) ?></td>
							<td class="td_normal" align=center>CL<?=$id_contact?></td>
						</tr>
						</table>
						<br>
						
						<table cellpadding=3 cellspacing=0  width="100%"  border="1" bordercolor="#000000">
						<tr>
							<td align="center" class="td_normal">Adresse de facturation</td>
							<td align="center" class="td_normal">Adresse de livraison</td>
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
				<br><br>
				
			</td>
		</tr>
		<tr>
			<td class="td_normal">
				
				<table width="100%" border="0" align="left" cellpadding="0" >
				<tr>
					<td align="left" valign="top" id="texte3_blanc">
						<table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="B9133C" id="texte2">
						<tr align="left" valign="middle">
							<td height="30" class="entete_panier">Désignation</td>
							<td height="30" class="entete_panier">Réf.</td>
							<td height="30" class="entete_panier">Taille</td>
							<td height="30" class="entete_panier">Coloris</td>
							<td height="30" class="entete_panier">Qté.</td>
							<td height="30" class="entete_panier">Prix unitaire/&euro;</td>
							<td height="30" class="entete_panier">Prix Total /&euro;</td>
						</tr>
						<? 
						// ---- Affichage udétail calculé précédemment
					    echo $contenu_tableau;
						?>	
						
						<tr align="left" valign="top"> 
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td colspan="2" bgcolor="#FFFFFF"><b>Montant total</b></td>
							<td id="fond_rouge" align="right"><span id="texte2_blanc"><?=number_format( $totalTTC, 2 ) ?></span></td>
						</tr>
						<tr align="left" valign="top"> 
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td colspan="2" bgcolor="#FFFFFF"><b>Frais de port</b></td>
							<td id="fond_rouge" align="right"><span id="texte2_blanc"><?=number_format( $totalLiv, 2 ) ?></span></td>
						</tr>
						<tr align="left" valign="top"> 
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td colspan="2" bgcolor="#FFFFFF"><b>Dont TVA <?=$taux_tva?>%</b></td>
							<td id="fond_rouge" align="right"><span id="texte2_blanc"><?=number_format( $totalTVA, 2 ) ?></span></td>
						</tr>
						<tr align="left" valign="top"> 
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td colspan="2" bgcolor="#FFFFFF"><b>Total</b></td>
							<td id="fond_rouge" align="right"><span id="texte2_blanc"><?=number_format( $totalTTCLIV, 2 ) ?></span></td>
						</tr>
						</table>
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
				<br><p>Madame, Monsieur,<br>
				Nous vous remercions de votre commande et esp&eacute;rons qu'elle vous donnera toute satisfaction.
				</p>
			</td>
		</tr>
		<tr>
			<td class="td_normal">&nbsp;</td>
		</tr>
		<tr>
			<td class="td_normal">
				<table cellpadding=3 cellspacing=0  width="100%"  border="1" bordercolor="#000000">
					<tr>
						<td class="td_normal">LSL e-services, SAS au capital de 1000 euros, inscrite au RCS de Bordeaux 799 399 936,<br>
						12 bis, cours Héricart de Thury 33120 ARCACHON - SIRET : 799 399 936 00019 - <br> APE : 4778C - TVA : FR 47799399936.

						</td>
					</tr>
				</table>
			</td>
		</tr>
		
		<tr>
			<td class="td_normal">&nbsp;</td>
		</tr>
	</table>
	</body>
	</html>
