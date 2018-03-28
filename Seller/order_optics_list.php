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
            <div class="text-center">
          	<?php 
				echo "<div>";
				//session_start();
				$email=$_REQUEST['email'];
				$q="select * from tb_order where email='$email'";
				$rs=mysqli_query($con,$q);
				echo "<table class='table table-striped table-bordered bootstrap-datatable datatable responsive' border='1' align='center'>
					<tr>
						<th>ID</th>
						<th>MODEL</th>
						<th>MATERIAL</th>
						<th>PRICE</th>
						<th>QUANTITY</th>
						<th>TOTAL PRICE</th>
						<th>ORDER DATE</th>
					<tr>";
					$qua=0;
					$p1=0;
					$p2=0;
				while($row=mysqli_fetch_array($rs))
				{
					echo"<tr class='center'>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>
						<td>$row[4]</td>
						<td>".$row[3]*$row[4]."</td>
						<td>$row[6]</td>
						</tr>";
						$qua+=$row[4];
						$p1+=$row[3];
						$p2=$p2+($row[4]*$row[3]);
				}
				echo "<tr><th colspan='3'>Total</th>
						
						<th>".$p1."</th>
						<th>".$qua."</th>
						<th>".$p2."</th>
					 </tr>";
				echo "</table>";
         ?>	
          <form method='post' action='Manage order.php'>
				<input class='btn btn-success glyphicon glyphicon-shopping-cart' type='submit' name='s2' value='BACK'/>
			</form>
            </div>
       </div>
       </div>
</section>
<?php
include("footer.php");
?>