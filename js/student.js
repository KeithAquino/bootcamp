function runActivity() {
  let s_name;
  let s_old_grade;
  let s_new_grade;

  for (let i = 0; i < 3; i++) {
    s_name = prompt("Give me the student's name:");
    s_old_grade = Number(prompt("Give me the student's current grade level:"));
    if (s_old_grade >= 1 && s_old_grade <= 12) {
      s_new_grade = s_old_grade + 1;
      console.log(s_name + " is now enrolled in CAE University.");
      console.log(
        "Old grade level: " + s_old_grade + "\nNew grade level: " + s_new_grade
      );
    }
  }
}
