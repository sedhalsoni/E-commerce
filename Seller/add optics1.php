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
			$imgname=$_FILES["pic"]["name"];
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

					$add=$_FILES["file"]["name"];
					$model=$_POST["model"];
					$material=$_POST["material"];
					$price= $_POST["price"];
					$gender=$_POST["gender"];
					//$qry="INSERT INTO `dd_wallpaper` (`w_name`, `w_path`) VALUES ('".$_POST["t1"]."', '".$_FILES["file"]["name"]."')";
					//echo $qry;
						
					//mysql_query($qry);
					echo "<script language='javascript'>
							alert('File is uploaded successfully.')
						</script>";
				}	
			}
		}
		/*$model=$_POST["model"];
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
			echo '<script language="javascript" type="text/javascript"> alert("Optics added successfull !."); document.location.href=""; </script>';
		}*/
	}
?>
<section id="contact">
			<div class="container"> 
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-12">
							<div class="text-center color-elements">
							<h2>Add Optics</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-8">
							<form action="" class="inline" id="contactForm" method="post" enctype="multipart/form-data" >
								<div class="row">
									<div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="model" class="form-control custom-labels" id="name" placeholder="MODEL NUMBER" required data-validation-required-message="Please write model number!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="material" class="form-control custom-labels" id="model" placeholder="MATERIAL" required data-validation-required-message="Please write material!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
                                    <div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="price" class="form-control custom-labels" id="price" placeholder="PRICE" required data-validation-required-message="Please write price!"/>
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