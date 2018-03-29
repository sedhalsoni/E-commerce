<?php
	include "../connection.php";
	$cid = $_REQUEST["id"];

	echo $cid;
	
	mysqli_query($con,"delete from tb_category where cid = $cid");
	
	if($_REQUEST["cid"]==1)
	{
		header ("location:manage_category.php");
	}	
?>

