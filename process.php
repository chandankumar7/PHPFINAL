<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Call JS Function</title>
<script type="text/javascript">
	

function fail()
{
   alert("<?php echo "Fail to Login"; ?>");
  document.write("<h1>Please check your name and password!!!</h1>");

}

</script>
</head>
<body>



<?php
       $username = $_POST['username'];
       $password = $_POST['password'];
       
        //to prevent mysql injection
        $username=stripcslashes($username);
        $password=stripcslashes($password);

        $username=mysql_real_escape_string($username);
        $password=mysql_real_escape_string($password);
        mysql_connect("localhost","root","");
        mysql_select_db("crudoperation");

        $result=mysql_query("SELECT * FROM signup where username='$username' and password='$password'") or die("Failed to Query database".mysql_errno());

       $row=mysql_fetch_array($result);
       if($row['username']==$username && $row['password']==$password)
       {
       	   echo "Login Success!!! Welcome ".$row['username'];
       	   header('location:Homepage.php');

       }else{
       	   // echo "Failed to Login";
       	     echo '<script type="text/javascript">fail();</script>';  
       }
?> 
</body>
</html>