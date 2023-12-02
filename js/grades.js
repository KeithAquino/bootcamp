let science_grade = 82;
let english_grade = 93;
let adjustment;
let new_english_grade;

science_grade = 85 + 5;

adjustment = Number(
  prompt("How much would you like to adjust the English grade?")
);

console.log(science_grade);
console.log("Science: " + science_grade);
console.log("English: " + english_grade);
console.log("Adjustment: " + adjustment);
new_english_grade = english_grade + adjustment;
console.log("New English grade: " + new_english_grade);
