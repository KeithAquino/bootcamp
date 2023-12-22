const dt = require("./datetime.js");
const cl = require("./calc.js");
const bk = require("./books.js");

console.log(dt.today);
dt.greetings();
console.log(cl.getSum(5, 5));
console.log(bk.books[0].title);
console.log("End of program");
