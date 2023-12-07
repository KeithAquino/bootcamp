function runActivity() {
  class Car {
    constructor(n, m, a) {
      if (a <= 0) {
        console.error("Error: Input a positive number.");
        return;
      }

      this.name = n;
      this.manufacturer = m;
      this.acceleration = a;
      this.speed = 0;
      this.started = false;
    }

    start() {
      if (this.started == false) {
        this.speed = 30;
        this.started = true;
        console.log(this.name + " has started! Speed at " + this.speed);
      } else {
        console.error(this.name + " has already started.");
      }
    }

    accelerate() {
      if (this.started == true) {
        this.speed += this.acceleration;
        console.log(this.name + " has accelerated! New speed: " + this.speed);
      } else {
        console.error(this.name + " has not started yet.");
      }
    }

    decelerate() {
      if (this.started == true) {
        this.speed = Math.max(this.speed / 2);
        if (this.speed < 1) {
          console.error(this.name + " has reached it's minimum speed.");
        } else {
          console.log(this.name + " has decelerated! New speed: " + this.speed);
        }
      } else {
        console.error(this.name + " has not started yet.");
      }
    }

    checkSpeed() {
      console.log("Current speed: " + this.speed);
    }

    stop() {
      if (this.started == true) {
        this.speed = 0;
        this.started = false;
        console.log(this.name + " has stopped.");
      } else {
        console.error(this.name + " has not started yet.");
      }
    }
  }

  let n = prompt("Give me the car's name.");
  let m = prompt("Give me the car's manufacturer.");
  let a = Number(prompt("Give me the car's acceleration."));
  let myCar = new Car(n, m, a);

  let i = 0;
  while (i == 0) {
    let choice = Number(
      prompt(
        "(1) Start (2) Accelerate (3) Decelerate (4) Check Speed (5) Stop (6) End program"
      )
    );

    switch (choice) {
      case 1:
        myCar.start();
        break;
      case 2:
        myCar.accelerate();
        break;
      case 3:
        myCar.decelerate();
        break;
      case 4:
        myCar.checkSpeed();
        break;
      case 5:
        myCar.stop();
        break;
      case 6:
        i = 1;
        break;
      default:
        console.error("Error. Please choose between 1-6.");
    }
  }
}
