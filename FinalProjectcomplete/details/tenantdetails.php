<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shoppingmall");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT * FROM addtenantdetails";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<table>";
echo "<tr>";
echo "<th>Tenant Id</th></th>";
echo "<th>Tenant Name</th></th>";
echo "<th>Address</th></th>";
echo "<th>Phone Number</th></th>";
echo "<th>Rent Rate</th></th>";
echo "<th>Floor Number</th></th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['TenantId'] . "</td>";
echo "<td>" . $row['TenantName'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['PhoneNumber'] . "</td>";
echo "<td>" . $row['RentRate'] . "</td>";
echo "<td>" . $row['FloorNumber'] . "</td>";
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



