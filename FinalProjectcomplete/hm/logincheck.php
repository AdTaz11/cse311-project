<?php
session_start();

$con = mysqli_connect('localhost', 'root');
if($con){
	echo "connection successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'shoppingmall');

if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$sql = " select * from admintable where user='$user' and pass='$pass'";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user'] = $user;
			header('location:aminmainpage.php');
		}else{
			echo "login failed";
			header('location:aminlogin.php');
		}


}
?>