function runActivity() {
  let x = 4;
  let z = 3;
  let y = 0;
  if (x > 2 && x < 5) {
    if (x <= 4 || y != 0 || x + 2 > 9 || z == 4) {
      if ((x > 4 && y < 2) || z == 4) {
        x += 1;
        y += 1;
        z += 1;
      }
      x += 1;
      y += 1;
      z += 1;
    }
    x += 1;
    z += 1;
  }
  console.log(x + z + y);
}
