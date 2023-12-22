const ex = require("express");
const ps = require("./pet_store");

const app = ex();

app.use(ex.json());
const p = ps.pets;

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
  const pet_species = [];

  for (let i = 0; i < p.length; i++) {
    const species = p[i].species;

    if (!pet_species.includes(species)) {
      pet_species.push(species);
    }
  }

  if (pet_species.length > 0) {
    res.send(pet_species);
    console.log(pet_species);
  } else {
    let err = "No pet species found!";
    res.status(404);
    res.send(err);
    console.error(err);
  }
});

app.listen(3001);
console.log("Starting server...");
