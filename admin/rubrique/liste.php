<?
	include_once '../../inc/inc.config.php';
	include_once '../inc-auth-granted.php';
	include_once '../classes/utils.php';
	require '../classes/Catproduct.php';
	
	$catproduct = new Catproduct();
	
	// Recup des rubriques
	$liste_rubrique = $catproduct->getRubriques();

	$message = ( empty( $liste_rubrique ) ) ? 'Aucun enregistrements' : '';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
	<? include_once "../inc-meta.php" ;?>
</head>
<body>	
	<? require_once "../inc-menu.php" ;?>

	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">

				<table class="table table-hover table-bordered table-condensed table-striped" >
					<thead>
						<tr>
							<th class="col-md-2" style="">
								Titre de la rubrique
							</th><th class="col-md-9" style="">
								Sous titre
							</th>
							<th class="col-md-1" colspan="2" style="">
								Actions
							</th>
							
						</tr>
					</thead>
					<tbody>
						<? 
						if ( !empty( $liste_rubrique ) ) {
							$i=0;
							foreach ( $liste_rubrique as $value ) {
								$i++;
								$classe_affichage = ( $i % 2 != 0 ) ? 'info' : '';
								
								echo "<tr class='" . $classe_affichage . "'>\n";
								echo "	<td>" . $value[ "label" ] . "</td>\n";
								echo "	<td>" . $value[ "sous_titre" ] . "</td>\n";
								echo "	<td><a href='./ajouter.php?id=" . $value[ "id" ] . "'><img src='../img/modif.png' width='30' alt='Modifier' ></a></td>\n";
								echo "</tr>\n";
							}
						}
						?>
					</tbody>
				</table>

				<h3><?php echo $message?></h3>
			</div>
		</div>
	</div>
</body>
</html>


