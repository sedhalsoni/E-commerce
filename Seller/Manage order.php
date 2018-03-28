<?php
include("../connection.php");
include("header.php");
?>
<?php
session_start();
if(!isset($_SESSION['admin']))
{
echo '<script>window.location="../login.php"</script>';
}
?>
<?php
?>
<section id="portfolio1">
		<div class="container">
		<div class="row">
			<div class="text-center">
			<h2>Manage Orders</h2>
			<img class="img-responsive displayed" src="../images/short.png" alt="about">
			</div>
          	<?php 
				echo "<div>";
				//session_start();
				$q="select * from tb_user_info group by u_id";
				$rs=mysqli_query($con,$q);
				echo "<table class='table table-striped table-bordered bootstrap-datatable datatable responsive' border='1' align='center'>
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>PIN CODE</th>
						<th>ADDRESS</th>
						<th>LANDMARK</th>
						<th>PHONE</th>
						<th>EMAIL</th>
						<th>ORDER LIST</th>
						<th>DELETE</th>
					<tr>";
				while($row=mysqli_fetch_array($rs))
				{
					$i=0;
					$i++;
					$email = $row["6"];
					echo"<tr class='center'>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>
						<td>$row[4]</td>
						<td>$row[5]</td>
						<td>$row[6]</td>
						<td><a class='btn btn-success' href='order_optics_list.php?email=$email'><i class='glyphicon glyphicon-zoom-in icon-white'></i>View</a></td>
						<td><a class='btn btn-danger' href='delete_order_optics.php?email=$email'><i class='glyphicon glyphicon-trash icon-white'></i>Delete</a></td>
						</tr>";
				}
				
				echo "</table>";
				
         ?>	  
       </div>
       </div>
</section>
<?php
include("footer.php");
?>