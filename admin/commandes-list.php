<? 
	include_once '../inc/inc.config.php';
	include_once 'inc-auth-granted.php';
	include_once 'classes/utils.php';
	require 'classes/Panier.php';
	
	$debug = false;
	$statutCommande = ( !empty( $_GET[ "statutCommande" ] ) ) ? $_GET[ "statutCommande" ] : null;
	$all = ( $_GET[ "all" ] != '' )
		? ( ( $_GET[ "all" ] == 1 ) ? true : false )
		: '';
	
	//echo "--- statutCommande : " . $statutCommande . "<br>";
	//echo "--- transaction_id : " . $transaction_id . "<br>";
	
	try {
		$panier = new Panier();
		$result = $panier->getAllCommandes( $statutCommande, $all, $debug );
		//print_pre( $result );
		
		if (empty($result)) {
			$message = 'Aucun enregistrements';
		} 
		else {
			$message = '';
		}
	}
	catch (Exception $e) {
		echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
		$contact = null;
		exit();
	}
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<? include_once 'inc-meta.php';?>
	</head>

	<body>	
		<? require_once 'inc-menu.php';?>
	
		<div class="container">
	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<table class="table table-hover table-bordered table-condensed table-striped" >
						<thead>
							<tr>
								<th class="col-md-2" style="">Date</th>
								<th class="col-md-1" style="">Id Commande</th>
								<th class="col-md-1" style="">Id contact</th>
								<th class="col-md-1" style="">Paiement</th>
								<th class="col-md-1" style="">Transaction</th>
								<th class="col-md-1" style="">Commande</th>
								<th class="col-md-2" style="">Collissimo</th>
								<th class="col-md-1">Edition</th>
								<th class="col-md-1">Panier</th>
								<th class="col-md-1">Paypal</th>
							</tr>
						</thead>
						<tbody>
							<? 
							if (!empty($result)) {
								$i=0;
								foreach ($result as $value) {
									$i++;
									$online = ( $value[ "statut_paiement" ] == '1' ) ? 'check' : 'del';
									$classe = ( $i % 2 != 0 ) ? 'info' : '';
									
									switch ($value[ "statut_commande" ]) {
									     case 0:
									        $statut_commande = 'non aboutie';
									        break;
									     case 1:
									         $statut_commande = 'à traiter';
								             break;
		    					         case 2:
		    					             $statut_commande = 'à livrer';
		    					             break;
							             case 3:
							                 $statut_commande = 'Livrée';
							                 break;
									    default:
									        $statut_commande ='';
									        break;
									}
									
									echo "<tr class='" . $classe . "'>\n";
									echo "	<td>" . traitement_heure_affiche( $value[ "date_ajout" ] ) . "</td>\n";
									echo "	<td>" . $value[ "id" ] . "</td>\n";
									echo "	<td>" . $value[ "id_contact" ] . "</td>\n";
									echo "	<td><img src='img/" . $online . ".png' width='20' ></td>\n";
									echo "	<td>" . $value[ "transaction_id" ] . "</td>\n";
									echo "	<td>" . $statut_commande . "</td>\n";
									echo "	<td>" . $value[ "colissimo" ] . "</td>\n";
									echo "	<td><a href='commande-edit.php?id=" . $value[ "id" ] . "'><img src='img/modif.png' width='30' alt='Modifier' ></a>\n";
									echo "	 - <img src='img/imp.png' width='20' alt='preview' onclick=\"openImp('" . $value[ "id" ] . "')\"></td>\n";
									echo "	<td><img src='img/eye.png' width='20' alt='preview' onclick=\"openPreview('" . $value[ "id" ] . "')\"></td>\n";
									echo "	<td><img src='img/eye.png' width='20' alt='preview' onclick=\"openPreview2('" . $value[ "id" ] . "')\"></td>\n";
									echo "</tr>\n";
								} 
							}
							?>	
						</tbody>
					</table>
	                        <div id="preview" style="display: none;">
	      						<iframe id="laframe" src="" style="width:100%;height:100%" frameborder="0"></iframe>
	    					</div>
	    					<script type="text/javascript">
	    						function openPreview(id){
	    							$('#laframe').attr('src', '/admin/commandes-detail.php?id='+id);
	    						 	$('#preview').dialog({modal:true, width:780,height:500});
	    						}
	    						function openPreview2(id){
	    							$('#laframe').attr('src', '/admin/commandes-detail-paypal.php?id='+id);
	    						 	$('#preview').dialog({modal:true, width:780,height:500});
	    						}
	    						function openImp(id){
	    							$('#laframe').attr('src', '/admin/commandes-print.php?id='+id);
	    						 	$('#preview').dialog({modal:true, width:900,height:500});
	    						}
	    					</script>
					<h3><?php echo $message?></h3>
				</div>
			</div>
		</div>
	</body>
</html>


