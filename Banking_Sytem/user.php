<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <link rel="stylesheet" href="style1.css">
  <nav id="nav-bar">
  <a href="index.php" class="nav-link">Home</a>
  <a href="C:\Users\SHASTRI\Desktop\Sparks\customers\src\index.html" class="nav-link">Customers</a>
</nav>

</head>
<body>
	<h3 align="center"> Ravi Shastri</h3>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM customer_data";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>
	
	<table border="2" align="center">
	<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>EMAIL</th>
	<th>BALANCE</th>
	<th colspan="2">BANKING</th>
	
	</tr>
	
	
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['Name']."</td>
				<td>".$result['Email']."</td>
				<td>".$result['Balance']."</td>
				<td><a href='transaction.php?id=$result[id]&Name=$result[Name]&Email=$result[Email]&Balance=$result[Balance]'>Send Money</a></td>
				<td><a href='delete.php?id=$result[id]'>Delete</a></td>
			</tr>";
	}
}
	else
	{
		echo "<script>alert('Transaction successful Your transaction ID : MZQAUD82HDH. keep note for futher references');</script>";
	}
	?>
	</table>
</body>
	<html>