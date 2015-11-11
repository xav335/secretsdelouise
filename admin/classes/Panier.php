<?php
require_once("StorageManager.php");

class Panier extends StorageManager {
	var $id=0;
	var $session='';
	var $date_ajout='';
	var $id_contact=0;
	var $id_facturation=0;
	var $id_livraison=0;
	var $colissimo='';
	var $mode_paiement=0;
	var $statut_paiement=0;
	var $statut_commande=0;
	var $stock_traite='0';
	var $logpayment='';
	var $transaction_id='';
	var $panier='';
	
	public function __construct(){
		
	}
	
	public function load( $id, $debug=false ){
		$this->dbConnect();
		
		$sql = "SELECT commande.* FROM commande
			WHERE commande.id = '" . $id . "';" ;
  		
  		if ( $debug ) echo $sql . "<br>";
  	  
		$result = mysqli_query( $this->mysqli, $sql );
		if (!$result) {
			throw new Exception( 'Erreur Mysql Panier.getCommandes sql = : ' . $sql );
			return false;
		}
		
		$data = mysqli_fetch_assoc( $result );
		if ( empty( $data ) ) return false;
		
		$this->id = $data["id"];
		$this->session = $data["session"];
		$this->date_ajout = $data["date_ajout"];
		$this->id_contact = $data["id_contact"];
		$this->id_facturation = $data["id_facturation"];
		$this->id_livraison = $data["id_livraison"];
		$this->colissimo = $data["colissimo"];
		$this->mode_paiement = $data["mode_paiement"];
		$this->statut_paiement = $data["statut_paiement"];
		$this->statut_commande = $data["statut_commande"];
		$this->stock_traite = $data["stock_traite"];
		$this->logpayment = $data["logpayment"];
		$this->transaction_id = $data["transaction_id"];
		$this->panier = $data["panier"];
		
		$this->dbDisConnect();
		return true;
	}
	
	public function loadByTransactionID( $transaction_id, $debug=false ){
		$this->dbConnect();
		
		$sql = "SELECT commande.* FROM commande
			WHERE commande.transaction_id = '" . $transaction_id . "';" ;
  		
  		if ( $debug ) echo $sql . "<br>";
  	  
		$new_array = null;
		$result = mysqli_query( $this->mysqli, $sql );
		if (!$result) {
			throw new Exception( 'Erreur Mysql Panier.getCommandes sql = : ' . $sql );
		}
		while( ( $row = mysqli_fetch_assoc( $result ) ) != false ){
			$new_array[] = $row;
		}
		
		$this->dbDisConnect();
		return $new_array;
	}
	
	public function ajoutPanier($value){
		//print_r($value);exit();
		//$product = unserialize(stripslashes($value['product']));
		//print_r($product);exit;
		
		$this->dbConnect();
		$this->begin();
		
		$nbRef = $this->nbRefBySession($value);
		//print_r($nbRef);exit();
		
		if (empty($nbRef)) {
			
			$sql = "INSERT INTO `panier`
				(`session`,`id_sousref`, `quantite`, `serialproduct`)
				VALUES (
				'". $value['session'] ."',
				". $value['idsousref'] .",
				". $value['quantite'] .",
				'". addslashes($value['product']) ."'
				);";
			$result = mysqli_query($this->mysqli,$sql);
			
			if (!$result) {
				$this->rollback();
				throw new Exception('Erreur Mysql ajoutPanier sql = : '.$sql);
			}
			$id_record = mysqli_insert_id($this->mysqli);
		} 
		else {
			$nb = $nbRef['quantite']+1;
			$sql = "UPDATE `panier` SET
				`quantite`=". $nb."
				WHERE `id_sousref`=". $value['idsousref'] ." AND session = '". $value['session'] ."';";
			
			//print_r($sql);exit();
			$result = mysqli_query($this->mysqli,$sql);
			
			if (!$result) {
				$this->rollback();
				throw new Exception('Erreur Mysql productsousrefModify sql = : '.$sql);
			}
		}  
		
		$this->commit();
		
		$this->dbDisConnect();
		return $id_record;
	}
	
	public function nbRefBySession($value){
	  //print_r($value);exit();
		$sql = "SELECT quantite
					FROM panier
					WHERE session = '". $value['session'] ."' AND id_sousref = ". $value['idsousref'] .";";
		//print_r($sql);exit();
		$new_array = null;
		$result = mysqli_query($this->mysqli,$sql);
		if (!$result) {
			throw new Exception('Erreur Mysql nbSousRefBySession sql = : '.$sql);
		}
		while(($row = mysqli_fetch_assoc($result)) != false){
			$new_array[] = $row;
		}
		return $new_array[0];
	}
	
