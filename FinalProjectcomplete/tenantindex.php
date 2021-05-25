<?php include('db_connection.php'); ?>
<?php
if(isset($_POST['addtenantdetails']))
{

	$TenantId=$_POST['TenantId'];
	$TenantName=$_POST['TenantName'];
	$Address=$_POST['Address'];
	$PhoneNumber=$_POST['PhoneNumber'];
	$RentRate=$_POST['RentRate'];
	$FloorNumber=$_POST['FloorNumber'];
	

	
$query="INSERT INTO addtenantdetails (TenantId, TenantName, Address, PhoneNumber, RentRate, FloorNumber)
VALUES('{$TenantId}','{$TenantName}','{$Address}', '{$PhoneNumber}', '{$RentRate}', '{$FloorNumber}');";


$performQuery=mysqli_query($connection, $query);
if(!$performQuery)
echo 'Query unsuccessful';
else
echo 'Query successful';
$insertedId=mysqli_insert_id($connection);
}

?>
<?php include('db_close.php'); ?>