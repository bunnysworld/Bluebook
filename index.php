<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluebook</title>
    <script src="https://kit.fontawesome.com/11a408d726.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">

        <div class="top_navbar">
            <div class="hamburger">
                
                <span class="icon search"><i class="fas fa-window-close"></i></span>
                
            </div>
            <div class="top_menu">
                <div class="logo">
                <i class="fa fa-book"> Bluebook </i>
                </div>
                  
                <a href="form.php" id="logbtn">
                    <button type="button" class="btn btn-outline-primary"></button>
                    <span class="icon"><i class="fas fa-sign-in-alt ml-1"></i></span>
             </a>
            </div>
        </div>

        <div class="sidebar">
            <ul class="side-ul">
                <li><a href="#">
                    <span class="title">
                        <form action="">
                            <input class="searchbox" type="text" autocomplete="off" placeholder="Search.." name="search">
                            <button class="searchbox" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </span>
                    </a>
                </li>
                <?php
                    require_once('connection.php');
                    $sql="SELECT subjects FROM Sub";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){

                ?>
                <li class="sub-nav"><a href="#">
                        <span class="icon"><i class="fab fa-java"></i></span>
                        <span class="title"><?php echo($row['subjects'])?></span>
                        <span class="sub-arrow"></span>
                    </a>
                    <ul>
                        <a href="#">
                            <span class="icon"><i class="fas fa-sticky-note"></i></span>
                            <span class="title">java-1</span>
                        </a>

                        <a href="#">
                            <span class="icon"><i class="fas fa-sticky-note"></i></span>
                            <span class="title">java-1</span>
                        </a>

                        <a href="#">
                            <span class="icon"><i class="fas fa-sticky-note"></i></span>
                            <span class="title">java-1</span>
                        </a>

                        <a href="#">
                            <span class="icon"><i class="fas fa-sticky-note"></i></span>
                            <span class="title">java-1</span>
                        </a>
                    </ul>
                </li>
                <?php 
                        }
                    }
                ?>
                
            </ul>
        </div>
    </div>

</body>
<script src="vendor/jquery/jquery-3.4.1.min.js"></script>
<script src="js/index.js."></script>


</html>