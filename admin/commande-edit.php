<?php include_once '../inc/inc.config.php'; ?>
<?php include_once 'inc-auth-granted.php';?>
<?php include_once 'classes/utils.php';?>
<?php

require 'classes/Panier.php';
require 'classes/Contact.php';
try {
    $panier = new Panier();
    $result = $panier->getCommandes($_GET['id']);
    //print_r($result);exit;
    $id_contact = $result[0]['id_contact'];
    $id_facturation  = $result[0]['id_facturation'];
    $id_livraison    = $result[0]['id_livraison'];
    $session = $result[0]['session'];
    
    if (! empty($id_contact)) {
        $contact = new Contact();
        try {
            //$result = $contact->contactGet($id_contact, null, null);
           
            // Facturation
            $result = $contact->contactAddresseGet($id_facturation);
            //print_r($result);exit;
          
            $nom = $result[0]['nom'];
            $prenom = $result[0]['prenom'];
            $email = $result[0]['email'];
            $tel = $result[0]['tel'];
            $adresse = $result[0]['adresse'];
            $cp = $result[0]['cp'];
            $ville = $result[0]['ville'];
            // Livraison
            $result = $contact->contactAddresseGet($id_livraison);
            $nomliv = $result[0]['nom'];
            $prenomliv = $result[0]['prenom'];
            $emailliv = $result[0]['email'];
            $telliv = $result[0]['tel'];
            $adresseliv = $result[0]['adresse'];
            $cpliv = $result[0]['cp'];
            $villeliv = $result[0]['ville'];
            $message = $result[0]['message'];
            
            $action = 'modif';
        } catch (Exception $e) {
            echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
            $panier = null;
            exit();
        }
    }
    
    
    if (! empty($session)) {
        $produitsPanier = null;
        $resultPanier = $panier->panierCommandeGet($session);
        //print_r($resultPanier);
        foreach ($resultPanier as $lignePanier) {
            $prodTmp = null;
            $productOri = unserialize($lignePanier['serialproduct']);
            //print_r($productOri)
            $prodTmp['id_sousref']  = $lignePanier['id_sousref'];
            $prodTmp['quantite'] = $lignePanier['quantite'];
            
            $prodTmp['label'] = $productOri['label'];
            $prodTmp['prix'] =  $productOri['prix'];
            $prodTmp['shipping'] =  $productOri['shipping'];
            $prodTmp['reference'] =  $productOri['reference'];
            foreach ($productOri['sousref'] as $value) {
                if ($value['id'] == $prodTmp['id_sousref']) {
                   $prodTmp['sousref'] = $value['sousref'];
                   $prodTmp['color'] = $value['color'];
                   $prodTmp['size'] = $value['size'];
                }
            }   
            $produitsPanier[] = $prodTmp;
           
        }
    }
    
    
} catch (Exception $e) {
    echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
    $contact = null;
    exit();
}
?>

<!doctype html>
<html class="no-js" lang="fr">
<head>
	<?php include_once 'inc-meta.php';?>
</head>
<body>	
	<?php require_once 'inc-menu.php';?>

	<div class="container">

		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-12">
			     <h3>Gestion de la commande N°: <?php echo $_GET['id'] ?> </h3>
                <div class="col-md-4">
        			<div class="panel panel-default">
        				<div class="panel-heading">
        					<h3 class="panel-title">Adresse de facturation </h3>
        				</div>
        				<div class="panel-body">
        					<p>
        						    <?php echo $nom ?><br>
                                    <?php echo $prenom ?><br>
                                    <?php echo $email ?><br>
                                    <?php echo $tel ?><br>
                                    <?php echo $adresse ?><br>
                                    <?php echo $cp ?><br>
                                    <?php echo $ville ?><br>
        					</p>
        					<p>
        						<a class="btn btn-info pull-right" href="/admin/">Editer</a>
        					</p>
        				</div>
        			</div>
        		</div>
        		<div class="col-md-4">
        			<div class="panel panel-default">
        				<div class="panel-heading">
        					<h3 class="panel-title">Adresse de livraison </h3>
        				</div>
        				<div class="panel-body">
        					<p>
        						    <?php echo $nomliv ?><br>
                                    <?php echo $prenomliv ?><br>
                                    <?php echo $emailliv ?><br>
                                    <?php echo $telliv ?><br>
                                    <?php echo $adresseliv ?><br>
                                    <?php echo $cpliv ?><br>
                                    <?php echo $villeliv ?><br>
        					</p>
        					<p>
        						<a class="btn btn-info pull-right" href="/admin/">Editer</a>
        					</p>
        				</div>
        			</div>
        		</div>
        		<div class="col-md-4">
        			<div class="panel panel-default">
        				<div class="panel-heading">
        					<h3 class="panel-title">Message livraison </h3>
        				</div>
        				<div class="panel-body">
        					<p>
        						    <?php echo $message ?><br>
                                   
        					</p>
        					<p>
        						<a class="btn btn-info pull-right" href="/admin/">Editer</a>
        					</p>
        				</div>
        			</div>
        		</div>
        		<div class="col-md-12">
        			<div class="panel panel-default">
        				<div class="panel-heading">
        					<h3 class="panel-title">Detail commade</h3>
        				</div>
        				<div class="panel-body">
        					<pre>
        						    <?php print_r($produitsPanier) ?>
        					</pre>
        					<p>
        						<a class="btn btn-info pull-right" href="/admin/">Editer</a>
        					</p>
        				</div>
        			</div>
        		</div>
				<form name="formulaire" class="form-horizontal" method="POST" action="panier-fp.php">
					<input type="hidden" name="reference" value="commande"> 
					<input type="hidden" name="action" value="modif"> 
					<input type="hidden" name="id_commande" id="id_commande" value="<?php echo $_GET['id'] ?>">

					
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>


