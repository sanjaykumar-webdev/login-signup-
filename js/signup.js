$(document).ready(function () {
  $("#send").click(function () {
    var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();
    if (username != "" && email != "" && password != "") {
      $.ajax({
        url: "signupsubmit.php",
        method: "POST",
        data: {
          username: username,
          email: email,
          password: password,
        },
        success: function (data) {
          //alert(data);
          if (data == "No") {
            alert("error");
          } else {
            alert("signup successfull please login to add additional details");
          }
        },
      });
    } else {
      alert("ALL Fields required");
    }
  });
});
