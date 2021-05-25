<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shoppingmall");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT * FROM addshopemployeedetails";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<table>";
echo "<tr>";
echo "<th>Employee Id</th></th>";
echo "<th>Employee Name</th></th>";
echo "<th>Date of Birth</th></th>";
echo "<th>Salary</th></th>";
echo "<th>Address</th></th>";
echo "<th>Phone Number</th></th>";
echo "<th>Employee Post</th></th>";
echo "<th>Employee Join date</th></th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['EmployeeId'] . "</td>";
echo "<td>" . $row['EmployeeName'] . "</td>";
echo "<td>" . $row['DateofBirth'] . "</td>";
echo "<td>" . $row['Salary'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['PhoneNumber'] . "</td>";
echo "<td>" . $row['Post'] . "</td>";
echo "<td>" . $row['JoiningDate'] . "</td>";
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


