<?php
require 'conn.php';
$name=$_GET["name"];
$email=$_GET["mail"];

 $qry="select email from booking where Email='$email'and Name='$name'";
    $result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)==0)
    {
        echo "<script> alert('inavalid username or EMail')</script>"; 
    }
?>