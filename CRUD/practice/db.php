<?php
include_once __DIR__.'/dbconnect.php';

class db{
	protected $db;
	public function __construct(){
		global $conn;
		$this->db=$conn;
	}
}
//$db=new db();
//print_r($db);
?>