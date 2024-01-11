<?php
include 'Conc.php';

$uid=$_GET['uid'];
$cmd="UPDATE `user` SET `Block`=1 WHERE `uid`='$uid'";
mysqli_query($conn,$cmd);
header("Location:../Dashboard.php")
?>