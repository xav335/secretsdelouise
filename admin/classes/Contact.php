<?php
require_once ("StorageManager.php");

class Contact extends StorageManager
{

    public function __construct()
    {}

    public function contactGet($id, $offset, $count)
    {
        $this->dbConnect();
        if (! isset($id)) {
            if (isset($offset) && isset($count)) {
                $sql = "SELECT * FROM `contact` ORDER BY `name` ASC LIMIT " . $offset . "," . $count . ";";
            } else {
                $sql = "SELECT * FROM `contact` ORDER BY `name`;";
            }
        } else {
            $sql = "SELECT * FROM `contact` WHERE id=" . $id;
        }
        // print_r($sql);
        $new_array = null;
        $result = mysqli_query($this->mysqli, $sql);
        if (! $result) {
            throw new Exception('Erreur Mysql contactGet sql = : ' . $sql);
        }
        while (($row = mysqli_fetch_assoc($result)) != false) {
            $new_array[] = $row;
        }
        // print_r($new_array);exit;
        
        $this->dbDisConnect();
        return $new_array;
    }
    

    public function contactGetForNewsletter()
    {
        $this->dbConnect();
        try {
            $sql = "SELECT DISTINCT email FROM contact WHERE newsletter=1 AND email NOT IN (SELECT email FROM contact WHERE newsletter=0);";
            // print_r($sql);exit();
            $new_array = null;
            $result = mysqli_query($this->mysqli, $sql);
            while (($row = mysqli_fetch_assoc($result)) != false) {
                $new_array[] = $row;
            }
            $this->dbDisConnect();
            return $new_array;
        } catch (Exception $e) {
            throw new Exception("Erreur Mysql contactGet " . $e->getMessage());
            return "errrrrrrooooOOor";
        }
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

    public function contactNumberGet()
    {
        $this->dbConnect();
        try {
            $sql = "SELECT count(*) as nb FROM `contact`;";
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
        //print_r($value);exit;
        $this->dbConnect();
        $this->begin();
        try {
            (! empty($value['newsletter']) && $value['newsletter'] == 'on') ? $newsletter = 1 : $newsletter = 0;
            (! empty($value['fromgoldbook']) && $value['fromgoldbook'] == 'on') ? $fromgoldbook = 1 : $fromgoldbook = 0;
            (! empty($value['fromcontact']) && $value['fromcontact'] == 'on') ? $fromcontact = 1 : $fromcontact = 0;
            
            $sql = "INSERT INTO  .`contact`
						(`name`, `email`, `firstname`,`newsletter`,`fromgoldbook`,`fromcontact`)
						VALUES (
						'" . addslashes($value['name']) . "',
						'" . addslashes($value['email']) . "',
						'" . addslashes($value['firstname']) . "',
						" . $newsletter . ",
						" . $fromgoldbook . ",
						" . $fromcontact . "
					);";
            
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
            (! empty($value['newsletter']) && $value['newsletter'] == 'on') ? $newsletter = 1 : $newsletter = 0;
            (! empty($value['fromgoldbook']) && $value['fromgoldbook'] == 'on') ? $fromgoldbook = 1 : $fromgoldbook = 0;
            (! empty($value['fromcontact']) && $value['fromcontact'] == 'on') ? $fromcontact = 1 : $fromcontact = 0;
            
            $sql = "UPDATE  .`contact` SET
					`name`='" . addslashes($value['name']) . "',
					`email`='" . addslashes($value['email']) . "',
					`firstname`='" . addslashes($value['firstname']) . "',
					`newsletter`=" . $newsletter . ",
					`fromgoldbook`=" . $fromgoldbook . ",
					`fromcontact`=" . $fromcontact . "
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

    public function contactUnsubscribeNewsletter($email, $message)
    {
        // print_r($value);
        // exit();
        $this->dbConnect();
        $this->begin();
        try {
            $sql = "UPDATE  contact SET
					`newsletter`= 0,
					`message`='" . addslashes($message) . "'
					WHERE `email`='" . $email . "';";
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

    public function contactDelete($value)
    {
        // print_r($value);
        // exit();
        $this->dbConnect();
        $this->begin();
        try {
            $sql = "DELETE FROM  .`contact` WHERE `id`=" . $value . ";";
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

    public function contactExportCSV()
    {
        // print_r($value);
        // exit();
        $date = date("Ymd-H:i:s");
        $value = $_SERVER["DOCUMENT_ROOT"] . "/admin/FileUpload/server/php/files/export-" . $date . ".csv";
        $this->dbConnect();
        $this->begin();
        try {
            // Ne pas oublier d'ajouter les prilèges FILE sur le users de la DB
            $sql = "SELECT firstname,name,email,newsletter INTO OUTFILE '" . $value . "'
				FIELDS
					TERMINATED BY ';'
					ENCLOSED BY '\\\"'
					ESCAPED BY '\\\\'
				LINES
					STARTING BY ''
					TERMINATED BY '\\r'
				FROM contact;";
            echo $sql;
            
            $result = mysqli_query($this->mysqli, $sql);
            if (! $result) {
                throw new Exception("eroror: ". $sql);
            }
            $this->commit();
            return $result;
        } catch (Exception $e) {
            $this->rollback();
            throw new Exception("Erreur Mysql contactImportCSV" . $e->getMessage());
            return "errrrrrrooooOOor";
        }
        
        $this->dbDisConnect();
    }

    public function contactImportCSV($value)
    {
        // print_r($value);
        // exit();
        $this->dbConnect();
        $this->begin();
        try {
            $this->contactDeleteALL();
            // Ne pas oublier d'ajouter les prilèges FILE sur le users de la DB
            $sql = "LOAD DATA INFILE '" . $value . "'
	          INTO TABLE contact
			FIELDS
				TERMINATED BY ';'
				ENCLOSED BY '\\\"'
				ESCAPED BY '\\\\'
			LINES
				STARTING BY ''
				TERMINATED BY '\\r'
				(`firstname`,`name`,`email`,`newsletter`) ;";
            // echo $sql;
            
            $result = mysqli_query($this->mysqli, $sql) or die(mysql_error());
            if (! $result) {
                throw new Exception($sql);
            }
            $this->commit();
            return $result;
        } catch (Exception $e) {
            $this->rollback();
            throw new Exception("Erreur Mysql contactImportCSV" . $e->getMessage());
            return "errrrrrrooooOOor";
        }
        
        $this->dbDisConnect();
    }

    protected function contactDeleteALL()
    {
        try {
            $sql = "DELETE FROM  .`contact` WHERE fromcontact=0 AND fromgoldbook=0 ;";
            $result = mysqli_query($this->mysqli, $sql);
            
            if (! $result) {
                throw new Exception($sql);
            }
        } catch (Exception $e) {
            throw new Exception("Erreur Mysql " . $e->getMessage());
            return "errrrrrrooooOOor";
        }
    }

    

    
}
