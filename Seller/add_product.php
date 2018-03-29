<?php session_start();
if(!isset($_SESSION['admin']))
{
echo '<script>window.location="../login.php"</script>';
}
?>
<?php
  include("../connection.php");
  include("header.php");
  if(isset($_POST["add"]))
  {
  		if ((($_FILES["pic"]["type"] == "image/gif") || ($_FILES["pic"]["type"] == "image/jpeg") || ($_FILES["pic"]["type"] == "image/png") || ($_FILES["pic"]["type"] == "image/GIF") || ($_FILES["pic"]["type"] == "image/JPEG") || ($_FILES["pic"]["type"] == "image/PNG")))
		{
			if (file_exists("../upload/" . $_FILES["pic"]["name"]))
			{
					echo "<script language='javascript'>
							alert('Image is already exist ! Please select another image.')
						</script>";
			}
			else
			{
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],"../upload/" . $_FILES["pic"]["name"]));
				{
					$path="upload/".$_FILES["pic"]["name"];
					$model=$_POST["model"];
					$category=$_POST["category"];
					$price= $_POST["price"];
					$gender=$_POST["gender"];
					$sql="Insert into tb_optics(model,cid,price,gender,img)values('".$model."','".$category."','".$price."','".$gender."','".$path."')";
					$data=mysqli_query($con,$sql);
					if($data == 1){
						echo '<script language="javascript" type="text/javascript"> alert("Product added successfull !."); document.location.href="manage_product.php"; </script>';
					}else{
						die('Error : '.mysqli_error());
					}
				}
				
			}
		}
  }
?>
<section id="contact">
			<div class="container"> 
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-12">
							<div class="text-center color-elements">
							<h2>Add Product</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-8">
							<form action="" class="inline" id="contactForm" method="post" enctype="multipart/form-data" >
								<div class="row">
									<div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="model" class="form-control custom-labels" id="name" placeholder="Product Name" required data-validation-required-message="Please write product name!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-12 height-contact-element">
										<div class="form-group">
										<select class="form-control custom-labels" id="name" name="category" required data-validation-required-message="Please Select category!"/>
											<option value="">Please select category</option>
											<?php 
											$q="select * from tb_category";
											$qry = mysqli_query($con,$q);
											while($row=mysqli_fetch_array($qry))
												{
												?>	
												<option value="<?php echo $row['id'];?>"><?php echo $row['name']; ?></option>
												<?php
												}
											?>
										</select>
										</div>
									</div>
                                    <div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="price" class="form-control custom-labels" id="price" placeholder="Price" required data-validation-required-message="Please write price!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
                                    <div class="col-sm-12 height-contact-element">
										<div class="form-group">
											    <input type="radio" name="gender" value="Male" id="gender_0" />
											    Male</label>
											    <input type="radio" name="gender" value="Female" id="gender_1" />
											    Female</label>
											    <input type="radio" name="gender" value="Kids" id="gender_2" />
											    Kids</label>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-12 height-contact-element">
										<div class="form-group">IMAGE
											<input type="file" placehoder="IMAGE" name="pic" required data-validation-required-message="Please select an file!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>

									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<input type="submit" name="add" class="btn btn-md btn-custom btn-noborder-radius" value="Add Product"/>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<div id="response_holder"></div>
										</div>
									</div>
									<div class="col-sm-12 contact-msg">
									<div id="success"></div>
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</section>
<?php
  include("footer.php");
?>