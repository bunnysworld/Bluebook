<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!== true){
    header('location:form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/upload.css">
    <script src="https://kit.fontawesome.com/11a408d726.js" crossorigin="anonymous"></script>
    <title>upload pannel</title>
</head>
<body>

<div class="upform">
      <svg class="bi bi-person" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"/>
      </svg>
    <p>Welcome</p><br>
    <form action="insert.php" method="POST">
        <div class="form-group">
          <li><label for="branch"><i class="fas fa-code-branch"> Branch</i></label></li>
          <select class="form-control" id="branch" name="branch"> 
              <option>B.Tech</option>
              <option>BCA</option>
              <option>BBA</option>
              <option>BSC</option>
              <option>LLB</option>
          </select>
        </div>

        <div class="form-group">
          <li><label for="subject"><i class='fas fa-book'> Subjects</i></label></li>
          <select class="form-control" id="subject" name="subject">
             <option>java</option>
             <option>Maths</option>
             <option>Cpp</option>
             <option>Php</option>
             <option>Dot Net</option>
          </select>
        </div>

        <div class="form-group">
          <li><label for="year"><i class='far fa-clock'> Year</i></label></li>
          <select class="form-control" id="year" name="year">
              <option>2020</option>
              <option>2019</option>
              <option>2018</option>
              <option>2017</option>
              <option>2016</option>
          </select>
        </div>

        <div class="form-group">
            <label for="selectfile"><i class="fas fa-file-alt"> Upload Paper</i></label>
            <input type="file" class="form-control-file" id="selectfile">
        </div>
        <button type="submit" name="upload"  class="upbtn"><i class='fas fa-upload'> Upload </i></button>

    </form>
    <a href="logout.php" <?php $_SESSION['loggedin']=false;  ?>> <button id="logout"><i class="fa fa-sign-out"> logout </i></button></a>
   </div>
  
    
</body>
</html>