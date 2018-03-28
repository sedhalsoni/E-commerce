<?php session_start();
if(!isset($_SESSION['admin']))
{
echo '<script>window.location="../login.php"</script>';
}
?>
<?php
  include("../connection.php");
  include("header.php");
  if(isset($_POST["add"])){
        $category=$_POST["name"];
        $sql="Insert into tb_category(name)values('".$category."')";
        $data=mysqli_query($con,$sql);
        if($data == 1){
            echo '<script language="javascript" type="text/javascript"> alert("Category added successfull !."); document.location.href="manage_category.php"; </script>';
        }else{
            die('Error : '.mysqli_error());
        }
	}
?>
<section id="contact">
			<div class="container"> 
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-12">
							<div class="text-center color-elements">
							<h2>Add Category</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-8">
							<form action="" class="inline" id="contactForm" method="post">
								<div class="row">
									<div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="name" class="form-control custom-labels" id="name" placeholder="Category Name" required data-validation-required-message="Please write category name!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<input type="submit" name="add" class="btn btn-md btn-custom btn-noborder-radius" value="Add Category"/>
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