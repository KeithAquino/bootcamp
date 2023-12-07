function runActivity() {
  function toCelsius(f) {
    let cel = ((f - 32) * 5) / 9;
    return cel;
  }

  let fah = Number(prompt("Give me a fahrenheit value.")); //fah = 50
  console.log(fah + " in Celsius is " + toCelsius(fah));
}
