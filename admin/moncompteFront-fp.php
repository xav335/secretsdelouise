<?php include_once '../inc/inc.config.php'; ?>
<?php
require 'classes/ContactCommande.php';
require 'classes/Contact.php';
session_start();

 //print_r($_POST);exit();
// Forms processing
if (! empty($_POST)) {
    
    // traitement des Contact
    if ($_POST['reference'] == 'contactFront') {
        $contact = new ContactCommande();
        $contactNewsletter = new Contact();
       
        
        if ($_POST['action'] == 'ident') { //Identification contact
            // print_r($_POST);exit;
            try {
                $result = $contact->contactGetByIdent($_POST);
                //print_r($result);exit;
               
                $contact = null;
                if (empty($result)){
                   header('Location: /moncompte.php?error=noident');
                } else {
                    $_SESSION['id_contact'] = $result[0]['id'];
                    header('Location: /moncompte.php');
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
                    $entete .= "Content-type: text/html; charset= iso-8859-1\n";
                    $entete .= "Bcc: ". MAIL_BCC ."\n";
        
                    $corps = "";
                    $corps .= "Bonjour,<br>";
                    $corps .= "Votre mot de passe est :  ". $password[0]['password']. "<br>";
                    $corps .= "Identifiez-vous sur : http://". $_SERVER['HTTP_HOST'] . "/adresse.php<br>";
                    $corps = utf8_decode( $corps );
                    //echo $corps . "<br>";exit;
                    // Envoi des identifiants par mail
                    mail($_to, $sujet, stripslashes($corps), $entete);
        
                    error_log(date("Y-m-d H:i:s") ." : Password envoyé ! \n", 3, "../log/spy.log");
                    
                    header('Location: /moncompte.php?error=mailsent');
                } else {
                    header('Location: /moncompte.php?error=nomail');
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