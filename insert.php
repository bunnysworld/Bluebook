<?php
    session_start();
    require_once('connection.php');
    if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']== true){
        if(isset($_POST['upload'])){
            $filename=$_FILES['uploadfile']['name'];
            $tempname=$_FILES['uploadfile']['tmp_name'];
            $folder="exam_papers/".$filename;               //make folder name "exam_papers" on your local comp. inside BLUEBOOK folder
            move_uploaded_file($tempname,$folder);
            $branch=$_POST['branch'];
            $subject=$_POST['subject'];
            $year=$_POST['year'];
            $file=$_POST['upload'];
            $sql="INSERT INTO $subject (exam_year,branch,examfile) VALUES ('$year','$branch','$folder')";
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