<?php
 include("../connection.php");
session_start();
if(!isset($_SESSION['admin']))
{
echo '<script>window.location="../login.php"</script>';
}
?>
<div class="container blog singlepost">
<div class="row">
				<article class="col-md-8">
<?php 
					
					echo "<table border='1'>";
					
					
					echo "<tr bgcolor='#004D66'><th>NO.</th><th>USER</th><th>COUNTRY</th><th>CITY</th><th>MOBILE NO.</th><th>E-MAIL ID</th><th>ADDRESS</th><th>PRODUCT LIST</th><th>DELETE</th></tr>";
					$qry=mysql_query("SELECT * FROM tb_user_info GROUP BY u_id") or die( mysql_error()) ;
							
					
					while($row=mysql_fetch_array($qry))
					{
						$i=0;
						$i++;
						$user = $row["0"];
						echo "<tr align='center' height='40'><td>$i</td> <td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> <td>$row[5]</td><td><a href='ordered_product_list.php?user=$user'>Show</a></td><td><a href='delete_user_order.php?user=$user'><img src='images/icon/delete.gif' alt='Delete' /><a></td></tr>";
					}
										
					echo "</table>";
				 ?>
                 </article>
                 </div>
</div>
<?php
include("../connection.php");
include("header.php");
?>
<?php
include("footer.php");
?>