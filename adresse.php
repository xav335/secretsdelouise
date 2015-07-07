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
        if (!empty($result[0]['facturation'])) {
            $adresse =  $result[0]['facturation'][0]['adresse'];
            $cp =       $result[0]['facturation'][0]['cp'];
            $ville =    $result[0]['facturation'][0]['ville'];
        } else {
             $adresse = '';
             $cp ='';
             $ville ='';
        }
       
        //Livraison
        
        if (!empty($result[0]['livraison'])) {
            $nomliv =   $result[0]['livraison'][0]['nom'];
            $prenomliv= $result[0]['livraison'][0]['prenom'];;
            $emailliv = $result[0]['livraison'][0]['email'];
            $telliv =   $result[0]['livraison'][0]['tel'];
            $adresseliv=$result[0]['livraison'][0]['adresse'];
            $cpliv =    $result[0]['livraison'][0]['cp'];
            $villeliv = $result[0]['livraison'][0]['ville'];
            $message=   $result[0]['livraison'][0]['message'];
        } else {
            $nomliv ='';
            $prenomliv ='';
            $emailliv ='';
            $telliv ='';
            $adresseliv = '';
            $cpliv ='';
            $villeliv ='';
            $message='';
        }
       
        
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
    $email ='jav_gonz@yahoo.com';
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
							<li >
								<a href="panier.php"><span>1 -</span> Récapitulatif <?php echo $id_contact?></a>
							</li>
							<li class="active">
								<a href="adresse.php"><span>2 -</span> Adresses</a>
							</li>
							<li>
								<a href="livraison.php"><span>3 -</span> Livraison</a>
							</li>
							<li>
								<a href="paiement.php"><span>4 -</span> Paiement</a>
							</li>
						</ul>
					</div>
				    <form data-abide id="formulaire" method="POST"  action="admin/contactFront-fp.php">
				    
					<div class="large-9 medium-9 small-12 columns">
					   <?php 
					   if(!empty($result) || $action=='creation' ):
					   ?>
					   <div class="row">
							<div class="large-12 columns">
							    <h5>Adresse de facturation</h5>
								
                            		<input type="hidden" name="reference" id="reference"  value="contactFront">
                            		<input type="hidden" name="action" id="action"  value="<?php echo $action?>">
                            		<input type="hidden" name="id_contact" id="id_contact"  value="<?php echo $id_contact?>">
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>Nom / Raison sociale
                        						<input name="nom" id="nom" type="text" value="<?php echo $nom?>"  placeholder="Nom" required />
                        					</label>
                        					<small class="error">Votre nom est obligatoire</small>
                        				</div>
                        				<div class="large-6 columns">
                        					<label>Prénom
                        						<input name="prenom" id="prenom" type="text" value="<?php echo $prenom?>" placeholder="Prénom"  />
                        					</label>
                        					<small class="error">Votre prénom est obligatoire</small>
                        				</div>
                        			</div>
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>e-mail
                        					   <?php if ($action=='modif'):?>
                        					   <input name="email" id="email" type="email" value="<?php echo $email?>" placeholder="e-mail" readonly />
                        					   <?php else:?>
                        					   <input name="email" id="email" type="email" value="<?php echo $email?>" placeholder="e-mail" required />
                        					   <?php endif;?>
                        					</label>
                        					<small class="error">Votre e-mail est obligatoire</small>
                        				</div>
                        				<div class="large-6 columns">
                        					<label>Tel.
                        						<input name="tel" id="tel" type="text" value="<?php echo $tel?>" placeholder="tel" required />
                        					</label>
                        					<small class="error">Votre téléphone est obligatoire</small>
                        				</div>
                        			</div>
                        			<?php if ($action=='creation'):?>
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>Mot de passe
                        						<input name="password" id="password" type="password" value="" placeholder="mot de passe" required />
                        					</label>
                        					<small class="error">Le mot de passe est obligatoire</small>
                        				</div>
                        				
                        			</div>
                        			<?php endif;?>
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>Adresse
                        						<input name="adresse" id="adresse" type="text" value="<?php echo $adresse?>" placeholder="adresse" required />
                        					</label>
                        					<small class="error">Votre adresse est obligatoire</small>
                        				</div>
                        				<div class="large-3 columns">
                        					<label>C.P.
                        						<input name="cp" id="cp" type="text" value="<?php echo $cp?>" placeholder="cp"  required/>
                        					</label>
                        					<small class="error">Votre cp est obligatoire</small>
                        				</div>
                        				<div class="large-3 columns">
                        					<label>Ville
                        						<input name="ville" id="ville" type="text" value="<?php echo $ville?>" placeholder="ville" required />
                        					</label>
                        					<small class="error">Votre ville est obligatoire</small>
                        				</div>
                        			</div>
                        			
                        			<div class="row">
                        				<div class="large-12 columns">
                        					<input type="checkbox"  id="livraisonident" name="livraisonident" />  <strong>Adresse de livraison identique</strong>
                        				</div>
                        			</div>
							</div>
							<div class="large-12 columns" id="livraison" style="text-align:left;">
								<h5>Adresse de livraison</h5>
								<div class="row">
                        				<div class="large-6 columns">
                        					<label>Nom
                        						<input name="nomliv" id="nomliv" type="text" value="<?php echo $nomliv?>" placeholder="Nom"  required/>
                        					</label>
                        					<small class="error">Votre nom est obligatoire</small>
                        				</div>
                        				<div class="large-6 columns">
                        					<label>Prénom
                        						<input name="prenomliv" id="prenomliv" type="text" value="<?php echo $prenomliv?>" placeholder="Prénom"  />
                        					</label>
                        					<small class="error">Votre prénom est obligatoire</small>
                        				</div>
                        			</div>
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>e-mail
                        						<input name="emailliv" id="emailliv" type="email" value="<?php echo $emailliv?>" placeholder="e-mail"  required/>
                        					</label>
                        					<small class="error">Votre e-mail est obligatoire</small>
                        				</div>
                        				<div class="large-6 columns">
                        					<label>Tel.
                        						<input name="telliv" id="telliv" type="text" value="<?php echo $telliv?>" placeholder="tel" required />
                        					</label>
                        					<small class="error">Votre téléphone est obligatoire</small>
                        				</div>
                        			</div>
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>Adresse
                        						<input name="adresseliv" id="adresseliv" type="text" value="<?php echo $adresseliv?>" placeholder="adresse" required />
                        					</label>
                        					<small class="error">Votre adresse est obligatoire</small>
                        				</div>
                        				<div class="large-3 columns">
                        					<label>C.P.
                        						<input name="cpliv" id="cpliv" type="text" value="<?php echo $cpliv?>" placeholder="cp"  required/>
                        					</label>
                        					<small class="error">Votre cp est obligatoire</small>
                        				</div>
                        				<div class="large-3 columns">
                        					<label>Ville
                        						<input name="villeliv" id="villeliv" type="text" value="<?php echo $villeliv?>" placeholder="ville" required />
                        					</label>
                        					<small class="error">Votre ville est obligatoire</small>
                        				</div>
                        			</div>
                        		    <div class="row">
                        				<div class="large-12 columns">
                        					<label>Message au livreur ou information complémentaire.
                        						<textarea name="message" id="message" placeholder="Votre message"><?php echo $message?></textarea>
                        					</label>
                        					<small class="error">Merci de saisir votre message</small>
                        				</div>
                        			</div>
							</div>
						</div>
						<div class="row">
            				<div class="large-12 columns">
            					<input type="checkbox" id="newsletter" name="newsletter"  checked/> J'accepte de recevoir la newsletter.
            				</div>
            			</div>
						<div class="row">
							<div class="large-6 medium-6 small-6 columns" >
								<button  class="continuer" onclick="location.href='panier.php';return false;">Retour au panier</button>
							</div>
							<div class="large-6 medium-6 small-6 columns" style="text-align:right;">
								<input class="envoi" type="submit" value="Livraison"/>
							</div>
						</div>
					</div>
					<script type="text/javascript">

					$(document).on('click','#livraisonident',function(e) {
						
						if ($("#livraisonident")[0].checked){
							$("#livraison").hide();
							$("#nomliv").val($("#nom").val());
	    		        	$("#prenomliv").val($("#prenom").val());
	    		        	$("#emailliv").val($("#email").val());
	    		        	$("#telliv").val($("#tel").val());
	    		        	$("#cpliv").val($("#cp").val());
	    		        	$("#adresseliv").val($("#adresse").val());
	    		        	$("#villeliv").val($("#ville").val());
	    		        	
						} else {
							$("#livraison").show();
							$("#nomliv").val("");
	    		        	$("#prenomliv").val("");
	    		        	$("#emailliv").val("");
	    		        	$("#telliv").val("");
	    		        	$("#cpliv").val("");
	    		        	$("#adresseliv").val("");
	    		        	$("#villeliv").val("");
						}
						
						
					})
					
                </script>
					
					<?php 
					elseif($action=='mdp'):
					?>
				        <div class="row">
							 <div class="large-8 columns">
							    <h5>Récupération de votre mot de passe</h5>
								
                                <input type="hidden" name="reference" id="reference"  value="contactFront">
                                <input type="hidden" name="action" id="action"  value="<?php echo $action?>">
                        			<br>
                        		  <div class="row">
                        				<div class="large-12 columns">
                        				    <?php if ($error=='emailexist') :?>
                        		                  <H4 class="label">Votre email est déjà présent dans notre base de donnée,<br> 
                        		                  utilisez le formulaire ci-dessous pour récupérer votre mot de passe
                        		                  <br> afin de vous identifier ! </h4><br><br>
                        		             <?php endif;?>
                        					<label>e-mail
                        						<input name="email" id="email" type="email" placeholder="e-mail" required />
                        					</label>
                        					<small class="error">Votre e-mail est obligatoire</small>
                        					 Un email va vous être envoyé afin de vous identifiez
                        				</div>
                        				
                        		  </div>
							</div>
						</div>
						<div class="row">
							
							<div class="large-8 medium-8 small-8 columns" style="text-align:right;">
								<input class="envoi" type="submit" value="Valider"/>
							</div>
							
						</div>
					</div>
						<?php 
					    else:
					    ?>
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
                        		             <?php elseif ($error=='mailsent') :?>
                        		                   <H4 class="label">Votre mot de passe vient de vous être envoyé par email ! </h4><br><br>
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
							<div class="large-3 medium-3 small-3 columns">
								<button class="continuer" onclick="location.href='adresse.php?action=mdp'">Mot de passe oublié</button>
							</div>
							<div class="large-3 medium-3 small-3 columns" style="text-align:right;">
								<input class="envoi" type="submit" value="Valider"/>
							</div>
							<div class="large-6 medium-6 small-6 columns">
								<button class="continuer" onclick="location.href='adresse.php?action=creation'">Sinon créer un compte</button>
							</div>
						</div>
					</div>
					<?php 
					endif;
					?>
					</form>
				</div>
				<!-- End Products list -->
				
<?php include('inc/footer.php'); ?>
	</body>
</html>
