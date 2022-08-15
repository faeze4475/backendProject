<?php 
class Tasks{
//Index function
    public function index(){
        global $con;
        if (!isset($_SESSION['userid'])){
            header('Location: ./login');
            exit();
        }
        $q="SELECT * FROM `Tasks`where `tUser` = {$_SESSION['userid'] }";
        $r=$con->query($q);
        include __DIR__.'/../../template/showtasks.php';

    }
//Add function
    public function add(){
        global $con;
        if(isset($_POST['addbt'])){
            $addtitle=$_POST['titleinp'];
            if (empty($addtitle)){
                die("title is requirre");
            }
            $adddes=$_POST['desinp'];
            if (empty($adddes)){
                die("des is requirre");    
            }
            $adddate=$_POST['dateinp'];
            if (empty($adddate)){
                die("date is requirre");
                }
            $addq="INSERT INTO `Tasks` (`tTitle`, `tDescription`, `tDate`, `tStatus`,`tUser`) VALUES ('{$addtitle}', '{$adddes}', '{$adddate}', '0',{$_SESSION['userid']})";
            $addres=$con->query($addq);
            if($con->affected_rows >0){
                header('Location:/php/TodoList/dashbord');
                }
                else{
                    die('Error: ' . $con->error);}
        }
    }
//Delete function
    public function delete(){
        global $con;
        if(isset($_POST['delete'])){
            $id1=$_POST ['id2'];
            $deletq="delete from `Tasks` where `tID` = '{$id1}' AND `tUser`= {$_SESSION['userid']}" ;
            $dres=$con->query($deletq);
            if ($con->affected_rows >0){
                header('Location:/php/TodoList/index.php');
                exit();
                // final_result('showlistd.php', 'Item Deleted', 'success');

            }
            else{
                die( $con->error);
                // final_result('showlistd.php', $conobj->error, 'error');
            }    
        }
        else
        { echo "not delet".$con->error;}
    }

}
