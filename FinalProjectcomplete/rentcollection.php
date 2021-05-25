<!DOCTYPE html>
<html>
<head>
	<title>RentCollection</title>
<link rel="stylesheet" type="text/css" href="collection.css">

</head>
<body class="bg">

<div class="start">

	<form action="rentcollectionindex.php" method="Post" >
		<h1> Rent Collection </h1>

	<input type="text" name="ReceiptNumber" class="txtbox" placeholder="Enter Receipt Number" /><br/><br/>
	<input type="text" name="ShopId" class="txtbox" placeholder="Enter Shop Id" /><br/><br/>
	<input type="text" name="TenantName" class="txtbox" placeholder="Enter Tenant Name" /><br/><br/>
	<input type="text" name="RentAmount" class="txtbox" placeholder="Enter Rent Amount" /><br/><br/>
	<input type="text" name="RentPaidDate" class="txtbox" placeholder="Enter Rent Paid Date" /><br/><br/>
	
	
	<input type="submit" name="addrentdetails" class="button" value="addrentdetails " ><br><br/>