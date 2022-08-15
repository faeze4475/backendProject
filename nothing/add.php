<?php 
session_start();
if (!isset($_SESSION['userid'])){
    header('Location: ./login.php');
    die();
} 
include __DIR__.'/../database/connection.php';

if(isset($_POST['addbt'])){
    $addtitle=$_POST['titleinp'];
    if (empty($addtitle)){
        die("title is requirre");
        // final_result('index.php', 'Title is Required', 'error');

    }
    $adddes=$_POST['desinp'];
    if (empty($adddes)){
        die("des is requirre");

        // final_result('index.php', 'Description is Required', 'error');

    }
    $adddate=$_POST['dateinp'];
    if (empty($adddate)){
        die("date is requirre");

        // final_result('index.php', 'Date is Required', 'error');

    }
    $addq="INSERT INTO `Tasks` (`tTitle`, `tDescription`, `tDate`, `tStatus`,`tUser`) VALUES ('{$addtitle}', '{$adddes}', '{$adddate}', '0',{$_SESSION['userid']})";
    $addres=$con->query($addq);
    if($con->affected_rows >0){
        header('Location:/php/TodoList/index.php');

        // final_result('index.php', 'Data inserted!', 'success');

    }
        else{
            die('Error: ' . $con->error);}
            // final_result('showlistd.php','Error: ' . $conobj->error, 'error');
}