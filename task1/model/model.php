<?php 
class model{
    public $connection="";
    public function __construct(){
        //database connectivity here
        session_start();
        error_reporting(0);
        try{
            $this->connection=new mysqli("localhost","root","","testing");
            //echo "database connected";
        }catch(Exception $e){
            echo "database not connected";
        }
    }
    public function selectdata($table){
        $query="select * from $table";
        $exe=mysqli_query($this->connection,$query);
        while($fetch=mysqli_fetch_array($exe)){
            $arr[]=$fetch;
        }
        return $arr;
    }
    //member function in add item here
    public function insert_list($table,$peram){
        $key=array_keys($peram);
        $key1=implode(",",$key);
        $value=array_values($peram);
        $value1=implode("','",$value);
     $insert="insert into $table($key1) values('$value1')";
        
        $exe=mysqli_query($this->connection,$insert);
        return $exe;

    }

    //member function all date deleted
    public function deletealldata($table){
        $delete="DELETE FROM $table";
        $exe=mysqli_query($this->connection,$delete);
        return $exe;
    }
}
?>