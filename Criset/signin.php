<!DOCTYPE html>
<html lang="en">
<?php include 'include/headtags.php' ?>
<title>Criset - Blockchain Wallet || Wallet</title>
<body>
<?php include 'include/index_nav.php' ?>
  <!-- intro -->
  <section id="up-in" class="clearfix">
    <div class="container">
      <div class="intro-info">
        <div class="row">
          <div class="col-md-6 my-4 mx-auto">
            <div class="card shadow">
              <div class="card-body">
                <h4 class="text-center mb-5">Login</h4>
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group mx-4 mt-4">
                    <input type="email" class="form-control mb-3" placeholder="Email Address" name="email" autofocus autocomplete="off">
                    <input type="password" class="form-control mb-3" placeholder="Password" name="password">  
                    <button type="submit" class="btn text-light mt-4 mx-auto btn-block" style="background-color: #0030ae;">Login</button>
                    <p class="mt-2 text-center">Not a member yet? <a href="signup.php" style="text-decoration: none;">Signup</a></p> 
                    <p class="mt-2 text-center">Forgot Password? <a href="#" style="text-decoration: none;" onclick="toogle('reset')">Reset</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php include 'include/social-handles.php' ?>
      </div>
    </div>    
  </section>
  <!-- End Intro Section -->

  <!-- End of Wallet Options -->
  <?php include 'include/signup_modal.php' ?>
  <?php include 'include/reset_modal.php' ?>
  <?php include 'include/login_modal.php' ?>
  <?php include 'include/javascript.php' ?>
</body>
</html>
