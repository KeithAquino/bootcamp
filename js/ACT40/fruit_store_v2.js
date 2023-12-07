function runActivity() {
  const fruit_names = [];
  const fruit_prices = [];
  const fruit_stocks = [];

  function addItem() {
    let fruit_name = prompt("What is the name of the fruit?");
    let fruit_price = Number(prompt("What is the price of the fruit?"));
    let fruit_stock = 0;

    if (fruit_price > 0) {
      fruit_names.push(fruit_name);
      fruit_prices.push(fruit_price);
      fruit_stocks.push(fruit_stock);
      console.log(
        "The fruit " +
          fruit_name +
          " is added as item for sale. Each " +
          fruit_name +
          " sells for " +
          fruit_price +
          ". Stock set to 0."
      );
    } else {
      console.error("ERROR: Invalid price amount! Enter a positive value.");
    }
  }

  function restock() {
    let choice_name = prompt("What would you like add stock to?");
    let fruit_found = false;

    for (let i = 0; i < fruit_names.length; i++) {
      if (fruit_names[i] == choice_name) {
        fruit_found = true;
        let add_stock = Number(
          prompt(
            "How many of " + choice_name + " would you like to add to stock?"
          )
        );

        if (add_stock > 0) {
          fruit_stocks[i] += add_stock;
          console.log(
            add_stock +
              " stock has been added to " +
              choice_name +
              ". New stock: " +
              fruit_stocks[i]
          );
        } else {
          console.error("ERROR: Invalid stock amount! Enter a positive value.");
        }
      }
    }

    if (fruit_found == false) {
      console.error("ERROR: Fruit was not found.");
    }
  }

  function checkPrice() {
    let choice_name = prompt("What would you like to check the price of?");
    let fruit_found = false;

    for (let i = 0; i < fruit_names.length; i++) {
      if (fruit_names[i] == choice_name) {
        fruit_found = true;
        let amount = Number(
          prompt("How many " + choice_name + " would you like to check?")
        );

        if (amount > 0) {
          let total = amount * fruit_prices[i];
          console.log(
            amount + " of " + choice_name + " is worth " + total + "."
          );
        } else {
          console.error("ERROR: Invalid fruit amount! Enter a positive value.");
        }
      }
    }

    if (fruit_found == false) {
      console.error("ERROR: Fruit was not found.");
    }
  }

  function sell() {
    let choice_name = prompt("What would you like to sell?");
    let fruit_found = false;

    for (let i = 0; i < fruit_names.length; i++) {
      if (fruit_names[i] == choice_name) {
        fruit_found = true;
        let amount = Number(
          prompt("How many of " + choice_name + " would you like to sell?")
        );

        if (amount > 0 && amount <= fruit_stocks[i]) {
          let total = amount * fruit_prices[i];
          fruit_stocks[i] -= amount;
          console.log(
            amount +
              " of " +
              choice_name +
              " sold for " +
              total +
              ". New stock: " +
              fruit_stocks[i]
          );
        } else if (amount <= 0) {
          console.error("ERROR: Invalid fruit amount! Enter a positive value.");
        } else {
          console.error("ERROR: Insufficient stock available.");
        }
      }
    }

    if (fruit_found == false) {
      console.error("ERROR: Fruit was not found.");
    }
  }

  alert("Keith's Fruit Store");
  let i = 0;
  while (i == 0) {
    let choice = Number(
      prompt("(1) Add new items (2) Restock (3) Check price (4) Sell (5) Stop")
    );
    switch (choice) {
      case 1:
        addItem();
        break;
      case 2:
        restock();
        break;
      case 3:
        checkPrice();
        break;
      case 4:
        sell();
        break;
      case 5:
        i = 1;
        break;
      default:
        console.error("ERROR: Enter one of the choices.");
    }
  }
}
