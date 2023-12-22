const ex = require("express");
const ps = require("./pet_store");

const app = ex();
const p = ps.pets;

app.use(ex.json());

app.get("/api/pets", (req, res) => {
  res.send(p);
});

app.get("/api/pets/:id", (req, res) => {
  let pet = false;
  for (let i = 0; i < p.length; i++) {
    if (p[i].id == Number(req.params.id)) {
      pet = p[i];
      break;
    }
  }

  if (pet) {
    res.send(pet);
    console.log(pet);
  } else {
    let err = "Pet not found!";
    res.status(404);
    res.send(err);
    console.error(err);
  }
});

app.get("/api/pets/list/species", (req, res) => {
  let species = [];
  for (let i = 0; i < p.length; i++) {
    if (species.includes(p[i].species) == false) {
      species.push(p[i].species);
    }
  }

  res.send(species);
});

app.put("/api/pets", (req, res) => {
  let new_pet = {
    id: p.length,
    species: req.body.species,
    eating_habit: req.body.eating_habit,
    pet_name: req.body.pet_name,
  };

  console.log(new_pet);
  b.push(new_pet);
  res.send(new_pet);
});

app.put("/api/pets/:id", (req, res) => {
  let pet = false;
  for (let i = 0; i < p.length; i++) {
    if (p[i].id == Number(req.params.id)) {
      pet = p[i];
      break;
    }
  }

  if (pet) {
    if (req.body.species) {
      pet.species = req.body.species;
    }
    if (req.body.eating_habit) {
      pet.eating_habit = req.body.eating_habit;
    }
    if (req.body.pet_name) {
      pet.pet_name = req.body.pet_name;
    }
    console.log(pet);
    res.send(pet);
  } else {
    let err = "Pet not found!";
    res.status(404);
    console.log(err);
    res.send(err);
  }
});

app.delete("/api/pets/:id", (req, res) => {
  let pet = false;
  for (let i = 0; i < p.length; i++) {
    if (p[i].id == Number(req.params.id)) {
      pet = p[i];
      break;
    }
  }

  if (pet) {
    let index = p.indexOf(pet);
    console.log(pet);
    p[index] = {};
    res.send(pet);
  } else {
    let err = "Pet not found!";
    res.status(404);
    console.log(err);
    res.send(err);
  }
});

app.listen(3001);
console.log("Starting server...");
