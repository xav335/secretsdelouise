<? 
	include_once '../../inc/inc.config.php';
	include_once '../classes/utils.php';
	require '../classes/ImageManager.php';
	require '../classes/Catproduct.php';
	session_start();
	
	$debug = false;
	if ( $debug ) print_pre( $_POST );
	
	// ---- Security ---------------------------------------------------------- //
	if ( !isset( $_SESSION[ "accessGranted" ] ) || !$_SESSION[ "accessGranted" ] ) {
		$result = $storageManager->grantAccess($_POST[ "login" ], $_POST[ "mdp" ]);
		if (!$result){
			header('Location: /admin/?action=error');
		} else {
			$_SESSION[ "accessGranted" ] = true;
		}
	}
	
	 // ---- 
	if ( !empty( $_POST ) ) {
		
		// ---- Gestion des rubriques ----------------------- //
		if ( $_POST[ "reference" ] == 'rubrique' ) {
			$rubrique = new Catproduct();
			$imageManager = New ImageManager();
			
			// ---- Traitement de l'image ------------------- //
			if ( $_POST[ "url1" ] != '' ) {
				$source = $_SERVER[ "DOCUMENT_ROOT" ] . $_POST[ "url1" ];
				if ( $debug ) echo "Source : " . $source . "<br>";
				
				if( strstr( $source, 'uploads' ) ) {
					$source = $_SERVER[ "DOCUMENT_ROOT" ] . $_POST[ "url1" ];
					$filenameDest = $imageManager->fileDestManagement( $source, $_POST[ "id" ] );
					
					//Image
					$destination = $_SERVER[ "DOCUMENT_ROOT" ] . '/photos/rubrique' . $filenameDest;
					if ( $debug ) echo "Destination : " . $destination . "<br>";
					
					$imageManager->imageResize( $source, $destination, 291, 291, ZEBRA_IMAGE_CROP_CENTER );
					
					$_POST[ "image" ] = $filenameDest;
				}
			}
			$imageManager =null;
			
			// ---- Modification ---------------------------- //
			if ( $_POST[ "action" ] == 'modif' ) {
				try {
					$result = $rubrique->gerer_rubrique( $_POST, $debug );
					$rubrique = null;
					
					if ( !$debug ) header( "Location: /admin/rubrique/liste.php" );
				} 
				catch ( Exception $e ) {
					echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
					$rubrique = null;
					exit();
				}
					
			} 
			
			// ---- Ajout ----------------------------------- //
			else {
				try {
					$result = $goldbook->goldbookAdd($_POST);
					$goldbook = null;
					header('Location: /admin/goldbook-list.php?id='.$result);
				} 
				catch (Exception $e) {
					echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
					$goldbook = null;
					exit();
				}
			}
		}
		
	} 
	
	// ---- GET GET GET ------------------------------------------------------- //
	else if ( !empty( $_GET ) ) {
		
		if ($_GET[ "reference" ] == 'goldbook'){ //supprimer
			$goldbook = new Goldbook();
			if ($_GET[ "action" ] == 'delete'){
				try {
					$result = $goldbook->goldbookDelete($_GET[ "id" ]);
					$goldbook = null;
					header('Location: /admin/goldbook-list.php');
				} catch (Exception $e) {
					echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
					$goldbook = null;
					exit();
				}
			}
		}
		
	} 
	
	// ---- ERREUR!!! --------------------------------------------------------- //
	else {
		header('Location: /admin/');
	}
	?>