async function getData(data) {
  let my_obj = await fetch(data);
  let my_text = await my_obj.text();
  let books = JSON.parse(my_text);

  for (let i = 0; i < books.length; i++) {
    let row =
      "<tr><td>" +
      books[i].id +
      "</td><td>" +
      books[i].title +
      "</td><td>" +
      books[i].genre +
      "</td></tr>";
    $("#book_list").append(row);
  }
}
