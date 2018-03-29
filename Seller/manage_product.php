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
				$q="SELECT * FROM tb_optics
				LEFT JOIN tb_category
				ON tb_optics.cid = tb_category.cid";
				$rs=mysqli_query($con,$q);
				echo "<table class='table table-striped table-bordered bootstrap-datatable datatable responsive' border='1' align='center'>
					<tr>
						<th>ID</th>
						<th>Product Name</th>
						<th>CATEGORY</th>
						<th>PRICE</th>
						<th>Fashion's</th>
						<th>IMAGE</th>
						<th>EDIT</th>
						<th>DELETE</th>
					<tr>";
				while($row=mysqli_fetch_array($rs))
				{
					// console.log($row);
					echo"<tr class='center'>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[7]</td>
						<td>$row[3]</td>
						<td>$row[4]</td>
						<td><img width='175px' src='../$row[5]' alt='$row[1]'/></td>
						<td><a class='btn btn-info' href='edit_product.php?id=$row[0]'><i class='glyphicon glyphicon-edit icon-white'></i>EDIT</a></td>
						<td><a class='btn btn-danger' onClick=\"javascript: return confirm('Are you sure want to delete product !');\" href='delete_product.php?id=$row[0]&cid=1'><i class='glyphicon glyphicon-trash icon-white'></i>Delete</a></td>
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