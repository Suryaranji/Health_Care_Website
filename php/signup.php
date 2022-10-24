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
        echo "<script> alert('Customer already Exist')</script>"; 
    }

else
{


    $sql="Insert into booking (Name,Mobile_number,Email,Date) values('$name','$number','$email','$date')";
    if(mysqli_query($conn,$sql)) {  
        ?><html>
            <body>
                <h1 > Succesfully Booked</h1></body>
                </html>   <?php
    } 
    else
   { print "Could not connect to database server";} 
    }
    ?>