<?php session_start();
if(!isset($_SESSION['admin']))
{
echo '<script>window.location="../login.php"</script>';
}
?>
<?php
 	include("../connection.php");
  	include("header.php");
 	$oid =$_REQUEST["id"];
 	$q="select * from tb_optics where o_id='".$oid."'";
	$qry = mysqli_query($con,$q);
	$row = mysqli_fetch_array($qry);
	if(isset($_POST["add"]))
  {
  		if ((($_FILES["pic"]["type"] == "image/gif") || ($_FILES["pic"]["type"] == "image/jpeg") || ($_FILES["pic"]["type"] == "image/png") || ($_FILES["pic"]["type"] == "image/GIF") || ($_FILES["pic"]["type"] == "image/JPEG") || ($_FILES["pic"]["type"] == "image/PNG")))
		{
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],"../upload/" . $_FILES["pic"]["name"]));
				{
					$path="upload/".$_FILES["pic"]["name"];
					$model=$_POST["model"];
					$material=$_POST["material"];
					$price= $_POST["price"];
					$gender=$_POST["gender"];
					$sql="update tb_optics set model='".$model."',material='".$material."',price='".$price."',gender='".$gender."',img='".$path."' where o_id='$oid'";
					
					$data=mysqli_query($con,$sql);
					if($data == 1){
						echo '<script language="javascript" type="text/javascript"> alert("Optics updated successfull !."); document.location.href=""; </script>';
					}else{
						die('Error : '.mysql_error());
					}
				}
		}
	}
  /*if(isset($_POST["add"]))
  {
		$model=$_POST["model"];
		$path="upload/";
		$filename=$_FILES['pic']['name'];
		$target_path = $path.$filename;
		move_uploaded_file($_FILES['pic']['tmp_name'],'$target_path');
		$material=$_POST["material"];
		$price= $_POST["price"];
		$gender=$_POST["gender"];
		$sql="Insert into tb_optics(model,material,price,gender,img)values('".$model."','".$material."','".$price."','".$gender."','".$target_path."')";
		if(!mysql_query($sql,$con))
		{
			die('Error : '.mysql_error());
		}
		else
		{
			echo '<script language="javascript" type="text/javascript"> alert("Product added successfull !."); document.location.href=""; </script>';
		}
		}
*/?>
<section id="contact">
			<div class="container"> 
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-12">
							<div class="text-center color-elements">
							<h2>Edit Product</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-8">
                        <?php
							echo"<form action='' class='inline' id='contactForm' method='post' enctype='multipart/form-data' >
								<div class='row'>
									<div class='col-sm-12 height-contact-element'>
										<div class='form-group'>
											<input type='text' name='model' value='$row[1]' class='form-control custom-labels' id='name' placeholder='MODEL NUMBER' required data-validation-required-message='Please write model number!'/>
											<p class='help-block text-danger'></p>
										</div>
									</div>
									<div class='col-sm-12 height-contact-element'>
										<div class='form-group'>
											<input type='text' name='material' value='$row[2]' class='form-control custom-labels' id='model' placeholder='MATERIAL' required data-validation-required-message='Please write material!'/>
											<p class='help-block text-danger'></p>
										</div>
									</div>
                                    <div class='col-sm-12 height-contact-element'>
										<div class='form-group'>
											<input type='text' name='price' value='$row[3]' class='form-control custom-labels' id='price' placeholder='PRICE' required data-validation-required-message='Please write price!'/>
											<p class='help-block text-danger'></p>
										</div>
									</div>
                                    <div class='col-sm-12 height-contact-element'>
										<div class='form-group'>
											    <input type='radio' name='gender' value='Male' id='gender_0' />
											    Male</label>
											    <input type='radio' name='gender' value='Female' id='gender_1' />
											    Female</label>
											    <input type='radio' name='gender' value='Kids' id='gender_2' />
											    Kids</label>
											<p class='help-block text-danger'></p>
										</div>
									</div>
									<div class='col-sm-12 height-contact-element'>
										<div class='form-group'>IMAGE
											<input type='file' placehoder='IMAGE' name='pic' required data-validation-required-message='Please select an file!'/>
											<p class='help-block text-danger'></p>
										</div>
									</div>

									<div class='col-sm-3 col-xs-6 height-contact-element'>
										<div class='form-group'>
											<input type='submit' name='add' class='btn btn-md btn-custom btn-noborder-radius' value='Add Optics'/>
										</div>
									</div>
									<div class='col-sm-3 col-xs-6 height-contact-element'>
										<div class='form-group'>
											<div id='response_holder'></div>
										</div>
									</div>
									<div class='col-sm-12 contact-msg'>
									<div id='success'></div>
									</div>
								</div>
							</form>";
							?>
						</div>
						
					</div>
				</div>
			</div>
		</section>
<?php
  include("footer.php");
?>