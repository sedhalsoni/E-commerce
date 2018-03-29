<?php
	include "../connection.php";
	$oid = $_REQUEST["id"];
	
	$q="select * from tb_optics where o_id='$oid'";
	$rs=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($rs))
	{
		$file1 = $row["5"];
		if(file_exists("upload/$file1"))
		{
			unlink("upload/$file1");
		}
	}
	
	
	mysqli_query($con,"delete from tb_optics where o_id = $oid");
	
	if($_REQUEST["cid"]==1)
	{
		header ("location:manage_product.php");
	}	
?>