	public function panierGet($session){
	  $this->dbConnect();
	  //TODO: refacto : prendre les info produit dans le serializeproduct de la table Panier
	  
    $sql = "SELECT panier.id as id_panier,panier.quantite,product.label,product.prix,
          product.id,product.image1,size.label as size, color.label as color,product.shipping,
          product_sousref.id as id_sousref, product.reference, product_sousref.sousref 
				FROM panier
				INNER JOIN product_sousref ON product_sousref.id = panier.id_sousref
        INNER JOIN color ON color.id = product_sousref.id_color
        INNER JOIN size ON size.id = product_sousref.id_size
				INNER JOIN product ON product_sousref.id_product = product.id
				WHERE panier.session='". $session ."';" ;
    //print_r($sql);
    $new_array = null;
    $result = mysqli_query($this->mysqli,$sql);
    if (!$result) {
      throw new Exception('Erreur Mysql panierGet sql = : '.$sql);
    }
    while(($row = mysqli_fetch_assoc($result)) != false){
      $new_array[] = $row;
    }

    $this->dbDisConnect();
    return $new_array;
	 
	}
	
	public function panierCommandeGet($session){
	  $this->dbConnect();
	   
	  $sql = "SELECT *
				FROM panier
				WHERE panier.session='". $session ."';" ;
	  //print_r($sql);
	  $new_array = null;
	  $result = mysqli_query($this->mysqli,$sql);
	  if (!$result) {
	    throw new Exception('Erreur Mysql panierGet sql = : '.$sql);
	  }
	  while(($row = mysqli_fetch_assoc($result)) != false){
	    $new_array[] = $row;
	  }
	
	  $this->dbDisConnect();
	  return $new_array;
	   
	}
	
	public function getAllCommandes( $statut_commande, $all=false, $debug=false ){
		$this->dbConnect();
		$new_array = null;
		
		$sql = "SELECT * FROM commande";
		$sql .= " WHERE id > 0 ";
		
		if ( !empty( $statut_commande ) ) $sql.= " AND commande.statut_commande='" . $statut_commande . "' " ;
		else {
			
			// ---- Toutes les commandes ----------- //
			if ( $all ) {
				$sql .= " AND ( commande.statut_commande > '0' " ;
				$sql .= " OR transaction_id != '' ) ";
			}
			
			
			// ---- Commandes NON abouties --------- //
			else {
				$sql .= " AND commande.statut_commande = '0' " ;
				$sql .= " AND transaction_id = '' ";
			}
		}
		
		$sql.= "ORDER BY commande.date_ajout DESC;";
		if ( $debug ) echo $sql . "<br>";
		$result = mysqli_query( $this->mysqli, $sql );
		if ( !$result ) {
			throw new Exception('Erreur Mysql Panier.getAllCommandes sql = : '.$sql);
		}
		while( ( $row = mysqli_fetch_assoc( $result)) != false){
			$new_array[] = $row;
		}
		
		$this->dbDisConnect();
		return $new_array;
	}
	
	public function getCommandesByContact( $id_contact, $debug=false ){
		$this->dbConnect();
		$new_array = null;
		
		$sql = "SELECT * FROM commande";
		$sql .= " WHERE id > 0 ";
		$sql .= " AND commande.id_contact = " . $id_contact;
		$sql .= " AND ( commande.statut_commande >= '1' OR transaction_id != '' )" ;
		$sql .= " ORDER BY commande.date_ajout DESC;";
	
		if ( $debug ) echo $sql . "<br>";
		$result = mysqli_query($this->mysqli,$sql);
		if (!$result) {
			throw new Exception('Erreur Mysql Panier.getCommandesByContact sql = : '.$sql);
		}
		while(($row = mysqli_fetch_assoc($result)) != false){
			$new_array[] = $row;
		}
		
		$this->dbDisConnect();
		return $new_array;
	}
	
	public function getCommandes( $id_commande, $debug=false ){
		$this->dbConnect();
		
		if ( empty( $id_commande ) ) {
			$sql = "SELECT *, commande.id as id_commande
				FROM commande
				INNER JOIN panier ON panier.session = commande.session
				ORDER BY commande.date_ajout DESC;";
				//WHERE panier.session='". $session ."';" ;
		} 
		else {
			/*$sql = "SELECT *, commande.id as id_commande
				FROM commande
				INNER JOIN panier ON panier.session = commande.session
				WHERE commande.id=" . $id_commande . ";" ;*/
			
			$sql = "SELECT *, commande.id as id_commande FROM commande
				WHERE commande.id=" . $id_commande . ";" ;
		}   
  		
  		if ( $debug ) echo $sql . "<br>";
  	  
		$new_array = null;
		$result = mysqli_query( $this->mysqli, $sql );
		if (!$result) {
			throw new Exception( 'Erreur Mysql Panier.getCommandes sql = : ' . $sql );
		}
		while( ( $row = mysqli_fetch_assoc( $result ) ) != false ){
			$new_array[] = $row;
		}
		
		$this->dbDisConnect();
		return $new_array;
	}
	
