<? 
	include_once '../../inc/inc.config.php';
	include_once '../inc-auth-granted.php';
	include_once '../classes/utils.php';
	require '../classes/Catproduct.php';
	
	// Récupération des données passées en paramètres
	$mon_action = $_POST[ "mon_action" ];
	
	// Changement l'ordre d'affichage des catégories
	if ( isset( $mon_action ) && $mon_action == "changer-ordre-categorie" ) {
		//echo "--- " . $_SESSION[ "site" ][ "langue" ] . "\n";
		$_SESSION[ "site" ][ "langue" ] = strtolower( $_POST[ "langue" ] );
		//echo "--- " . $_SESSION[ "site" ][ "langue" ] . "\n";
		
		die('{
			"error":false,
			"url":"' . $url . '"
		}');
	}
	
	// Initialisation des champs de recherche
	else if ( isset( $mon_action) && $mon_action == "initialiser" ) {
		unset( $_SESSION[ "site" ][ "recherche" ] );
		
		die('{"error":false}');
	}
	
	// Aucune action --> ERREUR
	else die('{"error":true,"message":"Aucune action trouvée..."}');
	
?>