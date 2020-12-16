<?php
    $conn=mysqli_connect("localhost","root","","crudoperation");
  if($conn)
      echo "connection successful"."<br>";
  else
    echo "could not connect to server"."<br>";


    if(isset($_POST['submit'])){
    	$imagecount=count($_FILES['image']['name']);
    	for($i=0;$i<$imagecount;$i++){
    		$imageName=$_FILES['image']['name'][$i];
    		$imageTempName=$_FILES['image']['tmp_name'][$i];
    		$targetPath= "./upload/".$imageName;

    		if(move_uploaded_file($imageTempName,$targetPath)){
    			$q="INSERT INTO images(image) VALUES('$imageName')";
    			$result=mysqli_query($conn,$q);
    		}

    	}
    	if($result)
    	{
    		 header('location:index.php?msg=ins');
    	}
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Images</title>
	<style type="text/css">
		.formdesign{
			width: 50%;
			margin: auto;
			padding: 40px 25px;
			background-color: yellow;
		}
	
</style>
</head>

<body>
	
	<h1 align="center">___ADMIN UPLOAD IMAGES___</h1>
	<?php

    if(isset($_GET['msg']) AND $_GET['msg']=='ins')
    {
    	echo "<h1 align=center>Images Uploaded Successfully....</h1>";

    }
	?>
	<div class="formdesign">
		<form action="index.php" method="POST" enctype="multipart/form-data">
			please select Image<br><br>
			<input type="file" name="image[]" multiple><br><br>
			<input type="submit" name="submit" value="Upload">
		</form><br>
		<?php

      $s="SELECT * FROM images";
      $result=mysqli_query($conn,$s);
      if(mysqli_num_rows($result)>0){
      	while($fetch=mysqli_fetch_assoc($result)){
      		?>
      	<img src="upload/<?php echo $fetch['image'];?>" width=150 height=150>
        <?php

      	}
      }

		?>
	</div>

</body>
</html>v