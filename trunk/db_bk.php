<?php

class db_bk{

	var $host;
	var $user;
	var $pass;
	var $dbnm;
	var $db;
	
	function __construct($host,$user,$pass,$dbnm){
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbnm = $dbnm;
	}
	
	function _connect(){
		$this->db = mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db($this->dbnm,$this->db);
	}
	
		function get_data(){
			
			$this->_connect();
			
			$sql = 'SELECT * FROM edit_profil ORDER BY username DESC';
			$result = mysql_query($sql);
			return $result;
		}
		
		function set_data($data){
		
			$this->_connect();
		
			$sql = '
				INSERT 
				INTO
				data_pengguna
				(
					nama,
					username,
					alamat
					no_telp,
					password,
					foto_profil,
					akun,
					tanggal_gabung
					
				)
				VALUES
				(
					"'.$data['nama'].'",
					"'.$data['username'].'",
					"'.$data['alamat'].'",
					"'.$data['notelp'].'",
					"'.$data['password'].'",
					"'.$data['foto_profil'].'",
					"'.$data['pilihan'].'",					
					now(),
				)
			';

			$result = mysql_query($sql);
			return $result;
			
			$this->_close();
		}
		
}