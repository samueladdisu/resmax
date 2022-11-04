
<?php 

session_start(); 

$_SESSION['username1'] = null;
$_SESSION['email'] = null;

header("Location: ../index.php");

?>