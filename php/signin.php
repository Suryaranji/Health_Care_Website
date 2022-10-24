<?php
require 'conn.php';
$name=$_GET["name"];
$email=$_GET["mail"];
 $qry="select * from booking where email='$email'and Name='$name'";
    $result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)==0)
    {
        echo "<script> alert('inavalid username or EMail');window.location.href='../signup.html';</script>"; 

    }
    else
    {
        echo "<script> alert('Welcome');window.location.href='../bookform.html';</script>";
    }
?>