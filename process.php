<?php
session_start();
require_once('connection.php');
    if(isset($_POST['login'])){
        $query="select * from login where username='".$_POST['email']."' and password='".$_POST['password']."'";
        $result=mysqli_query($conn,$query);
        if(mysqli_fetch_assoc($result)){
            $_SESSION['loggedin']=true;
            $_SESSION['User']=$_POST['email'];
            header("location:upload.php");
        }
        else{
            header("location:form.php?invalid=email and password doesnot match");
        }
    }


?>