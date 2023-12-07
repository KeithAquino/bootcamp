function runActivity() {
  const fruit_names = [];
  const fruit_prices = [];

  while (true) {
    let fruit_name = prompt("What is the name of the fruit? (0) Stop");
    if (fruit_name == 0) {
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
}
