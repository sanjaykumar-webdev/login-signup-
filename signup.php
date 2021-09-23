<!DOCTYPE html>
<html>

<head>
  <title>PHP Mysql Registration Form Validation using jqBootstrapValidation with Jquery Ajax</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.6/jqBootstrapValidation.js"></script>
</head>

<body>
  <div class="container">
    <br />
    <h3 align="center">SignUp</h3>
    <br />
    <form class="form-horizontal" method="POST" id="form">
      <fieldset>
        <div class="control-group">
          <label class="control-label" for="username">Username</label>
          <div class="controls">
            <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Name" required="required" data-validation-required-message="Please enter your Username">
            <p class="text-danger help-block"></p>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="email">E-mail</label>
          <div class="controls">
            <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" required="required" data-validation-required-message="Please provide your E-mail">
            <p class="text-danger help-block"></p>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="password">Password</label>
          <div class="controls">
            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" required="required" data-validation-required-message="Please provide your password">
            <p class="text-danger help-block"></p>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="password_confirm">Password (Confirm)</label>
          <div class="controls">
            <input type="password" id="password_confirm" class="form-control form-control-lg" name="confirmpassword" placeholder="Password (Confirm)" required="required" data-validation-required-message="Please confirm password">
            <p class="text-danger help-block"></p>
          </div>
        </div>
        <div class="control-group">
          <div id="success"></div>
          <div class="controls">
            <button class="btn btn-success" type="submit" class="form-control form-control-lg" class="btn btn-primary" id="send">Register</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  <script>
    $("#send").click(function() {
      $.ajax({
        url: "signupsubmit.php",
        type: "post",
        data: $("#form").serialize(),
      });
    });
  </script>
</body>

</html>