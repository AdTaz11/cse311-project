<?php include('db_connection.php'); ?>
<?php
if(isset($_POST['addemployeedetails']))
{

	$EmployeeId=$_POST['EmployeeId'];
	$EmployeeName=$_POST['EmployeeName'];
	$DateofBirth=$_POST['DateofBirth'];
	$Salary=$_POST['Salary'];
	$Address=$_POST['Address'];
	$PhoneNumber=$_POST['PhoneNumber'];
	$Post=$_POST['Post'];
	$JoiningDate=$_POST['JoiningDate'];

	
$query="INSERT INTO addemployeedetails (EmployeeId, EmployeeName, DateofBirth, Salary, Address, PhoneNumber, Post, JoiningDate)
VALUES('{$EmployeeId}','{$EmployeeName}','{$DateofBirth}', '{$Salary}', '{$Address}', '{$PhoneNumber}',
'{$Post}','{$JoiningDate}');";


$performQuery=mysqli_query($connection, $query);
if(!$performQuery)
echo 'Query unsuccessful';
else
echo 'Query successful';
$insertedId=mysqli_insert_id($connection);
}

?>
<?php include('db_close.php'); ?>