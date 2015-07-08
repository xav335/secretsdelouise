<?php require_once 'inc/inc.config.php';?>
<?php 
require 'admin/classes/Contact.php';
require 'admin/classes/utils.php';
session_start();

(!empty($_GET['action'])) ? $action =$_GET['action'] : $action = 'ident';

(!empty($_GET['error'])) ? $error =$_GET['error'] : $error = null;
(!empty($_SESSION['id_contact'])) ? $id_contact =$_SESSION['id_contact'] : $id_contact = null;


if (!empty($id_contact)){
    $contact = new Contact();
    try {
        $result = $contact->contactGet($id_contact, null, null);
        //print_r($result);exit;
        //Facturation
        $nom =      $result[0]['name'];
        $prenom =   $result[0]['firstname'];
        $email =    $result[0]['email'];
        $tel =      $result[0]['tel'];
        $adresse =  $result[0]['facturation'][0]['adresse'];
        $cp =       $result[0]['facturation'][0]['cp'];
        $ville =    $result[0]['facturation'][0]['ville'];
        //Livraison
        $nomliv =   $result[0]['livraison'][0]['nom'];
        $prenomliv= $result[0]['livraison'][0]['prenom'];;
        $emailliv = $result[0]['livraison'][0]['email'];
        $telliv =   $result[0]['livraison'][0]['tel'];
        $adresseliv=$result[0]['livraison'][0]['adresse'];
        $cpliv =    $result[0]['livraison'][0]['cp'];
        $villeliv = $result[0]['livraison'][0]['ville'];
        $message=   $result[0]['livraison'][0]['message'];
        
        $action = 'modif';
    
    } catch (Exception $e) {
        echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
        $contact = null;
        exit();
    }
    $contact = null;
} else {
    $nom ='Gonzzza';
    $prenom ='Jav';
    $email ='xav335@hotmail.com';
    $tel ='0909090909';
    $adresse = '36 route de Bordeaux';
    $cp ='33360';
    $ville ='Latresne';
    
    $nomliv ='';
    $prenomliv ='';
    $emailliv ='';
    $telliv ='';
    $adresseliv = '';
    $cpliv ='';
    $villeliv ='';
    $message='';
    
    
}

?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<title>Les Secrets de Louise - Bijoux &amp; accessoires</title>
<?php include('inc/meta.php'); ?>
	</head>
	<body class="page-panier">
	
<?php include('inc/header.php'); ?>
				
				<!-- Products list -->
				<div class="row">
					<div class="large-3 medium-3 small-12 columns menu-panier">
						<ul>
							<li class="active">
								<a href="mescommandes.php"><span>1 -</span> Mes commandes</a>
							</li>
							<li >
								<a href="adresse.php"><span>2 -</span> Mes adresses</a>
							</li>
							<li >
								<a href="adresse.php"><span>2 -</span> Mes informations</a>
							</li>
						</ul>
					</div>
				    <form data-abide id="formulaire" method="POST"  action="admin/contactFront-fp.php">
				    
					<div class="large-9 medium-9 small-12 columns">
					   
					
					    <div class="row">
							 <div class="large-6 columns">
							    <h5>Identifiez vous</h5>
								
                                  <input type="hidden" name="reference" id="reference"  value="contactFront">
                            	  <input type="hidden" name="action" id="action"  value="<?php echo $action?>">
                        			
                        		  <div class="row">
                        		          
                        				<div class="large-12 columns">
                        				     <?php if ($error=='noident') :?>
                        		                  <H4 class="label">Vous ne parvenons pas à vous indentifier ! </h4><br><br>
                        		             <?php elseif ($error=='nomail') :?>
                        		                  <H4 class="label">Vous ne parvenons pas à trouver votre email dans la base client ! </h4><br><br>
                        		             <?php endif;?>
                        					<label>e-mail
                        						<input name="email" id="email" type="email" placeholder="e-mail" required />
                        					</label>
                        					<small class="error">Votre e-mail est obligatoire</small>
                        				</div>
                        				<div class="large-12 columns">
                        					<label>Mot de passe
                        						<input name="password" id="password" type="text" placeholder="mot de passe" required />
                        					</label>
                        					<small class="error">Votre mot de passe est obligatoire</small>
                        				</div>
                        		  </div>
							</div>
						</div>
						<div class="row">
							
							<div class="large-3 medium-3 small-3 columns" style="text-align:right;">
								<input class="envoi" type="submit" value="Valider"/>
							</div>
							<div class="large-6 medium-6 small-6 columns">
								<button class="continuer" onclick="location.href='adresse.php?action=creation'">Sinon créer un compte</button>
							</div>
						</div>
					</div>
					</form>
				</div>
				<!-- End Products list -->
				
<?php include('inc/footer.php'); ?>
<script>
		$('.header .content2 ul li:nth-child(1)').addClass('active');
	</script>
	</body>
</html>
