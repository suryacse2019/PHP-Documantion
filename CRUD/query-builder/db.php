<?php
//mysqli object oriented approach
require_once __DIR__.'/dbconect.php';
class DB{
    protected $DB;
    public function __construct(){
        global $conn;
        $this->DB=$conn;
    }
    public function getConnection(){
        return $this->DB;
    }
}
//$db=new DB();
//print_r($db);
?>