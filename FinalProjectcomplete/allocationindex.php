<?php include('db_connection.php'); ?>
<?php
if(isset($_POST['addshopallocation']))
{

	$ShopAllocationId=$_POST['ShopAllocationId'];
	$TenantId=$_POST['TenantId'];
	$ShopId=$_POST['ShopId'];
	

	
$query="INSERT INTO addshopallocation (ShopAllocationId, TenantId, ShopId)
VALUES('{$ShopAllocationId}','{$TenantId}','{$ShopId}');";


$performQuery=mysqli_query($connection, $query);
if(!$performQuery)
echo 'Query unsuccessful';
else
echo 'Query successful';
$insertedId=mysqli_insert_id($connection);
}

?>
<?php include('db_close.php'); ?>