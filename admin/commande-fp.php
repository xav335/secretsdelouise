<?php include_once '../inc/inc.config.php'; ?>
<?php
require 'classes/Panier.php';
require 'classes/utils.php';
session_start();


//print_r($_POST);exit();
//Forms processing
if (!empty($_POST)){
	
	
	// traitement des Produit
	if ($_POST['reference'] == 'commande'){
		//print_r($_POST);exit();
        $panier = new Panier();
		if ($_POST['action'] == 'modif') {  //Modifier
			try {
			    $panier->updateStatutCommande($_POST['id_commande'], $_POST['statut_paiement'], $_POST['statut_commande'], $_POST['colissimo']);
			    
			    //Gestion du stock
			    if ($_POST['old_statut_commande']==0 && $_POST['statut_commande']==1) {
			        //on décroit le stock;
			    } elseif ($_POST['old_statut_commande']!=0 && $_POST['statut_commande']==0){
			        //on accroit le stock;
			    }
			    
				header('Location: /admin/commande-edit.php?id='.$_POST['id_commande']);
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				exit();
			}
		}
	}
	
	
	

	
	
} else {
	header('Location: /');
}

?>