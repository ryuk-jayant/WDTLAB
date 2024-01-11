<?php
include 'Conc.php';

if(isset($_POST["fname"])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $dob=$_POST['DOB'];
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $cmd="SELECT *FROM user WHERE `username`='$uname'";
    $res=mysqli_query($conn,$cmd);
    if(mysqli_num_rows($res)<=0){
        $cmd="INSERT INTO `user`(`fname`, `lname`, `username`, `password`, `email`, `DOB`) VALUES ('$fname','$lname','$uname','$pwd','$email','$dob')";
        //$cmd="INSERT INTO `user`( `first_name`, `last_name`, `username`, `email_id`, `password`, `dob`) VALUES ('$fname','$lname','$uname','$email','$pwd','$dob')";
        $res=mysqli_query($conn,$cmd);
        echo "<script>alert('USER REGISTERED')</script>";
        header("Location:../Login.php");
    }
    else{
        echo "<script>alert('USERNAME already exists')</script>";
        header("Location:../registration.php");
    }
}
else{
    echo "<script>alert('Not filled i guess try again!!')</script>";
    header("Location:../registration.php");
  
}
?>