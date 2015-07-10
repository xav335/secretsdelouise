<?php
require_once ("StorageManager.php");

class ContactCommande extends StorageManager
{

    public function __construct()
    {}

    public function contactGet($id, $offset, $count)
    {
        $this->dbConnect();
        if (! isset($id)) {
            if (isset($offset) && isset($count)) {
                $sql = "SELECT * FROM `contact_commande` ORDER BY `email` ASC LIMIT " . $offset . "," . $count . ";";
            } else {
                $sql = "SELECT * FROM `contact_commande` ORDER BY `email`;";
            }
        } else {
            $sql = "SELECT * FROM `contact_commande` WHERE id=" . $id;
        }
        // print_r($sql);
        $new_array = null;
        $result = mysqli_query($this->mysqli, $sql);
        if (! $result) {
            throw new Exception('Erreur Mysql contactGet sql = : ' . $sql);
        }
        while (($row = mysqli_fetch_assoc($result)) != false) {
            // address recovery
            if (! empty($row['id_facturation'])) {
                $row['facturation'] = $this->adresseGet($row['id_facturation']);
            }
            if (! empty($row['id_livraison'])) {
                $row['livraison'] = $this->adresseGet($row['id_livraison']);
            }
            $new_array[] = $row;
        }
        // print_r($new_array);exit;
        
        $this->dbDisConnect();
        return $new_array;
    }
    
    public function contactGetByEmail($email)
    {
        $this->dbConnect();
        $sql = "SELECT * FROM `contact` WHERE email='" . $email ."';";
        // print_r($sql);
        $new_array = null;
        $result = mysqli_query($this->mysqli, $sql);
        if (! $result) {
            throw new Exception('Erreur Mysql contactGetByEmail sql = : ' . $sql);
        }
        while (($row = mysqli_fetch_assoc($result)) != false) {
            $new_array[] = $row;
        }
         //print_r($new_array);exit;
    
        $this->dbDisConnect();
        return $new_array;
    }

    public function contactGetByIdent($value)
    {
        $this->dbConnect();
        $sql = "SELECT * FROM `contact_commande` WHERE email='" . $this->mysqli->real_escape_string($value['email']) . "' AND password='" . $this->mysqli->real_escape_string($value['password']) . "';";
        // print_r($sql);
        $new_array = null;
        $result = mysqli_query($this->mysqli, $sql);
        if (! $result) {
            throw new Exception('Erreur Mysql contactGetByIdent sql = : ' . $sql);
        }
        while (($row = mysqli_fetch_assoc($result)) != false) {
            // address recovery
            if (! empty($row['id_facturation'])) {
                $row['facturation'] = $this->adresseGet($row['id_facturation']);
            }
            if (! empty($row['id_livraison'])) {
                $row['livraison'] = $this->adresseGet($row['id_livraison']);
            }
            $new_array[] = $row;
        }
        // print_r($new_array);exit;
        
        $this->dbDisConnect();
        return $new_array;
    }

    public function contactGetPassByEmail($email)
    {
        $this->dbConnect();
        $sql = "SELECT password FROM `contact_commande` WHERE email = '" . $email . "';";
        //print_r($sql);exit;
        $new_array = null;
        $result = mysqli_query($this->mysqli, $sql);
        if (! $result) {
            throw new Exception('Erreur Mysql contactGetPassByEmail sql = : ' . $sql);
        }
        while (($row = mysqli_fetch_assoc($result)) != false) {
            $new_array[] = $row;
        }
        
        $this->dbDisConnect();
        return $new_array;
    }
    
    
    public function contactAddresseGet($id_adresse)
    {
        $this->dbConnect();
        $new_array = $this->adresseGet($id_adresse);
        //print_r($new_array);exit;
    
        $this->dbDisConnect();
        return $new_array;
    }

    protected function adresseGet($id)
    {
        $sql = "SELECT * FROM `adresse` WHERE id_adresse = " . $id . ";";
        // print_r($sql);
        $new_array = null;
        $result = mysqli_query($this->mysqli, $sql);
        if (! $result) {
            throw new Exception('Erreur Mysql adresseGet sql = : ' . $sql);
        }
        while (($row = mysqli_fetch_assoc($result)) != false) {
            $new_array[] = $row;
        }
        
        return $new_array;
    }

    

