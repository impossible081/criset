<!-- Modal for Signup -->
<div class="modal mx-4 fade" id="signup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body trans" style="background: rgb(191, 191, 191);">
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
        <h1 class="mt-5 lead mx-4 text-light" style="font-size: 30px;">Sign Up</h1>
        <form action="" method="POST">
          <div class="form-group mx-4 mt-4">
            <div class="row">
              <div class="col-md-6">
                <input type="email" class="form-control mb-3" placeholder="Email Address" name="">
              </div>
              <div class="col-md-6">
                <input type="password" class="form-control" placeholder="Password" name="">  
              </div>
              <div class="col-12 mx-4 mt-4">
                <input type="checkbox" name="" id="terms" class="form-check-input" onclick="isChecked()">
                <label for="terms" class="form-check-label" style="color: #0030ae;">i have read and agreed to the <a href="terms.php" style="text-decoration: none;" class="text-light">terms and conditions</a></label>
              </div>
              <button type="submit" class="btn text-light mt-4 signup mx-3 btn-block">Sign Up</button>
              <p style="color: #0030ae;" class="mt-4 text-center mx-auto">Already a member? <a href="#" style="text-decoration: none;" class="text-light" onclick="toogle('login')">Login</a></p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- End of Signup Modal -->