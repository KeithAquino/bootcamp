$(document).ready(function () {
  $(".genre").click(function () {
    let genre = $(this).text();
    sessionStorage.setItem("genre_selected", genre);
    window.location.href = "genre.html";
  });
});
