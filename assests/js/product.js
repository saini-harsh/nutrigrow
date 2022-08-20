$(function () {
  $("#size").on("change", function (event) {
    console.log(event.type + " event with:", $(this).val());
    $(this).prev("input").val($(this).val());
  });
  $("#category").on("change", function (event) {
    console.log(event.type + " event with:", $(this).val());
    $(this).prev("input").val($(this).val());
  });
  $("#quantity").on("change", function (event) {
    console.log(event.type + " event with:", $(this).val());
    $(this).prev("input").val($(this).val());
    var InputNumber = $(this).val();
    console.log(InputNumber);
    var TotalPrice = document.getElementById("multiplyprice").innerHTML;
    TotalPrice = TotalPrice * InputNumber;
    console.log(TotalPrice);
    document.getElementById("multiplyprice").innerHTML = TotalPrice;
  });
});
