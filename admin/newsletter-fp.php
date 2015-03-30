<?php
require 'classes/Newsletter.php';
require 'classes/ImageManager.php';
session_start();

//Security
if (!isset($_SESSION['accessGranted']) || !$_SESSION['accessGranted']) {
	$result = $storageManager->grantAccess($_POST['login'], $_POST['mdp']);
	if (!$result){
		header('Location: /admin/?action=error');
	} else {
		$_SESSION['accessGranted'] = true;
	}
}

//print_r($_POST);exit();
//Forms processing
if (!empty($_POST)){
	
	// traitement des newsletters
	if ($_POST['reference'] == 'newsletter'){
		//print_r($_POST); exit();
		$newsletter = new Newsletter();
		if ($_POST['action'] == 'modif' ) { //Modifier
			try {
				if ($_POST['postaction'] !='delBloc') {
					$result = $newsletter->newsletterModify($_POST);
				}
				if ($_POST['postaction'] == 'preview' ) {
					$newsletter = null;
					header('Location: /admin/newsletter-corecontent.php?postaction=preview&id='. $_POST['id']);
				} elseif ($_POST['postaction'] == 'preview' ) {
					$newsletter = null;
					header('Location: /admin/newsletter-corecontent.php?postaction=envoi&id='. $_POST['id']);
				} elseif ($_POST['postaction']=='addBloc') {
					$newsletter = null;
					header('Location: /admin/newsletter-edit.php?addBloc=1&id='. $_POST['id']);
				} elseif ($_POST['postaction']=='delBloc') {
					$newsletter->newsletterDetailUniqueDelete($_POST['idbloc']);
					$newsletter = null;
					header('Location: /admin/newsletter-edit.php?id='. $_POST['id']);
				} else {
					header('Location: /admin/newsletter-list.php');
				}
	
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$newsletter = null;
				exit();
			}
		} elseif ($_POST['action'] == 'envoi' ) {  //ajouter
			if ($_POST['postaction'] == 'envoi' ) {
				header('Location: /admin/newsletter-corecontent.php?action=envoi&postaction=envoi&id='. $_POST['id']);
			} else {
				header('Location: /admin/newsletter-corecontent.php?action=envoi&postaction=preview&id='. $_POST['id']);
			}
				
		} else {  //ajouter
			try {
				$result = $newsletter->newsletterAdd($_POST);
				$newsletter = null;
				header('Location: /admin/newsletter-edit.php?id='.$result);
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$newsletter = null;
				exit();
			}
		}
	}
	
	
} elseif (!empty($_GET)) { // GET GET GET
	
	if ($_GET['reference'] == 'newsletter'){ //supprimer
		$newsletter = new Newsletter();
		if ($_GET['action'] == 'delete'){
			try {
				$result = $newsletter->newsletterDelete($_GET['id']);
				$newsletter = null;
				header('Location: /admin/newsletter-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				exit();
			}
		}
	}
} else {
	header('Location: /admin/');
}

?>