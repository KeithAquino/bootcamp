function runActivity() {
  const suspects = [
    "Alfred",
    "Bonnie",
    "Craig",
    "Danny",
    "Eric",
    "Flint",
    "Gayle",
    "Heidi",
    "Isabel",
    "Jacobs",
  ];
  const wanted = ["Alfred", "Danny", "Jacobs"];

  for (let i = 0; i < suspects.length; i++) {
    console.log("Checking wanted list for " + suspects[i] + "...");
    for (let j = 0; j < wanted.length; j++) {
      if (suspects[i] == wanted[j]) {
        console.log("Suspect is wanted!");
        break;
      }
    }
  }
}
