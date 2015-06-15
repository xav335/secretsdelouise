<?php require_once 'inc/inc.config.php';?>
<?php
error_log(date("Y-m-d H:i:s") ." : ". $_POST['action'] ."\n", 3, "log/spy.log");

foreach ($_POST as $key => $value) {
    //$value = urlencode(stripslashes($value));
    $req = "$key = $value";
    error_log(date("Y-m-d H:i:s") ." : ". $req ."\n", 3, "log/spy.log");
}