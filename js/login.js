$(document).ready(function () {
  $("#send").click(function () {
    var email = $("#email").val();
    var password = $("#password").val();
    if (email != "" && password != "") {
      $.ajax({
        url: "loginsubmit.php",
        method: "POST",
        data: {
          email: email,
          password: password,
        },
        success: function (data) {
          //alert(data);
          if (data == "No") {
            alert(
              "error please enter correct details or check you have an account"
            );
          } else {
            alert("logged in successfully");
          }
        },
      });
    } else {
      alert("Both Fields are required");
    }
  });
  $("#logout").click(function () {
    var action = "logout";
    $.ajax({
      url: "loginsubmit.php",
      method: "POST",
      data: {
        action: action,
      },
      success: function () {
        location.reload();
      },
    });
  });
});
