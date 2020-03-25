<?php

$conn=mysqli_connect('localhost','root','','Bluebook');

// checking the connection

if(!$conn){
    die('please check the database connnection '.mysqli_error());
}

?>