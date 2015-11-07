<? include_once '../inc/inc.config.php'; ?>
<? include_once 'inc-auth-granted.php'; ?>
<? include_once 'classes/utils.php'; ?>
<? require 'classes/Panier.php'; ?>
<? require 'classes/ContactCommande.php'; ?>
<?
	$debug = false;
	
	if ( !empty( $_GET[ "id" ] ) ) {
	    try {
	        $panier = new Panier();
	        $commande = $panier->getCommandes( $_GET[ "id" ], $debug );
			//print_pre( $commande );
			//exit();
			
	        $id_contact = $commande[0][ "id_contact" ];
	        $id_facturation  = $commande[0][ "id_facturation" ];
	        $id_livraison    = $commande[0][ "id_livraison" ];
	        $statut_paiement = $commande[0][ "statut_paiement" ];
	        $statut_commande = $commande[0][ "statut_commande" ];
	        $date_commande = $commande[0][ "date_ajout" ];
	        $colissimo = $commande[0][ "colissimo" ];
	        $session = $commande[0][ "session" ];
	        $liste_article = unserialize( $commande[0][ "panier" ] );
	        
	        //print_pre( $liste_article );
	        //print_pre( $liste_article[ "panier" ] );
	        //exit();
	        
	        // ---- Contact trouvé --------------------------------- //
	        if ( ! empty( $id_contact ) ) {
	            $contact = new ContactCommande();
	            try {
	                //$result = $contact->contactGet($id_contact, null, null);
	               
	                // ---- Facturation
	                if ( 1 == 1 ) {
		                $contactResult = $contact->contactAddresseGet( $id_facturation );
		                //print_r($result);exit;
		              
		                $nom = $contactResult[0][ "nom" ];
		                $prenom = $contactResult[0][ "prenom" ];
		                $email = $contactResult[0][ "email" ];
		                $tel = $contactResult[0][ "tel" ];
		                $adresse = $contactResult[0][ "adresse" ];
		                $cp = $contactResult[0][ "cp" ];
		                $ville = $contactResult[0][ "ville" ];
		            }
	                
	                // ---- Livraison
	                if ( 1 == 1 ) {
						$contactResult = $contact->contactAddresseGet($id_livraison);
		                $nomliv = $contactResult[0][ "nom" ];
		                $prenomliv = $contactResult[0][ "prenom" ];
		                $emailliv = $contactResult[0][ "email" ];
		                $telliv = $contactResult[0][ "tel" ];
		                $adresseliv = $contactResult[0][ "adresse" ];
		                $cpliv = $contactResult[0][ "cp" ];
		                $villeliv = $contactResult[0][ "ville" ];
		                $message = $contactResult[0][ "message" ];
		            }
	                
	                $action = 'modif';
	            } 
	            catch (Exception $e) {
	                echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
	                $panier = null;
	                exit();
	            }
	        }
	        // ----------------------------------------------------- //
	        
	        // ---- Traitement du panier --------------------------- //
	        if ( ! empty( $liste_article[ "panier" ] ) ) {
	            $contenu_tableau = '';
	            
	            foreach ( $liste_article[ "panier" ] as $_article ) {
					$contenu_tableau .= "<tr>\n";
					$contenu_tableau .= "	<td><a href='product-edit.php?id=" . $_article[ "id" ] . "'>" . $_article[ "reference" ] . "</a> / <a href='product-sousref-edit.php?id=" . $_article[ "id" ] . "&rubrique=&categorie='>" . $_article[ "sousref" ] . "</a></td>\n";
					$contenu_tableau .= "	<td>" . $_article[ "label" ] . "</td>\n";
					$contenu_tableau .= "	<td>" . $_article[ "color" ] . " / " . $value[ "size" ] . "</td>\n";
					$contenu_tableau .= "	<td class='text-center'>" . $_article[ "quantite" ] . "</td>\n";
					$contenu_tableau .= "	<td class='text-right'>" . number_format( $_article[ "shipping" ], 2 ) . " €</td>\n";
					$contenu_tableau .= "	<td class='text-right'>" . number_format( $_article[ "prix" ], 2 ) . " €</td>\n";
					$contenu_tableau .= "</tr>\n";
				}
	        }
	        // ----------------------------------------------------- //
	        
	        // ---- Informations dverses --------------------------- //
	        if ( 1 == 1 ) {
				$totalHT = $liste_article[ "divers" ][ "total_ht_commande_hors_fdp" ];
				$totalTTC = $totalHT * ( 1 + $liste_article[ "divers" ][ "tva" ] );
				$totalTVA = $totalTTC - $totalHT;
				$totalLiv = $liste_article[ "divers" ][ "frais_livraison_pratique" ];
				$totalTTCLIV = $totalTTC + $totalLiv;
	        }
	        // ----------------------------------------------------- //
	        
	    } 
	    catch ( Exception $e ) {
	        echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
	        $contact = null;
	        exit();
	    }
	} 
	else {
	    echo 'pas d\'id defini';
	    exit;
	}
