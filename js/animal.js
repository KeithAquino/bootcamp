function runActivity() {
  class Dog {
    constructor(n, a, b) {
      this.name = n;
      this.age = a;
      this.breed = b;
    }

    bark() {
      return this.name + ": Bow wow wow";
    }

    rename(n) {
      console.log(this.name + "'s name is now " + n);
      this.name = n;
    }

    set_age(a) {
      console.log(this.name + "'s age is now " + a);
      if (a >= 0) {
        this.age = a;
      }
    }
  }

  class PoliceDog extends Dog {
    constructor(n, a, b, yos) {
      super(n, a, b);
      this.years_of_service = yos;
    }

    bark() {
      return this.name + ": Grrr arf arf";
    }
  }

  class DrugDog extends PoliceDog {
    constructor(n, a, b, yos, noc) {
      super(n, a, b, yos);
      this.number_of_cases = noc;
    }

    sniff() {
      return "Sniff sniff";
    }
  }

  let dogs = [];

  dogs[0] = new Dog("Hachiko", 2, "husky");
  console.log(dogs[0].bark());
  dogs[0].age = 3;
  dogs[0].rename("Pancho");
  console.log(
    "Hello! My name is " +
      dogs[0].name +
      " and I'm " +
      dogs[0].age +
      " years old."
  );

  dogs[1] = new Dog("Bogart", 4, "corgi");
  dogs[1].set_age(5);
  console.log(dogs[1].bark());

  dogs[2] = new PoliceDog("Race", 5, "american bully", 5);
  console.log("Hello! My name is " + dogs[2].name + " and I'm a police dog!");
  console.log("I have served " + dogs[2].years_of_service + " years.");
  console.log(dogs[2].bark());

  dogs[3] = new Dog("Cookie", 2, "chihuahua");
  dogs[3].breed = "poodle";

  dogs[4] = new DrugDog("Louie", 4, "bloodhound", 1, 30);
  console.log(dogs[4].sniff());
}
