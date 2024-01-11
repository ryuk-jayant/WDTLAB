<?php
include 'Conc.php';

$fid=$_GET['fid'];
$cmd="DELETE FROM `flower` WHERE `fid`='$fid'";
mysqli_query($conn,$cmd);
header("Location:../Dashboard.php");
?>