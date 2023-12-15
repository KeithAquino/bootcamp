$(document).ready(function () {
  let students = $("#student-count").text();
  $("#studentButton").click(function () {
    students++;
    $("#student-count").text(students);
  });

  $(".card-body").click(function () {
    $(this).toggleClass("subject-selected");
  });
});