	public function productDelete($id_panier){
	
	  $this->dbConnect();
	  $this->begin();
	
	
	  $sql = "DELETE FROM .`panier`
				WHERE `id`=". $id_panier .";";
	  $result = mysqli_query($this->mysqli,$sql);
	
	  	
	  if (!$result) {
	    $this->rollback();
	    throw new Exception('Erreur Mysql productDelete sql = : '.$sql);
	  }
	
	  $this->commit();
	  $this->dbDisConnect();
	}
	
	public function modifQuantitePanier($id_panier, $quantite){
	  //print_r($value);exit();
	  $this->dbConnect();
	  $this->begin();
	  
	  $sql = "UPDATE `panier` SET
				`quantite`=". $quantite ."
				WHERE `id`=". $id_panier .";";
	  //print_r($sql);exit();
	  $result = mysqli_query($this->mysqli,$sql);
	  	
	  if (!$result) {
	    $this->rollback();
	    throw new Exception('Erreur Mysql modifQuantitePanier sql = : '.$sql);
	  }
	
	  $this->commit();
	  $this->dbDisConnect();
	}
	
	public function quantiteArticlesPanier($session){
	  //print_r($value);exit();
	  $this->dbConnect();

	  $sql = "SELECT count(id) as quantite
					FROM panier
					WHERE session = '". $session ."';";
	  //print_r($sql);exit();
	  $new_array = null;
	  $result = mysqli_query($this->mysqli,$sql);
	  if (!$result) {
	    throw new Exception('Erreur Mysql quantiteArticlesPanier sql = : '.$sql);
	  }
	  while(($row = mysqli_fetch_assoc($result)) != false){
	    $new_array[] = $row;
	  }
	  $this->dbDisConnect();
	  return $new_array[0];
	}
	
	public function ajoutCommande( $session, $id_contact, $id_facturation, $id_livraison, $panierlst, $debug=false ){
		//print_r($panierlst);exit();
		
		$this->dbConnect();
		$this->begin();
		
		if ( empty( $nbRef ) ) {
			$sql = "INSERT INTO `commande`
				(`session`,`id_contact`,`id_facturation`,`id_livraison`, `panier`)
				VALUES (
				'". $session ."',
				". $id_contact .",
				". $id_facturation .",
				". $id_livraison .",
				'". addslashes( $panierlst ) ."'  
				);";
			
			if ( $debug ) echo $sql . "<b>";
			else {
				$result = mysqli_query($this->mysqli,$sql);
				
				if ( !$result ) {
					$this->rollback();
					throw new Exception('Erreur Mysql ajoutPanier sql = : '.$sql);
				}
				$id_record = mysqli_insert_id($this->mysqli);
			}
		} 
		$this->commit();
		
		$this->dbDisConnect();
		return $id_record;
	}
	
	public function valideCommande( $id_commande, $logpayment, $transaction_id, $debug=false ){
		//print_r($value);exit();
		$this->dbConnect();
		$this->begin();
		
		$sql = "UPDATE `commande` SET
			`logpayment`= '". $logpayment ."',
			`transaction_id`= '". $transaction_id ."'
			WHERE `id`=". $id_commande .";";
		
		if ( $debug ) echo $sql . "<br>";
		else {
			$result = mysqli_query( $this->mysqli, $sql );
		
			if ( !$result ) {
				$this->rollback();
				throw new Exception('Erreur Mysql valideCommande sql = : '.$sql);
			}
			
			$this->commit();
			$this->dbDisConnect();
		}
	}
	
	public function updateStatutCommande( $id_commande, $statut_paiement, $statut_commande, $colissimo, $debug=false ){
		$this->dbConnect();
		$this->begin();
		
		$sql = "UPDATE `commande` SET
			`statut_commande`= $statut_commande,
			`statut_paiement`= $statut_paiement,
			`colissimo`='". addslashes( $colissimo ) ."'
			WHERE `id`=". $id_commande .";";
		
		if ( $debug ) echo $sql . "<br>";
		else {
			$result = mysqli_query($this->mysqli,$sql);
		
			if ( !$result ) {
				$this->rollback();
				throw new Exception('Erreur Mysql updateStatutCommande sql = : '.$sql);
			}
			
			$this->commit();
			$this->dbDisConnect();
		}
	}
	
	function setChamp( $champ, $valeur=0, $debug=false ) {
		$this->dbConnect();
		$this->begin();
		
		$requete = "UPDATE `commande` SET";
		$requete .= " " . $champ . " = '" . $this->traiter_champ( $valeur ) . "'";
		$requete .= " WHERE id = " . $this->id;
		if ( $debug ) echo $requete . "<br>";
		else {
			$result = mysqli_query( $this->mysqli, $requete );
		
			if ( !$result ) {
				$this->rollback();
				throw new Exception( 'Erreur Mysql valideCommande sql = : ' . $requete );
			}
			
			$this->commit();
			$this->dbDisConnect();
		}
	}
	
	function traiter_champ( $texte='' ) {
		$texte = trim( $texte );
		$texte = addslashes( $texte );
		$texte = utf8_decode( $texte );
		
		return $texte;
	}
	
}