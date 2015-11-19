<?
	include_once '../inc/inc.config.php';
	require 'classes/ContactCommande.php';
	require 'classes/Panier.php';
	require 'classes/Catproduct.php';
	require 'classes/utils.php';
	session_start();
	
	$debug = false;
	if ( $debug ) print_pre( $_POST );
	
	// ---- Forms processing ------------------------ //
	if ( !empty( $_POST ) ) {
		
		// ---- Traitement des Produits ------------- //
		if ( $_POST[ "reference" ] == 'commande' ) {
	        $contact = new ContactCommande();
	        $panier = new Panier();
	        $produit = new Catproduct();
	        
			if ( $_POST[ "action" ] == 'modif' ) {
				
				// ---- Chargement de la commande -------- //
				$panier->load( $_POST[ "id_commande" ] );
				$ancien_etat_commande = $panier->statut_paiement;
				$liste_article = unserialize( $panier->panier );
				
				// ---- Chargement des infos client ------ //
				$contactResult = $contact->contactAddresseGet( $panier->id_facturation );
				
				// ---- Gestion des états de paiement ---- //
				if ( 1 == 1 ) {
					
					// ---- On valide un paiement -------- //
					if ( $_POST[ "statut_paiement" ] == 1 && $panier->statut_commande == 0 ) {
						$_POST[ "statut_commande" ] = 1;
					}
					
					// ---- On refuse un paiement -------- //
					else if ( $_POST[ "statut_paiement" ] == 0 ) {
						$_POST[ "statut_commande" ] = 0;
					}
					
				}
				// --------------------------------------- //
				
				try {
				    $panier->updateStatutCommande(
				    	$_POST[ "id_commande" ], 
				    	$_POST[ "statut_paiement" ], 
				    	$_POST[ "statut_commande" ], 
				    	$_POST[ "colissimo" ],
				    	$debug
				    );
				    
				    // ---- Gestion du stock -------- //
				    if ( 1 == 1 ) {
				    	$liste_article = unserialize( $panier->panier );
				    	
				    	// ---- Paiement autorisé ET Stock pas encore traité
				    	if ( $_POST[ "statut_paiement" ] != 0 && $panier->stock_traite == '0' ) {
				    		
				    		 if ( ! empty( $liste_article[ "panier" ] ) ) {
					            foreach ( $liste_article[ "panier" ] as $_article ) {
					            	//print_pre( $_article );
					            	
					            	$produit->setStock(
					            		$_article[ "id_sousref" ],
					            		-$_article[ "quantite" ],
					            		$debug
					            	);
								}
								
								$panier->setChamp( "stock_traite", '1', $debug );
					        }
				    	}
				    	
				    	// ---- On annule un paiement alors que le stock a déjà été traité
				    	else if ( $_POST[ "statut_paiement" ] == 0 && $panier->stock_traite == '1' ) {
				    		
				    		 if ( ! empty( $liste_article[ "panier" ] ) ) {
					            foreach ( $liste_article[ "panier" ] as $_article ) {
					            	//print_pre( $_article );
					            	
					            	$produit->setStock(
					            		$_article[ "id_sousref" ],
					            		$_article[ "quantite" ],
					            		$debug
					            	);
								}
								
								$panier->setChamp( "stock_traite", '0', $debug );
					        }
				    		
				    	}
				    	
				    }
				    // ------------------------------ //
				    
				    // ---- Mail de confirmation ---- //
				    if ( $ancien_etat_commande == 0 ) {
				    	//$_to = "franck.langleron@gmail.com";
				    	$_to = ( MAIL_TEST != '' )
					    	? MAIL_TEST
					    	: $contactResult[ 0 ][ "email" ];
					    
					    $sujet = MAIL_NAME_CUSTOMER . " - Confirmation de commande";
					    if ( $debug ) echo "Envoi du message à " . $contactResult[ 0 ][ "email" ] . "<br>";
					    
					    $entete = "From:" . MAIL_NAME_CUSTOMER . " <" . MAIL_CUSTOMER . ">\n";
					    $entete .= "MIME-version: 1.0\n";
					    $entete .= "Content-type: text/html; charset= utf-8\n";
					    $entete .= "Bcc: " . MAIL_BCC . "\n";
					    
					    $corps = "";
					    $corps .= "Bonjour " . ucfirst( $contactResult[ 0 ][ "prenom" ] ) . ",<br><br>";
					    $corps .= "Votre commande du " . traitement_datetime_affiche( $panier->date_ajout ) . " vient d'être confirmée.<br>";
					    $corps .= "Vous la recevrez dans les plus brefs délais.<br><br>";
					    $corps .= "<b>Résumé de votre commande :</b><br>";
					    
					    if ( ! empty( $liste_article[ "panier" ] ) ) {
				            foreach ( $liste_article[ "panier" ] as $_article ) {
				            	$nom = utf8_decode( $_article[ "label" ] );
				            	$detail = ( $_article[ "color" ] != '' || $value[ "size" ] != '' )
				            		? " (" . utf8_decode( $_article[ "color" ] . " / " . $value[ "size" ] ) . ")"
				            		: '';
				            	$prix = number_format( $_article[ "prix" ], 2 );
								$corps .= "- " . $nom . $detail ." - X" . $_article[ "quantite" ] . " : " . $prix . "€<br>";
							}
							
							$totalHT = $liste_article[ "divers" ][ "total_ht_commande_hors_fdp" ];
							$totalTTC = $totalHT * ( 1 + $liste_article[ "divers" ][ "tva" ] );
							$totalTVA = $totalTTC - $totalHT;
							$totalLiv = $liste_article[ "divers" ][ "frais_livraison_pratique" ];
							$totalTTCLIV = $totalTTC + $totalLiv;
							
							$corps .= "<br><b>Frais de livraison : </b>" . number_format( $totalLiv, 2 ) . "€<br>";
							$corps .= "<b>TOTAL : </b>" . number_format( $totalTTCLIV, 2 ) . "€<br>";
				        }
					    
					    $corps .= "<br>(<i>Une facture plus détaillée est à votre disposition sur notre site, à la rubrique \"Mon compte\".</i>)<br>";
					    $corps .= "<br><br>L'équipe Les secrets de Louise.<br>";
					    $corps .= "<a href='http://www.lessecretsdelouise.com'>www.lessecretsdelouise.com</a><br>";
					    $corps = utf8_encode( $corps );
					    if ( $debug ) echo $corps . "<br>";
					    
					    // Envoi du mail
					    if ( !$debug ) mail( $_to, $sujet, stripslashes( $corps ), $entete );
				    }
				    // ------------------------------ //
				    
					if ( !$debug ) header( "Location: /admin/commande-edit.php?id=" . $_POST[ "id_commande" ] );
				} 
				catch ( Exception $e ) {
					echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
					exit();
				}
			}
		}
		// ------------------------------------------ //
		
	} 
	else {
		header( "Location: /" );
	}
?>