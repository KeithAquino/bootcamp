import $ from "jquery";

$(document).ready(function () {
  const menu_prices = {
    burger: 60,
    steak: 80,
    fries: 50,
    salad: 70,
    sprite: 25,
    icecream: 25,
  };
  const menu_names = {
    burger: "Burger",
    steak: "Steak",
    fries: "Fries",
    salad: "Salad",
    sprite: "Sprite",
    icecream: "Ice Cream",
  };
  let total_price = 0;

  $("#food-order").submit(function (x) {
    let food_select = $("#food-select").val();
    let food_amount = $("#food-amount").val();
    let price = menu_prices[food_select] * Number(food_amount);
    total_price += price;
    let curr_table = $("#food-table-list").html();
    let new_item =
      "<tr><td>" +
      menu_names[food_select] +
      "</td><td>" +
      food_amount +
      "</td><td>₱" +
      price +
      "</td></tr>";
    $("#food-table-list").html(curr_table + new_item);
    $("#food-table-total").text(total_price);
    x.preventDefault();
  });

  $("#get_all").click(function () {
    if ($("#get_all").prop("checked")) {
      $(".sauce").prop("checked", true);
    } else {
      $(".sauce").prop("checked", false);
    }
  });

  $(".sauce").click(function () {
    if ($(this).prop("checked") == false) {
      $("#get_all").prop("checked", false);
    }
  });
});
