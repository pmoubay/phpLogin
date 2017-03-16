
<?php

  set_include_path('D:xampp/htdocs/phplogin/');
  require_once 'header.php';
  ?>

  <div class="jumbotron">
      <div class="container">
          <h1>Welcome Back!</h1>
          <p>Be the best that you can be</p>
      </div>
  </div>

  <hr>
<form action="enter.php" method="POST">
  <div class="userform">
      <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Username</label>
          <div class="col-10">
              <input class="form-control" type="text" name="username" placeholder="username">
          </div>
      </div>
      <div class="form-group row">
          <label for="example-password-input" class="col-2 col-form-label">Password</label>
          <div class="col-10">
              <input class="form-control" type="password" name="pwd">
          </div>
      </div>
      <div class="container-fluid">
          <div class="btnsubmit">
                <button type="submit" class="btn btn-primary btn-lg">Login</button>

          </div>
            <a href="forgot.php">Forgot Password?</a>
      </div>

  </div>

</form>

<?php require 'footer.php'; ?>
