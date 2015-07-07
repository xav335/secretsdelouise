<?php include_once '../inc/inc.config.php'; ?>
<?php include_once 'inc-auth-granted.php';?>
<?php include_once 'classes/utils.php';?>
<?php 
require 'classes/Contact.php';

(!empty($_GET['id'])) ? $id_adresse = $_GET['id'] : $id_adresse = null;
(!empty($_GET['id_commande'])) ? $id_commande = $_GET['id_commande'] : $id_commande = null;

if (!empty($id_adresse)) {

    $contact = new Contact();
    try {
            //$result = $contact->contactGet($id_contact, null, null);
           
            // Facturation
            $result = $contact->contactAddresseGet($id_adresse);
            //print_r($result);exit;
          
            $nom = $result[0]['nom'];
            $prenom = $result[0]['prenom'];
            $email = $result[0]['email'];
            $tel = $result[0]['tel'];
            $adresse = $result[0]['adresse'];
            $cp = $result[0]['cp'];
            $ville = $result[0]['ville'];
            
            $contact = null;
        } catch (Exception $e) {
            echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
            $contact = null;
            exit();
        }
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
			<h3>Edition adresse:</h3><br>
			<div class="col-md-12">
				
					<form name="formulaire" class="form-horizontal" method="POST"  action="contact-fp.php">
						<input type="hidden" name="reference" value="adresse">
						<input type="hidden" name="action" value="modif">
						<input type="hidden" name="id_commande" id="id_commande" value="<?php echo $id_commande ?>">
						<input type="hidden" name="id" id="id" value="<?php echo $id_adresse ?>">
						
						<div class="form-group" >
							<label class="col-sm-2" for="titre">Prénom :</label>
						    <input type="text" class="col-sm-10" name="prenom" required  value="<?php echo $prenom ?>">
						</div>
						<div class="form-group" >
							<label class="col-sm-2" for="titre">Nom :</label>
						    <input type="text" class="col-sm-10" name="nom" required  value="<?php echo $nom ?>">
						</div>
						<div class="form-group" >
							<label class="col-sm-2" for="titre">Adresse :</label>
						    <input class="col-sm-10" name="adresse" type="text" required  value="<?php echo $adresse ?>">
						</div>
						<div class="form-group" >
							<label class="col-sm-2" for="titre">CP :</label>
						    <input class="col-sm-10" name="cp" type="text" required  value="<?php echo $cp ?>">
						</div>
						<div class="form-group" >
							<label class="col-sm-2" for="titre">Ville :</label>
						    <input class="col-sm-10" name="ville" type="text" required  value="<?php echo $ville ?>">
						</div>
						<div class="form-group" >
							<label class="col-sm-2" for="titre">Email :</label>
						    <input class="col-sm-10" name="email" type="email"   value="<?php echo $email ?>">
						</div>
						<div class="form-group" >
							<label class="col-sm-2" for="titre">Tel :</label>
						    <input class="col-sm-10" name="tel" type="tel"   value="<?php echo $tel ?>">
						</div>
						
			            <button class="btn btn-success col-sm-12" type="submit" class="btn btn-default"> Valider </button>
			        </form>
			        <script type="text/javascript">
						$(document).ready(
						  
						  /* This is the function that will get executed after the DOM is fully loaded */
						  function () {
						    $( "#datepicker" ).datepicker({
						    	altField: "#datepicker",
						    	closeText: 'Fermer',
						    	prevText: 'Précédent',
						    	nextText: 'Suivant',
						    	currentText: 'Aujourd\'hui',
						    	monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
						    	monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
						    	dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
						    	dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
						    	dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
						    	weekHeader: 'Sem.',
						    	dateFormat: 'dd/mm/yy'
						    });
						  }

						);
					</script>
			</div>
		</div>
	</div>
</body>
</html>


