<!--Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Signup</h4>
      </div>
      <div class="modal-body">
        <form class="form-group" action="index.php" method="post">
            <div class="form-group">
              <input type="text" name="username" class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="password" name="repassword" class="form-control input-lg" placeholder="Retype Password">
            </div>
            <div class="form-group">
              <input type="checkbox" name="repassword" class=""> I agree to <a href"#">Terms of Use</a>
            </div>
            <div class="form-group text-left ">
              <input type="submit" name="submit" class="btn btn-info btn-lg btn-block" value="Signup">
            </div>
            <div class="modal-footer"></div>
          </form>
      </div>
     
    </div>
  </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <form class="form-group" action="index.php" method="post">
            <div class="form-group">
              <input type="text" name="username" class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <a href="#"> Forgot Password </a>
            </div>
            <div class="form-group text-left ">
              <input type="submit" name="submit" class="btn btn-info btn-lg btn-block" value="Login">
            </div>
            <div class="modal-footer"></div>
          </form>
      </div>
     
    </div>
  </div>
</div>