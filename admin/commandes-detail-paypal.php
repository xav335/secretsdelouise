<?php include_once '../inc/inc.config.php'; ?>
<?php include_once 'inc-auth-granted.php';?>
<?php include_once 'classes/utils.php';?>
<?php 
require 'classes/Panier.php';
try {
	$panier = new Panier();
	$panierlst = $panier->getCommandes($_GET['id']);
	//print_r($result);
	if (empty($panierlst)) {
		$message = 'Aucun enregistrements';
	} else {
		$message = '';
	}
} catch (Exception $e) {
    echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
    $contact = null;
    exit();
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<?php include_once 'inc-meta.php';?>
</head>
<body>	

	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
			     <h3>Détail du retour Paypal</h3>
			     <pre>
                <?php 
                print_r(unserialize($panierlst[0]['logpayment']));
                ?>
                </pre>
			</div>
		</div>
	</div>
</body>
</html>


