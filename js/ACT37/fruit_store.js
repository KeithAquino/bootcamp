function runActivity() {
  const fruit_names = [];
  const fruit_prices = [];

  while (true) {
    let fruit_name = prompt("What is the name of the fruit? (0) Stop");
    if (fruit_name === "0") {
      break;
    }
    let fruit_price = Number(prompt("What is the price of the fruit?"));

    if (fruit_price >= 0) {
      fruit_names.push(fruit_name);
      fruit_prices.push(fruit_price);
    } else {
      console.error("ERROR: Invalid price! Enter a positive value.");
    }
  }

  for (let i = 0; i < fruit_names.length; i++) {
    console.log(fruit_names[i] + " | PHP " + fruit_prices[i]);
  }

  while (true) {
    let choice_name = prompt("What would you like to buy? (0) Stop");
    if (choice_name == "0") {
      break;
    }

    let fruit_found = false;
    for (let i = 0; i < fruit_names.length; i++) {
      if (fruit_names[i] == choice_name) {
        fruit_found = true;
        let fruit_quantity = Number(
          prompt("How much of " + fruit_names[i] + " are you going to buy?")
        );

        if (fruit_quantity >= 0) {
          console.log("Total price: PHP " + fruit_quantity * fruit_prices[i]);
        } else {
          console.error("ERROR: Cannot buy a negative amount!");
        }
      }
    }
    if (fruit_found == false) {
      console.error("ERROR: Fruit not found!");
    }
  }
}
