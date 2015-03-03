<?php
require '../admin/classes/Contact.php';
require '../admin/classes/utils.php';
session_start();

$contact = new Contact();

error_log(date("Y-m-d H:i:s") ." : ". $_POST['action'] ."\n", 3, "../log/spy.log");
error_log(date("Y-m-d H:i:s") ." : ". $_POST['name'] ."\n", 3, "../log/spy.log");
error_log(date("Y-m-d H:i:s") ." : ". $_POST['firstname'] ."\n", 3, "../log/spy.log");
error_log(date("Y-m-d H:i:s") ." : ". $_POST['email'] ."\n", 3, "../log/spy.log");
error_log(date("Y-m-d H:i:s") ." : ". $_POST['tel'] ."\n", 3, "../log/spy.log");
error_log(date("Y-m-d H:i:s") ." : ". $_POST['sujet'] ."\n", 3, "../log/spy.log");
error_log(date("Y-m-d H:i:s") ." : ". $_POST['message'] ."\n", 3, "../log/spy.log");
error_log(date("Y-m-d H:i:s") ." : ". $_POST['newsletter'] ."\n", 3, "../log/spy.log");

if ($_POST["action"] == "sendMail") {
	
	try {
		$_POST['fromcontact']='on';
		$contact->contactAdd($_POST);
		$contact = null;
		
	} catch (Exception $e) {
		error_log(date("Y-m-d H:i:s") ." Erreur: ". $e->getMessage() ."\n", 3, "../log/spy.log");
		$contact = null;
		exit();
	}

	//$_to = "contact@alleedubio.fr";
	$_to = "fjavi.gonzalez@gmail.com";
	$sujet = "Allée du bio - Contact Site";
	//echo "Envoi du message à " . $_to . "<br>";
		
	$entete = "From:AlleeDuBio <contact@alleedubio.fr>\n";
	$entete .= "MIME-version: 1.0\n";
	$entete .= "Content-type: text/html; charset= iso-8859-1\n";
	$entete .= "Bcc: xav335@hotmail.com\n";
		
	$corps = "";
	$corps .= "Bonjour,<br>";
	$corps .= "Sujet : " . $_POST["sujet"] ."<br>";
	$corps .= "Nv message de :<br>" . $_POST["name"] . " ". $_POST["firstname"]  . " (" . $_POST["email"] . ")<br>";
	$corps .= "Tel : ". $_POST["tel"] ."<br>";
	$corps .= "<b>Message :</b><br>";
	$corps .= $_POST["message"] . "<br><br>";
	$corps = utf8_decode( $corps );
	//echo $corps . "<br>";
		
	// Envoi des identifiants par mail
	mail($_to, $sujet, stripslashes($corps), $entete);
		
	error_log(date("Y-m-d H:i:s") ." : Message envoyé ! \n", 3, "../log/spy.log");
} else {
	error_log(date("Y-m-d H:i:s") ." : Message NON envoyé ! \n", 3, "../log/spy.log");
}
error_log(date("Y-m-d H:i:s") ." xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  \n", 3, "../log/spy.log");
?>