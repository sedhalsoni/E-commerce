    <?php 
    include("header.php"); 
    include("connection.php");
    if(isset($_POST["login"]))
    {
      $email=trim($_POST["email"]);
      $email=strip_tags($email);
      $email=htmlspecialchars($email);
      $pwd=trim($_POST["password"]);
      $pwd=strip_tags($pwd);
      $pwd=htmlspecialchars($pwd);
      
      echo 'heloo';
      echo $email;
      echo $pwd;
      $sql1="select * from tb_admin where email='".$email."' and password='".$pwd."'";
      $data1=mysqli_query($con,$sql1);
      $num1=mysqli_num_rows($data1);
      
      
      $sql="Select * from tb_registration where email='".$email."' and password='".$pwd."'";
      $data=mysqli_query($con,$sql);
      $num=mysqli_num_rows($data);
      
      if($num1==1)
      {
        session_start();
        //session_register("email");
        $_SESSION["admin"] = $email;
        echo '<script language="javascript" type="text/javascript"> document.location.href="Seller/index.php"; </script>';
      }
      else if($num==1)
      {
        $MyRows = mysqli_fetch_assoc($data);
        session_start();
        //session_register("email");
        $_SESSION["user"] = $email;
        echo '<script language="javascript" type="text/javascript"> document.location.href="User/index.php"; </script>';
      }
      else
      {
        echo '<script language="javascript" type="text/javascript"> alert("Email or Password is invalid.");</script>';
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
              <span>Login</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Login -->
      <section class="container g-pt-100 g-pb-20">
        <div class="row justify-content-between">
          <div class="col-md-6 col-lg-5 order-lg-2 g-mb-80">
            <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
              <header class="text-center mb-4">
                <h1 class="h4 g-color-black g-font-weight-400">Login to Your Account</h1>
              </header>

              <!-- Form -->
              <form class="g-py-15" id="contactForm" method="post">
                <div class="mb-4">
                  <div class="input-group g-rounded-left-3">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v3 g-color-gray-dark-v5">
                      <i class="icon-finance-067 u-line-icon-pro"></i>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" type="email" name="email" placeholder="EMAIL" required data-validation-required-message="Please write your email!">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="mb-4">
                  <div class="input-group g-rounded-left-3 mb-4">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v3 g-color-gray-dark-v5">
                      <i class="icon-media-094 u-line-icon-pro"></i>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" type="password" name="password" placeholder="PASSWORD" required data-validation-required-message="Please write your password!"/>
											<p class="help-block text-danger">
                  </div>
                </div>

                <div class="row justify-content-between mb-5">
                  <div class="col align-self-center">
                    <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-0">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      Keep signed in
                    </label>
                  </div>
                  <div class="col align-self-center text-right">
                    <a class="g-font-size-13" href="page-password-recovery-1.html">Forgot password?</a>
                  </div>
                </div>

                <div class="mb-5">
                  <button type="submit" name="login" class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" value="Login">Login</button>
                </div>
              </form>
              <!-- End Form -->
            </div>

            <div class="text-center">
              <p class="g-color-gray-dark-v5 mb-0">Don't have an account?
                <a class="g-font-weight-600" href="page-signup-1.html">signup</a></p>
            </div>
          </div>

          <div class="col-md-6 order-lg-1 g-mb-80">
            <div class="mb-5">
              <h2 class="h1 g-font-weight-400 mb-3">Welcome to E-commerce</h2>
              <p class="g-color-gray-dark-v4">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
            </div>

            <div class="row">
              <div class="col-lg-9">
                <!-- Icon Blocks -->
                <div class="media mb-5">
                  <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-168 u-line-icon-pro"></i>
                    </span>
                  </div>
                  <div class="media-body align-self-center">
                    <h3 class="h5 g-font-weight-400">Reliable contracts</h3>
                    <p class="g-color-gray-dark-v5 mb-0">Reliable contracts, multifanctionality &amp; best usage of Unify template</p>
                  </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media mb-5">
                  <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-193 u-line-icon-pro"></i>
                    </span>
                  </div>
                  <div class="media-body align-self-center">
                    <h3 class="h5 g-font-weight-400">Security</h3>
                    <p class="g-color-gray-dark-v5 mb-0">Secure &amp; integrated options to create individual &amp; business websites</p>
                  </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media">
                  <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-122 u-line-icon-pro"></i>
                    </span>
                  </div>
                  <div class="media-body align-self-center">
                    <h3 class="h5 g-font-weight-400">Maintain</h3>
                    <p class="g-color-gray-dark-v5 mb-0">We get it, you're busy and it's important that someone keeps up with marketing</p>
                  </div>
                </div>
                <!-- End Icon Blocks -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Login -->

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