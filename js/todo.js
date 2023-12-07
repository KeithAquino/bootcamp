function runActivity() {
  const todo_list = [];

  while (true) {
    let todo = prompt("Add item for to-do list (0) Stop: ");
    if (todo != 0) {
      console.log("Length: " + todo.length);
      if (todo.toLowerCase() == "buy food") {
        let food_buy = prompt("What food would you like to buy?");
        todo_list.push("buy ".concat(food_buy, " from grocery"));
      } else {
        todo_list.push(todo.trim());
      }
    } else {
      break;
    }
  }
  for (let i = 0; i < todo_list.length; i++) {
    console.log(i + ". " + todo_list[i]);
  }
  console.log("End of program");
}
