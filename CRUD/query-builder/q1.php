<?php
include __DIR__.'/db.php';
class query extends db{
    public $sql;
    public function insert($tablename,$formdata=[]){
        $columns = implode(",",array_keys($formdata));
        $values = implode("','",array_values($formdata));
        $SQL="INSERT INTO {$tablename} ($columns) values ('$values');";

        $this->sql = $SQL;
	    return $this;
    }


    
    public function getQuery(){
        return $this->sql;
    }

    public function select($columns="*"){
        $sql="SELECT $columns From ";
        $this->sql=$sql;
        return $this;
    }

    public function tablename($tablename){
        $this->sql=$this->sql."$tablename";
        return $this;
    }
    
    public function where($columns=)

    public function delete($tablename){

        $this->sql= "DELETE from {$tablename} ";
        return $this;
    }
}
$query=new query();
echo $query->insert('suraj_yadav',[
    'name'=>'suraj yadav',
    'add'=>'sakhoi'
])->getQuery();
echo PHP_EOL;
echo $query->select()->tablename('suraj_yadav')->getQuery();
echo PHP_EOL;
echo $query->delete('suraj_yadav')->getQuery();
?>