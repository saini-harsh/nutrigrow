$(document).ready(function () {
  $("#close").click(function () {
    $(".content").fadeOut();
  });
  $(".abs").each(function (i, ele) {
    $(ele).click(function () {
      var heading = $(ele).find("h4").text();
      var paragraph = $(ele).find("p").text();

      $(".content").fadeIn();
      $(".changecbd").text(heading);
      $(".pchange").text(paragraph);
    });
  });
});
