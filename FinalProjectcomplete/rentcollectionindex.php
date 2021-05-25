<?php include('db_connection.php'); ?>
<?php
if(isset($_POST['addrentdetails']))
{

	$ReceiptNumber=$_POST['ReceiptNumber'];
	$ShopId=$_POST['ShopId'];
	$TenantName=$_POST['TenantName'];
	$RentAmount=$_POST['RentAmount'];
	$RentPaidDate=$_POST['RentPaidDate'];
	
	
$query="INSERT INTO addrentdetails (ReceiptNumber, ShopId, TenantName, RentAmount, RentPaidDate)
VALUES('{$ReceiptNumber}','{$ShopId}','{$TenantName}', '{$RentAmount}', '{$RentPaidDate}');";


$performQuery=mysqli_query($connection, $query);
if(!$performQuery)
echo 'Query unsuccessful';
else
echo 'Query successful';
$insertedId=mysqli_insert_id($connection);
}

?>
<?php include('db_close.php'); ?>