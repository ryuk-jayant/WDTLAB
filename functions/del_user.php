<?php
include 'Conc.php';

$uid=$_GET['uid'];
$cmd="DELETE FROM `user` WHERE `uid`='$uid'";
mysqli_query($conn,$cmd);
header("Location:../Dashboard.php");
?>