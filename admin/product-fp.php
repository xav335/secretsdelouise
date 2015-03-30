<?php
require 'classes/Catproduct.php';
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
	
	
	// traitement des Produit
	if ($_POST['reference'] == 'product'){
		//print_r($_POST);exit();
		$catproduct = new Catproduct();
		$imageManager = New ImageManager();
		for ($i=1;$i<4;$i++){
			$source = $_SERVER['DOCUMENT_ROOT'].$_POST['url'.$i];
			if(strstr($source,'uploads')){
				$source = $_SERVER['DOCUMENT_ROOT'].$_POST['url'.$i];
				$filenameDest = $imageManager->fileDestManagement($source,$_POST['id']);
				//Image
				$destination=$_SERVER['DOCUMENT_ROOT'].'/photos/products'.$filenameDest;
				$imageManager->imageResize($source, $destination, null, 650);
				//Vignette
				$destination=$_SERVER['DOCUMENT_ROOT'].'/photos/products/thumbs'.$filenameDest;
				$imageManager->imageResize($source, $destination, null, 250);
				$_POST['url'.$i]=$filenameDest;
			}
		}

		if ($_POST['action'] == 'modif') { //Modifier
			try {
				$result = $catproduct->productModify($_POST);
				$catproduct = null;
				header('Location: /admin/product-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$catproduct = null;
				exit();
			}
	
		} else {  //ajouter
			try {
				//print_r($_POST);exit();
				$result = $catproduct->productAdd($_POST);
				$catproduct = null;
				header('Location: /admin/product-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
				$catproduct = null;
				exit();
			}
		}
	}
	
	
	
} elseif (!empty($_GET)) { // GET GET GET
	
	if ($_GET['reference'] == 'product'){ //supprimer
		$catproduct = new Catproduct();
		if ($_GET['action'] == 'delete'){
			try {
				$result = $catproduct->productDelete($_GET['id']);
				$catproduct = null;
				header('Location: /admin/product-list.php');
			} catch (Exception $e) {
				echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage() , '\n';
				$catproduct = null;
				if($e->getCode() == 1234){
					header('Location: /admin/catproduct-list.php?message='.$e->getCode());
				}
				exit();
			}
		}
	}
	
} else {
	header('Location: /admin/');
}

?>