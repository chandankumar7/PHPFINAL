<!DOCTYPE html>
<html>
<head>
  <title>Search</title>
  <style type="text/css">
    .formdesign{
      width: 50%;
      margin: auto;
      padding: 50px 25px;
    }
    .btn{
      display: flex;
    }
    .tab{
      text-align: center;
      background-color: #FF00FF;

    }
.cen{
  align-items: center;
  justify-content: center;
  display: flex;
  /*font-family: 'Rock Salt', cursive;
*/

}
h1{
  align-items: center;
  justify-content: center;
  display: flex;
}
.bt1{
  background-color: #DC143C;
}
.bt2{
  background-color:#7FFF00;
}
a{
  color: white;
}
.st,th{
  background-color: yellow;
  color: blue;
  
}
 
</style>
</head>

<body>
  
  <h1 align="center">___ADMIN SEARCH___</h1>
  <div class="formdesign">
    <form action="search.php" method="POST">
      <div class="btn">
      <input type="text" name="name" placeholder="search">&nbsp;&nbsp;
      <input type="submit" name="submit" value="search">
     </div>
    </form><br>
</div>

 <div class="cen">
    <table  width = "50%" border = "4" cellspacing = "2" cellpadding = "3" >

     <tr>
      <div class="st">
      <th>Id</th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>Contactnumber</th>
      <th>Gender</th>
      <th>Country</th>
     </div>
     </tr>

<?php 
  $conn=mysqli_connect("localhost","root","","crudoperation");
  if(isset($_POST['submit']))
  {
     $name=$_POST['name'];
     $query=mysqli_query($conn,"select * from signup where id='$name' or username='$name' or email='$name' or password='$name' or contactnumber='$name' or sex='$name' or country='$name' ");


    while($row=mysqli_fetch_array($query)) {
?>

    <tr class="tab">
     <td><?php echo $row['id']; ?></td></div>
     <td><?php echo $row['username']; ?></td></div>
     <td><?php echo $row['email']; ?></td></div>
     <td><?php echo $row['password']; ?></td></div>
     <td><?php echo $row['contactnumber']; ?></td></div>
     <td><?php echo $row['sex']; ?></td></div>
    <td><?php echo $row['country']; ?></td></div>
   </div>
   </tr>
<?php 
}} 
?>
</table>
</div>
</body>
</html>