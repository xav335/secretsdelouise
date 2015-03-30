<?php include_once 'inc-auth-granted.php';?>
<?php include_once 'classes/utils.php';?>
<?php include_once 'classes/pagination.php';?>
<?php 
require 'classes/Catproduct.php';

	
	if (!empty($_POST)){
		$color = $_POST['color'];
		$size = $_POST['size'];
	} 
	//print_r($color);
	try {
		$catproduct = new Catproduct();
	
		$product = $catproduct->productGet($_GET['id'],	null, null, null, null);	
		$productid=  			$product[0]['id'];
		$productlabel=  		$product[0]['label'];
		$productprix=  			$product[0]['prix'];
		$productlibprix=  		$product[0]['libprix'];
		$productreference=  	$product[0]['reference'];
		
		
		$colorResult = $catproduct->getColors();
		$sizeResult = $catproduct->getSizes();
		//print_r($product);
		$catproduct =null;
	} catch (Exception $e) {
		echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
		exit();
	}	
	
	if (empty($result)) {
		$message = 'Aucun enregistrements';
	} else {
		$message = '';
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
				<h3>Edition des Sous références : <?php echo $productlabel?> - Ref: <?php echo $productreference?> - Id: <?php echo $productid?></h5>
				<br><br>
			</div>
		</div>
		<div class="row bg-info">
				<br>
				<form name="formulaire" class="form-horizontal" method="POST"  action="product-sousref-edit.php" >
				<div class="col-md-2 ">	
					<label class="col-sm-6">Sous-ref:</label><input type="text" class="col-sm-6" name="sousref"  id="sousref" value="">
				</div>
				<div class="col-md-2">	
					<b>Couleur</b>:	
					<select name="color" id="color">
					<?
					foreach ($colorResult as $value) { 
						?>
						<option value="<?php echo $value['id'] ?>" >
							<?php echo $value['label'] ?>
						</option>
						<?
					}
					?>
					</select>	
				</div>	
				
				<div class="col-md-2">		
					<b>Taille</b>:	
					<select name="size" id="size">
					<?
					foreach ($sizeResult as $value) { 
						?>
						<option value="<?php echo $value['id'] ?>" >
							<?php echo $value['label'] ?>
						</option>
						<?
					}
					?>
					</select>	
				</div>	
				<div class="col-md-2">	
					<label class="col-sm-6">Stock:</label><input type="number" step="1" class="col-sm-6" name="stock" required id="stock" value="">
				</div>
				<div class="col-md-2">	
					<label class="col-sm-6">Prix:</label><input type="number" step="0.01" class="col-sm-6" name="prix" required id="prix" value="">
				</div>
				<div class="col-md-2">	
					<label class="col-sm-6">F.Port ext:</label><input type="number" step="0.01" class="col-sm-6" name="shipping" required id="shipping" value="0">
				</div>
				<div class="col-md-2">		
					<button class="btn btn-success col-sm-4" type="submit" >Ajout</button>
				</div>
				<br><br>
		</div>	
		<hr width="100%">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">

				<table class="table table-hover table-bordered table-condensed table-striped" >
					<thead>
						<tr>
							
							<th class="col-md-1" style="">
								Sous Ref
							</th>
							<th class="col-md-2" style="">
								couleur
							</th>
							<th class="col-md-1" style="">
								Taille
							</th>
							<th class="col-md-1" style="">
								Prix
							</th>
							<th class="col-md-1" style="">
								Stock
							</th>
							<th class="col-md-1" style="">
								F.Port extra
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
							$i++;
								//Catégries
								//print_r($value['categories']);
							?>
							<tr class="<?php if ($i%2!=0) echo 'info'?>">
								<td><?php echo $value['reference']?></td>
								<td><?php echo $value['label'] ?></td>
								<td><?php echo $value['prix']?></td>
								<td><?php echo $value['shipping']?></td>
								<td><?php echo $categs?></td>
								<td><?php echo $rubs?></td>
								<td>
									<a href="product-edit.php?id=<?php echo $value['id'] ?>"><img src="img/modif.png" width="30" alt="Modifier" ></a>
									<a href="product-sousref-edit.php?id=<?php echo $value['id'] ?>"><img src="img/sr.png" width="30" alt="Modifier" ></a>
								</td>
								<td>
									<div style="display: none;" class="supp<?php echo $value['id']?> alert alert-warning alert-dismissible fade in" role="alert">
								      <button type="button" class="close"  aria-label="Close" onclick="$('.supp<?php echo $value['id']?>').css('display', 'none');"><span aria-hidden="true">×</span></button>
								      <strong>Voulez vous vraiment supprimer ?</strong>
								      <button type="button" class="btn btn-danger" onclick="location.href='formprocess.php?reference=product&action=delete&id=<?php echo $value['id'] ?>'">Oui !</button>
								 	</div>
								<img src="img/del.png" width="20" alt="Supprimer" onclick="$('.supp<?php echo $value['id']?>').css('display', 'block');"> </td>
							</tr>
							<?php } ?>
						<?php } ?>	
					</tbody>
				</table>

				<h3><?php echo $message?></h3>
			</div>
		</div>
	</div>
</body>
</html>