?>

<!doctype html>
<html class="no-js" lang="fr">
	<head>
		<? include_once 'inc-meta.php';?>
	</head>
<body>	
	<? require_once 'inc-menu.php';?>

	<div class="container">

		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-12">
			    <h3>Commande N°: <?=$_GET[ "id" ] ?> </h3>
			    
                <div class="col-md-4">
        			<div class="panel panel-default">
        				<div class="panel-heading">
        					<h3 class="panel-title">Adresse de facturation </h3>
        				</div>
        				<div class="panel-body">
        					<p>
								<?=$prenom ?>
								<?=$nom ?><br>
								<?=$email ?><br>
								Tél. <?=$tel ?><br>
								<?=$adresse ?><br>
								<?=$cp ?>
								<?=$ville ?><br>
        					</p>
        					<p>
        						<a class="btn btn-info pull-right" href="/admin/contact-adresse-edit.php?id=<?=$id_facturation?>&id_commande=<?=$_GET[ "id" ]?>">Editer</a>
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
							    <?=$prenomliv ?>
	                            <?=$nomliv ?><br>
	                            <?=$emailliv ?><br>
	                             Tél. <?=$telliv ?><br>
	                            <?=$adresseliv ?><br>
	                            <?=$cpliv ?>
	                            <?=$villeliv ?><br>
	                            Message: <?=$message ?>
        					</p>
        					<p>
        						<a class="btn btn-info pull-right" href="/admin/contact-adresse-edit.php?id=<?=$id_livraison?>&id_commande=<?=$_GET[ "id" ]?>">Editer</a>
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
							<form name="formulaire" class="form-horizontal" method="POST" action="commande-fp.php">
								<input type="hidden" name="reference" value="commande"> 
								<input type="hidden" name="action" value="modif"> 
								<input type="hidden" name="id_commande" id="id_commande" value="<?=$_GET[ "id" ] ?>">
								<input type="hidden" name="old_statut_commande" value="<?=$statut_commande?>">   
								
								<div class="col-md-12 bg-info ">
									<label class="text-warning">Paiement :</label><br>
									Non Payé:<input type="radio" name="statut_paiement" value="0" <?php if ($statut_paiement==0) echo 'checked' ;?>>&nbsp;
									Payé:<input type="radio" name="statut_paiement" value="1" <?php if ($statut_paiement==1) echo 'checked' ;?>>&nbsp;
								</div>
								
								<div class="col-md-12">
									<br>
									<label class="col-sm-5" for="titre">N° Colissimo:</label>
									<input type="text" class="col-sm-7" name="colissimo"  value="<?=$colissimo ?>">
									&nbsp;<br>
								</div>
								
								<div class="col-md-12 bg-success ">
									<label class="text-info">Commande :</label><br>
									<label class="text-danger">Non aboutie: &nbsp;</label><input type="radio" name="statut_commande" value="0" <?php if ($statut_commande==0) echo 'checked' ;?>>&nbsp;&nbsp;&nbsp;
									<label class="text-info">à traiter: &nbsp;</label><input type="radio" name="statut_commande" value="1" <?php if ($statut_commande==1) echo 'checked' ;?>>&nbsp;&nbsp;&nbsp;
									<label class="text-info">à livrer : &nbsp;</label><input type="radio" name="statut_commande" value="2" <?php if ($statut_commande==2) echo 'checked' ;?>>&nbsp;&nbsp;&nbsp;
									<label class="text-success">Traitée : &nbsp;</label><input type="radio" name="statut_commande" value="3" <?php if ($statut_commande==3) echo 'checked' ;?>>&nbsp;&nbsp;&nbsp;
								</div>
								
								<div class="col-md-12">
									<img src="img/imp.png" width="40" alt="preview" onclick="openImp('<?=$_GET[ "id" ] ?>')">
									<input type="submit" class="btn btn-info pull-right"  value="Modifier"/>
								</div>
							
							</form>
        				</div>
        			</div>
        		</div>
        		
        		<div id="preview" style="display: none;">
					<iframe id="laframe" src="" style="width:100%;height:100%" frameborder="0"></iframe>
				</div>
				
				<script type="text/javascript">
					function openImp(id){
						$('#laframe').attr('src', '/admin/commandes-print.php?id='+id);
					 	$('#preview').dialog({modal:true, width:900,height:500});
					}
				</script>
				
        		<div class="col-md-12">
        			<div class="panel panel-default">
        				<div class="panel-heading">
        					<h3 class="panel-title">Detail commande</h3>
        				</div>
        				<div class="panel-body">
        					<pre>Date : <?= traitement_datetime_affiche($date_commande) ?></pre>
        					<table class="table table-hover table-bordered table-condensed table-striped" >
        					<thead>
                                <tr>
                                    <th class="col-md-1">Ref. / Sous Réf.</th>
                                	<th class="col-md-1">Produit</th>
                                	<th class="col-md-1">Produit détail</th>
                                	<th class="col-md-1">quantité</th>
                                	<th class="col-md-1">Extra livraison TTC</th>
                                	<th class="col-md-1">Prix TTC unitaire</th>
                                </tr>
        					</thead>
        					<tbody>
        						<? 
        						// ---- Affichage udétail calculé précédemment
					    		echo $contenu_tableau;
								?>	
        						
    							<tr>
    							    <td colspan="4">&nbsp;</td>
    								<td><b>Total H.T.</b></td>
    								<td class="text-right"><?=number_format( $totalHT, 2 ) .' €' ?></td>
    							</tr>
    							<tr>
    							    <td colspan="4">&nbsp;</td>
    								<td><b>TVA</b></td>
    								<td class="text-right"><?=number_format( $totalTVA, 2 ) .' €' ?></td>
    							</tr>
    							<tr>
    							    <td colspan="4">&nbsp;</td>
    								<td><b>Frais de livraison</b></td>
    								<td class="text-right"><?=number_format( $totalLiv, 2 ) .' €' ?></td>
    							</tr>
    							<tr>
    							    <td colspan="4">&nbsp;</td>
    								<td><b>Total T.T.C.</b></td>
    								<td class="text-right"><?=number_format( $totalTTC, 2 ) .' €' ?></td>
    							</tr>
    							<tr>
    							    <td colspan="4">&nbsp;</td>
    								<td><b>Total T.T.C. + FP</b></td>
    								<td class="text-right"><?=number_format( $totalTTCLIV, 2 ) .' €' ?></td>
    							</tr>
        					</tbody>
        				    </table>
        				</div>
        			</div>
        		</div>
				
				
			</div>
		</div>
	</div>
</body>
</html>


