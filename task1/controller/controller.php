<?php
require_once("model/model.php"); 
class controller extends model{

    public function __construct(){
        parent::__construct();

        $show=$this->selectdata('manager');

        //add list item
        if(isset($_POST['addlist_btn'])){

            $name=$_POST['addlist'];
            $data=array("name"=>$name);
            $chk=$this->insert_list('manager',$data);
            if($chk){
                echo "<script>
                confirm('add item in selectcion list');
                window.location='./'
                </script>";
            }else
            {
                echo "<script>
                confirm('missmatch');
                window.location='./'
                </script>"; 
            }
        }
        //clear all data code here
        if(isset($_POST['clear_btn'])){
            $chk=$this->deletealldata("manager");
            if($chk){
            
                $_SESSION['msg']="<div class='alert alert-success'>
                delete this data successfully</div>";
            
                
            }
        }
      



        if(isset($_SERVER['PATH_INFO'])){
            switch($_SERVER['PATH_INFO']){
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("content.php");
                    //require_once("footer.php");
                    break;

                    default:
                    require_once("index.php");
                    require_once("header.php");
                    require_once("404.php");
                    require_once("footer.php");

            }
        }
    }
}
$obj=new controller();
?>