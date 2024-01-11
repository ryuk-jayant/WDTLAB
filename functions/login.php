<?php
include 'Conc.php';

if(isset($_POST['uname'])){
    $Uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $cmd="SELECT * FROM user WHERE `username`='$Uname' AND `password`='$pwd'";
    $res=mysqli_query($conn,$cmd);
    if(mysqli_num_rows($res)<=0){
        header("Location:../Login.php");
        echo "<script>alert('USER Does Not EXIST!! try checking')</script>";
    }
    else{
        include 'session.php';
        $_SESSION["username"]=$Uname;
        header("Location:../Dashboard.php");    
    }
}
else{
    echo "<script>alert('Not filled i guess try again!!')</script>";
    header("Location:../Login.php");
  
}
?>