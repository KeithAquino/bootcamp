$(document).ready(function () {
  let hunger = 100;
  let exercise = 100;
  let sleep = 100;

  $("#do_eat").click(function () {
    hunger = 100;
    sleep -= 5;
    $("#last_activity").text("Fed Candy!");
    $("#sleep_bar").css("width", sleep + "%");
  });

  $("#do_exercise").click(function () {
    exercise = 100;
    sleep -= 10;
    $("#last_activity").text("Played with Candy!");
    $("#sleep_bar").css("width", sleep + "%");
  });

  $("#do_sleep").click(function () {
    sleep = 100;
    $("#last_activity").text("Candy took a nap!");
    $("#sleep_bar").css("width", sleep + "%");
  });

  setInterval(hunger_bar, 500);
  function hunger_bar() {
    hunger -= 1;
    $("#hunger_bar").css("width", hunger + "%");
  }

  setInterval(exercise_bar, 1000);
  function exercise_bar() {
    exercise -= 1;
    $("#exercise_bar").css("width", exercise + "%");
  }

  setInterval(sleep_bar, 2000);
  function sleep_bar() {
    sleep -= 1;
    $("#sleep_bar").css("width", sleep + "%");
  }
});
