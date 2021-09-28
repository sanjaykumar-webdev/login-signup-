<!DOCTYPE html>
<html>

<head>
  <title>PHP Mysql Registration with Jquery Ajax</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.sass">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.6/jqBootstrapValidation.js"></script>
</head>

<body>
  <div class="container">
    <br />
    <h3 align="center">Login</h3>
    <br />
    <form class="form-horizontal" id="form">
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
        <label class="control-label">Don't have account</label>
        <div class="controls">
          <a href="signup.php">SignUp</a>
        </div>
      </div>

      <div class="control-group">
        <div class="controls">
          <button class="btn btn-info" type="submit" class="form-control form-control-lg" id="send">Login</button>
        </div>
        <span id="response"></span>
      </div>
    </form>
  </div>
  <script>
    $("#send").click(function() {
      $.ajax({
        url: "loginsubmit.php",
        type: "post",
        data: $("#form").serialize(),
      });
    });
  </script>
</body>
</body>

</html>