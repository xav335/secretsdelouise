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
            //print_r($productOri);
            $prodTmp['id_sousref']  = $lignePanier['id_sousref'];
            $prodTmp['quantite'] = $lignePanier['quantite'];
            
            $prodTmp['id_produit']  = $productOri['id'];
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
			    <h3>Commande N°: <?php echo $_GET['id'] ?> </h3>
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
                                    Message: <?php echo $message ?>
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
        					<h3 class="panel-title">Statut Commande </h3>
        				</div>
        				<div class="panel-body">
        					<p>
        						    <br>
                                   
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
        					<h3 class="panel-title">Detail commande</h3>
        				</div>
        				<div class="panel-body">
        					<pre><?php //print_r($produitsPanier)?></pre>
        					<table class="table table-hover table-bordered table-condensed table-striped" >
        					<thead>
                                <tr>
                                    <th class="col-md-1">Ref. / Sous Réf.</th>
                                	<th class="col-md-1">Produit</th>
                                	<th class="col-md-1">Produit détail</th>
                                	<th class="col-md-1">quantité</th>
                                	<th class="col-md-1">Extra livraison HT</th>
                                	<th class="col-md-1">Prix HT unitaire</th>
                                	
                                </tr>
        					</thead>
        					<tbody>
        						<?php 
        						if (!empty($result)) :
        						    $totalHT = 0;
        						    $extraLiv = 0;
        							foreach ($produitsPanier as $value) : 
        							     $totalHT += $value['prix']*$value['quantite'];
        							     $extraLiv += $value['shipping'];
        							?>
        							<tr>
        								<td><a href="product-edit.php?id=<?php echo $value['id_produit']?>"><?php echo $value['reference'] ?></a> / <a href="product-sousref-edit.php?id=<?php echo $value['id_produit']?>&rubrique=&categorie="><?php echo $value['sousref'] ?></a></td>
        								<td><?php echo $value['label'] ?></td>
        								<td><?php echo $value['color'] .' / '. $value['size'] ?></td>
        								<td class="text-center"><?php echo $value['quantite'] ?></td>
        								<td class="text-right"><?php echo number_format($value['shipping'], 2, ',', ' ') .' €' ?></td>
        								<td class="text-right"><?php echo number_format($value['prix'], 2, ',', ' ') . ' €'?></td>
        								
        							</tr>
        							<?php endforeach; ?>
        						<?php endif; 
            						$totalTVA = $totalHT*$tva;
            						$totalTTC = $totalHT + $totalTVA;
            						$totalLiv += $extraLiv;
            						$totalTTCLIV = $totalTTC + $totalLiv;
        						?>	
        						
        							<tr>
        							    <td colspan="4">&nbsp;</td>
        								<td><b>Total H.T.</b></td>
        								<td class="text-right"><?php echo number_format($totalHT, 2, ',', ' ') .' €' ?></td>
        							</tr>
        							<tr>
        							    <td colspan="4">&nbsp;</td>
        								<td><b>TVA</b></td>
        								<td class="text-right"><?php echo number_format($totalTVA, 2, ',', ' ') .' €' ?></td>
        							</tr>
        							<tr>
        							    <td colspan="4">&nbsp;</td>
        								<td><b>Frais de livraison</b></td>
        								<td class="text-right"><?php echo number_format($totalLiv, 2, ',', ' ') .' €' ?></td>
        							</tr>
        							<tr>
        							    <td colspan="4">&nbsp;</td>
        								<td><b>Total T.T.C.</b></td>
        								<td class="text-right"><?php echo number_format($totalTTC, 2, ',', ' ') .' €' ?></td>
        							</tr>
        							<tr>
        							    <td colspan="4">&nbsp;</td>
        								<td><b>Total T.T.C. +FP</b></td>
        								<td class="text-right"><?php echo number_format($totalTTCLIV, 2, ',', ' ') .' €' ?></td>
        							</tr>
        					</tbody>
        				    </table>
        				    
        						
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


