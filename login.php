<html>
<head>
    <title> Login Page </title>

<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body class= "bg">
<div class="start">
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="shoppingmall";

//create connection

$con= new mysqli($servername, $username, $password, $dbname);

//check connection

if ($con->connect_error)
    {
        die("Connection failed: " . $con->connect_error);
    }
     else
         {
          //echo "Connected successfully";
        }
    ?>


<form action ="" method="POST">

<center>
<h1> Login Page </h1>

<img src="admin.png" class="img"/>  <center>
<input type="email" name="email" class="txtbox" placeholder="Enter Email Id"/><br/><br/>
<input type="password" name="password" class="txtbox" placeholder="Enter Password"/><br/><br/>

<input type="submit" name="login" class="btn" value="Login"/><br/><br/>
<input type="submit" name="back" class="btn" value="Back"/><br/><br/>
</form>

</div>

</body>
</html>
  
<?php


    
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM `signup` WHERE email='$email' && password='$password' ";
    $query_run = mysqli_query($con,$query);
    $total = mysqli_num_rows($query_run);
    
    if($total == 1)
        {
            // echo "Logged in Successfully";
            echo  "<SCRIPT> //not showing me this
            alert('Logged in successfully');
            </SCRIPT>";

        }
    else
        {
            echo"<SCRIPT> //not showing me this
            alert('Log in Failed');
            </SCRIPT>";
        }
}
    
?>
