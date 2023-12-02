function runActivity() {
  let cash = 200;
  let choice;

  choice = Number(
    prompt(
      "Hello! Would you like to buy this perfume for 300 pesos? 0. Yes, 1. No"
    )
  );

  if (choice == 0 && cash >= 300) {
    cash -= 300;
    console.log("We hope you enjoy!");
  } else if (choice == 0) {
    console.log("You poor?");
  } else if (choice == 1) {
    console.log("Edi wow.");
  } else {
    console.error("ERROR: Invalid input!");
  }

  console.log("Remaining cash: " + cash);

  choice = Number(
    prompt("Hi! We offer insurance for 400 pesos. 0. Yes, 1. No")
  );

  if (choice == 0) {
    if (cash >= 400) {
      cash -= 400;
      console.log("Thank you for availing.");
    } else {
      console.log("You don't have enough funds.");
    }
  } else if (choice == 1) {
    console.log("We appreciate your time.");
  } else {
    console.error("ERROR: Invalid input!");
  }

  console.log("Remaining cash: " + cash);
}
