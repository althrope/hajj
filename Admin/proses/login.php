<?php
include("config.php");
$data = $_POST;
if(isset($data['login'])){
    $pass = md5($data['password']);
    $user = $data['username'];
    $sql = "select * from user where username = '$user' and password='$pass'";
    $query = mysqli_query($db, $sql);
    if($query->num_rows == 1){
        session_start();
        $_SESSION["username"] = $user;
        echo "Session variables are set.";
        header('Location: ../index.php');
    }else{
        header('Location: ../login.php');
    }
}