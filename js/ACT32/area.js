function runActivity() {
  let base;
  let height;
  let radius;
  let length;
  let width;
  let area;
  let choice = Number(
    prompt(
      "What shape would ou like to solve the area for? (1) Triangle, (2) Circle, (3) Rectangle"
    )
  );

  if (choice == 1) {
    base = Number(prompt("What is the base of the triangle?"));
    height = Number(prompt("What is the height of the triangle?"));
    area = (1 / 2) * (base * height);
    console.log("The area of the triangle is " + area);
  } else if (choice == 2) {
    radius = Number(prompt("What is the radius of the circle?"));
    area = 3.1416 * radius ** 2;
    console.log("The area of the circle is " + area);
  } else if (choice == 3) {
    length = Number(prompt("What is the length of the rectangle?"));
    width = Number(prompt("What is the width of the rectangle?"));
    area = length * width;
    console.log("The area of the rectangle is " + area);
  } else {
    console.error("ERROR: Invalid input! Enter 1, 2, or 3.");
  }
}
