<?php
session_start();
include __DIR__.'./../database/connection.php';
// include __DIR__.'/app/liberaries/functions.php';
$email=$_POST['username'];
$password=$_POST['pass'];
$q="select * from Users where Email='{$email}' and Password='{$password}'";
$result=$con->query($q);
// var_dump($result['Uid']);
if ($result->num_rows){
    $data = $result->fetch_assoc();
    $_SESSION['userid'] = $data['Uid'];
    header('Location: ./TodoList/dashbord');
    exit();
}
else {
    echo "EROR";
}