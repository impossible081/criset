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
                <h4 class="text-center mb-5">Sign up</h4>
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group mx-4 mt-4">
                    <input type="email" class="form-control mb-3" placeholder="Email Address" name="email" autofocus autocomplete="off">
                    <input type="password" class="form-control mb-3" placeholder="Password" name="password">  
                    <input type="checkbox" name="" id="term1" class="form-check-input ml-2" onclick="isBtnChecked()">
                    <label for="term1" class="form-check-label ml-3">i have read and agreed to the <a href="terms.php" style="text-decoration: none;">terms and conditions</a></label>
                    <button type="submit" class="btn text-light mt-4 isBtn mx-auto btn-block">Sign Up</button>
                    <p class="mt-4 text-center">Already a member? <a href="signin.php" style="text-decoration: none;">Login</a></p>
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
