<?php
include 'Conc.php';

if(isset($_POST['fname'])){
    $Fname=$_POST['fname'];
    $Fquant=$_POST['fquant'];
    $Fcode=$_POST['fcode'];
    $Fimg_temp_name=$_FILES['fimg']['tmp_name'];
    $cmd="INSERT INTO `flower`(`fcode`, `fname`, `fqunatity`) VALUES ('$Fcode','$Fname','$Fquant')";
    //$cmd="INSERT INTO `flower`(`f_code`, `f_name`, `f_quantity`) VALUES ('$Fcode','$Fname','$Fquant')";
    move_uploaded_file($Fimg_temp_name,"../images/".$Fcode.$Fname);
    $res=mysqli_query($conn,$cmd);
    header("Location:../Dashboard.php");
}
else{
    echo "<script>alert('Not filled i guess try again!!')</script>";
    header("Location:../Login.php");
  
}
?>