    public function contactNumberGet()
    {
        $this->dbConnect();
        try {
            $sql = "SELECT count(*) as nb FROM `contact_commande`;";
            // print_r($sql);
            $new_array = null;
            $result = mysqli_query($this->mysqli, $sql);
            while (($row = mysqli_fetch_assoc($result)) != false) {
                $new_array[] = $row;
            }
            $this->dbDisConnect();
            return $new_array[0]['nb'];
        } catch (Exception $e) {
            throw new Exception("Erreur Mysql contactGet " . $e->getMessage());
            return "errrrrrrooooOOor";
        }
    }

    public function contactAdd($value)
    {
        // print_r($value);
        // exit();
        $this->dbConnect();
        $this->begin();
        try {
            
            $sql = "INSERT INTO  .`contact_commande`
						(`email`,`password`)
						VALUES (
						'" . addslashes($value['email']) . "',
						'" . randomChar(5) . "'
					);";
            // error_log(date("Y-m-d H:i:s") ." : ".$sql."\n", 3, "../log/spy.log");
            $result = mysqli_query($this->mysqli, $sql);
            
            if (! $result) {
                throw new Exception($sql);
            }
            $id_record = mysqli_insert_id($this->mysqli);
            $this->commit();
        } catch (Exception $e) {
            $this->rollback();
            throw new Exception("Erreur Mysql contactAdd " . $e->getMessage());
            return "errrrrrrooooOOor";
        }
        $this->dbDisConnect();
        return $id_record;
    }

    public function contactModify($value)
    {
        // print_r($value);
        // exit();
        $this->dbConnect();
        $this->begin();
        try {
            
            $sql = "UPDATE  .`contact` SET
					`email`='" . addslashes($value['email']) . "',
					`password`='" . addslashes($value['password']) . "'
					WHERE `id`=" . $value['id'] . ";";
            $result = mysqli_query($this->mysqli, $sql);
            
            if (! $result) {
                throw new Exception($sql);
            }
            
            $this->commit();
        } catch (Exception $e) {
            $this->rollback();
            throw new Exception("Erreur Mysql " . $e->getMessage());
            return "errrrrrrooooOOor";
        }
        
        $this->dbDisConnect();
    }



    public function contactAdressesAdd($value)
    {
        //print_r($value);exit();
        $this->dbConnect();
        $this->begin();
        try {
            // Vérification email existe déjà
            
            $nom = $value['nom'];
            $prenom = $value['prenom'];
            $email = $value['email'];
            $tel = $value['tel'];
            
            // Création adresse de facturation
            $value['livraison'] = 0;
            $id_facturation = $this->adresseAdd($value);
            
            // Création adresse de livraison
            if ($value['livraisonident'] != 'on'){
                $value['nom'] = $value['nomliv'];
                $value['prenom'] = $value['prenomliv'];
                $value['adresse'] = $value['adresseliv'];
                $value['cp'] = $value['cpliv'];
                $value['tel'] = $value['telliv'];
                $value['ville'] = $value['villeliv'];
                $value['email'] = $value['emailliv'];
            }
            $value['livraison'] = 1;
            $id_livraison = $this->adresseAdd($value);
            
            // Création du contact
            $value['nom'] = $nom;
            $value['prenom'] = $prenom;
            $value['email'] = $email;
            $value['tel'] = $tel;
            $value['message'] = '';
            $value['id_facturation'] = $id_facturation;
            $value['id_livraison'] = $id_livraison;
            
            $id_contact = $this->contactAddressAdd($value);
        } catch (Exception $e) {
            $this->rollback();
            throw new Exception("Erreur Mysql contactAdressesAdd " . $e->getMessage());
            return "errrrrrrooooOOor";
        }
        
        $this->commit();
        $this->dbDisConnect();
        return $id_contact;
    }

