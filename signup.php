
<?php

  set_include_path('D:xampp/htdocs/phplogin/');
  require_once 'header.php';
  ?>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
      <div class="container">
          <h1>Sign up</h1>
          <p>Join the Reform Revolution</p>
      </div>
  </div>

  <hr>
<form action="register.php" method="POST">
  <div class="userform">
      <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Username</label>
          <div class="col-10">
              <input class="form-control" type="text" name="userid" placeholder="username" >
          </div>
      </div>
      <div class="form-group row">
          <label for="example-password-input" class="col-2 col-form-label">Password</label>
          <div class="col-10">
              <input class="form-control" type="password" name="pwd">
          </div>
      </div>
      <div class="form-group row">
          <label for="example-password-input" class="col-2 col-form-label">Confirm</label>
          <div class="col-10">
              <input class="form-control" type="password" name="pwd2">
          </div>
      </div>
      <hr>
      <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">First Name</label>
          <div class="col-10">
              <input class="form-control" type="text" name="fname" placeholder="First Name" >
          </div>
      </div>
      <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Last Name</label>
          <div class="col-10">
              <input class="form-control" type="text" name="lname" placeholder="Last Name" >
          </div>
      </div>
      <div class="form-group row">
          <label for="example-email-input" class="col-2 col-form-label">Email</label>
          <div class="col-10">
                <input class="form-control" type="email" name="email" placeholder="example@reform.com" >
          </div>
      </div>
      <div class="form-group row">
          <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
          <div class="col-10">
              <input class="form-control" type="text" placeholder="1-(555)-555-5555" name="phone">
          </div>
      </div>
      <div class="container-fluid">
          <div class="btnsubmit">
                <button type="submit" class="btn btn-primary btn-lg">SIGN UP</button>
          </div>
      </div>

  </div>
</form>
</main>

<?php require 'footer.php'; ?>
