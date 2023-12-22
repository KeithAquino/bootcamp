const ex = require("express");
const fs = require("fs");
const bk = require("./books");
const cors = require("cors");

const app = ex();

app.use(ex.json());
app.use(cors());
const b = bk.books;

// API
app.get("/api/books", (req, res) => {
  res.send(b);
});

app.get("/api/books/:id", (req, res) => {
  let book = false;
  for (let i = 0; i < b.length; i++) {
    if (b[i].id == Number(req.params.id)) {
      book = b[i];
      break;
    }
  }

  if (book) {
    res.send(book);
    console.log(book);
  } else {
    let err = "Book not found!";
    res.status(404);
    res.send(err);
    console.error(err);
  }
});

app.get("/api/books/genre/:genre", (req, res) => {
  let books = [];
  for (let i = 0; i < b.length; i++) {
    if (b[i].genre.toLowerCase() == req.params.genre.toLowerCase()) {
      books.push(b[i]);
    }
  }

  if (books.length > 0) {
    res.send(books);
  } else {
    let err = "No books of that genre found!";
    res.status(404);
    res.send(err);
  }
});

app.put("/api/books", (req, res) => {
  let new_book = {
    id: b.length,
    title: req.body.title,
    description: req.body.description,
    genre: req.body.genre,
  };

  console.log(new_book);
  b.push(new_book);
  res.send(new_book);
});

app.put("/api/books/:id", (req, res) => {
  let book = false;
  for (let i = 0; i < b.length; i++) {
    if (b[i].id == Number(req.params.id)) {
      book = b[i];
      break;
    }
  }

  if (book) {
    if (req.body.title) {
      book.title = req.body.title;
    }
    if (req.body.genre) {
      book.genre = req.body.genre;
    }
    console.log(book);
    res.send(book);
  } else {
    let err = "Book not found!";
    res.status(404);
    console.log(err);
    res.send(err);
  }
});

app.delete("/api/books/:id", (req, res) => {
  let book = false;
  for (let i = 0; i < b.length; i++) {
    if (b[i].id == Number(req.params.id)) {
      book = b[i];
      break;
    }
  }

  if (book) {
    let index = b.indexOf(book);
    console.log(book);
    // b.splice(index, 1);
    b[index] = {};
    res.send(book);
  } else {
    let err = "Book not found!";
    res.status(404);
    console.log(err);
    res.send(err);
  }
});

// Main website
app.get("/home", (req, res) => {
  res.send("Hello world!");
});

app.get("/about", (req, res) => {
  console.log("Someone accessed the About page");
  res.send("About page");
});

app.get("/shop", (req, res) => {
  console.log("Someone accessed the Shop page");
  //   res.send("Shop page");
  fs.readFile("shop.html", function (err, data) {
    res.writeHead(200, { "Content-Type": "text/html" });
    res.write(data);
    res.end();
  });
});

// Server setup
app.listen(3000);
console.log("Starting server...");
