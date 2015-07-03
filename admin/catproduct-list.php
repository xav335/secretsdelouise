<?php include_once '../inc/inc.config.php'; ?>
<?php include_once 'inc-auth-granted.php';?>
<?php include_once 'classes/utils.php';?>
<?php 
require 'classes/Catproduct.php';

	$catproduct = new Catproduct();
	$catproduct->catproduitViewIterative(null);
	$result = $catproduct->tabView;
	$catproduct = null;
	
	//print_r($result);
	//exit();

	$parent =null;
	$label = null;
	$message = null;
	
	if (!empty($_GET)){ //Modif
		$codeerror = $_GET['message'];
		if ($codeerror==1234) $message = "<h3 class='btn-danger'>La catégorie que vous voulez supprimer n'est pas vide : supprimer d'abord les produits qu'elle contient.</h3>"; 
		//print_r($result);
		//print_r($result[0]['newsletter_detail']);
		//exit();
	} else { //ajout News
		$id= 			null;
		$titre=  		null;
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

			<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Choisissez la catégorie parent puis indiquez le nom de la catégorie fille</h3>
						</div>
						<div class="panel-body">
							<form name="formulaire" class="form-horizontal" method="POST"  action="catproduct-fp.php" >
								<input type="hidden" name="reference" value="categorie">
								<input type="hidden" name="action" id="action" value="add">
								
								<div class="row">
										<div class="row">
											<label class="col-md-3" >Catégorie Parent :</label>
											<select name="parent" id="num_parent">
											<option value="0" selected>-- racine --</option>
											<?
											foreach ($result as $value) { 
												$decalage = "";
												for ($i=0; $i<($value['level'] * 5); $i++) {
													$decalage .= "&nbsp;";
												}
												?>
												<option value="<?php echo $value['id'] ?>" <? if ( $parent ==  $value['id'] ) { ?> selected <? } ?>>
													<?=$decalage?><?php echo $value['label'] ?>
												</option>
												<?
											}
											?>
											</select>	
											
										</div>	
										<div class="row">
											<label class="col-md-4">&nbsp;Nom catégorie :</label>
				            				<input type="text" class="col-md-5" name="label" required id="label" value="<?php echo $label ?>">
				            			</div>
								</div>	
								
				            	<div class="row ">	
				            		<div class="col-md-3">	
										
									</div>	
									<div class="col-md-8">	<br>
										<button class="btn btn-success col-sm-10" type="submit" > Créer la catégorie </button>
									</div>		
								</div>	
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6"><br>
					<?php echo $message?>
				</div>	
				<table class="table table-hover table-bordered table-condensed table-striped" >
					<thead>
						<tr>
							<th class="col-md-4" style="">
								Liste des Categories
							</th>
							<th class="col-md-1" style="">
								desciption
							</th>
							<th class="col-md-1" style="">
								Fichier Tailles PDF
							</th>
							<th class="col-md-1" colspan="2" style="">
								Actions
							</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if (!empty($result)) {
							$i=0;
							foreach ($result as $value) { 
								$decalage = "";
								for ($i=0; $i<($value['level'] * 10); $i++) {
									$decalage .= "&nbsp;";
								}
							$i++;
							?>
							<tr class="<?php if ($value['level']==0) echo 'info';  if ($value['level']==1) echo 'success';?>">
								<td><a href="/admin/product-list.php?categorie=<?php echo $value['id'] ?>"><?php echo $decalage.$value['label']?></a></td>
								<td><?php if(!empty($value['description'])) echo 'texte OK' ?></td>
								<td>
								<?php if(!empty($value['image'])): ?>
								    <a href="/photos/categories<?php echo $value['image']?>" target="_blank">Fichier</a>
								<?php endif;?>
								</td>
								<td><a href="catproduct-edit.php?id=<?php echo $value['id'] ?>"><img src="img/modif.png" width="30" alt="Modifier" ></a></td>
								
								<td>
									<div style="display: none;" class="supp<?php echo $value['id']?> alert alert-warning alert-dismissible fade in" role="alert">
								      <button type="button" class="close"  aria-label="Close" onclick="$('.supp<?php echo $value['id']?>').css('display', 'none');"><span aria-hidden="true">×</span></button>
								      <strong>Voulez vous vraiment supprimer ?</strong>
								      <button type="button" class="btn btn-danger" onclick="location.href='catproduct-fp.php?reference=categorie&action=delete&id=<?php echo $value['id'] ?>'">Oui !</button>
								 	</div>
									<img src="img/del.png" width="20" alt="Supprimer" onclick="$('.supp<?php echo $value['id']?>').css('display', 'block');"> 
								</td>
							</tr>
							<?php } ?>
						<?php } ?>	
					</tbody>
				</table>

				
			</div>
		</div>
	</div>
</body>
</html>


