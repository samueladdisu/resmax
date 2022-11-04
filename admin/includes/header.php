<?php
 ob_start();
 session_start();


 if(!isset($_SESSION['username1'])){
    header('Location: ../index.php');
 }
