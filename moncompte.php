<?php require_once 'inc/inc.config.php';?>
<?php 
require 'admin/classes/Contact.php';
require 'admin/classes/Panier.php';
require 'admin/classes/utils.php';
session_start();

(!empty($_GET['action'])) ? $action =$_GET['action'] : $action = 'ident';

(!empty($_GET['error'])) ? $error =$_GET['error'] : $error = null;
(!empty($_SESSION['id_contact'])) ? $id_contact =$_SESSION['id_contact'] : $id_contact = null;


if (!empty($id_contact)){
    $contact = new Contact();
    try {
        $panier = new Panier();
        $statutCommande =1;
        $result = $panier->getCommandesByContact($id_contact,$statutCommande);
        //print_r($result);
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
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
	</head>
	<body class="page-panier">
	
<?php include('inc/header.php'); ?>
				
				<!-- Products list -->
				<div class="row">
					<div class="large-3 medium-3 small-12 columns menu-panier">
						<ul>
							<li class="active">
								<a href="momcompte.php"><span>1 -</span> Mes commandes</a>
							</li>
							<li >
								<a href="adresse.php?source=moncompte"><span>2 -</span> Mes adresses</a>
							</li>
						</ul>
					</div>
				    <form data-abide id="formulaire" method="POST"  action="admin/moncompteFront-fp.php">
				    
					<div class="large-9 medium-9 small-12 columns">
					    <?php 
					   if($action=='modif'):
					   ?>
					   
					       
					       <div class="row">
    							 <table name="panier">
        							<thead>
        								<tr>
        									<th>Date</th>
        									<th>N° Commande</th>
        									<th class="text-center">Statut</th>
        									<th>Tracking colis</th>
        									<th class="text-center">Facture</th>
        								</tr>
        							</thead>
        							
        							<tbody>
        							    <?php 
                                        foreach ($result as $value):
                                            switch ($value['statut_commande']) {
                                                case 0:
                                                    $statut_commande = 'non aboutie';
                                                    break;
                                                case 1:
                                                    $statut_commande = 'à traiter';
                                                    break;
                                                case 2:
                                                    $statut_commande = 'à livrer';
                                                    break;
                                                case 3:
                                                    $statut_commande = 'Livrée';
                                                    break;
                                                default:
                                                    $statut_commande ='';
                                                    break;
                                            }
                                        ?>
        								<tr>
        									<td><?php echo traitement_heure_affiche($value['date_ajout'])?></td>
        									<td><?php echo $value['id']?></td>
        									<td class="text-center"><?php echo $statut_commande?></td>
								            <td><a href="http://www.colissimo.fr/portail_colissimo/suivre.do?language=fr_FR" target="_blank"><?php echo $value['colissimo']?></a></td>
								            <td class="text-center"><img src="/admin/img/imp.png" width="20" alt="preview" onclick="openImp('<?php echo $value['id']?>')"></td>
        								</tr>
        								<?php 
                                        endforeach;
                                        ?>
        							</tbody>
        							
        							<tfoot>
        								<tr>
        									<td rowspan="2" colspan="2">
        										
        									</td>
        									<td colspan="2" > </td>
        									<td colspan="2" class="text-right"></td>
        								</tr>
        								
        							</tfoot>
        						</table>
    						</div>
    						
    						<div id="previ" style="display: none;">
          						<iframe id="laframe" class="popup" src="" style="width:100%;height:100%"></iframe>
        					</div>
        					<script type="text/javascript">
        						function openImp(id){
        							$('#laframe').attr('src', '/admin/commandes-print.php?id='+id);
        						 	$('#previ').dialog({modal:true, width:900,height:500});
        						}
        					</script>
					      
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
