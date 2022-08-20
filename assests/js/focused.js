$(document).ready(function () {
  $(".gbox").each(function (i, ele) {
    // console.log(ele);
    $(ele).click(function () {
      console.log(ele);
      $(".gbox").removeClass("active");
      $(ele).addClass("active");
    });
    // console.log(focusextract);
  });
});

