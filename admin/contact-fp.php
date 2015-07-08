<?php include_once '../inc/inc.config.php'; ?>
<?php
require 'classes/Contact.php';
require 'classes/ContactCommande.php';
session_start();

//Security
if (!isset($_SESSION['accessGranted']) || !$_SESSION['accessGranted']) {
	$panierlst = $storageManager->grantAccess($_POST['login'], $_POST['mdp']);
	if (!$panierlst){
		header('Location: /admin/?action=error');
	} else {
		$_SESSION['accessGranted'] = true;
	}
}

//print_r($_POST);exit();
//Forms processing
if (!empty($_POST)){
	
	// traitement des Contact
	if ($_POST['reference'] == 'contact'){
		$contact = new Contact();
		if ($_POST['action'] == 'modif') { //Modifier
			try {
				$panierlst = $contact->contactModify($_POST);
				$contact = null;
				header('Location: /admin/contact-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$contact = null;
				exit();
			}
	
		} else {  //ajouter
			try {
				$panierlst = $contact->contactAdd($_POST);
				$contact = null;
				header('Location: /admin/contact-edit.php?id='.$panierlst);
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$contact = null;
				exit();
			}
		}
	}
	
	// traitement des adresses
	if ($_POST['reference'] == 'adresse'){
	    $contact = new ContactCommande();
	    if ($_POST['action'] == 'modif') { //Modifier
	        try {
	            $panierlst = $contact->adresseModify($_POST);
	            $contact = null;
	            header('Location: /admin/commande-edit.php?id='. $_POST['id_commande']);
	        } catch (Exception $e) {
	            echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
	            $contact = null;
	            exit();
	        }
	
	    } 
	}
	
	
} elseif (!empty($_GET)) { // GET GET GET
	if ($_GET['reference'] == 'contact'){ //supprimer
		$contact = new Contact();
		if ($_GET['action'] == 'delete'){
			try {
				$panierlst = $contact->contactDelete($_GET['id']);
				$contact = null;
				header('Location: /admin/contact-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$contact = null;
				exit();
			}
		}
	}
	
} else {
	header('Location: /admin/');
}

?>