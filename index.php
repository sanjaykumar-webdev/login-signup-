<!DOCTYPE html>
<html>

<head>
  <title>PHP Mysql Registration with Jquery Ajax</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.sass">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.6/jqBootstrapValidation.js"></script>
  <script src="js/login.js"></script>
  <script src="js/profile.js"></script>
</head>

<body>
  <div class="container">
    <br />
    <?php
    session_start();

    if (isset($_SESSION['email'])) {
    ?>
      <br />
      <h3 align="center">Add additional informations</h3>
      <br />
      <form class="form-horizontal" method="POST" id="form">
        <div class="control-group">
          <label class="control-label">Age</label>
          <div class="controls">
            <input type="text" id="age" name="age" class="form-control form-control-lg" placeholder="Age" required="required" data-validation-required-message="Please enter your Username">
            <p class="text-danger help-block"></p>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">DOB</label>
          <div class="controls">
            <input type="datetime-local" id="dob" name="dob" class="form-control form-control-lg" placeholder="Date of birth" required="required" data-validation-required-message="Please provide your E-mail">
            <p class="text-danger help-block"></p>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Gender</label>
          <div class="controls">
            <input type="text" id="gender" name="gender" class="form-control form-control-lg" placeholder="Enter your gender" required="required" data-validation-required-message="Please provide your password">
            <p class="text-danger help-block"></p>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Contact no</label>
          <div class="controls">
            <input type="number" id="contact" class="form-control form-control-lg" name="contact" placeholder="Contact" required="required" data-validation-required-message="Please confirm password">
            <p class="text-danger help-block"></p>
          </div>
        </div>
        <div class="control-group">
          <div id="success"></div>
          <div class="controls">
            <button class="btn btn-info" type="submit" class="form-control form-control-lg" id="update">Update</button>
            <button class="btn btn-info" type="submit" class="form-control form-control-lg" id="logout">Logout</button>
          </div>
        </div>
      </form>
    <?php
    } else {
    ?>
  </div>
  <br />
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
        <button class="btn btn-info" type="submit" name="submit" class="form-control form-control-lg" id="send">Login</button>
      </div>
    </div>
  </form>
  </div>
<?php
    }
?>
<script>
</script>
</body>
</body>

</html>