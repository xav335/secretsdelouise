<?
	include_once '../inc/inc.config.php';
	include_once 'inc-auth-granted.php';
	include_once 'classes/utils.php';
	require 'classes/Catproduct.php';
	
	$catproduct = new Catproduct();
	$catproduct->catproduitViewIterative( null );
	$result = $catproduct->tabView;
	
	$parent = null;
	$label = null;
	$message = null;
	
	// ---- Modif -------------------- //
	if ( !empty( $_GET ) ) {
		$codeerror = $_GET[ "message" ];
		if ( $codeerror == 1234 ) $message = "<h3 class='btn-danger'>La catégorie que vous voulez supprimer n'est pas vide : supprimer d'abord les produits qu'elle contient.</h3>"; 
		//print_r($result);
		//print_r($result[0][ "newsletter_detail" ]);
		//exit();
	}
	
	// ---- Ajout ------------------- //
	else { 
		$id_produit = 	null;
		$titre =  		null;
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
				
				<!-- Nouvelle catégorie -->
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
										<select name="parent" id="num_parent" class="col-md-5">
											<option value="0" selected>-- racine --</option>
											<?
											foreach ($result as $value) { 
												$decalage = "";
												for ($i=0; $i<($value[ "level" ] * 5); $i++) {
													$decalage .= "&nbsp;";
												}
												?>
												<option value="<?php echo $value[ "id" ] ?>" <? if ( $parent ==  $value[ "id" ] ) { ?> selected <? } ?>>
													<?=$decalage?><?php echo $value[ "label" ] ?>
												</option>
												<?
											}
											?>
										</select>	
										
									</div>	
									<div class="row">
										<label class="col-md-3">&nbsp;Nom catégorie :</label>
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
				
				<form name="form_liste" id="form_liste" class="form-horizontal" method="POST" action="catproduct-fp.php" >
					<input type="hidden" name="action" id="action" value="">
					<input type="hidden" name="id_categorie" id="id_categorie" value="">
					<input type="hidden" name="ordre" id="ordre" value="">
				</form>
				
				<table class="table table-hover table-bordered table-condensed table-striped" >
				<thead>
					<tr>
						<th class="col-md-4" style="">
							Liste des catégories
						</th>
						<th class="col-md-1" style="">
							Description
						</th>
						<th class="col-md-1" style="">
							Fichier tailles PDF
						</th>
						<th class="col-md-1" colspan="2" style="">
							Actions
						</th>
					</tr>
				</thead>
				<tbody>
					<? 
					if ( !empty( $result ) ) {
						$i=0;
						
						foreach ( $result as $value ) {
							$decalage = "";
							for ( $i=0; $i < ( $value[ "level" ] * 10 ); $i++ ) {
								$decalage .= "&nbsp;";
							}
							$i++;
							
							if ( $value[ "level" ] == 0 ) $classe_affichage = 'info';
							else if ( $value[ "level" ] == 1 ) $classe_affichage = 'success';
							else $classe_affichage = '';
							
							$description = ( !empty( $value[ "description" ] ) ) ? "texte OK" : "&nbsp;";
							
							echo "<tr class='" . $classe_affichage . "'>\n";
							echo "	<td>\n";
							
							// ---- Positionnement des catégories sur celles de niveau 0 ---- //
							if ( $value[ "level" ] == 0 ) {
								//echo "--- " . $value[ "ordre" ] . "<br>";
								
								$nb_cat = $catproduct->getNbCatByLevel( $value[ "level" ], false );
								echo "		<select id='" . $value[ "id" ] . "' class='select_categorie'>\n";
								
								for( $cpt = 1; $cpt <= $nb_cat; $cpt++ ) {
									$selected = ( $cpt == $value[ "ordre" ] ) ? "selected" : "";
									echo "		<option value='" . $cpt . "' " . $selected . ">" . $cpt . "</option>\n";
								}
								
								echo "		</select>&nbsp;&nbsp;\n";
							}
							// -------------------------------------------------------------- //
							
							echo "		<a href='/admin/product-list.php?categorie=" . $value[ "id" ] . "'>" . $decalage.$value[ "label" ] . "</a>\n";
							echo "	</td>\n";
							echo "	<td>" . $description . "</td>\n";
							echo "	<td>\n";
							
							if( !empty( $value[ "image" ] ) )
								    echo "<a href='/photos/categories" . $value[ "image" ] . "' target='_blank'>Fichier</a>\n";

							echo "	</td>\n";
							echo "	<td><a href='catproduct-edit.php?id=" . $value[ "id" ] . "'><img src='img/modif.png' width='30' alt='Modifier' ></a></td>\n";
								
							echo "	<td>\n";
							echo "		<div style='display: none;' class='supp" . $value[ "id" ] . " alert alert-warning alert-dismissible fade in' role='alert'>\n";
							echo "	      <button type='button' class='close'  aria-label='Close' onclick=\"$('.supp" . $value[ "id" ] . "').css('display', 'none');\"><span aria-hidden='true'>×</span></button>\n";
							echo "	      <strong>Voulez vous vraiment supprimer ?</strong>\n";
							echo "	      <button type='button' class='btn btn-danger' onclick=\"location.href='catproduct-fp.php?reference=categorie&action=delete&id=" . $value[ "id" ] . "'\">Oui !</button>\n";
							echo "	 	</div>\n";
							echo "		<img src='img/del.png' width='20' alt='Supprimer' onclick=\"$('.supp" . $value[ "id" ] . "').css('display', 'block');\"> \n";
							echo "	</td>\n";
							echo "</tr>\n";
						}
					}
					?>
				</tbody>
				</table>
					
			</div>
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>
		
		<script>
			
			// DOM Ready
			$(function() {
				
				$( ".select_categorie" ).change(function() {
					//alert( "changement..." );
					var id_cat = $(this).attr( "id" );
					var ordre = $(this).val();
					
					$( "#form_liste #action" ).val( "changer-ordre-categorie" );
					$( "#form_liste #id_categorie" ).val( id_cat );
					$( "#form_liste #ordre" ).val( ordre );
					$( "#form_liste" ).submit();
					
					return false;
				});
				
			});
			
		</script>
		
	</body>
</html>


