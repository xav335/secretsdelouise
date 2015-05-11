<?php 
require 'admin/classes/Contact.php';
require 'admin/classes/utils.php';
$tva = 0.2;
session_start();
(!empty($_GET['action'])) ? $action = $_GET['action'] : $action = null;

if (!empty($_SESSION['id_contact'])){
    $contact = new Contact();
    try {
        $result = $contact->contactGet($_SESSION['id_contact'], null, null);
        print_r($result);
    
    } catch (Exception $e) {
        echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
        $contact = null;
        exit();
    }
    $contact = null;
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
								<a href="panier.php"><span>1 -</span> Récapitulatif</a>
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
				    <form data-abide id="formulaire" method="POST"  action="admin/contact-fp.php">
				    
					<div class="large-9 medium-9 small-12 columns">
					   <?php 
					   if(!empty($result) || $action=='creation' ):
					   ?>
					   <div class="row">
							<div class="large-12 columns">
							    <h5>Adresse de facturation</h5>
								
                            		<input type="hidden" name="reference" id="reference"  value="contactFront">
                            		<input type="hidden" name="action" id="action"  value="modif">
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>Nom
                        						<input name="nom" id="nom" type="text" placeholder="Nom" required />
                        					</label>
                        					<small class="error">Votre nom est obligatoire</small>
                        				</div>
                        				<div class="large-6 columns">
                        					<label>Prénom
                        						<input name="prenom" id="prenom" type="text" placeholder="Prénom" required />
                        					</label>
                        					<small class="error">Votre prénom est obligatoire</small>
                        				</div>
                        			</div>
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>e-mail
                        						<input name="email" id="email" type="email" placeholder="e-mail" required />
                        					</label>
                        					<small class="error">Votre e-mail est obligatoire</small>
                        				</div>
                        				<div class="large-6 columns">
                        					<label>Tel.
                        						<input name="tel" id="tel" type="text" placeholder="tel" required />
                        					</label>
                        					<small class="error">Votre prénom est obligatoire</small>
                        				</div>
                        			</div>
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>Adresse
                        						<input name="adresse" id="adresse" type="text" placeholder="adresse" required />
                        					</label>
                        					<small class="error">Votre adresse est obligatoire</small>
                        				</div>
                        				<div class="large-3 columns">
                        					<label>C.P.
                        						<input name="cp" id="cp" type="text" placeholder="cp"  required/>
                        					</label>
                        					<small class="error">Votre cp est obligatoire</small>
                        				</div>
                        				<div class="large-3 columns">
                        					<label>Ville
                        						<input name="ville" id="ville" type="text" placeholder="ville" required />
                        					</label>
                        					<small class="error">Votre ville est obligatoire</small>
                        				</div>
                        			</div>
                        			
                        			<div class="row">
                        				<div class="large-12 columns">
                        					<input type="checkbox" id="newsletter" name="newsletter" /> Adresse de livraison identique
                        				</div>
                        			</div>
                        		</form>
							</div>
							<div class="large-12 columns" id="livraison" style="text-align:left;">
								<h5>Adresse de livraison</h5>
								<div class="row">
                        				<div class="large-6 columns">
                        					<label>Nom
                        						<input name="nomliv" id="nomliv" type="text" placeholder="Nom"  required/>
                        					</label>
                        					<small class="error">Votre nom est obligatoire</small>
                        				</div>
                        				<div class="large-6 columns">
                        					<label>Prénom
                        						<input name="prenomliv" id="prenomliv" type="text" placeholder="Prénom" required />
                        					</label>
                        					<small class="error">Votre prénom est obligatoire</small>
                        				</div>
                        			</div>
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>e-mail
                        						<input name="emailliv" id="emailliv" type="email" placeholder="e-mail"  required/>
                        					</label>
                        					<small class="error">Votre e-mail est obligatoire</small>
                        				</div>
                        				<div class="large-6 columns">
                        					<label>Tel.
                        						<input name="telliv" id="telliv" type="text" placeholder="tel" required />
                        					</label>
                        					<small class="error">Votre prénom est obligatoire</small>
                        				</div>
                        			</div>
                        			<div class="row">
                        				<div class="large-6 columns">
                        					<label>Adresse
                        						<input name="adresseliv" id="adresseliv" type="text" placeholder="adresse" required />
                        					</label>
                        					<small class="error">Votre adresse est obligatoire</small>
                        				</div>
                        				<div class="large-3 columns">
                        					<label>C.P.
                        						<input name="cpliv" id="cpliv" type="text" placeholder="cp"  required/>
                        					</label>
                        					<small class="error">Votre cp est obligatoire</small>
                        				</div>
                        				<div class="large-3 columns">
                        					<label>Ville
                        						<input name="villeliv" id="villeliv" type="text" placeholder="ville" required />
                        					</label>
                        					<small class="error">Votre ville est obligatoire</small>
                        				</div>
                        			</div>
                        		    <div class="row">
                        				<div class="large-12 columns">
                        					<label>Message au livreur ou information complémentaire.
                        						<textarea name="message" id="message" placeholder="Votre message"></textarea>
                        					</label>
                        					<small class="error">Merci de saisir votre message</small>
                        				</div>
                        			</div>
							</div>
						</div>
						<div class="row">
							<div class="large-6 medium-6 small-6 columns">
								<button class="continuer" onclick="location.href='panier.php'">Retour au panier</button>
							</div>
							<div class="large-6 medium-6 small-6 columns" style="text-align:right;">
								<input class="envoi" type="submit" value="Livraison"/>
							</div>
						</div>
					</div>
					<?php 
					elseif($action=='mdp'):
					?>
				        <div class="row">
							 <div class="large-8 columns">
							    <h5>Récupération de votre mot de passe</h5>
								
                                  <input type="hidden" name="reference" id="reference"  value="contactFront">
                            	  <input type="hidden" name="action" id="action"  value="modif">
                        			<br>
                        		  <div class="row">
                        				<div class="large-12 columns">
                        					<label>e-mail
                        						<input name="email" id="email" type="email" placeholder="e-mail" required />
                        					</label>
                        					<small class="error">Votre e-mail est obligatoire</small>
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
							    <h5>Authentifier vous</h5>
								
                                  <input type="hidden" name="reference" id="reference"  value="contactFront">
                            	  <input type="hidden" name="action" id="action"  value="modif">
                        			
                        		  <div class="row">
                        				<div class="large-12 columns">
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
