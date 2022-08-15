<?php
session_start();
if (!isset($_SESSION['userid'])){
    header('Location:/php/TodoList/index.php');
    die();
} 
include __DIR__.'/../database/connection.php';
if(isset($_POST['delete'])){
    $id1=$_POST ['id2'];
    $deletq="delete from `Tasks` where `tID` = {$id1} AND `tUser`= {$_SESSION['userid']}" ;
    $dres=$con->query($deletq);
    if ($con->affected_rows >0){
        header('Location:/php/TodoList/index.php');
        exit();
        // final_result('showlistd.php', 'Item Deleted', 'success');

    }
    else{
        die( $conobj->error);
        // final_result('showlistd.php', $conobj->error, 'error');
    }    
}
else
{ echo "not delet".$conobj->error;}