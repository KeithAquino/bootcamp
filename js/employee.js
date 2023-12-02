function runActivity() {
  let employee_name;
  let employee_dept_code;
  let department;
  let choice;
  let i = 500;

  do {
    employee_name = prompt("What is the employee name?");
    employee_dept_code = Number(
      prompt("What is the employee's department code? 1-3")
    );
    console.log("Saving employee data...");
    console.log("Welcome, " + employee_name);
    switch (employee_dept_code) {
      case 1:
        department = "Human Resources";
        break;
      case 2:
        department = "Marketing";
        break;
      case 3:
        department = "IT";
        break;
    }

    console.log("This employee is in the " + department + " department.");

    choice = Number(
      prompt("Would you like to add another employee? 0. Yes, 1. No")
    );

    if (choice == 0) {
      console.log("Adding new employee...");
    } else if (choice == 1) {
      console.log("Stopping program.");
      break;
    }
  } while (i == 0);

  console.log("This is the end of the program.");
}
