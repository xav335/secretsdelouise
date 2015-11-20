<?php

	// ---- D�finition des constantes du site ------------------------ //
	//echo $_SERVER[ "DOCUMENT_ROOT" ] . "<br>";
	switch( $_SERVER[ "DOCUMENT_ROOT" ] ) {
		
		// ---- Serveur local Franck -------- //
		case "/var/www/lessecretsdelouise" :
			$localhost = "localhost";
			$dbname = "lessecrets";
			$user = "lessecrets";
			$mdp = "lessecrets";
			break;
		
		// ---- Serveur PRE-PROD ------------ //
		case "" :
			$localhost = "";
			$dbname = "";
			$user = "";
			$mdp = "";
			break;
		
		// ---- Site en PROD ------------------------ //
		case "/var/www/lessecretsdelouise.com" :
			$localhost = "localhost";
			$dbname = "secretsdelouise";
			$user = "secretsdelouise";
			$mdp = "secretsdelouise33";
			break;
			
		default:
			$localhost = "localhost";
			$dbname = "secretsdelouise";
			$user = "secretsdelouise";
			$mdp = "secretsdelouise33";
			break;
	}
	
	define( "DBHOST", $localhost );
	define( "DBNAME", $dbname );
	define( "DBUSER", $user );
	define( "DBPASSWD", $mdp );
	
	define( "TVA", 				0.2 );
	define( "FRAIS_LIVRAISON", 	5 ); 		// Frais de livraison TTC
	define( "SEUIL_FDL_GRATOS", 41.666 );	// Frais de port gratuits au del� de 50� TTC
	
	define( "MAIL_TEST", 			"" );				// Si vide alors les mails partent vers les bons destinataires!!!
	define( "MAIL_CUSTOMER", 		"contact@lessecretsdelouise.com" );
	define( "MAIL_NAME_CUSTOMER", 	"LesSecretsDeLouise" );
	define( "URL_SITE_DEFAULT", 	"http://www.lessecretsdelouise.com/" );
	define( "FACEBOOK_LINK", 		"https://www.facebook.com/lessecretsdelouise" );
	
	// Mail d'envoi
	define( "MAIL_CONTACT", "contact@lessecretsdelouise.com" );
	define( "MAIL_BCC", 	"xav335@hotmail.com,fjavi.gonzalez@gmail.com,jav_gonz@yahoo.com" );
?>
