<?
	require_once 'inc/inc.config.php';
	require 'admin/classes/Panier.php';
	require 'admin/classes/utils.php';
	
	$panier = new Panier();
	
	// -------------------------------------------------------------------------------------------- //
	//																								//
	//	Fichier permettant le traitement lors d'un paiement PayPal validé
	//																								//
	// -------------------------------------------------------------------------------------------- //
	
	$debug = true;
	$panier = new Panier();
	
	// ---- Détails sur la commande ----------------- //
	$item_name = 		$_POST[ "item_name" ];
	$item_number = 		$_POST[ "item_number" ];
	$payment_status = 	$_POST[ "payment_status" ];
	$payment_amount = 	$_POST[ "mc_gross" ];
	$payment_currency =	$_POST[ "mc_currency" ];
	$txn_id = 			$_POST[ "txn_id" ];
	$receiver_email = 	$_POST[ "receiver_email" ];
	$payer_email = 		$_POST[ "payer_email" ];
	$custom = 			$_POST[ "custom" ];
	
	// traiter le paiement
	$tab_retour = explode( ";", $custom );
	$id_commande = $tab_retour[ 0 ];
	$montant_paye = $tab_retour[ 2 ] + $tab_retour[ 3 ] + $tab_retour[ 4 ];
	
	$mail_paypal = ( $_SERVER[ "DOCUMENT_ROOT" ] == "/var/www/lessecretsdelouise.com" )
		? "bijoux.secretsdelouise@gmail.com"
		: "bijoux.secretsdelouise@gmail.com";
	//$mail_paypal = "xav335@hotmail.com";
	
	$fic_log = "spy_" . $id_commande . ".log";
	$commande_ok = false;
	
	error_log(date( "Y-m-d H:i:s" ) ." : - Debut traitement.\n", 3, "log/" . $fic_log );
    error_log(date( "Y-m-d H:i:s" ) ." : - " . $_SERVER[ "REMOTE_ADDR" ] ."\n", 3, "log/" . $fic_log );
    
	// Lire le formulaire provenant du système PayPal et ajouter 'cmd'
	$req = 'cmd=_notify-validate';
	 
	foreach ( $_POST as $key => $value ) {
		$value = urlencode( stripslashes( $value ) );
		$req .= "&$key=$value";
	}
	error_log(date( "Y-m-d H:i:s" ) ." : - Req : " . $req . "\n", 3, "log/" . $fic_log );
	
	// Renvoyer au système PayPal pour validation
	SWITCH( $_SERVER[ "DOCUMENT_ROOT" ] ) {
		
		// ---- Serveur local Franck ------------------------------ //
		CASE '/var/www/lessecretsdelouise':
			$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
			$header .= "Host: www.sandbox.paypal.com:443\r\n";
			$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
			$header .= "Content-Length: " . strlen( $req ) . "\r\n\r\n";
			$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);
			break;
		
		// ---- Serveur pre-prod ---------------------------------- //
		CASE '/':
			$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
			$header .= "Host: www.sandbox.paypal.com:443\r\n";
			$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
			$header .= "Content-Length: " . strlen( $req ) . "\r\n\r\n";
			$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);
			break;
		
		// ---- Serveur PROD ------------------------------------- //
		DEFAULT:
			/*$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
			$header .= "Host: ipnpb.paypal.com:443\r\n";
			$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
			$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
			$fp = fsockopen ('ssl://ipnpb.paypal.com', 443, $errno, $errstr, 30);*/
			
			$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
			$header .= "Host: www.sandbox.paypal.com:443\r\n";
			$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
			$header .= "Content-Length: " . strlen( $req ) . "\r\n\r\n";
			$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);
			break;
	}
	
	error_log(date( "Y-m-d H:i:s" ) ." : - Contenu POST :\n", 3, "log/" . $fic_log );
	error_log(date( "Y-m-d H:i:s" ) ." : - " . print_r( $_POST, true ) . "\n", 3, "log/" . $fic_log );
	
	// ---- ERREUR HTTP ---------------------------------------------- //
	if ( !$fp ) {
		error_log(date( "Y-m-d H:i:s" ) ." : - Erreur HTTP!!!!!\n", 3, "log/" . $fic_log );
	} 
	else {
		error_log(date( "Y-m-d H:i:s" ) ." : - Validation HTTP : OK\n", 3, "log/" . $fic_log );
		
		fputs ( $fp, $header . $req );
		while ( !feof( $fp ) ) {
			$res = fgets ( $fp, 1024 );
			error_log(date( "Y-m-d H:i:s" ) ." : -> " . $res . "\n", 3, "log/" . $fic_log );
			
			// ---- La transaction est valide
			if ( strcmp( $res, "VERIFIED" ) == 0 ) {
				error_log(date( "Y-m-d H:i:s" ) ." : - Transaction : OK \n", 3, "log/" . $fic_log );
				
				// ---- vérifier que payment_status a la valeur "Completed"
				if ( $payment_status == "Completed" ) {
					error_log(date( "Y-m-d H:i:s" ) ." : - Paiement statut : OK \n", 3, "log/" . $fic_log );
					
					// ---- Vérifier que txn_id n'a pas été précédemment traité
					if ( !$panier->loadByTransactionID( $txn_id ) ) {
						error_log(date( "Y-m-d H:i:s" ) ." : - Transaction ID : OK \n", 3, "log/" . $fic_log );
						
						// ---- Vérifier que receiver_email est votre adresse email PayPal principale
						if ( $receiver_email == $mail_paypal ) {
							error_log(date( "Y-m-d H:i:s" ) ." : - Compte PayPal : OK \n", 3, "log/" . $fic_log );
							
							// ---- Vérifier que payment_amount et payment_currency sont corrects
							if ( $payment_amount == $montant_paye ) {
								$commande_ok = true;
								
								// ---------- MAJ de la commande en base ------------------------------------------------- //
								if ( 1 == 1 ) {
									
									$panier->valideCommande( 
										$id_commande, 
										serialize( $_POST ), 
										$txn_id, 
										false 
									);
								}
								// --------------------------------------------------------------------------------------- //
								
								// ---------- Finalisation de la commande ------------------------------------------------ //
								if ( 1 == 1 ) {
									// La finalisation de la commande se fait manuellement via le Back-Office
								}
								// --------------------------------------------------------------------------------------- //
							}
							else {
								error_log(date( "Y-m-d H:i:s" ) ." : - Montant : NOK (" . $payment_amount . " / " . $montant_paye . ") \n", 3, "log/" . $fic_log );
							}
							// --------------------------------------------------------------------------------------- //
						}
						else {
							error_log(date( "Y-m-d H:i:s" ) ." : - Compte PayPal : NOK (" . $receiver_email . " / " . $mail_paypal . ") \n", 3, "log/" . $fic_log );
						}
					}
					else {
						error_log(date( "Y-m-d H:i:s" ) ." : - Transaction ID : NOK (Déjà utilisé?) \n", 3, "log/" . $fic_log );
					}
				}
				else {
					error_log(date( "Y-m-d H:i:s" ) ." : - Paiement statut : NOK \n", 3, "log/" . $fic_log );
				}
			}
			
			// Transaction INVALIDE
			else if ( strcmp ( $res, "INVALID" ) == 0 ) {
				error_log(date( "Y-m-d H:i:s" ) ." : -Transaction : NOK \n", 3, "log/" . $fic_log );
			}
		}
		fclose ( $fp );
		
		error_log(date( "Y-m-d H:i:s" ) ." : ----------- FIN TRAITEMENT ----------- \n", 3, "log/" . $fic_log );
	}
	
	// ---- En fonction du traitement précédent... ------------------- //
	if ( !$commande_ok ) {
		error_log(date( "Y-m-d H:i:s" ) ." : - Commande annulee\n", 3, "log/" . $fic_log );
	}
	else {
		error_log(date( "Y-m-d H:i:s" ) ." : - Confirmation de commande\n", 3, "log/" . $fic_log );
	}
	
	
	/*try {
	    if ( !empty( $_POST ) ) {
	        $panier->valideCommande( $id_commande, serialize( $_POST ) );
	        
	        error_log(date("Y-m-d H:i:s") ." : ". $_POST[ "item_name" ] ."\n", 3, "log/" . $fic_log );
	        error_log(date("Y-m-d H:i:s") ." : ". $_POST[ "payer_status" ] ."\n", 3, "log/" . $fic_log );
	        
	        foreach ( $_POST as $key => $value ) {
	            //$value = urlencode(stripslashes($value));
	            $req = "$key = $value";
	            error_log(date("Y-m-d H:i:s") ." : ". $req ."\n", 3, "log/" . $fic_log );
	        }
	          
	    } else {
	        error_log(date("Y-m-d H:i:s") ." : réponse de Paypal sans Post ... \n", 3, "log/" . $fic_log );
	        echo "rien dans le Post";
	    }
	} 
	catch (Exception $e) {
	    error_log( date("Y-m-d H:i:s") ." : ". $e->getMessage() ." \n", 3, "log/" . $fic_log );
	    echo 'Valid.php : Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
	}*/
?>