    public function contactAdressesModif($value)
    {
        //print_r($value);exit();
        $this->dbConnect();
        $this->begin();
        try {
            
            $nom = $value['nom'];
            $prenom = $value['prenom'];
            $email = $value['email'];
            $tel = $value['tel'];
            
            // Création adresse de facturation
            $value['livraison'] = 0;
            $id_facturation = $this->adresseAdd($value);
            
            // Création adresse de livraison
            if ($value['livraisonident'] != 'on'){
                $value['nom'] = $value['nomliv'];
                $value['prenom'] = $value['prenomliv'];
                $value['adresse'] = $value['adresseliv'];
                $value['cp'] = $value['cpliv'];
                $value['tel'] = $value['telliv'];
                $value['ville'] = $value['villeliv'];
                $value['email'] = $value['emailliv'];
            }    
            $value['livraison'] = 1;
            
            $id_livraison = $this->adresseAdd($value);
            
            // Création du contact
            $value['nom'] = $nom;
            $value['prenom'] = $prenom;
            $value['email'] = $email;
            $value['tel'] = $tel;
            $value['message'] = '';
            $value['id_facturation'] = $id_facturation;
            $value['id_livraison'] = $id_livraison;
            
            $id_contact = $this->contactAddressModif($value);
        } catch (Exception $e) {
            $this->rollback();
            throw new Exception("Erreur Mysql contactAdressesAdd " . $e->getMessage());
            return "errrrrrrooooOOor";
        }
        
        $this->commit();
        $this->dbDisConnect();
    }

    protected function adresseAdd($value)
    {
        $sql = "INSERT INTO  `adresse`
					(`nom`,`prenom`, `email`,`tel`,`adresse`,`cp`,`ville`,`message`,livraison)
					VALUES (
					'" . addslashes($value['nom']) . "',
					'" . addslashes($value['prenom']) . "',
					'" . addslashes($value['email']) . "',
					'" . addslashes($value['tel']) . "',
					'" . addslashes($value['adresse']) . "',
					'" . addslashes($value['cp']) . "',
					'" . addslashes($value['ville']) . "',
					'" . addslashes($value['message']) . "',
					" . $value['livraison'] . "
				);";
        //print_r($sql);exit;
        $result = mysqli_query($this->mysqli, $sql);
        
        if (! $result) {
            $this->rollback();
            throw new Exception('Erreur Mysql adresseAdd sql = : ' . $sql);
        }
        $id_record = mysqli_insert_id($this->mysqli);
        
        return $id_record;
    }
    
    public function adresseModify($value)
    {
        // print_r($value);
        // exit();
        $this->dbConnect();
        $this->begin();
        try {
    
            $sql = "UPDATE  `adresse` SET
					`nom`='" . addslashes($value['nom']) . "',
					`email`='" . addslashes($value['email']) . "',
					`prenom`='" . addslashes($value['prenom']) . "',
					`cp`='" . addslashes($value['cp']) . "',
					`ville`='" . addslashes($value['ville']) . "',
					`adresse`='" . addslashes($value['adresse']) . "'
					WHERE `id_adresse`=" . $value['id'] . ";";
            $result = mysqli_query($this->mysqli, $sql);
    
            if (! $result) {
                throw new Exception($sql);
            }
    
            $this->commit();
        } catch (Exception $e) {
            $this->rollback();
            throw new Exception("Erreur Mysql adresseModify " . $e->getMessage());
            return "errrrrrrooooOOor";
        }
    
        $this->dbDisConnect();
    }

    protected function contactAddressAdd($value)
    {
        $sql = "INSERT INTO  .`contact_commande`
					(`email`,`password`,`id_facturation`,`id_livraison`)
					VALUES (
					'" . addslashes($value['email']) . "',
					'" . addslashes($value['password']) . "',
					" . $value['id_facturation'] . ",
					" . $value['id_livraison'] . "
				);";
        $result = mysqli_query($this->mysqli, $sql);
        
        if (! $result) {
            throw new Exception($sql);
        }
        $id_record = mysqli_insert_id($this->mysqli);
        
        return $id_record;
    }

    protected function contactAddressModif($value)
    {
        
        $sql = "UPDATE  `contact_commande` SET
					`email`='" . addslashes($value['email']) . "',
					`id_facturation`=" . $value['id_facturation'] . ",
					`id_livraison`=" . $value['id_livraison'] . " 
					 WHERE `id`=" . $value['id_contact'] . ";";
        $result = mysqli_query($this->mysqli, $sql);
        
        if (! $result) {
            throw new Exception($sql);
        }
        
    }
}