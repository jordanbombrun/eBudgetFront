<?php
include './modules/header.html';
include './modules/menu.html';
?>

<div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2">
          <div class="register-form">
            <form action="" method="post">
              <h2 class="text-center">Inscription</h2>
              <p class="hint-text">Bienvenu chez nous.</p>
              <div class="row">
                <div class="col-md-6 col-xs-12">
                  <div class="form-group">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required="required">
                  </div>
                </div>
                <div class="col-md-6 col-xs-12">
                  <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required="required">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
              </div>
              <div class="form-group">
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required="required">
              </div>
              <div class="row">
                <div class="col-md-6 col-xs-12">
                  <div class="form-group">
                    <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7">
                  </div>
                </div>
                <div class="col-md-6 col-xs-12">
                  <div class="form-group">
                    <a href="./acceuil.html" class="btn btn-success btn-block btn-lg">Sign In</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>

<?php
include './modules/footer.html';
?>
