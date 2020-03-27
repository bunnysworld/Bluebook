<?php

session_start();
unset($_SESSION['User']);
// unset($_SESSION["password"]);
header("location:form.php");


?>