<?php
     require 'conn.php';
    $name=$_GET["name"];
    $number=$_GET["number"];
    $email=$_GET["mail"];
    $date=$_GET["date"];
    $qry="select email from booking where Email='$email'";
    $result=mysqli_query($conn,$qry);
    if(mysqli_num_rows($result)!=0)
    {
        echo "<script> alert('Customer already Exist');window.location.href='../signin.html';</script>"; 
    }

else
{
    $sql="Insert into booking (Name,Mobile_number,Email,Date) values('$name','$number','$email','$date')";
    if(mysqli_query($conn,$sql)) {  
        echo "<script> alert('Signed up successfully');window.location.href='../bookform.html';</script>";
     }
 }