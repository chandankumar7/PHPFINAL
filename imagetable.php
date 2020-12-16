<?php 
  $conn=mysqli_connect("localhost","root","","crudoperation");
  if($conn)
      echo "connection successful"."<br>";
  else
    echo "could not connect to server"."<br>";


    $q1="CREATE table images (id int(255) auto_increment not null primary key,
                              image varchar(255)not null)";

    $r1=mysqli_query($conn,$q1);
    if($r1)
    {
    	echo " Table created successfully"."<br>";
    }
    else
    {
    	echo "Error in creating Table"."<br>";
    }
    mysqli_close($conn);
 ?> 