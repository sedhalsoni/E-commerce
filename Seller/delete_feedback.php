<?php
	include "../connection.php";
	$id = $_REQUEST["id"];
	
	mysql_query("delete from tb_contact where c_id = '$id'") or die(mysql_error());
	
	header("location:Manage feedback.php");
?>

