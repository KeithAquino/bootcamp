$(document).ready(function () {
  let dark_mode;
  $("#button-dark").click(function () {
    if (dark_mode == false) {
      $("body").css("background-color", "rgb(16, 16, 16").css("color", "white");
      dark_mode = true;
    } else {
      $("body").css("background-color", "white").css("color", "black");
      dark_mode = false;
    }
  });

  $("#button-zoom").click(function () {
    $("#cover-image").css("position", "absolute");
    $("#cover-image").animate(
      {
        width: "300px",
        left: "50%",
      },
      2000
    );
  });

  $("#button-zoomtext").click(function () {
    let f_size = $("#para1").css("font-size").replace("px", "");
    f_size = Number(f_size);
    f_size++;
    $("#para1").css("font-size", f_size + "px");
  });
});
