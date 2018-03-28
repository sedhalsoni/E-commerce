<?php session_start();
if(!isset($_SESSION['admin']))
{
echo '<script>window.location="../login.php"</script>';
}
?>
<?php
 include("../connection.php");
  include("header.php");
?>
<section id="portfolio1">
		<div class="container">
		<div class="row">
			<div class="text-center">
			<h2>Manage Products</h2>
			<img class="img-responsive displayed" src="../images/short.png" alt="about">
			</div>
          	<?php 
				echo "<div>";
				//session_start();
				$q="select * from tb_optics";
				$rs=mysqli_query($con,$q);
				echo "<table class='table table-striped table-bordered bootstrap-datatable datatable responsive' border='1' align='center'>
					<tr>
						<th>ID</th>
						<th>MODEL</th>
						<th>MATERIAL</th>
						<th>PRICE</th>
						<th>GENDER</th>
						<th>IMAGE</th>
						<th>EDIT</th>
						<th>DELETE</th>
					<tr>";
				while($row=mysqli_fetch_array($rs))
				{
					echo"<tr class='center'>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>
						<td>$row[4]</td>
						<td><img width='175px' src='../$row[5]' alt='$row[1]'/></td>
						<td><a class='btn btn-info' href='edit_optics.php?id=$row[0]'><i class='glyphicon glyphicon-edit icon-white'></i>EDIT</a></td>
						<td><a class='btn btn-danger' href='delete_optics.php?id=$row[0]&cid=1'><i class='glyphicon glyphicon-trash icon-white'></i>Delete</a></td>
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