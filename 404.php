<?php require_once 'inc/inc.config.php';?>
<?php 
require 'admin/classes/utils.php';
session_start();

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<title>Les secrets de Louise - Page introuvable</title>
<?php include('inc/meta.php'); ?>
</head>
<body>
	
<?php include('inc/header.php'); ?>
<!-- Breadcrumb -->
<div class="row breadcrumb">
	<a href="./">Accueil</a> >  Page introuvable
</div>
<!-- End Breadcrumb -->	
	<!-- Actualités -->
	<div class="row actualites">
		<h1>La page que vous demandez n'est pas présente sur le site ! </h1><br>
		
		
		
		
	</div>
	<!-- Fin Actualités -->
	
<?php include('inc/footer.php'); ?>
	<script>
	$('.header .content ul li:nth-child(5)').addClass('active');
	</script>
	
</body>
</html>
