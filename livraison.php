<?
	require_once 'inc/inc.config.php';
	require './admin/classes/Catproduct.php';
	require 'admin/classes/Panier.php';
	require 'admin/classes/ContactCommande.php';
	require 'admin/classes/utils.php';
	session_start();

	$debug = false;
	$debug_paypal = true;
	( !empty( $_SESSION[ "id_contact" ] ) ) ? $id_contact = $_SESSION[ "id_contact" ] : $id_contact = null;
	$data_commande = array();
	
	// ---- Récupération des infos client --------------------------------------- //
	if ( !empty( $id_contact ) ) {
	    $contact = new ContactCommande();
	    try {
	        $result = $contact->contactGet( $id_contact, null, null );
	        $data_commande[ "client" ] = $result[ 0 ];
			//print_pre(  $data_commande[ "client" ] );
			//exit();
			
	        // ---- Facturation
	        if ( 1 == 1 ) {
		        $id_facturation  = $result[0][ "facturation" ][0][ "id_adresse" ];
		        $id_livraison    = $result[0][ "livraison" ][0][ "id_adresse" ];
		        
		        $email =    $result[0][ "email" ];
		        $nom =      $result[0][ "facturation" ][0][ "nom" ];
		        $prenom =   $result[0][ "facturation" ][0][ "prenom" ];
		        $tel =      $result[0][ "facturation" ][0][ "tel" ];
		        $adresse =  $result[0][ "facturation" ][0][ "adresse" ];
		        $cp =       $result[0][ "facturation" ][0][ "cp" ];
		        $ville =    $result[0][ "facturation" ][0][ "ville" ];
		    }
	        
	        // ---- Livraison
	        if ( 1 == 1 ) {
		        $nomliv =   $result[0][ "livraison" ][0][ "nom" ];
		        $prenomliv= $result[0][ "livraison" ][0][ "prenom" ];;
		        $emailliv = $result[0][ "livraison" ][0][ "email" ];
		        $telliv =   $result[0][ "livraison" ][0][ "tel" ];
		        $adresseliv=$result[0][ "livraison" ][0][ "adresse" ];
		        $cpliv =    $result[0][ "livraison" ][0][ "cp" ];
		        $villeliv = $result[0][ "livraison" ][0][ "ville" ];
		        $message=   $result[0][ "livraison" ][0][ "message" ];
		    }
	
	        $action = 'modif';
	
	    } 
	    catch ( Exception $e ) {
	        echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
	        $contact = null;
	        exit();
	    } $contact = null;
	} 
	else {
	    header('Location: /adresse.php');
	}
	
	// ---- Enregistrement de la commande --------------------------------------- //
	if ( 1 == 1 ) {
		$panier = new Panier();
		
		try {
			$liste_article = $panier->panierGet( session_id() );
			$data_commande[ "panier" ] = $liste_article;
			//print_pre( $data_commande[ "panier" ] );
			
			// ---- On prépare l'affichage du détail de la commande ---------------------------- //
			if ( !empty( $liste_article ) ) {
				$totalTTC = 0;
				$extraLiv = 0;
			    $frais_livraison = FRAIS_LIVRAISON;
			    $contenu_tableau = '';
			    
                foreach ( $liste_article as $_article ) {
                	//print_pre( $_article );
                	
                    $totalTTC += $_article[ "prix" ] * $_article[ "quantite" ];
                    $extraLiv += $_article[ "shipping" ] * $_article[ "quantite" ];
                    
                    $contenu_tableau .= "<tr>\n";
					$contenu_tableau .= "	<td>\n";
					$contenu_tableau .= "		<a href='produit.php?id=" . $_article[ "id" ] . "'><img src='photos/products/thumbs" . $_article[ "image1" ] . "' alt='Nom du produit' width='70' height='70'></a>\n";
					$contenu_tableau .= "	</td>\n";
					$contenu_tableau .= "	<td>\n";
					$contenu_tableau .= "		<p>\n";
					$contenu_tableau .= "			<a href='produit.php?id=" . $_article[ "id" ] . "'>" . $_article[ "label" ] . "</a><br>\n";
					
					$couleur = ( $_article[ "color" ] != '- n/a' ) ? $_article[ "color" ] : "";
					$taille = ( $_article[ "size" ] != '- n/a' ) ? $_article[ "size" ] : "";
					$contenu_tableau .= "			(" . $couleur . " - " . $taille . ")\n";
					$contenu_tableau .= "		</p>\n";
					$contenu_tableau .= "	</td>\n";
					$contenu_tableau .= "	<td>" . number_format($_article[ "prix" ], 2 ) . " €</td>\n";
					$contenu_tableau .= "	<td>" . $_article[ "quantite" ] . "</td>\n";
					$contenu_tableau .= "	<td>" . number_format( ( $_article[ "prix" ] * $_article[ "quantite" ] ) ) . " €</td>\n";
					$contenu_tableau .= "</tr>\n";
				}
				
				$totalTVA = ( $totalTTC * TVA ) / ( 1 + TVA );
				$totalHT = number_format( $totalTVA / TVA, 2 );
				$frais_livraison += $extraLiv;
			}
			// --------------------------------------------------------------------------------- //
			
			// ---- Informations diverses sur la commande -------------------------------------- //
			if ( 1 == 1 ) {
				$data_commande[ "divers" ][ "tva" ] = TVA;
				$data_commande[ "divers" ][ "seuil_fdl_gratos" ] = SEUIL_FDL_GRATOS;
				$data_commande[ "divers" ][ "frais_livraison_calcule" ] = $frais_livraison;
				
				if ( $totalHT >= SEUIL_FDL_GRATOS ) $frais_livraison = 0;
				$data_commande[ "divers" ][ "frais_livraison_pratique" ] = $frais_livraison;
				$totalTTCLIV = $totalTTC + $frais_livraison;
				
				$data_commande[ "divers" ][ "total_ht_commande_hors_fdp" ] = $totalHT;
				//print_pre( $data_commande[ "divers" ] );
			}
			// --------------------------------------------------------------------------------- //
			
			// ---- Enregistrement en base de la commande -------------------------------------- //
			//print_pre( $data_commande );
			$id_commande = $panier->ajoutCommande( 
				session_id(), 
				$id_contact, 
				$id_facturation, 
				$id_livraison, 
				serialize( $data_commande ),
				$debug
			);
			
		} 
		catch (Exception $e) {
			echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
			$panier = null;
			exit();
		}
	}
	
	$panier = null;
	$serveur_paypal = ( $debug_paypal )
		? "https://www.sandbox.paypal.com/cgi-bin/webscr"
		: "#";

	$business_code = ( $debug_paypal ) ? "bijoux.secretsdelouise@gmail.com" : "bijoux.secretsdelouise@gmail.com";
	//$type_champ = ( $debug_paypal ) ? "text" : "hidden";
	$type_champ = "hidden";
	$target = ( $debug_paypal ) ? "target='_blank'" : "";
	$custom = $id_commande . ";" . $_SESSION[ "id_contact" ] . ";" . number_format( $totalHT, 2 ) . ";" . number_format( $frais_livraison, 2 ) . ";" . number_format( $totalTVA, 2 );
	$item_name = 'Commande No.' . $id_commande . ' "les secrets de Louise"';
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<title>Les Secrets de Louise - Bijoux &amp; accessoires</title>
		<? include( "inc/meta.php" ); ?>
	</head>
	
	<body class="page-panier">
	
		<? include( "inc/header.php" ); ?>
				
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
			<? 
			if ( !empty( $liste_article ) ) {
				?>
				<table name="panier">
				  <thead>
						<tr>
							<th>Commande N° <?=$id_commande?></th>
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
					    <? 
					    // ---- Affichage udétail calculé précédemment
					    echo $contenu_tableau;
                        ?>
					</tbody>
					<tfoot>
						<tr>
							<td rowspan="5" colspan="2">&nbsp;</td>
							<td colspan="2">Total HT :</td>
							<td colspan="2"><?=number_format( $totalHT, 2 )?> €</td>
						</tr>
						<tr>
							<td colspan="2">Frais de livraison</td>
							<td colspan="2"><?=number_format( $frais_livraison, 2 )?> €</td>
						</tr>
						<tr>
							<td colspan="2">TVA</td>
							<td colspan="2"><?=number_format( $totalTVA, 2 )?> €</td>
						</tr>
						<tr>
							<td colspan="2">Total TTC</td>
							<td colspan="2"><?=number_format( $totalTTC, 2 )?> €</td>
						</tr>
						<tr>
							<td colspan="2">Total TTC + livraison</td>
							<td colspan="2"><?=number_format( $totalTTCLIV, 2 )?> €</td>
						</tr>
					</tfoot>
				</table>
				
				<form method="post" action="<?=$serveur_paypal?>" <?=$target?> >
					<input type="<?=$type_champ?>" name="first_name" value="<?=$prenom?>">
					<input type="<?=$type_champ?>" name="last_name" value="<?=$nom?>">
					<input type="<?=$type_champ?>" name="email" value="<?=$email?>">
					<input type="<?=$type_champ?>" name="address1" value="<?=$adresse?>">
					<input type="<?=$type_champ?>" name="address2" value="">
					<input type="<?=$type_champ?>" name="city" value="<?=$ville?>">
					<input type="<?=$type_champ?>" name="zip" value="<?=$cp?>">
					<input type="<?=$type_champ?>" name="day_phone_a" value="">
					<input type="<?=$type_champ?>" name="day_phone_b" value="<?=$tel?>">
					
					<input type="<?=$type_champ?>" name="same_as_billing" value="false">
					
					<input type="<?=$type_champ?>" name="shipping_first_name" value="<?=$prenomliv?>">
					<input type="<?=$type_champ?>" name="shipping_last_name" value="<?=$nomliv?>">
					<input type="<?=$type_champ?>" name="shipping_email" value="<?=$emailliv?>">
					<input type="<?=$type_champ?>" name="shipping_address1" value="<?=$adresseliv?>">
					<input type="<?=$type_champ?>" name="shipping_address2" value="">
					<input type="<?=$type_champ?>" name="shipping_city" value="<?=$villeliv?>">
					<input type="<?=$type_champ?>" name="shipping_zip" value="<?=$cpliv?>">
					
					<input type="<?=$type_champ?>" name="shipping_day_phone_b" value="<?=$telliv?>">
					
					<input type="<?=$type_champ?>" name="amount" value="<?=number_format( $totalHT, 2, '.', ' ' )?>" />
					<input type="<?=$type_champ?>" name="currency_code" value="EUR" />
					<input type="<?=$type_champ?>" name="shipping" value="<?=number_format( $frais_livraison, 2, '.', ' ' )?>" />
					<input type="<?=$type_champ?>" name="tax" value="<?=number_format( $totalTVA, 2, '.', ' ' )?>" />
					<input type="<?=$type_champ?>" name="cmd" value="_xclick" />
					<input type="<?=$type_champ?>" name="business" value="<?=$business_code?>" />
					<input type="<?=$type_champ?>" name="item_name" value='<?=$item_name?>' />
					<input type="<?=$type_champ?>" name="no_note" value="1" />
					<input type="<?=$type_champ?>" name="lc" value="FR" />
					<input type="<?=$type_champ?>" name="bn" value="PP-BuyNowBF" />
					<input type="<?=$type_champ?>" name="custom" value="<?=$custom?>" />
					
					<input type="<?=$type_champ?>" name="return" value="http://<?=$_SERVER[ "HTTP_HOST" ]?>/paiementValide.php" />
					<input type="<?=$type_champ?>" name="cancel_return" value="http://<?=$_SERVER[ "HTTP_HOST" ]?>/paiementAnnule.php" />
					<input type="<?=$type_champ?>" name="notify_url" value="http://<?=$_SERVER[ "HTTP_HOST" ]?>/valid.php" />
					
					<div class="row">
						<div class="large-12 columns">
							<input type="checkbox" id="conditions" name="conditions"  /> J'accepte les <a href="conditions.php">conditions de vente du site</a>.
						</div>
					</div>
					<div class="row">
						<div class="large-6 medium-6 small-6 columns">&nbsp;</div>
						<div class="large-6 medium-6 small-6 columns" style="text-align:right;">
							<input onclick="javascript:return ($('#conditions').is(':checked'));" alt="Effectuez vos paiements via PayPal : une solution rapide, gratuite et sécurisée" name="submit" src="https://www.paypal.com/fr_FR/FR/i/btn/btn_buynow_LG.gif" type="image" /><img src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />
						</div>
					</div>
				</form> 
				<?
			}
			else {
				?>
				<div class="row">
					<div class="large-6 medium-6 small-6 columns">
					     <br><br><br><br>
					     <h4>Votre panier est vide ! </h4><br>
						<button class="continuer" onclick="location.href='categories.php'">Continuer mes achats</button>
					</div>
				</div>
				<?
			}
			?>
			</div>
		</div>
				
		<? include( "inc/footer.php" ); ?>
	</body>
</html>
