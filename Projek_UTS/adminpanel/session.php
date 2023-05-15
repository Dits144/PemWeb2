<?php
    session_start();
    if($_SESSION['login']==false){
        header('location: login V16.php');
    }
?> 