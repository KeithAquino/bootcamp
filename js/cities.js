function runActivity() {
  const city_names = ["Ormoc", "Cebu", "Bacolod", "Tacloban", "Silay"];
  const city_population = [23000, 3000000, 4000000, 245000, 90000];

  for (let i = 0; i < city_names.length; i++) {
    console.log(
      "City: " + city_names[i] + " | Population: " + city_population[i]
    );
  }
}
