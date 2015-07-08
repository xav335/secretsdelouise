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
       
        
        $action = 'modif';
    
    } catch (Exception $e) {
        echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
        $contact = null;
        exit();
    }
    $contact = null;
} else {
   
    
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
				    <form data-abide id="formulaire" method="POST"  action="admin/moncompteFront-fp.php">
				    
					<div class="large-9 medium-9 small-12 columns">
					    <?php 
					   if($action=='modif'):
					   ?>
					       <div class="row">
    							 <div class="large-8 columns">
    							    <h5>Monn compte</h5>
    								
                                   
    							</div>
    						</div>
					   
					   <?php 
    					elseif($action=='mdp'):
    					?>
    				        <div class="row">
    							 <div class="large-8 columns">
    							    <h5>Récupération de votre mot de passe</h5>
    								
                                    <input type="hidden" name="reference" id="reference"  value="contactFront">
                                    <input type="hidden" name="action" id="action"  value="mdp">
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
                            	  <input type="hidden" name="action" id="action"  value="ident">
                        			
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
								<button class="continuer" onclick="location.href='moncompte.php?action=mdp'">Mot de passe oublié</button>
							</div>
							<div class="large-3 medium-3 small-3 columns" style="text-align:right;">
								<input class="envoi" type="submit" value="Valider"/>
							</div>
							<div class="large-6 medium-6 small-6 columns">
							</div>
						</div>
						<?php 
    					    endif;
    					    ?>
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
