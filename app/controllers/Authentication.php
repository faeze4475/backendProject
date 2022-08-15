<?php

class Authentication{
    public function login(){

        if (isset($_SESSION['userid'])){
            header('Location:./dashbord');
            exit();
        }
        include __DIR__.'/../../template/login.php';
    }
    public function logout(){
        unset($_SESSION['userid']);
        header('Location: ./login');
        exit();

    }
    public function register(){
        if (isset($_SESSION['userid'])){
            header('Location: ./dashbord');
            exit();
        }

    }
    public function dologin(){
        global $con;
        if(isset($_POST['singinb'])){
            $email=$_POST['username'];
            $password=$_POST['pass'];
            $q="SELECT * from `Users` where Email='{$email}' and Password='{$password}'";
            $result=$con->query($q);
            if ($result->num_rows){
                $data = $result->fetch_assoc();
                $_SESSION['userid'] = $data['Uid'];
                // die($_SESSION['userid']);
                header('Location: ./dashbord');
                exit();
            }
            header('Location: ./login');
            exit();
     }
    }

    public function doregister(){
        global $con;
        if(isset($_POST['signup'])){
            $first=$_POST['first'];
            if (empty($first)){
                die("title is requirre");
                // final_result('index.php', 'Title is Required', 'error');
        
            }
            $last=$_POST['last'];
            if (empty($last)){
                die("des is requirre");
        
                // final_result('index.php', 'Description is Required', 'error');
        
            }
            $pass=$_POST['pass'];
            if (empty($pass)){
                die("date is requirre");
        
                // final_result('index.php', 'Date is Required', 'error');
        
        
            }
            $email=$_POST['email'];
            if (empty($email)){
                die("date is requirre");}
            $checkQ="select * from `Users` where Email = '{$email}'";
            if($con->affected_rows>0){
                die("user exist");
            }
            
            $addq="INSERT INTO `Users` (`Email`, `password`, `Firstname`, `Lastname`) VALUES ('{$email}', '{$pass}', '{$first}', '{$last}')";
            $addres=$con->query($addq);
            if($con->affected_rows >0){
                header('Location:/php/TodoList/index.php');
        
                // final_result('index.php', 'Data inserted!', 'success');
        
            }
                else{
                    die('Error: ' . $con->error);}
                    // final_result('showlistd.php','Error: ' . $conobj->error, 'error');
        }
        
    }




}