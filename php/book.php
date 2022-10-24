<?php
     require 'conn.php';
    $name=$_GET["name"];
    $hospital=$_GET["hospital"];
    $doctor=$_GET["doctor"];
    $date=$_GET["date"];
    $sql="Insert into form (name,date,hospital,doctor) values('$name','$date','$hospital','$doctor')";
    
    
    if(mysqli_query($conn,$sql)) 
    { 
        $sql2=mysqli_query($conn,"select * from form where name='$name'");
        $row=mysqli_fetch_array($sql2);

        if (!is_null($row)) 
        {
             ?> 

      <!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="services" id="services">
    <section>
    <br><br><br><br><br><br><br><br><br>
    <h1 class="heading">Book  <span>Now</span> </h1>
    <div class="box-container">
        <div class="box" style=" " >
            <h3 style="text-align: center;">Report</h3>
            <table style ="font-size: 20px; font-style: arial; margin-left: auto;margin-right:auto;">
                <tr>
                    <td>Name :</td>
                    <td id="fname"><?php echo $row['name'];?></td>
                </tr>
                <tr>
                    <td>Date :</td>
                    <td id="fdate"> <?php echo $row['date'];?></td>
                </tr>
                <tr>
                    <td >Booking Id :</td>
                    <td> <?php echo $row['id'];?></td>
                </tr>
                <tr>
                    <td>Hospital :</td>
                    <td><?php echo $row['hospital'];?></td>
                </tr>
                <tr>
                    <td>Doctor :</td>
                    <td><?php echo $row['doctor'];?></td>
                </tr>
            </table>
            <h1 style="text-align:center; font-size: 20px; font-weight:bold;">Have A Good Day</h1>
        </div>

    
    </div>
    <a href="..\index.html"  class="btn">Back</a>
</section>
      
</body>
</html>
      <?php 
     
  }
}
      

      
    else
   { print "Could not connect to database server";} 
    
    ?>