<?
	include_once '../../inc/inc.config.php';
	include_once '../inc-auth-granted.php';
	include_once '../classes/utils.php';
	require '../classes/Catproduct.php';
	
	// ---- Modification ---------------------------- //
	if ( !empty( $_GET ) ) {
		$action = 'modif';
		$rubrique = new Catproduct();
		$result = $rubrique->getRubriques( $_GET[ "id" ] );

		if ( !empty( $result ) ) {
			$labelTitle = 	'Rubrique "'. $result[ 0 ][ "label" ] . '"';
			$id =			$_GET[ "id" ];
			$label = 		$result[ 0 ][ "label" ];
			$sous_titre = 	$result[ 0 ][ "sous_titre" ];
			$image[ 1 ] = 	$result[ 0 ][ "image" ];
			
			if( empty( $image[ 1 ] ) || !isset( $image[ 1 ] ) ) {
				$img[ 1 ] = "/img/favicon.png";
				$imgval[ 1 ] = '';
			} 
			else {
				$img[ 1 ] = '/photos/rubrique'. $image[ 1 ];
				$imgval[ 1 ] = $image[ 1 ];
			}
		}
		else $message = 'Aucun enregistrements';
	} 

	// ---- Ajout d'une rubrique -------------------- //
	else {
		$action = 'add';
		$labelTitle = 	'Nouvelle rubrique';
		$id=			null;
		$label= 		null;
		$sous_titre=	null;
		$image= 		null;
	}
?>

<!doctype html>
<html class="no-js" lang="fr">
	<head>
		<? include_once "../inc-meta.php" ; ?>
	</head>
	
	<body>	
		<? require_once "../inc-menu.php" ; ?>
	
		<div class="container">
	
			<div class="row">
				<h3><?=$labelTitle?></h3><br>
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<form name="formulaire" class="form-horizontal" method="POST" action="traitement.php">
						<input type="hidden" name="reference" value="rubrique">
						<input type="hidden" name="action" value="<?=$action ?>">
						<input type="hidden" name="id" id="id" value="<?=$id ?>">
						
						<div class="form-group" >
							<label class="col-sm-2" for="titre">Titre :</label>
							<input type="text" class="col-sm-10" name="label" required value="<?=$label?>">
						</div>
						
						<div class="form-group" >
							<label class="col-sm-2" for="titre">Sous titre :</label>
							<input type="text" class="col-sm-10" name="sous_titre" value="<?=$sous_titre?>">
						</div>
						
						<div class="form-group"><br>
							<label for="titre">Choisissez la photo </label>
							<input type="hidden" name="idImage" id="idImage" value="">
						</div>	
						
						<div class="col-md-4" style="margin-bottom:20px;">
							<input type="hidden" name="url1" id="url1" value="<?=$imgval[ 1 ]?>"><br>
							<a href="javascript:openCustomRoxy('1')"><img src="<?=$img[ 1 ]?>" id="customRoxyImage1" style="max-width:200px;"></a>
							<img src="img/del.png" width="20" alt="Supprimer" onclick="clearImage( 1 )"/>
						</div>	
						
						<div id="roxyCustomPanel" style="display:none;">
							<iframe src="/admin/fileman2/index.html?integration=custom" style="width:100%;height:100%" frameborder="0"></iframe>
						</div>
						
						<div style="clear:both;"></div>
						<a href="./liste.php" class="btn btn-success col-sm-6" class="btn btn-default annuler"> Annuler </a>	
						<button type="submit" class="btn btn-success col-sm-6" class="btn btn-default"> Valider </button>
				  </form>
				  
				</div>
			</div>
		</div>
		
		
		<script type="text/javascript">
			
			function openCustomRoxy(idImage){
				$('#idImage').val(idImage);
			 	$('#roxyCustomPanel').dialog({modal:true, width:875,height:600});
			}
			function closeCustomRoxy(){
			  	$('#roxyCustomPanel').dialog('close');
			}
			
			function clearImage(idImage){
				$('#customRoxyImage'+idImage).attr('src', '/img/favicon.png');
				$('#url'+idImage).val('');
			}
			
		</script>
		
		
	</body>
</html>


