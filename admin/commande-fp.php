<?
	include_once '../inc/inc.config.php';
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
	        $panier = new Panier();
	        $produit = new Catproduct();
	        
			if ( $_POST[ "action" ] == 'modif' ) {
				
				// ---- Chargement de la commande -------- //
				$panier->load( $_POST[ "id_commande" ] );
				
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