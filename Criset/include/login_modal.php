<!-- Modal for Login -->
<div class="modal mx-4 fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body trans" style="background: rgb(191, 191, 191);">
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
        <h1 class="mt-5 lead mx-4 text-light" style="font-size: 30px;">Login</h1>
        <form action="" method="POST">
          <div class="form-group mx-4 mt-4">
            <div class="row">
              <div class="col-md-6 mt-3">
                <input type="email" class="form-control mb-3" placeholder="Email Address" name="email">
              </div>
              <div class="col-md-6 mt-3">
                <input type="password" class="form-control" placeholder="Password" name="password">  
              </div>
              <button type="submit" class="btn btn-primary text-light mt-4 mx-3 btn-block login ">Login</button>
            </div>
          </div>
        </form>
        <div>
          <p class="mt-2 text-center" style="color: #0030ae;">Not a member yet? <a href="#" style="text-decoration: none;" class="text-light" data-toggle='modal' onclick="toogle('signup')">Signup</a></p> 
          <p class="mt-2 text-center" style="color: #0030ae;"><b>Forgot Password? <a href="#" style="text-decoration: none;" class="text-light" onclick="toogle('reset')">Reset</a></b></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End of Login Modal -->