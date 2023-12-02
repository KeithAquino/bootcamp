function runActivity() {
  let animal = prompt("Give me an animal.");
  let guess;

  while (true) {
    guess = prompt("What is my animal?");
    if (guess == animal) {
      console.log("Yes! My animal is " + animal);
      break;
    } else {
      console.log("No, my animal is not " + guess);
    }
  }
}
