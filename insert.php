<?php
    session_start();
    require_once('connection.php');
    if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']== true){
        if(isset($_POST['upload'])){
            $branch=$_POST['branch'];
            $subject=$_POST['subject'];
            $year=$_POST['year'];
            $file=$_POST['upload'];
            $sql="INSERT INTO $subject (exam_year,branch) VALUES ('$year','$branch')";
            if(!mysqli_query($conn,$sql)){
                echo("not inserted");
            }
            else{
                echo("inserted successfully");
                header("location:index.php");

            }
        }

    }

?>