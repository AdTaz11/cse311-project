<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shoppingmall");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = $sql = "SELECT * from addshop, addshopallocation \n"
. "WHERE addshop.ShopId = addshopallocation.ShopId";

if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<table>";
echo "<tr>";
echo "<th>Shop id </th></th>";
echo "<th>Floor Number</th></th>";
echo "<th>Shop Number </th></th>";
echo "<th>Rent per month </th></th>";
echo "<th>Status </th></th>";
echo "<th>Shop allocation Id </th></th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['ShopId'] ."</td>";
echo "<td>" . $row['FloorNumber'] . "</td>";
echo "<td>" . $row['ShopNumber'] . "</td>";
echo "<td>" . $row['RentPerMonth'] . "</td>";
echo "<td>" . $row['Status'] . "</td>";
echo "<td>" . $row['ShopAllocationId'] . "</td>";
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



