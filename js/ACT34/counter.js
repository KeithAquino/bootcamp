function runActivity() {
  let c_even = 0;
  let c_odd = 0;
  let c_pos = 0;
  let c_neg = 0;
  let c_int = 0;
  let c_deci = 0;
  let num;
  let num_count = Number(
    prompt("How many numbers would you like to enter? 2-20")
  );

  if (num_count >= 2 && num_count <= 20) {
    for (let i = 0; i < num_count; i++) {
      num = Number(prompt("Give me a number."));

      if (num > 0) {
        c_pos++;
      } else if (num < 0) {
        c_neg++;
      }

      if (num % 1 == 0) {
        //check if the number is an integer
        c_int++;
        if (num % 2 == 0) {
          if (num != 0) {
            c_even++;
          }
        } else {
          c_odd++;
        }
      } else {
        c_deci++;
      }
    }

    console.log("Number count: " + num_count);
    console.log("Even numbers: " + c_even);
    console.log("Odd numbers: " + c_odd);
    console.log("Positive numbers: " + c_pos);
    console.log("Negative numbers: " + c_neg);
    console.log("Integers: " + c_int);
    console.log("Decimal numbers: " + c_deci);
  } else {
    console.error("ERROR: Invalid input! Must be a number between 2 and 20.");
  }
}
