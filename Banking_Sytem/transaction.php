<?php
include("connection.php");
error_reporting(0);

?>

<?php
if($_POST['submit'])
{
    $id = $_POST['id'];
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Balance = $_POST['Balance'];
	$query=mysqli_query($con,"update customer_data set  Name='$Name',Email='$Email',Balance='$Balance' where id='$id'");
if($query)
{
	echo "<script>alert('Transaction successful Your transaction ID : MZQAUD82HDH. keep note for futher references');</script>";
	
}
}
?>
<html>
<head>
<title>transaction</title>
<center><body background="a.jpg">
<table border="2" align="center">
<form name="registration" method="POST" action="">
<!-- we will create registration.php after registration.html -->
<center><h3>TRANSACTION</h3></center>
<tr>
<th>ID</th>
<td><input type="text" name="id" value="<?php echo $_GET['id']; ?>"/></br></td>
</tr>
<tr>
<th>NAME:</th>
<td><input type="text" name="Name" value="<?php echo $_GET['Name']; ?>"/></br></td>
</tr>

<tr>
<th>Email:</th>
<td><input type="text" name="Email" value="<?php echo $_GET['Email']; ?>"/></br></td>
</tr>
<tr>
<th>BALANCE:</th>
<td><input type="text" name="Balance" value="<?php echo $_GET['Balance']; ?>"/></br></td>
</tr>

<tr>
<th><input type="submit" name="submit" value="Send Money"></th>
<td><a href="user.php">Click here to see transaction </a></td>
</tr>
</form>

</table>
</body>
</center>
</head>
</html>