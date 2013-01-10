<?php

class order{

	var $host;
	var $user;
	var $pass;
	var $dbnm;
	var $db;
	
	function __construct($host, $user, $pass, $dbnm) {
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbnm = $dbnm;
		}
	
	function __connect(){
		$this->db = mysql_connect ($this->host, $this->user, $this->pass);
		mysql_select_db ($this->dbnm, $this->db);
		}
		
	function create_akt_sekolah($data){
		$sql = "
		INSERT INTO 
		`order` 
		(
		nama_order, 
		alamat_order, 
		email_order, 
		id_buku, 
		jumlah_order
		) 
		VALUES 
		(
		'.$data['nama'].', 
		'.$data['alamat'].', 
		'.$data['email'].', 
		'.$data['buku'].', 
		'.$data['jumlah'].'
		)
	";
	$result = mysql_query($sql);
	return $result;
	}
	
	function get_totalharga ($id_buku){
	$sql = "SELECT * FROM 
	buku 
	WHERE id_buku = '.$id_buku.'";
	
	$result = mysql_query($sql);
	return $result;
	}
	
	function kurangi_buku($buku){
	$sql = "
	SELECT(`buku`.`jumlah` - `order`.`jumlah_order`) FROM `buku`,`order` WHERE `buku`.`id_buku`='.$buku.' AND `order`.`id_buku`='.$buku.'";
	$result = mysql_query(sql);
	$row = mysql_fetch_array($result);
	return $row;	
	}
	
	function update_stok($stock_baru, $buku){
	$sql = "
	UPDATE buku SET jumlah = '.$stock_baru.' WHERE `buku`.`id_buku`='.$buku.'";
	$result = mysql_query($sql);
	return $result;
	}
	
}
