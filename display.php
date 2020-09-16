<?php
$con=mysqli_connect('localhost','root','','student_data');
$query="SELECT * from student";
$run=mysqli_query($con,$query);
$total=mysqli_num_rows($run);

if ($total!=0)
{
	?>

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th colspan="2">Operations</th>
	</tr>
	<?php
	while($data=mysqli_fetch_assoc($run))
	{
		echo "<tr>
			<td>".$data['id']."</td>
			<td>".$data['name']."</td>
			<td>".$data['email']."</td>
			<td><a href='update.php?i=$data[id]&n=$data[name]&e=$data[email]'>Edit</a></td><td><a href='delete.php?i=$data[id]'>delete</a></td>
			</tr>";

	}
}
else{
	echo "data not found";
}
?>

</table>
