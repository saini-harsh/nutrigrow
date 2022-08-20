$(document).ready(function () {
  $("#cform").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "contactpage.php",
      data: $(this).serialize(),
      success: function (response) {
        $("#success").html(response);
      },
    });
  });
});
