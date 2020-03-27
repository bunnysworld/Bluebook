<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!== true){
    header('location:form.php');
}
else{
    echo 'welcome '.$_SESSION['User'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php" <?php $_SESSION['loggedin']=false;  ?>>logout</a>
</body>
</html>