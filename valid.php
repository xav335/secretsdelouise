<?php require_once 'inc/inc.config.php';?>
<?php
require 'admin/classes/Panier.php';
require 'admin/classes/utils.php';

$panier = new Panier();
try {

    if (!empty($_POST)){
        $id_commande = substr( strstr($_POST['item_name'], '_') ,1);
        
        $panier->valideCommande($id_commande,serialize($_POST));
        
        //error_log(date("Y-m-d H:i:s") ." : ". $_POST['item_name'] ."\n", 3, "log/spy.log");
        //error_log(date("Y-m-d H:i:s") ." : ". $_POST['payer_status'] ."\n", 3, "log/spy.log");
        
        foreach ($_POST as $key => $value) {
            //$value = urlencode(stripslashes($value));
            $req = "$key = $value";
            error_log(date("Y-m-d H:i:s") ." : ". $req ."\n", 3, "log/spy.log");
        }
          
    } else {
        error_log(date("Y-m-d H:i:s") ." : réponse de Paypal sans Post ... \n", 3, "log/spy.log");
        echo "rien dans le Post";
    }
} catch (Exception $e) {
    error_log(date("Y-m-d H:i:s") ." : ". $e->getMessage() ." \n", 3, "log/spy.log");
    echo 'Valid.php : Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
}    