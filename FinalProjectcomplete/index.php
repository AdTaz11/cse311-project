<?php include('db_connection.php'); ?>
<?php
if(isset($_POST['signup']))
{

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$dateofbirth=$_POST['dateofbirth'];
	$pnumber=$_POST['pnumber'];
	$tdnumber=$_POST['tdnumber'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];

	
$query="INSERT INTO signup (fname, lname, email, dateofbirth, pnumber, tdnumber, password, cpassword)
VALUES('{$fname}','{$lname}','{$email}', '{$dateofbirth}', '{$pnumber}', '{$tdnumber}',
'{$password}','{$cpassword}');";


$performQuery=mysqli_query($connection, $query);
if(!$performQuery)
echo 'Query unsuccessful';
else
echo 'Query successful';
$insertedId=mysqli_insert_id($connection);
}

?>
<?php include('db_close.php'); ?>