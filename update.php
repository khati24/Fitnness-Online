<?php
error_reporting(0);
$con=mysqli_connect('localhost','root','','tutorial');
echo $_GET['i'];
echo $_GET['n'];
echo $_GET['e'];
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<form action="" method="GET">
		Id:<input type="text" name="id" value="<?php echo $_GET['i']; ?>"><br/>
		Name:<input type="text" name="name" value="<?php echo $_GET['n']; ?>"><br/>
		Email:<input type="text" name="email" value="<?php echo $_GET['e']; ?>"><br/>
		<input type="submit" name="submit" value="update"/>

	</form>
	<?php
	if ($_GET['submit']) {
		$id=$_GET['id'];
		$name=$_GET['username'];
		$email=$_GET['email'];
		$query="UPDATE student SET name='$name',email='$email' WHERE id='$id'";
		$result=mysqli_query($con,$query);
		if ($result) {
			echo "record updated successfully";
			# code...

		}

		else{
			echo "record not updated";
		}
		# code...
	}

</body>
</html>