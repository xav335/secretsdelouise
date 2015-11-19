<?php include_once '../inc/inc.config.php'; ?>
<?php
require 'classes/ContactCommande.php';
require 'classes/Contact.php';
session_start();

 //print_r($_POST);exit;
// Forms processing
if (! empty($_POST)) {
    
    // traitement des Contact
    if ($_POST['reference'] == 'contactFront') {
        $contact = new ContactCommande();
        $contactNewsletter = new Contact();
        if ($_POST['action'] == 'creation') { // ajout adresse
            try {
                $result1 = $contact->contactGetByEmail($_POST['email']);
                //print_r(!empty($result1));exit;
                if(!empty($result1)){
                    header('Location: /adresse.php?action=mdp&error=emailexist');
                    exit;
                }
                $result = $contact->contactAdressesAdd($_POST);
                $_SESSION['id_contact'] = $result;
                $contact = null;
                
                //Mise à jour pour la newsletter
                $result1 = $contactNewsletter->contactGetByEmail($_POST['email']);
                //si l'email existe en base on y touche pas ...
                //TODO: mettre à jour l'inscription a newsletter
                if(empty($result1)){
                $_POST['fromcontact']='on';
                    $_POST['name']=$_POST['nom'];
                    $_POST['firstname']=$_POST['prenom'];
                    $contactNewsletter->contactAdd($_POST);
                }
                $contactNewsletter = null;
                
                header('Location: /livraison.php');
            } catch (Exception $e) {
                echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
                $contact = null;
                exit();
            }
        } 
        
        if ($_POST['action'] == 'modif') { // ajout adresse modifAdresses
            // TODO: tester si l contact existe déjà et si c'est le cas redirger vers identifiants
            //print_r($_POST);exit;
            try {
            $result = $contact->contactAdressesModif($_POST);
                $contact = null;
                header('Location: /livraison.php');
            } catch (Exception $e) {
            echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
            $contact = null;
                exit();
            }
        }
        
        if ($_POST['action'] == 'modifAdresses') { // ajout adresse modifAdresses
            // TODO: tester si l contact existe déjà et si c'est le cas redirger vers identifiants
            //print_r($_POST);exit;
            try {
                $result = $contact->contactAdressesModif($_POST);
                $contact = null;
                header('Location: /moncompte.php');
            } catch (Exception $e) {
                echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
                $contact = null;
                exit();
            }
         }
        
        if ($_POST['action'] == 'ident') { //Identification contact
            // print_r($_POST);exit;
            try {
                $result = $contact->contactGetByIdent($_POST);
                //print_r($result);exit;
               
                $contact = null;
                if (empty($result)){
                   header('Location: /adresse.php?error=noident');
                } else {
                    $_SESSION['id_contact'] = $result[0]['id'];
                    header('Location: /adresse.php');
                }
               
            } catch (Exception $e) {
            echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
            $contact = null;
                exit();
            }
        }
        
        if ($_POST['action'] == 'mdp') { // recup mot de passe
            try {
                $password = $contact->contactGetPassByEmail($_POST['email']);
                $contact = null;
                //print_r($password);exit;
                if (!empty($password[0]['password'])) {
                    $_to = ( MAIL_TEST != '' )
				    	? MAIL_TEST
				    	: $_POST['email'];
                    $sujet = MAIL_NAME_CUSTOMER . " - Recupération du compte";
                    $sujet = utf8_decode($sujet);
                    //echo "Envoi du message à " . $_to . "<br>";
        
                    $entete = "From:" . MAIL_NAME_CUSTOMER . " <" . MAIL_CUSTOMER . ">\n";
                    $entete .= "MIME-version: 1.0\n";
                    $entete .= "Content-type: text/html; charset= utf-8\n";
                    $entete .= "Bcc: ". MAIL_BCC ."\n";
        
                    $corps = "";
                    $corps .= "Bonjour,<br>";
                    $corps .= "Votre mot de passe est :  ". $password[0][ "password" ]. "<br>";
                    $corps .= "Identifiez-vous sur : http://". $_SERVER['HTTP_HOST'] . "/adresse.php<br>";
                    $corps = utf8_encode( $corps );
                    //echo $corps . "<br>";
                    
                    // Envoi des identifiants par mail
                    mail($_to, $sujet, stripslashes($corps), $entete);
        
                    error_log(date("Y-m-d H:i:s") ." : Password envoyé ! \n", 3, "../log/spy.log");
                    
                    header('Location: /adresse.php?error=mailsent');
                } else {
                    header('Location: /adresse.php?error=nomail');
                }
        
                //print_r($password[0]['password']);exit;
                
            } catch (Exception $e) {
                echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
                $contact = null;
                exit();
            }
        }
    }
    
    
    
} elseif (! empty($_GET)) { // GET GET GET
    if ($_GET['reference'] == 'contactFront') { // supprimer
        $contact = new ContactCommande();
        if ($_GET['action'] == 'delete') {
            try {
                $result = $contact->contactDelete($_GET['id']);
                $contact = null;
                header('Location: /admin/contact-list.php');
            } catch (Exception $e) {
                echo 'Erreur contactez votre administrateur <br> :', $e->getMessage(), "\n";
                $contact = null;
                exit();
            }
        }
    }
} else {
    header('Location: /admin/');
}

?>