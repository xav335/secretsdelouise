<?php include_once '../inc/inc.config.php'; ?>
<?php include_once 'inc-auth-granted.php';?>
<?php include_once 'classes/utils.php';?>
<?php 
require 'classes/Panier.php';

(!empty($_GET['statutCommande'])) ? $statutCommande= $_GET['statutCommande'] : $statutCommande = null;

try {
	$panier = new Panier();
	$result = $panier->getAllCommandes($statutCommande);
	//print_r($result);
	if (empty($result)) {
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
	<?php require_once 'inc-menu.php';?>

	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">

				<table class="table table-hover table-bordered table-condensed table-striped" >
					<thead>
						<tr>
							<th class="col-md-2" style="">
								Date
							</th>
							<th class="col-md-1" style="">
								Id Commande
							</th>
							<th class="col-md-1" style="">
								Id contact
							</th>
							<th class="col-md-2" style="">
								statut paiement
							</th>
							<th class="col-md-1" style="">
								statut commande
							</th>
							
							<th class="col-md-2" style="">
								collissimo
							</th>
							
							<th class="col-md-1">
								Edition
							</th>
							<th class="col-md-1">
								Produit
							</th>
							<th class="col-md-1">
								Paypal
							</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if (!empty($result)) {
							$i=0;
							foreach ($result as $value) { 
							$i++;
							if($value['statut_paiement']=='1') {
								$online = 'check';
							} else {
								$online = 'del';
							}
							
							switch ($value['statut_commande']) {
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
							?>
							<tr class="<?php if ($i%2!=0) echo 'info'?>">
								
								<td><?php echo traitement_heure_affiche($value['date_ajout'])?></td>
								<td><?php echo $value['id']?></td>
								<td><?php echo $value['id_contact']?></td>
								<td><img src="img/<?php echo $online ?>.png" width="20" ></td>
								<td><?php echo $statut_commande?></td>
								<td><?php echo $value['colissimo']?></td>
								<td><a href="commande-edit.php?id=<?php echo $value['id'] ?>"><img src="img/modif.png" width="30" alt="Modifier" ></a>
								 - <img src="img/imp.png" width="20" alt="preview" onclick="openImp('<?php echo $value['id']?>')"></td>
								<td><img src="img/eye.png" width="20" alt="preview" onclick="openPreview('<?php echo $value['id']?>')"> </td>
								<td><img src="img/eye.png" width="20" alt="preview" onclick="openPreview2('<?php echo $value['id']?>')"> </td>
							</tr>
							<?php } ?>
						<?php } ?>	
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
    					</script>
				<h3><?php echo $message?></h3>
			</div>
		</div>
	</div>
</body>
</html>


