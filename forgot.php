
<?php
  set_include_path('D:xampp/htdocs/phplogin/');
  require_once 'header.php';
  ?>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
      <div class="container">
          <h1>OOPS!You forgot your password?</h1>
          <p>no problem :) we will send you an email resetting your password</p>
      </div>
  </div>

  <div class="userform">
      <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Username</label>
          <div class="col-10">
              <input class="form-control" type="text" value="Last Name" id="example-text-input">
          </div>
      </div>
      <div class="form-group row">
          <label for="example-email-input" class="col-2 col-form-label">Email</label>
          <div class="col-10">
              <input class="form-control" type="email" value="email@example.com" id="example-email-input">
          </div>
      </div>
      <div class="container-fluid">
          <div class="btnsubmit">
                <button type="submit" class="btn btn-primary btn-lg">Reset Password</button>
          </div>
      </div>

  </div>


  </div>
  </main>

<?php require 'footer.php'; ?>
