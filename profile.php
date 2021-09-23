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
    <h3 align="center">Add additional informations</h3>
    <br />
    <form class="form-horizontal" method="POST" id="form">
      <fieldset>
        <div class="control-group">
          <label class="control-label">Age</label>
          <div class="controls">
            <input type="text" id="Age" name="age" class="form-control form-control-lg" placeholder="Age" required="required" data-validation-required-message="Please enter your Username">
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
            <input type="text" id="Gender" name="gender" class="form-control form-control-lg" placeholder="Enter your gender" required="required" data-validation-required-message="Please provide your password">
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
            <button class="btn btn-info" type="submit" class="form-control form-control-lg" class="btn btn-primary" id="send">Update</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</body>

</html>