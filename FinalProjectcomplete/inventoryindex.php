<?php include('db_connection.php'); ?>
<?php
if(isset($_POST['addinventorydetails']))
{

	$productid=$_POST['productid'];
	$quantity=$_POST['quantity'];
	$size=$_POST['size'];
	

	
$query="INSERT INTO addinventorydetails (productid, quantity, size)
VALUES('{$productid}','{$quantity}','{$size}');";


$performQuery=mysqli_query($connection, $query);
if(!$performQuery)
echo 'Query unsuccessful';
else
echo 'Query successful';
$insertedId=mysqli_insert_id($connection);
}

?>
<?php include('db_close.php'); ?>