<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shoppingmall");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT * FROM  addrentdetails";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<table>";
echo "<tr>";
echo "<th>Receipt Number </th></th>";
echo "<th>Shop id </th></th>";
echo "<th>Tenant Name </th></th>";
echo "<th>Rent Ammount </th></th>";
echo "<th>Rent Paid Date </th></th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['ReceiptNumber'] ."</td>";
echo "<td>" . $row['ShopId'] . "</td>";
echo "<td>" . $row['TenantName'] . "</td>";
echo "<td>" . $row['RentAmount'] . "</td>";
echo "<td>" . $row['RentPaidDate'] . "</td>";
echo "</tr>";
}
echo "</table>";
// Free result set
mysqli_free_result($result);
} else{
echo "No records matching your query were found.";
}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>


