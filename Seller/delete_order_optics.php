<?php
	include "../connection.php";
	$email = $_REQUEST["email"];
	mysqli_query($con,"delete from tb_order where email = '$email'") or die(mysql_error());
	mysqli_query($con,"delete from tb_user_info where email = '$email'") or die(mysql_error());
	header("location:Manage order.php");
?>

