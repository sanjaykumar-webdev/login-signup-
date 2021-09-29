$(document).ready(function () {
  $("#update").click(function () {
    var age = $("#age").val();
    var dob = $("#dob").val();
    var gender = $("#gender").val();
    var contact = $("#contact").val();
    if (age != "" && dob != "" && gender != "") {
      $.ajax({
        url: "profileupdate.php",
        method: "POST",
        data: {
          age: age,
          dob: dob,
          gender: gender,
          contact: contact,
        },
        success: function (data) {
          //alert(data);
          if (data == "No") {
            alert("error");
          } else {
            alert("data updated sucessfully");
          }
        },
      });
    } else {
      alert("ALL Fields required");
    }
  });
});
