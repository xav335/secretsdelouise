<?php
require 'classes/Catproduct.php';
require 'classes/Panier.php';
require 'classes/utils.php';
session_start();


//print_r($_POST);exit();
//Forms processing
if (!empty($_POST)){
	
	
	// traitement des Produit
	if ($_POST['reference'] == 'panier'){
		//print_r($_POST);exit();
        $panier = new Panier();
		if ($_POST['action'] == 'ajout') { //ajouter
			try {
				$product = unserialize(stripslashes($_POST['product']));
				//print_r($product);exit;
				
				$idsousref = $_POST['idsousref'];
				
				if (!empty($idsousref)) {
					$_POST['quantite']=1;
					$_POST['session']=session_id();
					$panier->ajoutPanier($_POST);
				    //print_r($_POST);exit;
				}
				$panier =null;
				header('Location: /panier.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$panier = null;
				exit();
			}
	
		} elseif ($_POST['action'] == 'modif') {  //Modifier
			try {
				//print_r($_POST);exit();
				header('Location: /panier.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				exit();
			}
		}
	}
	
	
	
} elseif (!empty($_GET)) { // GET GET GET
	
	if ($_GET['reference'] == 'panier'){ //supprimer
		 $panier = new Panier();
		if ($_GET['action'] == 'delete'){
			try {
				$panier->productDelete($_GET['id_panier']);
				$panier = null;
				header('Location: /panier.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage() , '\n';
				$panier = null;
				exit();
			}
		}
		
		if ($_GET['action'] == 'quantite'){
		  try {
              if ($_GET['quantite'] == 0) {
		          $panier->productDelete($_GET['id_panier']);
		      } else {
		          $panier->modifQuantitePanier($_GET['id_panier'], $_GET['quantite']);
		      }
    				
			  $panier = null;
		      header('Location: /panier.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage() , '\n';
				$panier = null;
				exit();
			}
		}
		
	}
	
	
	
} else {
	header('Location: /');
}

?>