    <?php 
    include('header.php'); 
    include("connection.php");

if(isset($_POST["register"]))
{
		$r=mysqli_query($con,"select * from tb_registration where email='$_POST[email]'");
		$n=mysqli_num_rows($r);
		
		if($n > 0) {
		echo '<script language="javascript" type="text/javascript"> alert("Email is already registered please enter another email !."); document.location.href=""; </script>';
		}
   $sql="Insert into tb_registration(fname,lname,sex,username,email,phone,dob,password)values('$_POST[first_name]','$_POST[last_name]','$_POST[sex]','$_POST[username]','$_POST[email]','$_POST[phone]','$_POST[dob]','$_POST[password]')";
  echo $sql;
  $data = mysqli_query($con,$sql);
  echo 'here';
	if($data){
    echo '<script language="javascript" type="text/javascript"> alert("registration successfull !."); document.location.href=""; </script>';
		header("Location:login.php");
		//registrion successfull and redirect page to login...
	} else {
    echo 'error';
	}
}
?>   
      <!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <ul class="u-list-inline">
            <li class="list-inline-item g-mr-5">
              <a class="u-link-v5 g-color-text" href="#!">Home</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-mr-5">
              <a class="u-link-v5 g-color-text" href="#!">Pages</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-color-primary">
              <span>Signup</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Signup -->
      <section class="container g-pt-100 g-pb-20">
        <div class="row">
          <div class="col-lg-5 order-lg-2 g-mb-80">
            <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
              <header class="text-center mb-4">
                <h1 class="h4 g-color-black g-font-weight-400">Create New Account</h1>
              </header>

              <!-- Form -->
              <form class="g-py-15" name="signup" method="post">
                <div class="row">
                  <div class="col g-mb-20">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" name="first_name" placeholder="First name" id="fname" required data-validation-required-message="Please write your first name!"/>
											<p class="help-block text-danger"></p>
                  </div>

                  <div class="col g-mb-20">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" name="last_name" placeholder="Last name" id="lname" required data-validation-required-message="Please write your last name!"/>
											<p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="form-group g-mb-20">
                  <select class="js-custom-select u-select-v1 g-brd-gray-light-v3 g-color-gray-dark-v5 rounded g-py-12" style="width: 100%;"
                          data-placeholder="Gender"
                          data-open-icon="fa fa-angle-down"
                          data-close-icon="fa fa-angle-up" 
                          name="sex" id="sex">
                    <option> Select </option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>

                <div class="row">
                <div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="dob" class="form-control custom-labels" id="dob" placeholder="DATE OF BIRTH (DD/MM/YYYY)" required data-validation-required-message="Please write your date of birth!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
                </div>

                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Username" name="username" id="uname" required data-validation-required-message="Please write your User name!"/>
											<p class="help-block text-danger"></p>
                </div>

                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" name="email" id="email" placeholder="Email address" required data-validation-required-message="Please write your email!"/>
											<p class="help-block text-danger"></p>
                </div>

                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="phone" name="phone" id="phone" placeholder="Phone number" required data-validation-required-message="Please write your phone number!"/>
											<p class="help-block text-danger"></p>
                </div>

                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="password" id="password" name="password"  placeholder="Password" required data-validation-required-message="Please write your password!"/>
											<p class="help-block text-danger"></p>
                </div>

                <div class="mb-1">
                  <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    I accept the <a href="#!">Terms and Conditions</a>
                  </label>
                </div>

                <div class="mb-3">
                  <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    Subscribe to our newsletter
                  </label>
                </div>

                <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit" name="register" value="register">Signup</button>
              </form>
              <!-- End Form -->
            </div>

            <div class="text-center">
              <p class="g-color-gray-dark-v5 mb-0">Already have an account?
                <a class="g-font-weight-600" href="login.php">signin</a></p>
            </div>
          </div>

          <div class="col-lg-7 order-lg-1 g-mb-80">
            <div class="g-pr-20--lg">
              <div class="mb-5">
                <h2 class="h1 g-font-weight-400 mb-3">Welcome to Unify</h2>
                <p class="g-color-gray-dark-v4">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
              </div>

              <div class="row text-center mb-5">
                <div class="col-sm-4 g-mb-10">
                  <!-- Counters -->
                  <div class="g-bg-gray-light-v5 g-pa-20">
                    <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-25 g-line-height-1">52147</div>
                    <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
                    <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Code Lines</h4>
                  </div>
                  <!-- End Counters -->
                </div>

                <div class="col-sm-4 g-mb-10">
                  <!-- Counters -->
                  <div class="g-bg-gray-light-v5 g-pa-20">
                    <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-25 g-line-height-1">24583</div>
                    <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
                    <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Projects</h4>
                  </div>
                  <!-- End Counters -->
                </div>

                <div class="col-sm-4 g-mb-10">
                  <!-- Counters -->
                  <div class="g-bg-gray-light-v5 g-pa-20">
                    <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-25 g-line-height-1">7348</div>
                    <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
                    <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Working Hours</h4>
                  </div>
                  <!-- End Counters -->
                </div>
              </div>

              <div class="text-center">
                <h2 class="h4 g-font-weight-400 mb-4">Join more than
                  <span class="g-color-primary">33,000</span> members worldwide</h2>
                <img class="img-fluid g-opacity-0_6" src="assets/img/maps/map.png" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Signup -->

      <!-- Call to Action -->
      <div class="g-bg-primary">
        <div class="container g-py-20">
          <div class="row justify-content-center">
            <div class="col-md-4 mx-auto g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Shipping</span>
                  <span class="d-block g-color-white-opacity-0_8">In 2-3 Days</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-brd-x--md g-brd-white-opacity-0_3 g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-040 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Returns</span>
                  <span class="d-block g-color-white-opacity-0_8">No Questions Asked</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-hotel-restaurant-062 u-line-icon-pro"></i>
                <div class="media-body text-left">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free 24</span>
                  <span class="d-block g-color-white-opacity-0_8">Days Storage</span>
                </div>
              </div>
              <!-- End Media -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Call to Action -->
    <?php include('footer.php'); ?>
    <script type="text/javascript">
	  $(document).ready(function(){
		inicializemap()

		$('#signup').on('submit', function(e){
			e.preventDefault();
			e.stopPropagation();

			// get values from FORM
			var fname = $("#fname").val();
			var lname = $("#lname").val();
      var uname = $("#uname").val();
      var sex = $("#sex").val();
			var email = $("#email").val();
			var phone = $("#phone").val();
			var dob = $("#dob").val();
			var pwd=$("#password").val();
			var goodToGo = false;
			var messgaeError = 'Request can not be send';
			var pattern = new RegExp(/^(('[\w-\s]+')|([\w-]+(?:\.[\w-]+)*)|('[\w-\s]+')([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);


			 if (fname && fname.length > 0 && $.trim(fname) !='' && email && email.length > 0 && $.trim(email) !='') {
				  if (pattern.test(email)) {
					 goodToGo = true;
				  } else {
					 messgaeError = 'Please check your email address';
					 goodToGo = false; 
				  }
			 } 
			 else {
			   messgaeError = 'You must fill all the form fields to proceed!';
			   goodToGo = false;
			 }

			 
			if (goodToGo) {
			   $.ajax({
				 data: $('#signup').serialize(),
				 beforeSend: function() {
				   $('#success').html('<div class="col-md-12 text-center"><img src="images/spinner1.gif" alt="spinner" /></div>');
				 },
				 success:function(response){
				   if (response==1) {
					 $('#success').html('<div class="col-md-12 text-center">Your email was sent successfully</div>');
					 window.location.reload();
				   } else {
					 $('#success').html('<div class="col-md-12 text-center">E-mail was not sent. Please try again!</div>');
				   }
				 },
				 error:function(e){
				   $('#success').html('<div class="col-md-12 text-center">We could not fetch the data from the server. Please try again!</div>');
				 },
				 complete: function(done){
				   console.log('Finished');
				 },
				 type: 'POST',
				 url: 'js/send_email.php', 
			   });
			   return true;
			} else {
			   $('#success').html('<div class="col-md-12 text-center">'+messgaeError+'</div>');
			   return false;
			}
			return false;
		});
	});
</script>