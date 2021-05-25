<?php include('db_connection.php'); ?>
<?php
if(isset($_POST['addshop']))
{

	$ShopId=$_POST['ShopId'];
	$FloorNumber=$_POST['FloorNumber'];
	$ShopNumber=$_POST['ShopNumber'];
	$RentPerMonth=$_POST['RentPerMonth'];
	$Status=$_POST['Status'];
	
	
$query="INSERT INTO addshop (ShopId, FloorNumber, ShopNumber, RentPerMonth, Status)
VALUES('{$ShopId}','{$FloorNumber}','{$ShopNumber}', '{$RentPerMonth}', '{$Status}');";


$performQuery=mysqli_query($connection, $query);
if(!$performQuery)
echo 'Query unsuccessful';
else
echo 'Query successful';
$insertedId=mysqli_insert_id($connection);
}

?>
<?php include('db_close.php'); ?>