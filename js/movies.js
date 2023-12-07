function runActivity() {
  const movie_names = [
    "The Hows of Us",
    "She's Dating the Gangster",
    "Barcelona",
    "2 Good 2 Be True",
    "Crazy Beautiful You",
  ];

  // movie_names[2] = "Barcelona: A Love Untold";
  // movie_names.push("Can't Help Falling In Love");
  // movie_names.push("Hello, Love, Goodbye");
  // movie_names.unshift("Can't Help Falling In Love");
  // movie_names.pop();
  // movie_names.shift();
  // movie_names[3] = null;

  for (let i = 0; i < movie_names.length; i++) {
    console.log(i + ". " + movie_names[i]);
  }

  // const movie_names = [];
  // const movie_budgets = [];

  // while (true) {
  //   let movie_name = prompt("What is the movie name?");
  //   let movie_budget = Number(prompt("What is the movie budget?"));

  //   movie_names.push(movie_name);
  //   movie_budgets.push(movie_budget);
  //   console.log("Added movie to database.");

  //   let choice = Number(
  //     prompt("Would you like to add another movie? 0. Yes, 1. No")
  //   );
  //   if (choice == 0) {
  //     console.log("Adding new movie...");
  //   } else if (choice == 1) {
  //     break;
  //   }
  // }
}
