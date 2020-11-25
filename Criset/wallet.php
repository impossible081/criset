<!DOCTYPE html>
<html lang="en">
<?php include 'include/headtags.php' ?>
<title>Criset - Blockchain Wallet || Wallet</title>
<body>
<?php include 'include/index_nav.php' ?>
  <!-- intro -->
  <section id="wallet" class="clearfix">
    <div class="container">
      <div class="intro-info">
        <h1 class="text-light text-center">Your <strong>Wallet</strong></h1>
      </div>
    </div>    
  </section>
  <!-- End Intro Section -->
  <!-- Wallet Options -->
    <section id="feature" class="mb-5">
    <div class="container">
      <header class="section-header">
        <h3>Wallet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing agna aliqua.</p>
      </header>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="g-scrolling-carousel">
            <div class="items">
              <a href="wall-login.php" class="wallet-option shadow"><span class="buy">Buy &nbsp;</span></a>
              <a href="wall-login.php" class="wallet-option shadow"><span class="sell">Sell &nbsp;</span></a>
              <a href="wall-login.php" class="wallet-option shadow"><span class="receive">Receive &nbsp;</span></a>
              <a href="wall-login.php" class="wallet-option shadow"><span class="send">Send &nbsp;</span></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="mx-auto mt-4">
          <img src="Basic/img/virtual%20wallet.png" width="120px;" class="img-fluid" alt="Wallet image" style="max-width: 100%; height:auto;">
        </div>
        <div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p class="text-center lead">Sign in to start using Crypto wallet</p>
        </div>
        <div class="mx-auto">
          <a href="#" class="btn-wallet btn btn-primary wow swing shadow mt-2" data-toggle='modal' data-target="#signup">Get Started</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Wallet Options -->
  <?php include 'include/signup_modal.php' ?>
  <?php include 'include/reset_modal.php' ?>
  <?php include 'include/login_modal.php' ?>
  <?php include 'include/javascript.php' ?>
  <?php include 'include/footer.php' ?>
  <script>
      $(document).ready(function(){
      $(".g-scrolling-carousel .items").gScrollingCarousel();
    });
  </script>
</body>
</html>
