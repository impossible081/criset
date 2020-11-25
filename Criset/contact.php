<!DOCTYPE html>
<html lang="en">
<?php include 'include/headtags.php' ?>
<title> Criset - Blockchain Wallet  {{Contact}}</title>
<body>
<?php include 'include/index_nav.php' ?>
  <!-- intro -->
  <section id="contact" class="clearfix">
    <div class="container">
      <div class="intro-info">
        <h1 class="text-light">Get in <strong>Touch</strong></h1>
        <p class="lead text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			
    </div>
	</section>
  <!-- End Intro Section -->

  <!-- Message section -->
  <div class="container">
    <div class="row">
      <div class="col-md-5 mt-0 mx-auto mb-5">
        <div class="card rounded border-0" style="background-color: #0030ae; position: absolute; top: -180px;">
          <div class="card-body text-light">
            <h5 class="text-center mt-5">Send us a Message</h5>
            <form action="" method="POST" class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label for="name" class="lead">Name</label>
                  <input type="text" placeholder="Full name" require class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="email" class="lead">Email</label>
                  <input type="email" placeholder="Email Address" require class="form-control">
                </div>
              </div>
              <label for="message" class="lead">Message</label>
              <textarea name="message" id="" cols="10" rows="0" class="form-control"></textarea>
              <div class="row">
                <div class="mx-auto">
                  <button class="btn btn-outline-primary mt-3 btn-lg px-4">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of message section -->
  
  <!-- Location Section -->
  <section id="message">
    <div class="container-fluid">
			<div class="card shadow-sm mt-5">
        <div class="row">
          <div class="col-md-5">
            <div class="card-header mx-4 text-light my-2" style="background-color: #0030ae;">
              <h5>Contact Information</h5>
            </div>
            <div class="card-body text-justify mx-4">
              <p><i class="fa fa-location-arrow pr-3 text-primary"></i> The Kings Plaza, suits 313 kado F.C.T Abuja </p>
              <p><i class="fa fa-phone pr-3 text-primary"></i> +(234) 000 222 4444 </p>
              <p><i class="fa fa-envelope pr-3 text-primary"></i> info@criset.com </p>
              <div class="row">
                <div class="col-sm-12 mt-2">
                  <a href="#"><i class="fab fa-facebook fa-2x px-2"></i></a>
                  <a href="#"><i class="fab fa-instagram fa-2x px-2"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-2x px-2"></i></a>
                  <a href="#"><i class="fab fa-whatsapp fa-2x px-2"></i></a>
                  <a href="#"><i class="fab fa-linkedin fa-2x px-2"></i></a>
                </div>
              </div>
              <h4 class="mt-3">Offices</h4>
              <ul>
                <li>Head Office: Suit 000 Kingfem G427 Kado F.C.T Abuja </li>
                <li>Branch Offiice: The Kings Plaza, suits 313 kado F.C.T Abuja</li>
              </ul>
            </div>
          </div>
          <div class="col-md-7">
            <div class="card-header text-right text-light mx-4 my-2" style="background-color: #0030ae;">
              <h5>Locate Us</h5>
            </div>
            <div class="card-body text-right">
              <div class="row">
                <div class="mx-auto">
                  <p class="mx-auto"><iframe class="locate" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.719070413329!2d7.421264614149993!3d9.089336390545222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e75393b57dc27%3A0x820d0f06771ebd70!2sThe%20Kings%20Plaza!5e0!3m2!1sen!2sng!4v1600871182187!5m2!1sen!2sng" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
                </div>
              </div>
            </div>
          </div>
				</div>
				<div>
					<p></p>
				</div>
        <div class="row mt-5">
          <div class="col-md-4"></div>
          <div class="col-md-4 mx-4">
            <div class="mx-auto text-center">
              <h2>Support?</h2>
              <div class="card mb-5">
                <div class="card-body">
                  <p><i class="fa fa-comment fa-3x text-primary"></i></p>
                  <h5 class="mb-4">Contact customer support</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <div class="mx-auto">
                    <a href="support.php" class="btn btn-lg btn-primary">Contact Support</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
			</div>
    </div>
  </section>
  <!-- End of Location sections -->

  <!-- Supported -->
  <section id="supported" class="mb-5 mt-5">
    <div class="container">
      <header class="section-header">
        <h3 class="text-dark section-title">Better Late Than Never</h3>
      </header>
      <p class="text-dark text-center">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <div class="row justify-content-center mt-5">
          <a href="#" class="btn-get-started btn btn-lg btn-primary wow swing shadow mt-4 mb-5" data-toggle='modal' data-target="#signup">Get Started</a>
      </div>
    </div>
  </section>
  <!-- End of Supported section -->
  

  <?php include 'include/signup_modal.php' ?>
  <?php include 'include/login_modal.php' ?>
  <?php include 'include/reset_modal.php' ?>
  <?php include 'include/footer.php' ?>
  <?php include 'include/javascript.php' ?>
</body>
</html>