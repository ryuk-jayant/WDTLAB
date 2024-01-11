<?php
include 'Conc.php';

$uid=(int)$_GET['uid'];
$cmd="UPDATE `user` SET `Block`=0 WHERE `uid`='$uid'";
mysqli_query($conn,$cmd);
header("Location:../Dashboard.php")
?>