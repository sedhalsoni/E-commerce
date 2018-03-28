<?php
	include "../connection.php";
	$cid = $_REQUEST["id"];
	
	mysqli_query($con,"delete from tb_category where id = $cid");
	
	if($_REQUEST["cid"]==1)
	{
		header ("location:manage_category.php");
	}	
?>

